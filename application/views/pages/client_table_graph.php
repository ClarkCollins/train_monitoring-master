<div class="container">

    <!-- Call to Action Well -->
    <div id="head_client" class="card text-white bg-secondary my-4 text-center">
        <div class="card-body">
            <p class="text-white m-0">
                <a title="return to dashboard" style="text-decoration:none; color: white" href="<?php echo site_url() ?>/Dashboard">
                    <i class="fa fa-arrow-circle-o-left" style="float: left">&nbsp;back</i>
                </a>
                <b>Client Name:&nbsp;&nbsp;</b><?php echo ucfirst($this->session->userdata('Name')); ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <b>No. Engines:&nbsp;&nbsp;</b> 
                <?php foreach ($engs->result() as $value) { ?>
                    <?php echo $value->num_engines ?>
                <?php } ?>
            </p>
        </div>
    </div>
    <form action="<?php echo site_url() ?>/table_graph" method="post">
        <div id="form" class="row">
            <div class="col-md-3 mb-3">
                <div class="form-group">
                    <label for="sel1">Engine list:</label>
                    <select required name="engine" class="form-control" id="engine">
                        <option value="all">All Engines</option>
                        <?php foreach ($engs_->result() as $value) { ?>
                            <option value="<?php echo $value->EngineID ?>"><?php echo ucfirst($value->Name) ?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <div class="form-group">
                    <label for="sel1">Start time:</label>
                    <input required name="s_time" class="form-control" type="time" value="<?php if (isset($_POST['s_time'])) echo $_POST['s_time']; ?>">
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <div class="form-group">
                    <label for="sel1">End time:</label>
                    <input name="e_time" class="form-control" type="time" value="<?php if (isset($_POST['e_time'])) echo $_POST['e_time']; ?>">
                    <?php echo form_error('e_time'); ?>
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <div class="form-group">
                    <label for="sel1">Start date:</label>
                    <input required name="s_date" class="form-control" type="date" max="<?php echo date('Y-m-d') ?>" value="<?php if (isset($_POST['s_date'])) echo $_POST['s_date']; ?>">

                </div>
            </div>
            <div class="col-md-3 mb-3">
                <div class="form-group">
                    <label for="sel1">End date:</label>
                    <input required name="e_date" class="form-control" type="date" max="<?php echo date('Y-m-d') ?>" value="<?php if (isset($_POST['e_date'])) echo $_POST['e_date']; ?>">
                    <?php echo form_error('e_date'); ?>
                </div>
            </div>
            <div class="col-md-2 mb-2">
                <div class="form-group">
                    <label for="sel1"></label>
                    <input style="margin-top: 7px" class="form-control btn-success" id="postBtn" type="submit" value="Submit">
                </div>
            </div>
        </div>
    </form>
    <!--        <===========================Start of Table========================================>-->

    <?php if ($eng_table->result() != null): ?>
        <div id="report_header">
            <p style="text-align: right"><?php echo "<b>Date: </b> " . date('d-m-Y') ?></p><br>

            <h3 style="text-align: center">Report for Engine : 
                <?php if ("all" != $_POST['engine']): ?>
                    <?php foreach ($engs_->result() as $value) { ?>
                <?php if ($value->EngineID == $_POST['engine']): ?>
                        <?php echo $value->Name ?>
                 <?php endif ?>
                    <?php } ?>
                <?php else: ?>
                    <?php echo 'All Engines'; ?>
                <?php endif ?>
            </h3>
                        
            <hr>
        </div>
    <?php endif ?>
    <style>
        #wrapper {
            display: flex;
            justify-content: center;
            text-align: center;
        }
    </style>
       <div class="col-md-2 mb-2">
                    <div class="form-group">
                        <a style="width:100px;text-decoration: none; background-color: white; margin-left:500px" id="printBtn" href="#"onclick="window.print(); return false;" class="form-control">
                            <i class="fa fa-print" aria-hidden="true"></i> Print
                        </a>
                    </div>
                </div>
    <br>
    <table id="example" class="display responsive nowrap" style="width:100%">
        <thead>
            <tr>
                <th style="width:25px">DATE</th>
                <th>TIME</th>
                <th>NOTCH</th>
                <th>Notchx100</th>
                <th>I1</th>
                <th>I2</th>
                <th>I3</th>
                <th>I4</th>
                <th>I5</th>
                <th>I6</th>
                <th>V1</th>
                <th>V2</th>
                <th>V3</th>
                <th>V4</th>
                <th>V5</th>
                <th>V6</th>
                <th>HP</th>
                <th>HP/4</th>
                <th>EXCx10</th>
                <th>SPEED</th>
                <th>GFCT</th>
                <th>ERR1</th>
                <th>ERR2</th>
                <th>ERR3</th>
                <th>ERR4</th>
                <th>MR</th>
                <th>BP</th>
                <th>BAC</th>
                <th>BC1</th>
                <th>BC2</th>
                <th>FSBH</th>
                <th>INDBH</th>
                <th>OPERATION</th>
                <th>24T</th>
                <th>LR</th>
                <th>MGCT</th>
                <th>MGVT</th>
                <th>Iq_TOTAL</th>
                <th>Id_TOTAL</th>
                <th>GRIDA</th>
                <th>ENGT</th>
                <th>BMCT</th>
                <th>LOAD_KG</th>
                <th>TMP1</th>
                <th>TMP2</th>
                <th>TMP3</th>
                <th>TMP4</th>
                <th>TMP5</th>
                <th>TMP6</th>
                <th>BATVT</th>
                <th>BATCT</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($eng_table->result() as $value) { ?>
                <tr>
                    <td>
                        <?php
                        $time = new DateTime($value->fulldate);
                        echo DATE_FORMAT($time, "Y-m-d");
                        ?>
                    </td>
                    <td><?php echo $value->fulltime ?></td>
                    <td><?php echo $value->NOTCH ?></td>
                    <td><?php echo $value->Notchx100 ?></td>
                    <td><?php echo $value->I1 ?></td>
                    <td><?php echo $value->I2 ?></td>
                    <td><?php echo $value->I3 ?></td>
                    <td><?php echo $value->I4 ?></td>
                    <td><?php echo $value->I5 ?></td>
                    <td><?php echo $value->I6 ?></td>
                    <td><?php echo $value->V1 ?></td>
                    <td><?php echo $value->V2 ?></td>
                    <td><?php echo $value->V3 ?></td>
                    <td><?php echo $value->V4 ?></td>
                    <td><?php echo $value->V5 ?></td>
                    <td><?php echo $value->V6 ?></td>
                    <td><?php echo $value->HP ?></td>
                    <td><?php echo $value->HP / 4 ?></td>
                    <td><?php echo $value->EXC ?></td>
                    <td><?php echo $value->EXCx10 ?></td>
                    <td><?php echo $value->SPEED ?></td>
                    <td><?php echo $value->GFCT ?></td>
                    <td><?php echo $value->ERR1 ?></td>
                    <td><?php echo $value->ERR2 ?></td>
                    <td><?php echo $value->ERR3 ?></td>
                    <td><?php echo $value->ERR4 ?></td>
                    <td><?php echo $value->MR ?></td>
                    <td><?php echo $value->BP ?></td>
                    <td><?php echo $value->VAC ?></td>
                    <td><?php echo $value->BC1 ?></td>
                    <td><?php echo $value->BC2 ?></td>
                    <td><?php echo $value->FSBH ?></td>
                    <td><?php echo $value->INDBH ?></td>
                    <td><?php echo $value->OPERATION ?></td>
                    <td><?php $st = "24T";
                    echo $value->$st ?></td>
                    <td><?php echo $value->LR ?></td>
                    <td><?php echo $value->MGCT ?></td>
                    <td><?php echo $value->MGVT ?></td>
                    <td><?php echo $value->Iq_TOTAL ?></td>
                    <td><?php echo $value->Id_TOTAL ?></td>
                    <td><?php echo $value->GRIDA ?></td>
                    <td><?php echo $value->ENGT ?></td>
                    <td><?php echo $value->LOAD_KG ?></td>
                    <td><?php echo $value->TMP1 ?></td>
                    <td><?php echo $value->TMP2 ?></td>
                    <td><?php echo $value->TMP3 ?></td>
                    <td><?php echo $value->TMP4 ?></td>
                    <td><?php echo $value->TMP5 ?></td>
                    <td><?php echo $value->TMP6 ?></td>
                    <td><?php echo $value->BATVT ?></td>
                    <td><?php echo $value->BATCT ?></td>
                </tr>
<?php } ?>
        </tbody>
    </table>
    <br><br><br><br>
    
    
   
    <div id="wrapper" class="row">
