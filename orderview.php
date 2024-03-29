<?php
/**
 * Created by IntelliJ IDEA.
 * User: ACER
 * Date: 6/26/2019
 * Time: 3:59 PM
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Item</title>
    <link rel="stylesheet"href="css/bootstrap.css">
    <link rel="stylesheet"href="js/bootstrap.js">
    <link rel="stylesheet" href="css/myStyke.css"/>
    <script src="js/bootstrap.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
          integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <style>
        @import url('https://fonts.googleapis.com/css?family=Anton&display=swap');
        #slide{
            height: 670px;
            width: 20%;
            background-color: #23272b;
        }
    </style>
</head>
<body>
<div class="row">
    <div class="col-md-12">
        <div class="row" style="background-color: #17a2b8">
            <div class="col-md-4" style="font-size: 40px;font-family: 'Anton', sans-serif;"><i class="fas fa-smile-beam"style="padding:15px"></i>POS System</div>
            <div class="col-md-8"><a class="nav-link active text-dark font-weight-bold" href="index.php" style="left:-200px;position: absolute;top: 10px">Dashboard</a></div>
        </div>
    </div>
    <div class="row" id="slide">
        <div class="col-md-4">
            <div class="row">
                <div class="col-md-12">
                    <ul class="nav flex-column">
                        <li class="nav-item" id="nav1">
                            <a class="nav-link active" href="customer.php"><img src="images/Customer_48px.png" height="48" width="48"/>Customer</a>
                        </li>
                        <li class="nav-item" style="font-size: 35px">
                            <a class="nav-link" href="item.php"><img src="images/Ingredients_48px.png" height="48" width="48"/>Item</a>
                        </li>
                        <li class="nav-item" style="font-size: 35px">
                            <a class="nav-link" href="invoice.php"><img src="images/Purchase Order_48px.png" height="48" width="48"/>Order</a>
                        </li>
                        <li class="nav-item" style="font-size: 35px">
                            <a class="nav-link" href="orderview.php"><img src="images/Supplier_50px.png" height="50" width="50"/>Order View</a>
                        </li>
                    </ul>

                </div>
            </div>

        </div>

    </div>
    <div class="col-md-8">
        <div class="col-md-12">
            <table class="table table-dark" style="top: 50px;position: absolute;left: 80px">
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Item</th>
                    <th scope="col">Addreess</th>
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
                <tr>
                    <th scope="row">3</th>
                    <td>Larry</td>
                    <td>the Bird</td>
                    <td>@twitter</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Larry</td>
                    <td>the Bird</td>
                    <td>@twitter</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Larry</td>
                    <td>the Bird</td>
                    <td>@twitter</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Larry</td>
                    <td>the Bird</td>
                    <td>@twitter</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Larry</td>
                    <td>the Bird</td>
                    <td>@twitter</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Larry</td>
                    <td>the Bird</td>
                    <td>@twitter</td>
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
</body>
</html>
