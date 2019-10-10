         <!-- PAGE CONTENT -->
       <button type="button"  class="btn btn-success btn-sm" data-toggle="modal" data-target="#addmember" style="margin-bottom: 10px;">
  <i class="glyphicon glyphicon-plus"></i> Create New member
          </button>
  
              <div class="content">
                     <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-block">
  <button type="button"  class="btn btn-success btn-sm" data-toggle="modal" data-target="#addmember" style="margin-bottom: 10px;">

            <i class="glyphicon glyphicon-plus"></i> Create New member
          </button>



                                    <h6 class="card-title text-bold">Default Datatable</h6>            
     <?php
 
  $strSQL = "SELECT * FROM member  WHERE member_pos  AND admin_id = '0' ORDER BY member_fullname";
        ?>
       <table class="display datatable table table-stripped" cellspacing="0" width="100%">
          <thead>
             <tr>
                      <th>#</th>
                      <th>ID</th>
                      <th>Name</th>
                      <th>Gender</th>
                      <th>Phone</th>
                      <th>Email</th>
                      <th>Position</th>
                      <th>Status</th>
                      <th>#</th>
                 </tr>
               </thead>
               <?php
     if($objQuery = $db->query($strSQL)){
       while($objResult = mysqli_fetch_array($objQuery)) {
            ?>

           <tbody>
            <tr>
                        <td><?php echo $objResult["member_id"];?></td>
                      <td><?php echo $objResult["member_idcard"];?></td>
                      <td><?php echo $objResult["member_fullname"];?></td>
                      <td><?php echo $objResult["member_phone"];?></td>
                      <td><?php echo $objResult["member_email"];?></td>
                  <td align="center"><font color="red"><?php  $gender = $objResult["member_gender"]; include('function/gender.php');  ?></font> </td>
               
                  <td align="center"> <font color="red"><?php $position = $objResult["member_pos"];include('function/position.php'); ?></font>  </td>

                  <td align="center"> <font color="red"> <?php $status = $objResult["admin_id"];
                    include('function/status.php'); ?> </font>  </td>
          
                    <td>
                  <a href="admin/check_confirm.php?id=<?php echo $objResult["member_id"];?>" title="Confirm" onclick="return confirm('<?php echo $objResult["member_name"];?>')"> <i class="fa fa-check" aria-hidden="true"></i>
</i> 
                      </td>



                    </tr>

                <?php
                 }
               }
                   ?>
       
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
           
            <!-- /PAGE CONTENT -->
        
        <div class="box-body">





          <!-- Modal -->
<div class="modal fade" id="addmember" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"><i class="glyphicon glyphicon-plus"></i> New Member</h4>
      </div>
      <div class="modal-body">
            <form id="add" name="add" method ="post" action ="admin/check_accept_member.php" onsubmit="return checkForm()" >


                            <div class="user-details">
                                <div class="form-group">
                                    <div class="input-group">
                                        <span class="input-group-addon" id="basic-addon1">
                                                <i class="fa fa-user-o"></i>
                                            </span>
                                        <input type="text" class="form-control" placeholder="Number ID " aria-describedby="basic-addon1" id="member_idcard" name="member_idcard" autocomplete="off" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="input-group">
                                        <span class="input-group-addon" id="basic-addon1">
                                                <i class="fa fa-user-o"></i>
                                            </span>
                                        <input type="text" class="form-control" placeholder="Username" id="member_username" name="member_username" autocomplete="off" required aria-describedby="basic-addon1">
                                    </div>
                                </div>
                                 

                      <div class="form-group">
                                    <div class="input-group">
                                        <span class="input-group-addon" id="basic-addon1">
                                                <i class="fa fa-user-md"></i>
                                            </span>
                                        <input type="text" class="form-control" id="member_fullname" name="member_fullname" placeholder="Fullname" autocomplete="off" required aria-describedby="basic-addon1">
                                    </div>
                                </div>

                                                      <div class="form-group">
                                    <div class="input-group">
                                        <span class="input-group-addon" id="basic-addon1">
                                                <i class="fa fa-user-md"></i>
                                            </span>
                                        <input type="password" class="form-control" id="member_password" name="member_password" placeholder="Password" autocomplete="off" required aria-describedby="basic-addon1">
                                    </div>
                                </div>

                                             <div class="form-group">
                                    <div class="input-group">
                                        <span class="input-group-addon" id="basic-addon1">
                                                <i class="fa fa-user-md"></i>
                                            </span>
                                        <input type="text" class="form-control" id="member_phone" name="member_phone" placeholder="Phone Number" autocomplete="off" required aria-describedby="basic-addon1">
                                    </div>
                                </div>

                   <div class="form-group">
                                    <div class="input-group">
                                        <span class="input-group-addon" id="basic-addon1">
                                                <i class="fa fa-user-md"></i>
                                            </span>
                                        <input type="text" class="form-control" id="member_email" name="member_email" placeholder="Email" autocomplete="off" required aria-describedby="basic-addon1">
                                    </div>
                                </div>
                                    <div class="form-group">
                      <select class="form-control" name="member_pos" id="member_pos">
           <option value="#">Select Position</option>
             <option value="2">Advisor</option>
              <option value="1">Comittee</option>
              <option value="3">Student</option>
              <option value="4">Officer</option>

            </select>
                  </div>

                                        <div class="col-md-5">
                                            <div class="input-group">
                   Gender:   &nbsp;&nbsp; &nbsp;&nbsp;<label class="radio-inline"> <input type="radio" name="member_gender" value="m" required aria-describedby="basic-addon1">          &nbsp;&nbsp;  Male</label> 
                          &nbsp;&nbsp; &nbsp;&nbsp; <label class="radio-inline"><input type="radio" name="member_gender" value="f" aria-describedby="basic-addon1">           &nbsp;&nbsp; Female</label>
                                    </div>                                          
                                        </div>
                           
              

                         
                            <button type="submit" class="btn btn-primary btn-lg btn-block">REGISTER</button>

      </div>
    </div>
  </div>
</div>
</form>




</body>

</html>