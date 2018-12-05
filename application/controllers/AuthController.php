<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class AuthController extends CI_Controller {

    public function index() {
        $this->load->view('default_page');
        $this->load->view('layout/footer');
    }
    public function login() {
        $this->load->view('auth/login');
    }
    public function test() {
        $this->load->view('charts');
    }

    public function register() {
        $this->load->view('auth/register');
    }

    public function register_client() {
        $this->load->view('auth/register');
    }

    function encrypt_password($password, $email) {
        $rotations = 1;
        $salt = hash('sha256', uniqid(mt_rand(), true) . "somesalt" . strtolower($email));
        $hash = $salt . $password;
        for ($i = 0; $i < $rotations; $i ++) {
            $hash = hash('sha256', $hash);
        }
        return $salt . $hash;
    }

    function is_valid_password($password, $dbpassword) {
        $rotations = 1;
        $salt = substr($dbpassword, 0, 64);
        $hash = $salt . $password;

        for ($i = 0; $i < $rotations; $i ++) {
            $hash = hash('sha256', $hash);
        }

        //Sleep a bit to prevent brute force
        time_nanosleep(0, 400000000);
        $hash = $salt . $hash;
        return $hash == $dbpassword;
    }

    public function register_() {
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|xss_clean|callback_checkClient');
        $this->form_validation->set_rules('c_name', 'Client Name', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('confirm_password', 'Confirmation Password', 'required|matches[password]');


        if ($this->form_validation->run() == FALSE) {
            $this->register_client();
        } else {
            $password = $this->input->post('password');
            $email = $this->input->post('email');
            $data = array(
                'Email' => $this->input->post('email'),
                'Name' => $this->input->post('c_name'),
                'Password' => $this->encrypt_password($password, $email),
            );
            if ($this->ClientModel->_add_client($data)) {
                $data['info'] = $this->ClientModel->get_client($email);
                foreach ($data['info']->result() as $row) {
                    $ClientID = $row->ClientID; //or whatever the query returns
                    $Name = $row->Name; //or whatever the query returns
                    $Email = $row->Email;
                }
                $this->session->set_userdata(
                        array('ClientID' => $ClientID,
                            'Name' => $Name,
                            'Email' => $Email,
                ));
                redirect('/Dashboard');
            } else {
                $this->register_client();
            }
        }
    }

    Public function checkClient($requested_email) {
        $email_available = $this->ClientModel->checkUserExist($requested_email);
        if ($email_available) {
            return TRUE;
        } else {
            $this->form_validation->set_message('checkClient', '<p style="color:red;">Email address exist. Please choose another email address.</p>');
            return FALSE;
        }
    }

    public function login_() {

        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|xss_clean');
        $this->form_validation->set_rules('password', 'Password', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->library('user_agent');
            redirect($this->agent->referrer());
        } else {

            $email = $this->input->post('email');
            $dbpassword = $this->ClientModel->get_client_pwd($email);

            if ($this->is_valid_password($this->input->post('password'), $dbpassword)) {
                $data['info'] = $this->ClientModel->get_client($email);
                foreach ($data['info']->result() as $row) {
                    $ClientID = $row->ClientID; //or whatever the query returns
                    $Name = $row->Name; //or whatever the query returns
                    $Email = $row->Email;
                }
                $this->session->set_userdata(
                        array('ClientID' => $ClientID,
                            'Name' => $Name,
                            'Email' => $Email,
                ));
                redirect('/Dashboard');
            } else {
                $this->session->set_flashdata('flashDanger', 'Wrong email or password.');
                redirect('login');
            }
        }
    }

    public function logout() {
        $this->session->unset_userdata('ClientID', 'Name', 'Email');
        $this->session->sess_destroy();
        redirect('/');
    }

}
