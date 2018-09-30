<div class="col-lg-10">
                    <div class="card">
                      <div class="card-header">
                        <strong>Edit Elanlar</strong>
                      </div>
          <!-- Azerbaycan dili start -->
        <div class="card-body card-block">
          <form action="<?php echo $site_url.'newsedit/'.$lng."/$param"; ?>" method="post" enctype="multipart/form-data" class="form-horizontal">
                <?php 

                $sql=Controller::$conn->selectForEdit("elanlar",$param);
                      $row=mysqli_fetch_assoc($sql);
                      
                 ?>
                 <i class="flag-icon flag-icon-az" style="float: right; font-size: 30px;"></i>
                        <br>
                        <br>
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">basliq</label></div>
                            <div class="col-12 col-md-9">

                              <input type="text" id="text-input" name="basliq" value="<?php echo $row["basliq"];?>" placeholder="Basliq" class="form-control" required>

                              <small class="form-text text-muted">basliq</small></div>
                          </div>
                          
                          
                        
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Text</label></div>
                            <div class="col-12 col-md-9">

                              <textarea name="text"  id="textarea-input" rows="9" placeholder="Text" class="form-control">
                              <?php echo $row["text"]; ?>
                              </textarea>

                            </div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="select" class=" form-control-label">Kateqoriya</label></div>
                            <div class="col-12 col-md-9">
                              <select name="status" id="select" class="form-control">
                                <option value="0">Kateqoriya</option>
                                <option value="1" <?php if ($row["kate"]==1) {
                                  echo "selected";
                                } ?>>Olke</option>
                                <option value="2" <?php if ($row["kate"]==2) {
                                  echo "selected";
                                } ?>>Siyaset</option>
                                <option value="3" <?php if ($row["kate"]==3) {
                                  echo "selected";
                                } ?>>Kriminal</option>
                                <option value="4" <?php if ($row["kate"]==1) {
                                  echo "selected";
                                } ?>>Sou-biznes</option>
                                <option value="5" <?php if ($row["kate"]==4) {
                                  echo "selected";
                                } ?>>Idman</option>
                                <option value="6" <?php if ($row["kate"]==5) {
                                  echo "selected";
                                } ?>>Maraqli</option>
                      
                              </select>
                            </div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="select" class=" form-control-label">Status</label></div>
                            <div class="col-12 col-md-9">
                              <select name="status"  id="select" class="form-control">
                                <option value="1" <?php if ($row["status"]==1) {
                                  echo "selected";
                                } ?>>Active</option>
                                <option value="2" <?php if ($row["status"]==2) {
                                  echo "selected";
                                } ?>>Passive</option>
                                <option value="3" <?php if ($row["status"]==3) {
                                  echo "selected";
                                } ?>>All</option>
                                
                      
                              </select>
                            </div>
                          </div>                        
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="file-input" class=" form-control-label">File input</label></div>
                            <div class="col-12 col-md-9"><input type="file" id="file-input" name="image" class="form-control-file"></div>
                          </div>
                          <input type="hidden" name="hidden" value="<?php echo $row["id"]; ?>">
                          <input type="hidden" name="uImage" value="<?php echo $row["image"]; ?>">
                         
                        </div>
                        <div class="skl">
                          <label id="skl">Sekilleri goster <i></i></label>
                          <div class="image_update" style="display: none;">
                            <a href="<?php echo $site_url.$row["image"];?>" data-lightbox="mygallery"><img src="<?php echo $site_url.$row["image"];?>"></a>
                          </div>
                        </div>
        <!-- Azerbaycan dili end -->


        <!-- Rus dili start -->
        <div class="card-body card-block">
         
                <?php 

                $sql=Controller::$conn->selectForEdit("elanlar",$param+1);
                      $row=mysqli_fetch_assoc($sql);
                      
                 ?>
                 <i class="flag-icon flag-icon-ru" style="float: right; font-size: 30px;"></i>
                 <br>
                 <br>
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">basliq</label></div>
                            <div class="col-12 col-md-9">

                              <input type="text" id="text-input" name="basliqr" value="<?php echo $row["basliq"];?>" placeholder="Basliq" class="form-control" required>

                              <small class="form-text text-muted">basliq</small></div>
                          </div>
                          
                          
                        
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Text</label></div>
                            <div class="col-12 col-md-9">

                              <textarea name="textr"  id="textarea-input" rows="9" placeholder="Text" class="form-control">
                              <?php echo $row["text"]; ?>
                              </textarea>

                            </div>
                          </div>
                       
        </div>
        <!-- rus dili end -->

        <!-- Ingilis dili start -->
        <div class="card-body card-block">
          
                <?php 

                $sql=Controller::$conn->selectForEdit("elanlar",$param+2);
                      $row=mysqli_fetch_assoc($sql);
                      
                 ?>
                 <i class="flag-icon flag-icon-us" style="float: right; font-size: 30px;"></i>
                 <br>
                 <br>
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">basliq</label></div>
                            <div class="col-12 col-md-9">

                              <input type="text" id="text-input" name="basliqen" value="<?php echo $row["basliq"];?>" placeholder="Basliq" class="form-control" required>

                              <small class="form-text text-muted">basliq</small></div>
                          </div>
                          
                          
                        
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Text</label></div>
                            <div class="col-12 col-md-9">

                              <textarea name="texten"  id="textarea-input" rows="9" placeholder="Text" class="form-control">
                              <?php echo $row["text"]; ?>
                              </textarea>

                            </div>
                          </div>
                          
                          <input type="hidden" name="hidden" value="<?php echo $row["id"]; ?>">
                          <input type="hidden" name="uImage" value="<?php echo $row["image"]; ?>">
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
        <!-- Ingilis dili end -->
                     
                    </div>
                    
                  </div>
<style>
  #skl{
    text-decoration: underline;
    cursor: pointer;
  }
  .image_update{
    height: auto;
  }
  .skl{
    margin-left: 15px;
    margin-right: 20px;
  }
  .image_update img{
    height: 100px;
    width: 100px;
  }
</style>
<script>
  $(document).ready(function(){
    $("#skl").click(function(){
      $(".image_update").slideToggle(1000);
    });
  });
</script>