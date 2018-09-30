
                  <div class="col-lg-12">
                    <div class="card">
                      <div class="card-header">
                        <strong>Yeni Admin</strong> 
                      </div>
                      <div class="card-body card-block">
                        <form action="<?php echo $site_url.'adminadd/'.$lng; ?>" method="POST" id="form_register" enctype="multipart/form-data" class="form-horizontal">




                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Name</label></div>
                            <div class="col-12 col-md-9">
                              <input type="text" id="name" name="name" placeholder="name" class="form-control">
                              <span class="error_message" id="name_error"></span>
                              <small class="form-text text-muted">name</small></div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">surname</label></div>
                            <div class="col-12 col-md-9">
                              <input type="text" id="lastname" name="sname" placeholder="surname" class="form-control">
                              <span class="error_message" id="last_error"></span>
                              <small class="form-text text-muted">surname</small></div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="email-input" class="form-control-label">Email</label></div>
                            <div class="col-12 col-md-9">
                              <input type="email" id="email" name="email" placeholder="Enter Email" class="form-control">
                              <span class="error_message" id="email_error"></span>
                              <small class="help-block form-text">email</small></div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="password-input" class="form-control-label">Password</label></div>
                            <div class="col-12 col-md-9">
                              <input type="password" id="pass" name="pass" placeholder="Password" class="form-control">
                              <span class="error_message" id="pass_error"></span>
                              <small class="help-block form-text">password</small></div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="password-input" class=" form-control-label">Again Password</label></div>
                            <div class="col-12 col-md-9">
                            <input type="password" id="repass" name="repass" placeholder="Again Password" class="form-control">
                            <span class="error_message" id="repass_error"></span>
                            <small class="help-block form-text">again password</small></div>
                          </div>

                          <div class="row form-group">
                            <div class="col col-md-3"><label for="select" class=" form-control-label">Status</label></div>
                            <div class="col-12 col-md-9">
                              <select name="status" id="select" class="form-control">
                                <option value="1">Super Admin</option>
                                <option value="2">Admin</option>
                              </select>
                            </div>
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
<style>
  .error_message{
  color:red !important;
  font-weight: bold;
  letter-spacing: 1px;
  word-spacing: 2px;
}
</style>