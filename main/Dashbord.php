<?php
/**
 * Created by IntelliJ IDEA.
 * User: User
 * Date: 7/9/2019
 * Time: 2:29 PM
 */

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashbord</title>
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




    <!--///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> </title>

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


                <a href="Dashbord.php" class="list-group-item list-group-item-action bg-light"> <i
                        class="fas fa-tachometer-alt" style="margin-right: 10px"></i> Dashboard</a>
                <a href="Customer.php" class="list-group-item list-group-item-action bg-light"> <i class="fas fa-user"
                                                                                                    style="margin-right: 10px"></i>Customers</a>
                <a href="Item.php" class="list-group-item list-group-item-action bg-light"> <i
                        class="fas fa-shopping-cart" style="margin-right: 10px"></i> Items</a>
                <a href="Order.php" class="list-group-item list-group-item-action bg-light"> <i class="fas fa-archive"
                                                                                                 style="margin-right: 10px "></i>
                    Orders</a>
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
                <button class="btn btn-primary" id="menu-toggle"><i class="fas fa-bars"></i></button>

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
            <!--///////////////////////////////////////////////////////// body //////////////////////////////////////////////////////////////////////-->
            <div class="container-fluid">


                <h1 class="mt-4"></h1>


                <div class="row">

                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <!--<a href="https://demo.phppointofsale.com/index.php/sales">-->
                        <div class="dashboard-stats">
                            <div class="left">
                                <h3 class="flatBluec">11</h3>
                                <h4>Total Sales</h4>
                            </div>
                            <div class="right flatBlue">
                                <i class="fas fa-balance-scale" style="position: relative ;top: 24px"></i>
                            </div>
                        </div>
                        <!--</a>-->
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">

                        <div class="dashboard-stats" id="totalCustomers">
                            <div class="left">
                                <h3 class="flatGreenc">22</h3>
                                <h4>Total Customers</h4>
                            </div>
                            <div class="right flatGreen">
                                <i class="fas fa-street-view" style="position: relative ;top: 24px"></i>
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">

                        <div class="dashboard-stats">
                            <div class="left">
                                <h3 class="flatRedc">11</h3>
                                <h4>Total Items</h4>
                            </div>
                            <div class="right flatRed">
                                <i class="fas fa-cart-plus" style="position: relative ;top: 24px"></i>
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">

                        <div class="dashboard-stats">
                            <div class="left">
                                <h3 class="flatOrangec">0</h3>
                                <h4>Total Item Kits</h4>
                            </div>
                            <div class="right flatOrange">
                                <i class="fab fa-uikit" style="position: relative ;top: 24px"></i>
                            </div>
                        </div>
                        </a>
                    </div>
                </div>


                <div class="row">

                    <div class="col-md-6">


                        <div id="piechart"></div>


                        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

                        <script type="text/javascript">

                            google.charts.load('current', {'packages':['corechart']});
                            google.charts.setOnLoadCallback(drawChart);


                            function drawChart() {
                                var data = google.visualization.arrayToDataTable([
                                    ['Task', 'Hours per Day'],
                                    ['Total Sales', 8],
                                    ['Total items', 2],
                                    ['Total items kit', 4],
                                    ['Total customer', 2],
                                    // ['Sleep', 8]
                                ]);


                                var options = {'title':' Average Day Details', 'width':550, 'height':400};


                                var chart = new google.visualization.PieChart(document.getElementById('piechart'));
                                chart.draw(data, options);
                            }
                        </script>

                    </div>


                    <div class="col-md-6">

                        <div class="ui center aligned basic segment">
                            <div class="ui left icon action input">
                                <i class="search icon"></i>
                                <input type="text" placeholder="Order ">
                                <div class="ui blue submit button">Search</div>
                            </div>
                            <div class="ui horizontal divider">
                                **
                            </div>



                            <img class="disabled medium ui image" src="../images/table.gif " style="width:auto ">


                        </div>

                    </div>


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

</footer>

</body>
</html>
