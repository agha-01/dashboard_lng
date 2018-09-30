
<div class="col-lg-10">
                    <div class="card">
                      <!-- azerbaycan start -->
                      <div class="card-header">
                        <strong style="font-size: 21px;">Yeni Xeber</strong>
                        <i class="flag-icon flag-icon-az" style="float: right; font-size: 30px;"></i>
                      </div>
                      <div class="card-body card-block">
                        <form action="<?php echo $site_url.'newsadd/'.$lng;?>" method="post" enctype="multipart/form-data" class="form-horizontal">
                    
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Xeberin adi</label></div>
                            <div class="col-12 col-md-9">

                            	<input type="text" id="text-input" name="basliq" placeholder="Xeberin adi" class="form-control">

                            	<small class="form-text text-muted">Xeberin adi</small></div>
                          </div>
                          
                          
                        
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Xeberin texti</label></div>
                            <div class="col-12 col-md-9">

                            	<textarea name="text" id="textarea-input" rows="9" placeholder="Xeberin texti" class="form-control"></textarea>

                            </div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="select" class=" form-control-label">Kateqoriya</label></div>
                            <div class="col-12 col-md-9">
                              <select name="kate" id="kate" class="form-control">
                                <option value="0">Kateqoriya</option>
                                <option value="1">Olke</option>
                                <option value="2">Siyaset</option>
                                <option value="3">Kriminal</option>
                                <option value="4">Sou-biznes</option>
                                <option value="5">Idman</option>
                                <option value="6">Maraqli</option>
                              </select>
                            </div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="select" class=" form-control-label">Status</label></div>
                            <div class="col-12 col-md-9">
                              <select name="status" id="select" class="form-control">
                                <option value="1">Aktiv</option>
                                <option value="2">Passiv</option>
                     	
                              </select>
                            </div>
                          </div>

                          
                          
                          
                         
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="file-input" class=" form-control-label">Xeberin Sekili</label></div>
                            <div class="col-12 col-md-9"><input type="file" id="file-input" name="image" class="form-control-file"></div>
                          </div>
                         
                      </div>
                      <!-- azerbaycan end -->
                      <!-- rus start -->
                      <div class="card-header">
                        <strong style="font-size: 21px;">Hовые новости</strong>
                        <i class="flag-icon flag-icon-ru" style="float: right; font-size: 30px;"></i>
                      </div>
                      <div class="card-body card-block">
                       
                    
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Xeberin adi</label></div>
                            <div class="col-12 col-md-9">

                              <input type="text" id="text-input" name="basliqr" placeholder="Xeberin adi" class="form-control">

                              <small class="form-text text-muted">Xeberin adi</small></div>
                          </div>
                          
                          
                        
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Xeberin texti</label></div>
                            <div class="col-12 col-md-9">

                              <textarea name="textr" id="textarea-input" rows="9" placeholder="Xeberin texti" class="form-control"></textarea>

                            </div>
                          </div>
                          
                          
                      </div>
                      <!-- rus end -->
                      <!-- ingilis start -->
                      <div class="card-header">
                        <strong style="font-size: 21px;">New news</strong>
                        <i class="flag-icon flag-icon-us" style="float: right; font-size: 30px;"></i>
                      </div>
                      <div class="card-body card-block">
                       
                    
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Xeberin adi</label></div>
                            <div class="col-12 col-md-9">

                              <input type="text" id="text-input" name="basliqen" placeholder="Xeberin adi" class="form-control">

                              <small class="form-text text-muted">Xeberin adi</small></div>
                          </div>
                          
                          
                        
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Xeberin texti</label></div>
                            <div class="col-12 col-md-9">

                              <textarea name="texten" id="textarea-input" rows="9" placeholder="Xeberin texti" class="form-control"></textarea>

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
                      <!-- ingilis end -->
                     
                    </div>
                    
                  </div>