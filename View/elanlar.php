    <!-- yeni/////////////////// -->
         <style>
       #bootstrap-data-table_filter{
        display: flex!important;
        justify-content: flex-end !important;
       }
     </style>

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
                            <li><a href="<?php echo $site_url;?>home">Dashboard</a></li>
                            <li><a href="<?php echo $site_url;?>elanlar">Elanlar</a></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Elanlar</strong>
                        </div>
                        
                        <div class="card-body">
                  <table id="bootstrap-data-table" class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th scope="col">id</th>
                        <td scope="col">Şəkil</td>
                        <th scope="col">Ad</th>
                        <th scope="col">Soyad</th>
                        <th scope="col">Elanin adi</th>
                        <!-- <th scope="col">text</th> -->
                        <th scope="col">status</th>
                        <th scope="col">tarix</th>
                        <th scope="col">Edit/Delete</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php 
                      if ($param==3) {
                        $sql=Controller::$conn->select('elanlar',$lng);
                      }
                      else{
                        $sql=Controller::$conn->select('elanlar',$lng,"status=$param");
                      }
                    while ($row=mysqli_fetch_assoc($sql)) {
                       ?>


                            <tr>
                              <th scope="row"><?php echo $row["id"]; ?></th>
                              <td><img src="<?php echo $site_url.$row["image"]; ?>" width="150"></td>
                              <td><?php echo $row["uname"];?></td>
                              <td><?php echo $row["sname"];?></td>
                              <td><?php echo $row["basliq"]; ?></td>
                              <!-- <td><?php echo $row["text"]; ?></td> -->
                               <td><?php 
                                  if ($row["status"]==1) {
                                    echo "Aktiv";
                                  }
                                  else{
                                    echo "Passiv";
                                  }
                               ?></td>
            
                             <td><?php echo $row["tarix"]; ?></td>
                              <td>
                                <a href="">
                                  <button class="btn btn-success"><a href="<?php echo $site_url."editelanlar/"."$lng/".$row["id"];?>">Duzelis et</a></button>
                                </a>
                                                              
                                <a href="<?php echo $site_url.'delete/elanlar_'.$row["id"]; ?>" id="deletee" ><button class="btn btn-danger">Sil</button></a>

                                <script>
                                  deletee.addEventListener("click",function(e){
                                    if (confirm("Silmek istediyinize eminsiniz?")) {

                                    }
                                    else{
                                      e.preventDefault();
                                    }
                                  });
                                </script>
                        </td>
                      </tr>
                    <?php } ?>

                    </tbody>
                  </table>
                        </div>
                    </div>
                </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->


    </div><!-- /#right-panel -->

    <!-- Right Panel -->


  