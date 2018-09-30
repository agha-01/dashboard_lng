    <div class="col-lg-12">
                    <div class="card">
                      <div class="card-header">
                        <strong>Edit users</strong>
                      </div>
                      <div class="card-body card-block">
                        <form action="<?php echo $site_url."updateUser/".$lng; ?>" method="post" enctype="multipart/form-data" class="form-horizontal">
                    <?php 
                      $sql=Controller::$conn->selectForEdit("users",$param);
                      $row=mysqli_fetch_assoc($sql);

                     ?>


                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Name</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="name" value="<?php echo $row["name"]; ?>" placeholder="name" class="form-control" required><small class="form-text text-muted">Name</small></div>
                          </div>

                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">surname</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="sname" value="<?php echo $row["sname"]; ?>" placeholder="surname" class="form-control" required><small class="form-text text-muted">surname</small></div>
                          </div>

                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Telefon</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="phone" value="<?php echo $row["phone"] ?>" placeholder="Telefon" class="form-control" required><small class="form-text text-muted">Telefon</small></div>
                          </div>

                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Dogum tarixi</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="b_day" value="<?php echo $row["b_day"]; ?>" placeholder="y-m-d" class="form-control" required><small class="form-text text-muted">dogum tarixi</small></div>
                          </div>

                          <div class="row form-group">
                            <div class="col col-md-3"><label for="email-input" class=" form-control-label">Email</label></div>
                            <div class="col-12 col-md-9"><input type="email" id="email-input" name="email" value="<?php echo $row["email"]; ?>" placeholder="Email" class="form-control" required><small class="help-block form-text">email</small></div>
                          </div>

                          <div class="row form-group">
                            <div class="col col-md-3"><label for="select" class=" form-control-label">Status</label></div>
                            <div class="col-12 col-md-9">
                              <select name="status" value="<?php echo $row["status"] ?>" id="select" class="form-control">

                                <option value="1"<?php 

                                  if ($row["status"]==1) {
                                    echo "selected";
                                  }

                                 ?>

                                >Aktiv</option>
                                <option value="2" <?php 
                                  if ($row["status"]==2) {
                                    echo "selected";
                                  }


                                 ?>>
                                Passiv</option>
                              </select>
                            </div>
                          </div>

                          <div class="row form-group">
                            <div class="col col-md-3"><label class=" form-control-label">Cinsi</label></div>
                            <div class="col col-md-9">
                              <div class="form-check-inline form-check">
                                <label for="inline-radio1" class="form-check-label ">
                                  <input type="radio" required id="inline-radio1"  name="gender" value="kisi"<?php if ($row["gender"]=="kisi") {
                                    echo "checked";
                                  } ?> class="form-check-input">Kisi
                                </label>
                                <label for="inline-radio2" class="form-check-label ">
                                  <input type="radio" id="inline-radio2" name="gender" value="qadin"<?php 
                                      if ($row["gender"]=="qadin") {
                                        echo "checked";
                                      }


                                   ?> class="form-check-input">Qadin
                                </label>
                              </div>
                            </div>
                          </div>
                          <input type="hidden" name="hidden" value="<?php echo $row["id"]; ?>">
                           <input type="hidden" name="uImage" value="<?php echo $row["image"]; ?>">
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="file-multiple-input" class=" form-control-label">Sekil</label></div>
                            <div class="col-12 col-md-9"><input type="file" id="file-multiple-input" name="image" value="<?php echo $row["image"]; ?>" multiple="" class="form-control-file"></div>
                          </div>

                          <div class="card-footer">
                        <button type="submit" class="btn btn-primary btn-sm">
                          <i class="fa fa-dot-circle-o"></i> Submit
                        </button>
                        <button type="reset" class="btn btn-danger btn-sm">
                          <i class="fa fa-ban"></i> Reset
                        </button>
                      </div>
                        </form>
                      </div>
                      
                    </div>
                  </div>