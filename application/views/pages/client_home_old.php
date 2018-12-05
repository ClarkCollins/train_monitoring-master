
<div class="container">

    <!-- Call to Action Well -->
    <div class="card text-white bg-secondary my-4 text-center">
        <div class="card-body">
            <p class="text-white m-0"><b>Client Name:&nbsp;&nbsp;</b><?php echo ucfirst($this->session->userdata('Name')); ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <b>No. Engines:&nbsp;&nbsp;</b> 
                <?php foreach ($engs->result() as $value) { ?>
                    <?php echo $value->num_engines ?>
                <?php } ?>
            </p>
        </div>
    </div>
    <form action="<?php echo site_url()?>/home" method="post">
    <div class="row">
        <div class="col-md-3 mb-3">
            <div class="form-group">
                <label for="sel1">Engine list:</label>
                <select required name="engine" class="form-control" id="sel1">
                    <option value="">--Select--</option>
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
            </div>
        </div>
        <div class="col-md-2 mb-2">
            <div class="form-group">
                <label for="sel1"></label>
                <input required style="margin-top: 7px" class="form-control btn-success" id="postBtn" type="submit" value="Submit">
            </div>
        </div>
        <!--        <===========================Start of Graph========================================>-->
        <div class="col-md-12 mb-12">
     </div><br><br><br><br>
    </div>
            <?php foreach ($eng_chart->result() as $value) { ?>
        <?php echo $value->TIME ?>,  <?php echo $value->V1 ?>, <?php echo $value->V2 ?>, <?php echo $value->V3 ?>, <?php echo $value->V4 ?>, <?php echo $value->V5 ?>, <?php echo $value->V6 ?>

 <?php } ?>
    </div> 
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['line']});
      google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
        
        

      var data = new google.visualization.DataTable();
      data.addColumn('number', 'Speed');
      data.addColumn('number', 'V1');
      data.addColumn('number', 'V2');
      data.addColumn('number', 'V3');
      data.addColumn('number', 'V4');
      data.addColumn('number', 'V5');
      data.addColumn('number', 'V6');

               <?php if ($eng_chart->result()== null): ?>
        error = "No data to display.";
        document.getElementById("div_dsiplay").innerHTML = error;
        return false;
                <?php else: ?>
            <?php foreach ($eng_chart->result() as $value) { ?>
      data.addRows([
        [<?php echo $value->Speed ?>,  <?php echo $value->V1 ?>, <?php echo $value->V2 ?>, <?php echo $value->V3 ?>, <?php echo $value->V4 ?>, <?php echo $value->V5 ?>, <?php echo $value->V6 ?>]

      ]);
 <?php } ?>
               <?php endif ?>
      var options = {
        chart: {
          title: 'Time vs Speed',
          subtitle: ''
        },
        width: 900,
        height: 500,
        axes: {
          x: {
            0: {side: 'bottom'}
          }
        }
      };

      var chart = new google.charts.Line(document.getElementById('line_top_x'));

      chart.draw(data, google.charts.Line.convertOptions(options));
    }
  </script>
  
  <div id="div_dsiplay" align="center" class="col-md-12 mb-12">
        </div>
    <div id="line_top_x">
    </form>
</div>
<!-- Page Content -->

























































































































































































































































































