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
                            <li><a href="<?php echo $site_url;?>adminlist">Adminler</a></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Admin list</strong>
                             <strong class="card-title float-right text-danger">
                              <a href="<?php echo $site_url.'addadmin/'.$lng;?>">
                              Yeni Admin
                              </a>
                              </strong>
                        </div>
                        <div class="card-body">
                            <table class="table">
                              <thead>
                                <tr>
                                  <th scope="col">id</th>                     
                                  <th scope="col">Ad</th>
                                  <th scope="col">Soyad</th>
                                  <th scope="col">Email</th>
                                  <th scope="col">Status</th>
                                  <th scope="col">qeydiyyatdan</th>
                                  <th scope="col">giris</th>
                                  <th scope="col">cixis</th>
                                  <th scope="col">Edit/Delete</th>
                              </tr>
                          </thead>
                          <tbody>
                            <?php 
                            $sql=Controller::$conn->select('admin');
                           while ($row=mysqli_fetch_assoc($sql)) {
                             ?>


                            <tr>
                              <th scope="row"><?php echo $row["id"]; ?></th>
                              <td><?php echo $row["name"]; ?></td>
                              <td><?php echo $row["sname"]; ?></td>
                              <td><?php echo $row["email"]; ?></td>
                              <td><?php 

                              if ($row["status"]==1) {
                                 echo "Super Admin";
                               } 
                               else{
                                echo "Admin";
                               }



                              ?></td>
                              <td><?php echo $row["r_date"]; ?></td>
                              <td><?php echo $row["giris"]; ?></td>
                            <td><?php echo $row["cixis"]; ?></td>
                         
                              <td>
                                <button class="btn btn-primary"><a href="<?php echo $site_url.'order_pages/'."$lng/".$row["id"]; ?>">Sehifeler</a></button>

                                <a href="">
                                  <button class="btn btn-success"><a href="<?php echo $site_url.'editadmin/'."$lng/".$row["id"]; ?>">Edit</a></button>
                                </a>
                                <a href="<?php echo $site_url.'a_status/'."$lng/".$row["id"]."_".$row["status"]; ?>">
                                <?php 
                                if ($row["status"]==2) {
                                  ?>
                                  <button class="btn btn-success " >activ et</button>
                                  <?php
                                }
                                else{
                                  ?>
                                  <button class="btn btn-warning " >Passiv et</button>
                                  <?php

                                }
                                 ?>
                                </a>
                                 <a href="<?php echo $site_url.'delete/'."$lng/".'admin_'.$row["id"]; ?>" id="deletee" ><button class="btn btn-danger">Delete</button></a>

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


    </div>
    <script>
      // $(".btn-ap").click(function(){
      //   var idd = $(this).attr("id");
      //   $.post("a_status",{
      //     id:idd
      //   }).done(function(data){
      //     $(#"+idd+""").html(data);
      

      //   });

      // });
    </script>

   