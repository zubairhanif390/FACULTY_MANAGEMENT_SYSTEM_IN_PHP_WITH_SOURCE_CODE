<?php include "../templates/templates.php"; 
        headertemplate('Dashboard | Administrator'); ?>

  <body class="skin-green">
    <div class="wrapper">
      
     <?php navbar('dashboard'); ?>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Dashboard
          </h1>
        </section>

       <section class="content">
          <div class="row">
            <div class="col-md-12">
              <div class="box">
                 <div class="box-header with-border">
                  <h3 class="box-title"><input type="text" name="sy" id="sy" placeholder="Input year"></h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-toggle="tooltip" title="Minimize" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-box-tool" data-toggle="tooltip" title="Close" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <div class="row">
                    <div class="col-md-12">
                      <p class="text-center">
                        <strong id="year"></strong>
                      </p>
                      <div class="chart-responsive">
                        <!-- Sales Chart Canvas -->
                        <div id="bar-chart" height="180"></div>
                      </div><!-- /.chart-responsive -->
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-12">
                <div class="box box-primary">
                <div class="box-header">
                  <i class="ion ion-clipboard"></i>
                  <h3 class="box-title">Schedule for School Year 2015-2016</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                    <th class="text-center">Grade 1</th>
                    <th class="text-center">Monday</th>
                    <th class="text-center">Tuesday</th>
                    <th class="text-center">Wendsday</th>
                    <th class="text-center">Thursday</th>
                    <th class="text-center">Friday</th>
                    <th class="text-center">Time</th>
                    </tr>
                  </thead>
                  <tbody class="text-center">
                    <tr>
                      <td></td>
                      <td>TLE<br>ahmed shahid<br>Room c4-12</td>
                      <td>English<br>Mrs.A B<br>Room c4-9</td>
                      <td>TLE<br>ahmed shahid<br>Room c4-12</td>
                      <td>TLE<br>ahmed shahid<br>Room c4-12</td>
                      <td>TLE<br>ahmed shahid<br>Room c4-12</td>
                      <td>7:30 - 8:30 AM</td>
                    </tr>
                     <tr>
                      <td></td>
                      <td>Filipino<br>bilal chandio<br>Room c4-12</td>
                      <td>English<br>sharukh khanbr>Room c4-9</td>
                      <td>Science<br>kaif muzammil<br>Room c4-8</td>
                      <td>Math<br>ahsan<br>Room c4-7</td>
                      <td>TLE<br>zaheer<br>Room c4-6</td>
                      <td>10:30 - 11:30 AM</td>
                    </tr>
                  </tbody>
                </table>

                <table class="table table-bordered">
                  <thead>
                    <tr>
                    <th class="text-center">Grade 2</th>
                    <th class="text-center">Monday</th>
                    <th class="text-center">Tuesday</th>
                    <th class="text-center">Wendsday</th>
                    <th class="text-center">Thursday</th>
                    <th class="text-center">Friday</th>
                    <th class="text-center">Time</th>
                    </tr>
                  </thead>
                  <tbody class="text-center">
                    <tr>
                      <td></td>
                      <td>TLE<br>Ameen kh0waja<br>Room c4-12</td>
                      <td>English<br>Miss uzma<br>Room c4-9</td>
                      <td>TLE<br>misss faryal<br>Room c4-12</td>
                      <td>TLE<br>zubair ahmed<br>Room c4-12</td>
                      <td>TLE<br>ahmed chahjho<br>Room c4-12</td>
                      <td>7:30 - 8:30 AM</td>
                    </tr>
                     <tr>
                      <td></td>
                      <td>philosophy<br>naem<br>Room c4-12</td>
                      <td>English<br>bilal<br>Room c4-9</td>
                      <td>Science<br>asad<br>Room c4-8</td>
                      <td>Math<br>talib ali<br>Room c4-7</td>
                      <td>TLE<br>sameer <br>Room c4-6</td>
                      <td>10:30 - 11:30 AM</td>
                    </tr>
                  </tbody>
                </table>

                <table class="table table-bordered">
                  <thead>
                    <tr>
                    <th class="text-center">Grade 3-A</th>
                    <th class="text-center">Monday</th>
                    <th class="text-center">Tuesday</th>
                    <th class="text-center">Wendsday</th>
                    <th class="text-center">Thursday</th>
                    <th class="text-center">Friday</th>
                    <th class="text-center">Time</th>
                    </tr>
                  </thead>
                  <tbody class="text-center">
                    <tr>
                      <td></td>
                      <td>TLE<br>osama<br>Room c4-12</td>
                      <td>English<br>ahmed<br>Room c4-9</td>
                      <td>TLE<br>miss ruqiya<br>Room c4-12</td>
                      <td>TLE<br>yahya<br>Room c4-12</td>
                      <td>TLE<br>ahsan ahmed<br>Room c4-12</td>
                      <td>7:30 - 8:30 AM</td>
                    </tr>
                     <tr>
                      <td></td>
                      <td>philosophy<br>M. zain abbas<br>Room c4-12</td>
                      <td>English<br>rehman <br>Room c4-9</td>
                      <td>Science<br>shakeel <br>Room c4-8</td>
                      <td>Math<br>malik<br>Room c4-7</td>
                      <td>TLE<br>khalil<br>Room c4-6</td>
                      <td>10:30 - 11:30 AM</td>
                    </tr>
                  </tbody>
                </table>

                <table class="table table-bordered">
                  <thead>
                    <tr>
                    <th class="text-center">Grade 3-B</th>
                    <th class="text-center">Monday</th>
                    <th class="text-center">Tuesday</th>
                    <th class="text-center">Wendsday</th>
                    <th class="text-center">Thursday</th>
                    <th class="text-center">Friday</th>
                    <th class="text-center">Time</th>
                    </tr>
                  </thead>
                  <tbody class="text-center">
                    <tr>
                      <td></td>
                      <td>TLE<br>ahmed shahid<br>Room c4-12</td>
                      <td>English<br>Mrs.A B<br>Room c4-9</td>
                      <td>TLE<br>ahmed shahid<br>Room c4-12</td>
                      <td>TLE<br>ahmed shahid<br>Room c4-12</td>
                      <td>TLE<br>ahmed shahid<br>Room c4-12</td>
                      <td>7:30 - 8:30 AM</td>
                    </tr>
                     <tr>
                      <td></td>
                      <td>Filipino<br>Mrs.Brom Brom<br>Room c4-12</td>
                      <td>English<br>Mrs.A B<br>Room c4-9</td>
                      <td>Science<br>Mrs.C C<br>Room c4-8</td>
                      <td>Math<br>Mrs.D D<br>Room c4-7</td>
                      <td>TLE<br>Mrs.Danile Angel<br>Room c4-6</td>
                      <td>10:30 - 11:30 AM</td>
                    </tr>
                  </tbody>
                </table>
                </div><!-- /.box-body -->
                <div class="box-footer clearfix no-border">
                </div>
              </div><!-- /.box -->
              </div>

            </div>
          </div>
       </section>   
    
      </div><!-- /.content-wrapper -->

     <?php footertemplate();?>

     <script type="text/javascript">
           var chart = Morris.Bar({
          element: 'bar-chart',
          data: [0,0],
          xkey: 'y',
          ykeys: ['a'],
          labels: ['No. of Students']
        });

        $("#sy").forceNumeric();

        $("#sy").keyup(function(){
          var sy =  $("#sy").val();
          var year = sy * 2/2+1;
          var schoolyear = sy+'-'+year;
          var datastring = 'action=getdatachart&sy='+schoolyear;
          if(sy==''){
            $("#year").html(' ');
          }
          else{
            $("#year").html('School Year '+sy+'-'+year);
            $.ajax({
              type:"POST",
              url:"../php/crud.php",
              dataType:'json',
              data:datastring,
              success: function(data){
                chart.setData(data);
              }
            });
          }
            return false;
        });

     </script>
  </body>
</html>