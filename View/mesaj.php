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
                            <li><a href="<?php echo $site_url;?>mesaj">Mesaj</a></li>
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
                            <strong class="card-title text-primary">Gelen Mesajlar</strong>
                             
                        </div>
                        
                        <div class="card-body">
                  <table id="bootstrap-data-table" class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th>id</th>
                        <th>Name</th>
                        <th>Lastname</th>
                        <th>Email</th>
                        <th>Movzu</th>
                        <th>Text</th>
                        <th>Mesaj Gonder</th>
                        <th>Delete</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php 
                        $sql=Controller::$conn->Select('mesaj');
                        while ($row=mysqli_fetch_assoc($sql)) {
                       ?>
                      <tr>
                      <td><?php echo $row["id"]; ?></td>               
                      <td><?php echo $row["name"]; ?></td>               
                      <td><?php echo $row["lastname"]; ?></td>               
                      <td><?php echo $row["email"]; ?></td>  
                      <td><?php echo $row["movzu"]; ?></td>             
                      <td><?php echo $row["text"]; ?></td>               
                      <td> 
                        <a href="<?php echo $site_url;?>addmail/<?php echo $row["id"]; ?>"><button class="btn btn-success">Mesaj Gonder</button>
                            </a>
                          </td>               
                        <td>                       
                           <a href="<?php echo $site_url.'delete/mesaj_'.$row["id"]; ?>" id="deletee" ><button class="btn btn-danger">Sil</button></a>

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