<!--        <div id="wrapper" class="col-md-2 mb-2">
            <div class="form-group">
                <label for="sel1"></label>
                <a href="#print"style="width:150px;text-decoration: none; background-color: white" id="downloadBtn" class="form-control">
                    <i class="fa fa-download" aria-hidden="true"></i> Download
                </a>
            </div>
        </div>-->
        <div id="editor"></div>
    </div>

    <?php //endif ?>


<div id="print" class="ct-chart ct-major-twelfth">  
    <canvas id="timechart"></canvas>

     </div>

    <script type="text/javascript">
        $(document).ready(function(){
var data = <?php echo json_encode($eng_chart->result()); ?>;
            console.log(data);

            var variance = {
                            V1: [],
                            V2: [],
                            Speed:[],
                            I4:[],
                            MR:[],
                            BP:[],
                            timelabels : []
                        };

                        var dateFormat = 'YYYY-MM-DD h:mm:ss';
                        var length = data.length;

                        for(var i = 0; i<length; i++){
                            var date = moment(data[i].DateMin, dateFormat);

                            variance.V1.push({t: date.valueOf(), y: data[i].V1 });
                            variance.V2.push({t: date.valueOf(), y: data[i].V2 });
                             variance.Speed.push({t: date.valueOf(), y: data[i].SPEED });
                             variance.I4.push({t: date.valueOf(), y: data[i].I4 });
                             variance.MR.push({t: date.valueOf(), y: data[i].MR });
                             variance.BP.push({t: date.valueOf(), y: data[i].BP });

                            variance.timelabels.push(date);

                        }

                        console.log(variance);

                        var ctx = document.getElementById("timechart").getContext('2d');

                        var color = Chart.helpers.color;

                        var data ={
                                labels: variance.timelabels,
                                datasets:[
                                    {
                                        label : "V1",
                                        data : variance.V1,
                                        backgroundColor: "red" , //color(window.chartColors.red).alpha(0.5).rgbString(),
                                        borderColor: "red",// window.chartColors.red,
                                        type: 'line',
                                        pointRadius:1,
                                        fill : false,
                                        lineTension : 0,
                                        borderWidth : 2

                                    },
                                    {
                                        label : "V2",
                                        data : variance.V2,
                                        backgroundColor: "yellow",// color(window.chartColors.yellow).alpha(0.5).rgbString(),
                                        borderColor: "yellow", //window.chartColors.yellow,
                                        type: 'line',
                                        pointRadius:1,
                                        fill : false,
                                        lineTension : 0,
                                        borderWidth : 2

                                    },{
                                        label : "Speed",
                                        data : variance.Speed,
                                        backgroundColor: "blue",// color(window.chartColors.yellow).alpha(0.5).rgbString(),
                                        borderColor: "blue", //window.chartColors.yellow,
                                        type: 'line',
                                        pointRadius:1,
                                        fill : false,
                                        lineTension : 0,
                                        borderWidth : 2

                                    },
                                    {
                                        label : "I4",
                                        data : variance.I4,
                                        backgroundColor: "black",// color(window.chartColors.yellow).alpha(0.5).rgbString(),
                                        borderColor: "black", //window.chartColors.yellow,
                                        type: 'line',
                                        pointRadius:1,
                                        fill : false,
                                        lineTension : 0,
                                        borderWidth : 2

                                    },
                                    {
                                        label : "MR",
                                        data : variance.MR,
                                        backgroundColor: "orange",// color(window.chartColors.yellow).alpha(0.5).rgbString(),
                                        borderColor: "orange", //window.chartColors.yellow,
                                        type: 'line',
                                        pointRadius:1,
                                        fill : false,
                                        lineTension : 0,
                                        borderWidth : 2

                                    },
                                    {
                                        label : "BP",
                                        data : variance.BP,
                                        backgroundColor: "cyan",// color(window.chartColors.yellow).alpha(0.5).rgbString(),
                                        borderColor: "cyan", //window.chartColors.yellow,
                                        type: 'line',
                                        pointRadius:1,
                                        fill : false,
                                        lineTension : 0,
                                        borderWidth : 2

                                    }
                                ]
                        };


                        var options = {
                            scales: {
                                xAxes:[{
                                    type: 'time',
                                    time: {
                                           displayFormats: {
                                               second: 'h:mm:ss'
                                           },
                                           unit: 'second'
                                       },
                                    distribution: 'series',
                                    ticks:{ source : 'auto'}
                                }],
                                yAxes:[{
                                    scaleLabel:{
                                        display : true,
                                        labelString: 'Value'
                                    }
                                }]
                            }
                        };



                        var cfg = {
                            type :'line',
                            data: data,
                            options : options
                        };


                        var chart = new Chart(ctx, cfg);
            
            

        });
        
    
    </script>

    <script type="text/javascript">
        function printDiv(print) {
        var printContents = document.getElementById(print).innerHTML;
        var originalContents = document.body.innerHTML;
        document.body.innerHTML = printContents;
        window.print();
        document.body.innerHTML = originalContents;
        }
    </script>
    <script>
        var doc = new jsPDF();
        var specialElementHandlers = {
        '#editor': function (element, renderer) {
        return true;
        }
        };
        $('#downloadBtn').click(function () {
        doc.fromHTML($('#print').html(), 15, 15, {
        'width': 170,
                'elementHandlers': specialElementHandlers
        });
        doc.save('Report.pdf');
        });</script>
    <br><br><br><br>
</div> 

<!-- Page Content -->


































































































































































































































































































































































































































































































































































































































































































