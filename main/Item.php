<?php
/**
 * Created by IntelliJ IDEA.
 * User: User
 * Date: 7/9/2019
 * Time: 2:30 PM
 */

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Item</title>
    <script src="https://kit.fontawesome.com/7802c5be07.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
          integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">


    <link rel="stylesheet" href="../bootstarp/css/bootstrap.css">
    <link rel="stylesheet" href="../bootstarp/css/bootstrap-grid.css">
    <link rel="stylesheet" href="../bootstarp/css/bootstrap-reboot.css">
    <link rel="stylesheet" href="../bootstarp/js/bootstrap.js">
    <link rel="stylesheet" href="../bootstarp/js/bootstrap.bundle.js">
    <link rel="stylesheet" href="../css/Dashbord.css">

    <link rel="stylesheet" type="text/css" href="../semantic%20ui/semantic.min.css">
    <script
        src="https://code.jquery.com/jquery-3.1.1.min.js"
        integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
        crossorigin="anonymous"></script>
    <script src="../semantic%20ui/semantic.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Ramabhadra&display=swap" rel="stylesheet">

    <!--///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Simple Sidebar - Start Bootstrap Template</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/simple-sidebar.css" rel="stylesheet">


    <!--///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

</head>


<body>

<header>


</header>

<main>

    <div class="d-flex" id="wrapper">

        <!-- Sidebar -->
        <div class="bg-light border-right" id="sidebar-wrapper">
            <div class="sidebar-heading">Pos System</div>


            <div class="list-group list-group-flush">


                <a href="Dashbord.php" class="list-group-item list-group-item-action bg-light"> <i class="fas fa-tachometer-alt" style="margin-right: 10px"></i>   Dashboard</a>
                <a href="Customer.php" class="list-group-item list-group-item-action bg-light"> <i class="fas fa-user" style="margin-right: 10px"></i>Customers</a>
                <a href="Item.php" class="list-group-item list-group-item-action bg-light"> <i class="fas fa-shopping-cart" style="margin-right: 10px"></i> Items</a>
                <a href="Order.php" class="list-group-item list-group-item-action bg-light"> <i class="fas fa-archive" style="margin-right: 10px "></i> Orders</a>
                <hr>
                <a href="#" class="list-group-item list-group-item-action bg-light">Profile</a>
                <a href="#" class="list-group-item list-group-item-action bg-light">Settings</a>
                <a href="../index.php" class="list-group-item list-group-item-action bg-light">Logout</a>
            </div>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">

            <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
                <button class="btn btn-primary" id="menu-toggle"><i class="fas fa-bars"></i> </button>

                <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Settings</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Messages
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">All Messages</a>
                                <a class="dropdown-item" href="#">Sent Messages</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">New Messages</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
            <!--///////////////////////////////////////////////////////// body - bar 01//////////////////////////////////////////////////////////////////////-->
            <div class="container-fluid">


                <div class="row">
                    <div class="col-md-10">
                        <h1 class="mt-4">Item </h1>

                    </div>

                    <!--/////////////////////////////////////////////////////////// button 111 add customer////////////////////////////////////////////////////////-->
                    <div class="col-md-2">


                        <!--Trigger/Open The Modal-->
                        <!--<button id="myBtn">Open Modal</button>-->

                        <button type="button" id="myBtn" class="btn btn-primary btn-lg" style="margin: 9px">
                            <small> Add Item </small>
                        </button>


                        <!-- The Modal -->
                        <div id="myModal" class="modal">

                            <!-- Modal content -->
                            <div class="modal-content" style="width: 1000px;margin-top: 10px">
                                <span class="close">&times;</span>
                                <!--/////////////////////////////////////////////item ////////////////////////////////////////////////-->

                                <p style="font-family: 'Ramabhadra', sans-serif;">Item Information</p>

                                <div class="row">
                                    <div class="col-md-1">

                                        <div class="main2box">


                                            <table style="position: relative ;right: -31px; bottom: 12px">

                                                <tr>

                                                    <td>
                                                        <h6>Item ID :</h6>
                                                        <input class="form-control" type="text" placeholder="Default input"
                                                               style="width:465px ;">

                                                    </td>

                                                    <br>

                                                    <td>
                                                        <h6> Name :</h6>
                                                        <input class="form-control" type="text" placeholder="Default input"
                                                               style="width:465px ; margin-left: 8px">

                                                    </td>

                                                </tr>

                                                <br>

                                                <tr>

                                                    <td>
                                                        <h6>QTY :</h6>
                                                        <input class="form-control" type="text" placeholder="Default input">

                                                    </td>

                                                    <td>
                                                        <h6>Cost Price :</h6>
                                                        <input class="form-control" type="text" placeholder="Default input"
                                                               style="width:465px ; margin-left: 8px">

                                                    </td>

                                                </tr>

                                                <br>


                                                <tr>

                                                    <td>
                                                        <h6>Selling Price :</h6>
                                                        <input class="form-control" type="text" placeholder="Default input">

                                                    </td>


                                                    <!--<td>-->
                                                    <!--<h6>Tel No :</h6>-->
                                                    <!--<input class="form-control" type="text" placeholder="Default input"-->
                                                    <!--style="width:465px ; margin-left: 8px">-->

                                                    <!--</td>-->


                                                </tr>




                                            </table>

                                            <!--////////////////////////////////////////////////////// item end///////////////////////-->

                                        </div>

                                        <a href="Item.php">  <button type="button" class="btn btn-primary btn-lg" style="width: 136px"> Save </button></a>

                                    </div>

                                    <!--/////////////////////////////////////////////////////////////////////////////-->


                                </div>


                            </div>

                        </div>


                        <!--/////////////////////////////////////////////////////////button /////////////////////////////////////////////////////////////-->


                    </div>

                </div>


                <!--/////////////////////////////////////////////////end ////// body  ++++ table/////////////////////////////////////////////////////////

















                </div>


                /////////////////////////////////////////////////end ////// body  ++++ table///////////////////////////////////////////////////////////////////-->



                <table class="table">
                    <thead class="thead-dark">
                    <tr>
                        <th scope="col">Coad</th>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">QTY</th>
                        <th scope="col">Cost Price</th>
                        <th scope="col">Selling Price</th>

                        <!--<th scope="col">Tel NO :</th>-->
                        <th scope="col">Select :</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Lux</td>
                        <td> R.s 50</td>
                        <td>50</td>
                        <td style="border-top: 1px solid #dee2e6  ">Galle</td>
                        <td>0774570747</td>
                        <td>
                            <div class="form-check">
                                <input class="form-check-input position-static" type="radio" name="blankRadio" id="blankRadio1"
                                       value="option1" aria-label="...">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Lux</td>
                        <td> R.s 50</td>
                        <td>50</td>
                        <td style="border-top: 1px solid #dee2e6  ">Galle</td>
                        <td>0774570747</td>
                        <td>
                            <div class="form-check">
                                <input class="form-check-input position-static" type="radio" name="blankRadio" id="blankRadio1"
                                       value="option1" aria-label="...">
                            </div>
                        </td>
                    <tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Lux</td>
                        <td> R.s 50</td>
                        <td>50</td>
                        <td style="border-top: 1px solid #dee2e6  ">Galle</td>
                        <td>0774570747</td>
                        <td>
                            <div class="form-check">
                                <input class="form-check-input position-static" type="radio" name="blankRadio" id="blankRadio1"
                                       value="option1" aria-label="...">
                            </div>
                        </td>
                    </tr>


                    <tr>
                        <th scope="row">4</th>
                        <td>Lux</td>
                        <td> R.s 50</td>
                        <td>50</td>
                        <td style="border-top: 1px solid #dee2e6  ">Galle</td>
                        <td>0774570747</td>
                        <td>
                            <div class="form-check">
                                <input class="form-check-input position-static" type="radio" name="blankRadio" id="blankRadio1"
                                       value="option1" aria-label="...">
                            </div>
                        </td>
                    </tr>


                    </tbody>



                </table>


                <div class="row">
                    <div class="col-md-4" style="margin-top: 10px">


                        <button type="button" class="btn btn-success" style="width: 70px">Edit </button>
                        <button type="button" class="btn btn-danger" style="width: 70px">Delete</button>
                        <button type="button" class="btn btn-warning" style="width: 70px">Reflash</button>



                    </div>

                </div>


                <!--/////////////////////////////////////////////////////////// table end//////////////////////////////////////////////////////-->


            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->


</main>

<footer>
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script src="../js/jquery/jquery.min.js"></script>
    <script src="../bootstarp/js/bootstrap.bundle.min.js"></script>

    <!-- Menu Toggle Script -->
    <script>
        $("#menu-toggle").click(function (e) {
            e.preventDefault();
            $("#wrapper").toggleClass("toggled");
        });
    </script>

    <script src="../js/Customer.js">

    </script>

</footer>

</body>
</html>
