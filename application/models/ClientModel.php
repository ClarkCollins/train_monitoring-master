<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class ClientModel extends CI_Model {

    public function __construct() {
        parent::__construct();
        // Your own constructor code
    }

    public function get_client_pwd($email) {
        $sql = "SELECT password
    FROM client
    WHERE email=?";
        $query = $this->db->query($sql, array($email));

        if ($query->num_rows() > 0) {
            $row = $query->row();
            return $row->password;
        }
    }
    public function checkUserExist($email) {
        $this->db->where('Email', $email);
        $query = $this->db->get('client');

        if ($query->num_rows() > 0) {
            return false;
        } else {
            return true;
        }
    }
    public function _add_client($data) {

        $this->db->insert('client', $data);

        if ($this->db->affected_rows() > 0) {
            return TRUE;
        } else {
            return FALSE;
        }
    }
    public function get_client($email) {
        $this->db->select('*');
        $this->db->from('client');
        $this->db->where("Email", $email);
        $data = $this->db->get();
        return $data;
            
    }
    public function get_engines() {
        $id= $this->session->userdata('ClientID');
        $this->db->select('Count(*) as num_engines');
        $this->db->from('engine');
        $this->db->where("ClientID", $id);
        $data = $this->db->get();
        return $data;
            
    }
public function get_engines2() {
        $id= $this->session->userdata('ClientID');
        $this->db->select('*');
        $this->db->from('engine');
        $this->db->where("ClientID", $id);
        $data = $this->db->get();
        return $data;
            
    }
//    public function get_chart($startDate, $endDate,$startTime,$endTime,$en_id) {
//        $id= $this->session->userdata('ClientID');
//        $this->db->select('*,UNIX_TIMESTAMP(TIME) as t');
//        $this->db->from('data,engine');
//        $this->db->where("engine.ClientID", $id);
//        $this->db->where("engine.EngineID", $en_id);
//        $this->db->where("data.EngineID", $en_id);
//        $this->db->where("date BETWEEN '$startDate' AND '$endDate'");
//        $this->db->where("time(time) BETWEEN '$startTime' AND '$endTime'");
//        
//        $data = $this->db->get();
//        return $data;
//            
//    }
    public function get_chart($startDate, $endDate,$startTime,$endTime,$en_id) {
       $this->db->select("*,CONCAT(DATE(fulldate) ,' ',fulltime ) as DateMin");

       $this->db->from('infoplot,engine');
        
        $this->db->where("infoplot.EngineID", $en_id);
       $this->db->where("fulldate BETWEEN '$startDate' AND '$endDate'");
        $this->db->where("fulltime BETWEEN '$startTime' AND '$endTime'");
        $this->db->limit('1000');
        $data = $this->db->get();
        return $data;
            
    }



     public function get_chart_all()
    {
       $this->db->select("*,CONCAT(DATE(fulldate) ,' ',fulltime ) as DateMin");

       $this->db->from('infoplot');
       $this->db->limit('10');
      // $this->db->limit

       $data = $this->db->get();
        return $data;
    }
    
     public function get_all($startDate, $endDate,$startTime,$endTime)
    {
         $id= $this->session->userdata('ClientID');
       $this->db->select("*,CONCAT(DATE(fulldate) ,' ',fulltime ) as DateMin");

       $this->db->from('infoplot,engine');
        $this->db->where("engine.ClientID", $id);
        $this->db->where("infoplot.EngineID = engine.EngineID");
        $this->db->where("fulldate BETWEEN '$startDate' AND '$endDate'");
        $this->db->where("fulltime BETWEEN '$startTime' AND '$endTime'");
       $this->db->limit('10');
      // $this->db->limit

       $data = $this->db->get();
        return $data;
    }



//    public function get_all($startDate, $endDate,$startTime,$endTime) {
//        $id= $this->session->userdata('ClientID');
//        $this->db->select('*,UNIX_TIMESTAMP(TIME) as t');
//        $this->db->from('data,engine');
//        $this->db->where("engine.ClientID", $id);
//        $this->db->where("data.EngineID = engine.EngineID");
//        $this->db->where("date BETWEEN '$startDate' AND '$endDate'");
//        $this->db->where("time(time) BETWEEN '$startTime' AND '$endTime'");
//        
//        $data = $this->db->get();
//        return $data;
//            
//    }
    
    public function count_rec($startDate, $endDate,$startTime,$endTime) {
       $id= $this->session->userdata('ClientID');
        $this->db->select('count(Speed) as sp');
        $this->db->from('data,engine');
        $this->db->where("engine.ClientID", $id);
        $this->db->where("data.EngineID = engine.EngineID");
        $this->db->where("date BETWEEN '$startDate' AND '$endDate'");
        $this->db->where("time(time) BETWEEN '$startTime' AND '$endTime'");
        $data = $this->db->get();
        return $data;
           
    }
    public function count($startDate, $endDate,$startTime,$endTime,$en_id) {
       $id= $this->session->userdata('ClientID');
        $this->db->select('count(Speed) as sp');
        $this->db->from('data,engine');
        $this->db->where("engine.ClientID", $id);
        $this->db->where("engine.EngineID", $en_id);
        $this->db->where("data.EngineID", $en_id);
        $this->db->where("date BETWEEN '$startDate' AND '$endDate'");
        $this->db->where("time(time) BETWEEN '$startTime' AND '$endTime'");
        $this->db->order_by('ID', 'desc');
        $data = $this->db->get();
        return $data;
           
    }
    
}




































































