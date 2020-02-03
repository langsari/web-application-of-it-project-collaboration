<link rel="stylesheet" href="assets/css/style.css">

<div class="content">



    <div class="f1">

      <div class="f1-steps">
        <div class="f1-progress">
          <div class="f1-progress-line" data-now-value="5" data-number-of-steps="13" style="width: 5%;"></div>
        </div>

    
        <div class="f1-step active ">
                <div class="f1-step-icon">PF01</div>
                <p>PF01</p>
              </div>
              <div class="f1-step active">
                <div class="f1-step-icon">PF02</div>
                <p>PF02</p>
              </div>
              <div class="f1-step active">
                <div class="f1-step-icon">PF03</div>
                <p>PF03</p>
              </div>
              <div class="f1-step active">
                <div class="f1-step-icon">PF04</div>
                <p>PF04</p>
              </div>
              <div class="f1-step active">
                <div class="f1-step-icon">PF05</div>
                <p>PF05</p>
              </div>
              <div class="f1-step active">
                <div class="f1-step-icon">PF06</div>
                <p>PF06</p>
              </div>
              <div class="f1-step active">
                <div class="f1-step-icon">PF07</div>
                <p>PF07</p>
              </div>
              <div class="f1-step active">
                <div class="f1-step-icon">PF08</div>
                <p>PF08</p>
              </div>
              <div class="f1-step">
                <div class="f1-step-icon">PF09</div>
                <p>PF09</p>
              </div>
              <div class="f1-step">
                <div class="f1-step-icon">PF10</div>
                <p>PF10</p>
              </div>
              <div class="f1-step">
                <div class="f1-step-icon">PF11</div>
                <p>PF11</p>
              </div>

              <div class="f1-step">
                <div class="f1-step-icon">PF12</div>
                <p>PF12</p>
              </div>
              <div class="f1-step">
                <div class="f1-step-icon">PF13</div>
                <p>PF13</p>
              </div>


      </div>
      <?php



      

$g_id = get_group_id();
$ag_id = get_ag_id($g_id);

$strSQL = "SELECT advisergroup.*, advisergroup.group_id,advisergroup.advisergroup_status,files.files_id,files.by_advisor08,files.files_filename_project,files.by_officer,files.Owner,files.advisergroup_id,files.pf FROM advisergroup
LEFT JOIN files ON advisergroup.advisergroup_id = files.advisergroup_id

LEFT JOIN member ON advisergroup.member_id = member.member_id
WHERE advisergroup.advisergroup_id = '$ag_id'  ";             

        
if($result = $db->query($strSQL)){
            while($objResult = $result->fetch_object()){
      ?>
      <fieldset>
        <h4>Adviser Proposal Project Approval Letter</h4>
          <div class="card">
            <div class="card-block">
              <table class="table">
                <thead class="thead-default">
                  <tr>
                  <th><h6><b>To do list</h6><b></th>

               
                    <th><h6><b>Status</h6><b></th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
               
               
                  <tr>


                    <!--get Project Owner  -->

                      <?php echo get_member_list1($objResult->group_id); ?>


           

              <form action="form08/check_pf8.php?id=<?php echo $objResult->group_id; ?>" method="post"
              onsubmit="return checkForm()">

                    <!--get Topic   -->

                    <td> <h6>5 chapter of Proposal</h6>

                      <input type="file" name="files_filename_project" id="files_filename_project"
                        required="required" />



                     


                 <input type="submit" name="button" id="button" value="Upload" />

                    <td><h6> <span class="badge badge-success"> <?php echo $objResult->by_advisor08; ?></h6></span>
                      <p>
                        <font color='red'> *For Advisor</font>
                    </td>


                    <td><a href="form08/download.php?pdf=<?php echo $objResult->files_filename_project ;?>"><i
                          class="fa fa-download"></i></a></td>

                  </tr>
                </tbody>
              </table>



              <div class="progress">
                <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuemin="0"
                  aria-valuemax="100"></div>
              </div>

            </div>
          </div>
        

        <h6><font color='red'>*** Note student have to upload file of 3 chapter of Proposal
       </br> *** Note Adviser, Waiting advisor Approve your proposal 
</font>
            </h6>
        <div class="f1-buttons">

          <button> <a href="?page=pf07" type="button" class=" previous">&laquo;Previous</button></a>
                    <button> <a href="?page=pf09" type="button" class="next">Next &raquo;</button></a>

        </div>
      </fieldset>





      <?php
           } }
             ?>

    </div>



</div>

</form>

<?php
include("student/chat.php");
?>


<script src="asset/js/jquery-1.11.1.min.js"></script>
<script src="asset/js/jquery.backstretch.min.js"></script>
<script src="asset/js/retina-1.1.0.min.js"></script>
<script src="asset/js/scripts.js"></script>






</body>

</html>