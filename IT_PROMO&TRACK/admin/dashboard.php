<div class="card-block">


  <button type="button" style="height:110px; width:210px" class="btn btn-secondary">
    <h2><i class="fa fa-users position-left"></i></h2><a href="?page=users">
      <h5>Users
  </button></a>

  <button type="button" style="height:110px; width:210px" class="btn btn-info">
    <h2><i class="fa fa-users position-left"></i></h2><a href="?page=users">
      <h4>Users
  </button></a>


  <button type="button" style="height:110px; width:210px" class="btn btn-primary"><i
      class="fa fa-users position-left"></i><a href="?page=users">
      <h4>Users</button></a>



  <div class="content">
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div id="header">

          </div>
          <center>

            <?php

$servername = "localhost";
$username = "root" ;
$password = "";
$dbname = "itpromo_track";

global $link;
$link=mysql_connect($servername, $username, $password) or die("Couldn't execute query");
mysql_query("SET NAMES UTF8",$link);
mysql_select_db($dbname,$link) or die ("Could not select $dbname database");



$my_id = $_SESSION['id'];


     $sql = "SELECT advisergroup.*,  files.pf,files.files_id,files.Owner,advisergroup.advisergroup_id,partnergroup.group_id FROM advisergroup
          LEFT JOIN files ON advisergroup.advisergroup_id = files.advisergroup_id
        LEFT JOIN partnergroup ON advisergroup.group_id = partnergroup.group_id
        LEFT JOIN member ON advisergroup.member_id = member.member_id
         LEFT JOIN admin ON advisergroup.admin_id = admin.admin_id
        WHERE advisergroup.admin_id = '$my_id'  AND pf  
               ";

$result = mysql_query($sql) or die("Couldn't execute query");

?>



            <script type="text/javascript" src="https://www.google.com/jsapi"></script>
            <script type="text/javascript">
              google.load("visualization", "1.5", {
                packages: ["bar"]
              });
              google.setOnLoadCallback(drawChart);

              function drawChart() {
                var data = google.visualization.arrayToDataTable([
                  ['Group', 'PF'],

                  <
                  ? php
                  while ($row = mysql_fetch_array($result)) {
                    ?
                    >

                    ['<?php echo $row["group_id"]?> ', < ? php echo $row["pf"] ? > ],



                    <
                    ? php
                  } ?
                  >

                ]);

                var options = {
                  legend: {
                    position: 'none'
                  },
                  width: 650,
                  height: 350,
                  chart: {
                    title: 'Monitoring',
                    subtitle: 'Tracking',
                  }
                };

                var chart = new google.charts.Bar(document.getElementById('deawxchart'));
                chart.draw(data, options);
              }
            </script>
            </head>

            <body>

              <div id="deawxchart" style="min-width: 320px; height: 380px; margin: 0 auto "></div>


            </body>

            </html>






            <!-- Icon Cards-->



        </div>
      </div>
    </div>
  </div>

</div>
</div>