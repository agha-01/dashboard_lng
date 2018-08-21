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
                            <li><a href="#">Table</a></li>
                            <li class="active">Basic table</li>
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
                            <strong class="card-title">User list</strong>
                            
                        </div>
                        <div class="card-body">
                            <table class="table">
                              <thead>
                                <tr>
                                  <th scope="col"># id</th>
                                  <td scope="col">Şəkil</td>
                                  <th scope="col">Ad Soyad</th>
                                  <th scope="col">Yaş</th>
                                  <th scope="col">Cins</th>
                                  <th scope="col">Email</th>
                                  <th scope="col">Telefon</th>
                                  <th scope="col">Status</th>
                                  <th scope="col">Edit/Delete</th>
                              </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <th scope="row">1</th>
                              <td><img src="images/placeholder.png" width="150"></td>
                              <td>Ag Murtuzov</td>
                              <td>12-01-2003</td>
                              <td>Aktiv</td>
                               <td>Ag Murtuzov</td>
                              <td>12-01-2003</td>
                             <td>12-01-2003</td>
                              <td>
                                <a href="">
                                  <button class="btn btn-success">Edit</button>
                                </a>
                                
                                <button class="btn btn-danger">Delete</button>
                            </td>
                              
                          </tr>
                         
                      </tbody>
                  </table>
                        </div>
                    </div>
                </div>

<!--                 <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Table Dark</strong>
                        </div>
                        <div class="card-body">
                            <table class="table table-dark">
                              <thead>
                                <tr>
                                  <th scope="col">#</th>
                                  <th scope="col">First</th>
                                  <th scope="col">Last</th>
                                  <th scope="col">Handle</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <th scope="row">1</th>
                                  <td>Mark</td>
                                  <td>Otto</td>
                                  <td>@mdo</td>
                                </tr>
                                <tr>
                                  <th scope="row">2</th>
                                  <td>Jacob</td>
                                  <td>Thornton</td>
                                  <td>@fat</td>
                                </tr>
                                <tr>
                                  <th scope="row">3</th>
                                  <td>Larry</td>
                                  <td>the Bird</td>
                                  <td>@twitter</td>
                                </tr>
                              </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Table Head</strong>
                        </div>
                        <div class="card-body">
                            <table class="table">
                              <thead class="thead-dark">
                                <tr>
                                  <th scope="col">#</th>
                                  <th scope="col">First</th>
                                  <th scope="col">Last</th>
                                  <th scope="col">Handle</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <th scope="row">1</th>
                                  <td>Mark</td>
                                  <td>Otto</td>
                                  <td>@mdo</td>
                                </tr>
                                <tr>
                                  <th scope="row">2</th>
                                  <td>Jacob</td>
                                  <td>Thornton</td>
                                  <td>@fat</td>
                                </tr>
                                <tr>
                                  <th scope="row">3</th>
                                  <td>Larry</td>
                                  <td>the Bird</td>
                                  <td>@twitter</td>
                                </tr>
                              </tbody>
                            </table>

                        </div>
                    </div>
                </div>


                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Stripped Table</strong>
                        </div>
                        <div class="card-body">
                            <table class="table table-striped">
                              <thead>
                                <tr>
                                  <th scope="col">#</th>
                                  <th scope="col">First</th>
                                  <th scope="col">Last</th>
                                  <th scope="col">Handle</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <th scope="row">1</th>
                                  <td>Mark</td>
                                  <td>Otto</td>
                                  <td>@mdo</td>
                                </tr>
                                <tr>
                                  <th scope="row">2</th>
                                  <td>Jacob</td>
                                  <td>Thornton</td>
                                  <td>@fat</td>
                                </tr>
                                <tr>
                                  <th scope="row">3</th>
                                  <td>Larry</td>
                                  <td>the Bird</td>
                                  <td>@twitter</td>
                                </tr>
                              </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Bordered Table</strong>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered">
                              <thead>
                                <tr>
                                  <th scope="col">#</th>
                                  <th scope="col">First</th>
                                  <th scope="col">Last</th>
                                  <th scope="col">Handle</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <th scope="row">1</th>
                                  <td>Mark</td>
                                  <td>Otto</td>
                                  <td>@mdo</td>
                                </tr>
                                <tr>
                                  <th scope="row">2</th>
                                  <td>Jacob</td>
                                  <td>Thornton</td>
                                  <td>@fat</td>
                                </tr>
                                <tr>
                                  <th scope="row">3</th>
                                  <td colspan="2">Larry the Bird</td>
                                  <td>@twitter</td>
                                </tr>
                              </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Bordered Dark Table</strong>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered table-dark">
                              <thead>
                                <tr>
                                  <th scope="col">#</th>
                                  <th scope="col">First</th>
                                  <th scope="col">Last</th>
                                  <th scope="col">Handle</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <th scope="row">1</th>
                                  <td>Mark</td>
                                  <td>Otto</td>
                                  <td>@mdo</td>
                                </tr>
                                <tr>
                                  <th scope="row">2</th>
                                  <td>Jacob</td>
                                  <td>Thornton</td>
                                  <td>@fat</td>
                                </tr>
                                <tr>
                                  <th scope="row">3</th>
                                  <td colspan="2">Larry the Bird</td>
                                  <td>@twitter</td>
                                </tr>
                              </tbody>
                            </table>
                        </div>
                    </div>
                </div> -->

                </div>
            </div><!-- .animated -->
        </div><!-- .content -->


    </div><!-- /#right-panel -->

    <!-- Right Panel -->


   <!--  <script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script> -->