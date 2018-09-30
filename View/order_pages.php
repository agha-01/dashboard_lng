<div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Dashboard</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Dashboard</a></li>
                            <li><a href="#">Forms</a></li>
                            <li class="active">Basic</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">


                <div class="row">
                  <div class="col-lg-6">
                    <form action="<?php echo $site_url; ?>orderSave" method="POST">
                        
               


                        <div class="row form-group">
                            <div class="col col-md-3"><label class=" form-control-label">Checkboxes</label></div>
                            <div class="col col-md-9">
                              <div class="form-check">
                                <?php $sql = Controller::$conn->select('pages',$lng);
                                    while($row= mysqli_fetch_assoc($sql)){

                                    
                                 ?>

                                <div class="checkbox">
                                  <label for="checkbox1" class="form-check-label ">
                                        <?php 
                                        $sql2  = Controller::$conn->selectOrder('order_pages',$row["id"],$param);
                                    
                                 ?>
                                    <input type="checkbox" <?php if (mysqli_num_rows($sql2)>0) {
                                                echo "checked";
                                            } ?> id="checkbox1" name="page[]" value="<?php echo $row["id"]; ?>" class="form-check-input">
                                    <?php echo $row["name"]; ?>
                                  </label>
                                </div>

                            <?php } ?>
                            <input type="hidden" name="id" value="<?php echo $param; ?>">
                            <div>
                                <button type="submit" class="btn btn-success">Yadda saxla</button>
                            </div>
                              </div>
                            </div>
                          </div>





                    </form>
</div></div></div></div>    