
<div class="col-lg-10">
                    <div class="card">
                      <div class="card-header">
                        <strong>Mesaj gonder</strong>
                      </div>
                      <div class="card-body card-block">
                        <form action="<?php echo $site_url.'sendmail' ?>" method="post" enctype="multipart/form-data" class="form-horizontal">

                        <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Kimə</label></div>
                            <div class="col-12 col-md-9">

                              <input type="text" id="text-input" name="email" placeholder="email.." class="form-control">

                             </div>
                          </div>


                        <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Mövzu</label></div>
                            <div class="col-12 col-md-9">

                              <input type="text" id="text-input" name="subject" placeholder="mövzu.." class="form-control">

                           </div>
                          </div>





                          
                          
                          
                        
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Mesaj</label></div>
                            <div class="col-12 col-md-9">

                              <textarea name="text" id="textarea-input" rows="9" placeholder="Mesaj" class="form-control"></textarea>

                            </div>
                          </div>


                          
                                                  
                          <div class="card">
                        <div class="card-footer">
                          <button type="submit" class="btn btn-primary btn-sm">
                            <i class="fa fa-dot-circle-o"></i> Submit
                          </button>
                          <button type="reset" class="btn btn-danger btn-sm">
                            <i class="fa fa-ban"></i> Reset
                          </button>
                        </div>
                       </div>
                        </form>
                      </div>
                     
                    </div>
                    
                  </div>