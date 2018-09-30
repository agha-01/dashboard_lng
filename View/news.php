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
                            <li><a href="<?php echo $site_url; ?>home">Dashboard</a></li>
                            <li><a href="<?php echo $site_url; ?>news">Xeberler</a></li>
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
                            <strong class="card-title">Xəbərlər</strong>
                             <a href="<?php echo $site_url.'addnews/'.$lng;?>">
                               <h4 class="card-title float-right text-danger">Yeni xəbər əlavə et</h4>
                             </a>
                        </div>
                        
                        <div class="card-body">
                  <table id="bootstrap-data-table" class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th>id</th>
                        <th>Şəkil</th>
                        <th>Başlıq</th>
                        <th>Yerləşdirilmə tarixi </th>
                        <th>kateqoriya</th>
                        <th>Status</th>
                        <th>Baxış sayı</th>
                        <th>Beyenme sayı</th>
                        <th>Beyenmeme sayı</th>                    
                        <th>edit/delete</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php 
                        if ($param==3) {
                          $sql=Controller::$conn->Select('news',$lng);
                        }
                        else{
                          $sql=Controller::$conn->Select('news',$lng,"status=$param");
                        }
                      while ($row=mysqli_fetch_assoc($sql)) {
                       ?>

                      <tr>
                        <td><?php echo $row["id"]; ?></td>
                         <td><img src="<?php echo $site_url.$row["image"]; ?>" width="150"></td>
                        <td><?php echo $row["basliq"]; ?></td>
                        <td><?php echo $row["tarix"]; ?></td>
                        <td><?php

                          if ($row["kate"]==0) {
                            echo "Kateqoriya yoxdur";
                          }
                          else if ($row["kate"]==1) {
                            echo "Olke";
                          }
                          else if ($row["kate"]==2) {
                            echo "Siyaset";
                          }
                          else if ($row["kate"]==3) {
                            echo "Kriminal";
                          }
                          else if ($row["kate"]==4) {
                            echo "Sou-biznes";
                          }
                          else if ($row["kate"]==5) {
                            echo "Idman";
                          }
                          else if ($row["kate"]==6) {
                            echo "Maraqli";
                          }
                          ?>

                        </td>
                        <?php 

                         if ($row["status"]==1) {
                         
                                echo '<td class="text-success">Active</td>';
                                }
                                else{
                                   echo '<td class="text-success">Passive</td>';
                                }
                              ?>  
                        <td>50</td>
                        <td>100</td>
                        <td>23</td>
                        <td>
                          <a href="<?php echo $site_url;?>editnews/<?php echo "$lng/".$row["id"]; ?>"><button class="btn btn-success">Düzəliş et</button>
                            </a>
                           <a href="<?php echo $site_url.'delete/'."$lng/".'news_'.$row["id"]; ?>" id="deletee" ><button class="btn btn-danger">Sil</button></a>

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


  