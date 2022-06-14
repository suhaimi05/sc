<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        require 'includes/head_welcome.html';
    ?>
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="120">
    <!-- Back to top button -->
    <button type="button" class="btn btn-primary btn-floating btn-sm" id="btn-back-to-top">
        <i class="fas fa-arrow-up"></i>
    </button>
    <!-- End button -->
    <!-- Container -->
    <div class="container mt-2">
        <div id="Buku">
        <div class="row">
            <div class="col-md-12 mt-5">
                <div data-aos="fade-up" data-aos-duration="3000">
                <div class="shadow p-3 mb-3 bg-light rounded mt-5">
                    <div class="card-body">
                        <div class="text-center">
                            <!-- KONTEN -->
                            <div class="text-center">
                                <div class="sc">Buku Master Plan</div>
                                <div class="kab">KABUPATEN TAPIN</div>
                            </div>
                            <div class="row col-md-12 mt-3">
                                <div class="col-md-3">
                                    <a href="files/Buku_1_Smart_City_Tapin.pdf" target="_blank">
                                        <img src="assets/img/cover/Cover buku 1.jpg" alt="Buku 1" class="img-thumbnail" width="100%"> 
                                    </a>
                                    <div class="kab">Buku 1</div>
                                </div>
                                <div class="col-md-3">
                                    <a href="#">
                                        <img src="assets/img/cover/Cover buku 2.jpg" alt="Buku 2" class="img-thumbnail" width="100%">
                                    </a>
                                    <div class="kab">Buku 2</div>
                                </div>
                                <div class="col-md-3">
                                    <a href="#">
                                        <img src="assets/img/cover/Cover buku 3.jpg" alt="Buku 3" class="img-thumbnail" width="100%">
                                    </a>
                                    <div class="kab">Buku 3</div>
                                </div>
                                <div class="col-md-3">
                                    <a href="#">
                                        <img src="assets/img/cover/Cover buku 4.jpg" alt="Buku 4" class="img-thumbnail" width="100%">
                                    </a>
                                    <div class="kab">Buku 4</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
        </div>

        <div id="Dimensi">
        <div class="row mt-5">
            <div class="col-md-12">
                <!-- KONTEN -->
                <div data-aos="fade-down" data-aos-duration="2500">
                <div class="shadow p-3 mb-3 bg-light rounded">
                    <div class="card-body">
                        <!-- TITLE -->
                        <div data-aos="zoom-in-down">
                        <div class="text-center">
                            <div class="sc">Dimensi Smart City</div>
                            <div class="kab">KABUPATEN TAPIN</div>
                        </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-4">
                                <a href="dimensi/governance">
                                <!-- <a href="" data-toggle="modal" data-target="#Governance"> -->
                                <div class="shadow p-3 mb-5 bg-white rounded">
                                    <div class="text-center">
                                        <div class="card-body">
                                            <!-- KONTEN -->
                                            <img src="assets/img/dimension/governance.png" class="img-fluid" alt="Smart Governance" width="175px">
                                            <div class="btn smart">Smart Governance</div>
                                        </div>
                                    </div>
                                </div>
                                </a>
                            </div>
                            <!-- Modal Governance -->
                            <!-- <div class="modal fade" id="Governance" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content bg-light">
                                        <div class="modal-header">
                                        <div class="dimensi" id="exampleModalLongTitle">Smart Governance</div>
                                        <a type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </a>
                                        </div>
                                        <div class="modal-body">
                                            <center>
                                                <img src="assets/img/bg/tapin.jpg" alt="..." class="img-thumbnail" width="100%">
                                            </center>
                                            <p style="text-indent: 45px;" align="justify">
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam eget molestie nisi, nec posuere purus. Suspendisse bibendum enim sed purus pretium, id egestas eros tempus. Pellentesque venenatis, justo a malesuada sollicitudin, diam sem ornare nisl, id finibus dolor lorem efficitur ligula. Suspendisse hendrerit leo vel justo fermentum, in dapibus lorem gravida. In eu lorem sollicitudin, interdum elit vel, condimentum augue. Praesent in ultricies arcu. Etiam maximus pretium elit, sed accumsan justo luctus vel. Praesent aliquam finibus ligula eget mattis.
                                            </p>
                                            <p style="text-indent: 45px;" align="justify">
                                                Nam ullamcorper lobortis condimentum. Etiam rutrum ex et sagittis lacinia. Curabitur pretium vulputate nunc. Morbi iaculis sodales lorem id sollicitudin. Mauris magna nisl, iaculis et vulputate a, varius et dolor. Integer nisl augue, imperdiet a massa vitae, lobortis pharetra velit. Curabitur efficitur consequat est, ullamcorper interdum risus feugiat at. Integer fringilla viverra elit consectetur tincidunt. Etiam pellentesque, diam in egestas pellentesque, eros lacus lacinia erat, a euismod ante augue in diam. Sed accumsan eu orci id tempus. Maecenas sit amet tortor consequat, vulputate est vulputate, suscipit purus. Mauris varius a arcu dictum venenatis. Suspendisse ut aliquet lectus. Nulla facilisi. Aenean ac elit ac sapien eleifend luctus. Curabitur hendrerit egestas pharetra.
                                            </p>
                                            <div class="kab">Aplikasi Terkait</div>
                                            <a href="#" type="button" class="btn btn-primary btn-sm btn-block">Nama Aplikasi 1</a>
                                            <a href="#" type="button" class="btn btn-warning btn-sm btn-block">Nama Aplikasi 2</a>
                                            <a href="#" type="button" class="btn btn-danger btn-sm btn-block">Nama Aplikasi 3</a>
                                            <a href="#" type="button" class="btn btn-secondary btn-sm btn-block">Nama Aplikasi 4</a>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                            <!-- End Modal Governance -->

                            <div class="col-md-4">
                                <a href="">
                                <!-- <a href="" data-toggle="modal" data-target="#Branding"> -->
                                    <div class="shadow p-3 mb-5 bg-white rounded">
                                        <div class="text-center">
                                            <div class="card-body">
                                                <!-- KONTEN -->
                                                <img src="assets/img/dimension/branding.png" class="img-fluid" alt="Smart Branding" width="135px">
                                                <div class="btn smart">Smart Branding</div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <!-- Modal Branding -->
                            <!-- <div class="modal fade" id="Branding" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content bg-light">
                                        <div class="modal-header">
                                        <div class="dimensi" id="exampleModalLongTitle">Smart Branding</div>
                                        <a type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </a>
                                        </div>
                                        <div class="modal-body">
                                            <center>
                                                <img src="assets/img/bg/tapin.jpg" alt="..." class="img-thumbnail" width="100%">
                                            </center>
                                            <p style="text-indent: 45px;" align="justify">
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam eget molestie nisi, nec posuere purus. Suspendisse bibendum enim sed purus pretium, id egestas eros tempus. Pellentesque venenatis, justo a malesuada sollicitudin, diam sem ornare nisl, id finibus dolor lorem efficitur ligula. Suspendisse hendrerit leo vel justo fermentum, in dapibus lorem gravida. In eu lorem sollicitudin, interdum elit vel, condimentum augue. Praesent in ultricies arcu. Etiam maximus pretium elit, sed accumsan justo luctus vel. Praesent aliquam finibus ligula eget mattis.
                                            </p>
                                            <p style="text-indent: 45px;" align="justify">
                                                Nam ullamcorper lobortis condimentum. Etiam rutrum ex et sagittis lacinia. Curabitur pretium vulputate nunc. Morbi iaculis sodales lorem id sollicitudin. Mauris magna nisl, iaculis et vulputate a, varius et dolor. Integer nisl augue, imperdiet a massa vitae, lobortis pharetra velit. Curabitur efficitur consequat est, ullamcorper interdum risus feugiat at. Integer fringilla viverra elit consectetur tincidunt. Etiam pellentesque, diam in egestas pellentesque, eros lacus lacinia erat, a euismod ante augue in diam. Sed accumsan eu orci id tempus. Maecenas sit amet tortor consequat, vulputate est vulputate, suscipit purus. Mauris varius a arcu dictum venenatis. Suspendisse ut aliquet lectus. Nulla facilisi. Aenean ac elit ac sapien eleifend luctus. Curabitur hendrerit egestas pharetra.
                                            </p>
                                            <div class="kab">Aplikasi Terkait</div>
                                            <a href="#" type="button" class="btn btn-primary btn-sm btn-block">Nama Aplikasi 1</a>
                                            <a href="#" type="button" class="btn btn-warning btn-sm btn-block">Nama Aplikasi 2</a>
                                            <a href="#" type="button" class="btn btn-danger btn-sm btn-block">Nama Aplikasi 3</a>
                                            <a href="#" type="button" class="btn btn-secondary btn-sm btn-block">Nama Aplikasi 4</a>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                            <!-- End Modal Branding -->

                            <div class="col-md-4">
                                <a href="">
                                <!-- <a href="" data-toggle="modal" data-target="#Economy"> -->
                                    <div class="shadow p-3 mb-5 bg-white rounded">
                                        <div class="text-center">
                                            <div class="card-body">
                                                <!-- KONTEN -->
                                                <img src="assets/img/dimension/economy.png" class="img-fluid" alt="Smart Economy" width="225px">
                                                <div class="btn smart">Smart Economy</div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <!-- Modal Economy -->
                            <!-- <div class="modal fade" id="Economy" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content bg-light">
                                        <div class="modal-header">
                                        <div class="dimensi" id="exampleModalLongTitle">Smart Economy</div>
                                        <a type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </a>
                                        </div>
                                        <div class="modal-body">
                                            <center>
                                                <img src="assets/img/bg/tapin.jpg" alt="..." class="img-thumbnail" width="100%">
                                            </center>
                                            <p style="text-indent: 45px;" align="justify">
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam eget molestie nisi, nec posuere purus. Suspendisse bibendum enim sed purus pretium, id egestas eros tempus. Pellentesque venenatis, justo a malesuada sollicitudin, diam sem ornare nisl, id finibus dolor lorem efficitur ligula. Suspendisse hendrerit leo vel justo fermentum, in dapibus lorem gravida. In eu lorem sollicitudin, interdum elit vel, condimentum augue. Praesent in ultricies arcu. Etiam maximus pretium elit, sed accumsan justo luctus vel. Praesent aliquam finibus ligula eget mattis.
                                            </p>
                                            <p style="text-indent: 45px;" align="justify">
                                                Nam ullamcorper lobortis condimentum. Etiam rutrum ex et sagittis lacinia. Curabitur pretium vulputate nunc. Morbi iaculis sodales lorem id sollicitudin. Mauris magna nisl, iaculis et vulputate a, varius et dolor. Integer nisl augue, imperdiet a massa vitae, lobortis pharetra velit. Curabitur efficitur consequat est, ullamcorper interdum risus feugiat at. Integer fringilla viverra elit consectetur tincidunt. Etiam pellentesque, diam in egestas pellentesque, eros lacus lacinia erat, a euismod ante augue in diam. Sed accumsan eu orci id tempus. Maecenas sit amet tortor consequat, vulputate est vulputate, suscipit purus. Mauris varius a arcu dictum venenatis. Suspendisse ut aliquet lectus. Nulla facilisi. Aenean ac elit ac sapien eleifend luctus. Curabitur hendrerit egestas pharetra.
                                            </p>
                                            <div class="kab">Aplikasi Terkait</div>
                                            <a href="#" type="button" class="btn btn-primary btn-sm btn-block">Nama Aplikasi 1</a>
                                            <a href="#" type="button" class="btn btn-warning btn-sm btn-block">Nama Aplikasi 2</a>
                                            <a href="#" type="button" class="btn btn-danger btn-sm btn-block">Nama Aplikasi 3</a>
                                            <a href="#" type="button" class="btn btn-secondary btn-sm btn-block">Nama Aplikasi 4</a>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                            <!-- End Modal Economy -->
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <a href="">
                                <!-- <a href="" data-toggle="modal" data-target="#Environment"> -->
                                    <div class="shadow p-3 mb-5 bg-white rounded">
                                        <div class="text-center">
                                            <div class="card-body">
                                                <!-- KONTEN -->
                                                <img src="assets/img/dimension/environment.png" class="img-fluid" alt="Smart Environment" width="133px">
                                                <div class="btn smart">Smart Environment</div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <!-- Modal Environment -->
                            <!-- <div class="modal fade" id="Environment" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content bg-light">
                                        <div class="modal-header">
                                        <div class="dimensi" id="exampleModalLongTitle">Smart Environment</div>
                                        <a type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </a>
                                        </div>
                                        <div class="modal-body">
                                            <center>
                                                <img src="assets/img/bg/tapin.jpg" alt="..." class="img-thumbnail" width="100%">
                                            </center>
                                            <p style="text-indent: 45px;" align="justify">
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam eget molestie nisi, nec posuere purus. Suspendisse bibendum enim sed purus pretium, id egestas eros tempus. Pellentesque venenatis, justo a malesuada sollicitudin, diam sem ornare nisl, id finibus dolor lorem efficitur ligula. Suspendisse hendrerit leo vel justo fermentum, in dapibus lorem gravida. In eu lorem sollicitudin, interdum elit vel, condimentum augue. Praesent in ultricies arcu. Etiam maximus pretium elit, sed accumsan justo luctus vel. Praesent aliquam finibus ligula eget mattis.
                                            </p>
                                            <p style="text-indent: 45px;" align="justify">
                                                Nam ullamcorper lobortis condimentum. Etiam rutrum ex et sagittis lacinia. Curabitur pretium vulputate nunc. Morbi iaculis sodales lorem id sollicitudin. Mauris magna nisl, iaculis et vulputate a, varius et dolor. Integer nisl augue, imperdiet a massa vitae, lobortis pharetra velit. Curabitur efficitur consequat est, ullamcorper interdum risus feugiat at. Integer fringilla viverra elit consectetur tincidunt. Etiam pellentesque, diam in egestas pellentesque, eros lacus lacinia erat, a euismod ante augue in diam. Sed accumsan eu orci id tempus. Maecenas sit amet tortor consequat, vulputate est vulputate, suscipit purus. Mauris varius a arcu dictum venenatis. Suspendisse ut aliquet lectus. Nulla facilisi. Aenean ac elit ac sapien eleifend luctus. Curabitur hendrerit egestas pharetra.
                                            </p>
                                            <div class="kab">Aplikasi Terkait</div>
                                            <a href="#" type="button" class="btn btn-primary btn-sm btn-block">Nama Aplikasi 1</a>
                                            <a href="#" type="button" class="btn btn-warning btn-sm btn-block">Nama Aplikasi 2</a>
                                            <a href="#" type="button" class="btn btn-danger btn-sm btn-block">Nama Aplikasi 3</a>
                                            <a href="#" type="button" class="btn btn-secondary btn-sm btn-block">Nama Aplikasi 4</a>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                            <!-- End Modal Environment -->

                            <div class="col-md-4">
                                <a href="">
                                <!-- <a href="" data-toggle="modal" data-target="#Living"> -->
                                    <div class="shadow p-3 mb-5 bg-white rounded">
                                        <div class="text-center">
                                            <div class="card-body">
                                                <!-- KONTEN -->
                                                <img src="assets/img/dimension/living.png" class="img-fluid" alt="Smart Living" width="200px">
                                                <div class="btn smart">Smart Living</div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <!-- Modal Living -->
                            <!-- <div class="modal fade" id="Living" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content bg-light">
                                        <div class="modal-header">
                                        <div class="dimensi" id="exampleModalLongTitle">Smart Living</div>
                                        <a type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </a>
                                        </div>
                                        <div class="modal-body">
                                            <center>
                                                <img src="assets/img/bg/tapin.jpg" alt="..." class="img-thumbnail" width="100%">
                                            </center>
                                            <p style="text-indent: 45px;" align="justify">
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam eget molestie nisi, nec posuere purus. Suspendisse bibendum enim sed purus pretium, id egestas eros tempus. Pellentesque venenatis, justo a malesuada sollicitudin, diam sem ornare nisl, id finibus dolor lorem efficitur ligula. Suspendisse hendrerit leo vel justo fermentum, in dapibus lorem gravida. In eu lorem sollicitudin, interdum elit vel, condimentum augue. Praesent in ultricies arcu. Etiam maximus pretium elit, sed accumsan justo luctus vel. Praesent aliquam finibus ligula eget mattis.
                                            </p>
                                            <p style="text-indent: 45px;" align="justify">
                                                Nam ullamcorper lobortis condimentum. Etiam rutrum ex et sagittis lacinia. Curabitur pretium vulputate nunc. Morbi iaculis sodales lorem id sollicitudin. Mauris magna nisl, iaculis et vulputate a, varius et dolor. Integer nisl augue, imperdiet a massa vitae, lobortis pharetra velit. Curabitur efficitur consequat est, ullamcorper interdum risus feugiat at. Integer fringilla viverra elit consectetur tincidunt. Etiam pellentesque, diam in egestas pellentesque, eros lacus lacinia erat, a euismod ante augue in diam. Sed accumsan eu orci id tempus. Maecenas sit amet tortor consequat, vulputate est vulputate, suscipit purus. Mauris varius a arcu dictum venenatis. Suspendisse ut aliquet lectus. Nulla facilisi. Aenean ac elit ac sapien eleifend luctus. Curabitur hendrerit egestas pharetra.
                                            </p>
                                            <div class="kab">Aplikasi Terkait</div>
                                            <a href="#" type="button" class="btn btn-primary btn-sm btn-block">Nama Aplikasi 1</a>
                                            <a href="#" type="button" class="btn btn-warning btn-sm btn-block">Nama Aplikasi 2</a>
                                            <a href="#" type="button" class="btn btn-danger btn-sm btn-block">Nama Aplikasi 3</a>
                                            <a href="#" type="button" class="btn btn-secondary btn-sm btn-block">Nama Aplikasi 4</a>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                            <!-- End Modal Living -->

                            <div class="col-md-4">
                                <a href="">
                                <!-- <a href="" data-toggle="modal" data-target="#Society"> -->
                                    <div class="shadow p-3 mb-5 bg-white rounded">
                                        <div class="text-center">
                                            <div class="card-body">
                                                <!-- KONTEN -->
                                                <img src="assets/img/dimension/society.png" class="img-fluid" alt="Smart Society" width="200px">
                                                <div class="btn smart">Smart Society</div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <!-- Modal Society -->
                            <!-- <div class="modal fade" id="Society" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content bg-light">
                                        <div class="modal-header">
                                        <div class="dimensi" id="exampleModalLongTitle">Smart Society</div>
                                        <a type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </a>
                                        </div>
                                        <div class="modal-body">
                                            <center>
                                                <img src="assets/img/bg/tapin.jpg" alt="..." class="img-thumbnail" width="100%">
                                            </center>
                                            <p style="text-indent: 45px;" align="justify">
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam eget molestie nisi, nec posuere purus. Suspendisse bibendum enim sed purus pretium, id egestas eros tempus. Pellentesque venenatis, justo a malesuada sollicitudin, diam sem ornare nisl, id finibus dolor lorem efficitur ligula. Suspendisse hendrerit leo vel justo fermentum, in dapibus lorem gravida. In eu lorem sollicitudin, interdum elit vel, condimentum augue. Praesent in ultricies arcu. Etiam maximus pretium elit, sed accumsan justo luctus vel. Praesent aliquam finibus ligula eget mattis.
                                            </p>
                                            <p style="text-indent: 45px;" align="justify">
                                                Nam ullamcorper lobortis condimentum. Etiam rutrum ex et sagittis lacinia. Curabitur pretium vulputate nunc. Morbi iaculis sodales lorem id sollicitudin. Mauris magna nisl, iaculis et vulputate a, varius et dolor. Integer nisl augue, imperdiet a massa vitae, lobortis pharetra velit. Curabitur efficitur consequat est, ullamcorper interdum risus feugiat at. Integer fringilla viverra elit consectetur tincidunt. Etiam pellentesque, diam in egestas pellentesque, eros lacus lacinia erat, a euismod ante augue in diam. Sed accumsan eu orci id tempus. Maecenas sit amet tortor consequat, vulputate est vulputate, suscipit purus. Mauris varius a arcu dictum venenatis. Suspendisse ut aliquet lectus. Nulla facilisi. Aenean ac elit ac sapien eleifend luctus. Curabitur hendrerit egestas pharetra.
                                            </p>
                                            <div class="kab">Aplikasi Terkait</div>
                                            <a href="#" type="button" class="btn btn-primary btn-sm btn-block">Nama Aplikasi 1</a>
                                            <a href="#" type="button" class="btn btn-warning btn-sm btn-block">Nama Aplikasi 2</a>
                                            <a href="#" type="button" class="btn btn-danger btn-sm btn-block">Nama Aplikasi 3</a>
                                            <a href="#" type="button" class="btn btn-secondary btn-sm btn-block">Nama Aplikasi 4</a>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                            <!-- End Modal Society -->
                        </div>

                        <!-- BUTTON SELENGKAPNYA -->
                        <!-- <div class="text-center">
                            <a href="#" type="button" class="btn btn-outline-primary">Baca Selengkapnya</a>
                        </div> -->
                        <!-- END BUTTON -->

                    </div>
                </div>
                </div>
            </div>
        </div>
        </div>

        <div id="Dokumentasi">
        <div data-aos="fade-up" data-aos-anchor-placement="center-bottom" data-aos-duration="2000">
        <div class="shadow p-3 mb-3 bg-light rounded mt-5">
            <div class="card-body">
                <div class="text-center">
                    <!-- TITLE -->
                    <div class="text-center">
                        <div class="sc">Dokumentasi</div>
                        <div class="kab">FOCUS GROUP DISCUSSION</div>
                    </div>
                    <!-- END TITLE -->    
                </div>
            </div>
        </div> 
        </div> 

        <div class="row mt-4">
            <div class="col-md-6">
                <div data-aos="fade-right" data-aos-duration="2000">
                <a href="#">
                    <img src="assets/img/bg/tapin.jpg" alt="FGD 1" class="img-thumbnail" width="100%">
                </a>
                </div>
            </div>
            <div class="col-md-6">
                <div data-aos="fade-left" data-aos-duration="2000">
                <a href="#">
                    <img src="assets/img/bg/tapin.jpg" alt="FGD 2" class="img-thumbnail" width="100%">
                </a>
                </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-6">
                <div data-aos="fade-right" data-aos-duration="2000">
                <a href="#">
                    <img src="assets/img/bg/tapin.jpg" alt="FGD 3" class="img-thumbnail" width="100%">
                </a>
                </div>
            </div>
            <div class="col-md-6">
                <div data-aos="fade-left" data-aos-duration="2000">
                <a href="#">
                    <img src="assets/img/bg/tapin.jpg" alt="FGD 4" class="img-thumbnail" width="100%">
                </a>
                </div>
            </div>
        </div>
        </div>

        <div id="PortalPemkab">
        <div data-aos="fade-up" data-aos-anchor-placement="center-bottom" data-aos-duration="2000">
        <div class="shadow p-3 mb-3 bg-light rounded mt-5">
            <div class="card-body">
                <div class="text-center">
                    <!-- TITLE -->
                    <div class="text-center">
                        <div class="sc">Portal Pemkab</div>
                    </div>
                    <!-- END TITLE -->    
                </div>
            </div>
        </div>
        </div>
        <center>
            <div data-aos="flip-up" data-aos-duration="2500">
            <div class="col-md-10">
                <a href="https://portal.tapinkab.go.id/" target="_blank">
                    <img src="assets/img/icon/Portal TapinKab.PNG" alt="Portal Tapin" class="img-thumbnail" width="100%" title="Portal Pemkab">
                </a>
            </div>
            </div>
        </center>
        </div>

        <div id="E-Star">
        <div data-aos="fade-up" data-aos-anchor-placement="center-bottom" data-aos-duration="2000">
        <div class="shadow p-3 mb-3 bg-light rounded mt-5">
            <div class="card-body">
                <div class="text-center">
                    <!-- TITLE -->
                    <div class="text-center">
                        <div class="sc">E-Star Litbang Tapin</div>
                        <div class="kab">ELECTRONIC SUSTAINABLE TAPIN RESEARCH - PENELITIAN DAN PENGEMBANGAN TAPIN</div>
                    </div>
                    <!-- END TITLE -->    
                </div>
            </div>
        </div>
        </div>
        <center>
            <div data-aos="flip-up" data-aos-duration="2500">
            <div class="col-md-10">
                <a href="http://e-starlitbang.tapinkab.go.id/" target="_blank">
                    <img src="assets/img/icon/E-Star.PNG" alt="E-Star" class="img-thumbnail" width="100%" title="E-Star">
                </a>
            </div>
            </div>
        </center>
        </div>

    </div>
    <!-- End Container -->

    <!-- Footer -->
    <div class="card-footer mt-4 bg-light">
        <div class="container text-center">
            <img src="assets/img/icon/sc.png" style="width: 120px;">
            <p class="small text-muted">&copy; 2022. All rights reserved.</p>
        </div>
    </div>
    <!-- End Footer -->

    <!-- Script -->
    <script type="text/javascript" src="assets/js/script.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <!-- End Script -->
</body>
</html>