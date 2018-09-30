                  <div class="col-lg-12">
                    <div class="card">
                      <div class="card-header">
                        <strong>Edit Admin</strong> 
                      </div>
                      <div class="card-body card-block">
                        <form action="<?php echo $site_url; ?>adminedit/<?php echo $lng ?>" method="post" enctype="multipart/form-data" class="form-horizontal">
                    <?php 
              $sql=Controller::$conn->selectForEdit("admin",$param);
                      $row=mysqli_fetch_assoc($sql);
                
                 ?>

                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Name</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="name" value="<?php echo $row["name"]; ?>" placeholder="name" class="form-control" required><small class="form-text text-muted">name</small></div>
                          </div>

                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">surname</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="sname" value="<?php echo $row["sname"]; ?>" placeholder="surname" class="form-control" required><small class="form-text text-muted">surname</small></div>
                          </div>



                          <div class="row form-group">
                            <div class="col col-md-3"><label for="email-input" class=" form-control-label">Email</label></div>
                            <div class="col-12 col-md-9"><input type="email" id="email-input" name="email" value="<?php echo $row["email"]; ?>" placeholder="Enter Email" class="form-control" required><small class="help-block form-text">email</small></div>
                          </div>

                        <div class="row form-group">
                            <div class="col col-md-3"><label for="select" class=" form-control-label">Status</label></div>
                            <div class="col-12 col-md-9">
                              <select name="status" value="<?php echo $row["status"]; ?>" id="select" class="form-control" required>
                                <option value="1"<?php 
                                  if ($row["status"]==1) {
                                    echo "selected";
                                  }


                                 ?>

                                >Super Admin</option>
                                <option value="2"<?php 
                                  if ($row["status"]==2) {
                                   echo "selected";
                                  }


                                 ?>
                                >Admin</option>
                              </select>
                            </div>
                        </div>

                        <div class="row form-group password" style="display: none;">
                            <div class="col col-md-3"><label for="password-input" class=" form-control-label">Password</label></div>
                            <div class="col-12 col-md-9"><input type="password" id="password-input" name="pass" placeholder="Password" class="form-control"><small class="help-block form-text">password</small></div>
                        </div>
                        <div class="row form-group password" style="display: none;">
                            <div class="col col-md-3"><label for="password-input" class=" form-control-label">Again Password</label></div>
                            <div class="col-12 col-md-9"><input type="password" id="password-input" name="repass"  placeholder="Again Password" class="form-control"><small class="help-block form-text">again password</small></div>
                        </div>

                          <input type="hidden" name="hidden" value="<?php echo $row["id"]; ?>">
                          <div class="card-footer">
                            <button type="submit" class="btn btn-primary btn-sm">
                              <i class="fa fa-dot-circle-o"></i> Submit
                            </button>
                            <button type="reset" class="btn btn-danger btn-sm">
                              <i class="fa fa-ban"></i> Reset
                            </button>
                            <button type="button" class="btn btn-success btn-sm" id="gizli_pass">Password Deyis</button>


                          </div>
                        </form>
                      </div>

                    </div>
                  </div>
<script>
	$(document).ready(function(){
		$("#gizli_pass").click(function(){
			$(".password").slideToggle();
		});
	});
</script>