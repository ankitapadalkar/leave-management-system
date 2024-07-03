<?php  include '../include/db-connection.php'?>
<?php
    $server_name = $_SERVER['SERVER_NAME'];
    $base = "http://".$server_name."/Leave-Management-System";
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Webpage</title>
        <style>
            .webpage{
                font-family: "montserrat", sans-serif;
                margin-top:0px;
                padding: 0;
                box-sizing: border-box;
                background-size: cover;
                background-repeat: no-repeat;
            }
            .blue-color{
                background-color: #0099FF;
                color: white;
            }
            .blue-color{
                color: white;
            }
            .button2 {
                background-color: #008CBA;
            }
        .sidebar {
            width: 200px;
            height: 100vh;
            background-color: #0066FF;
            color: #fff;
            box-sizing: border-box;
            position: fixed;
        }
        .content {
            flex: 1;
            padding: 20px;
            box-sizing: border-box;
            margin-left: 200px;
            text-align: center;
        }
        .sidebar a {
            display: block;
            color: #fff;
            text-decoration: none;
            padding: 10px;
            margin-bottom: 10px;
            transition: background-color 0.3s;
        }
        table,td{
            border:2px solid;
            border-collapse:collapse
        }
        table,td{
            text-align:center
        }
        .td1{
            border:2px solid;
            border-collapse:collapse
        }
        .td2{
            border:2px solid;
            border-collapse:collapse
        }
        .td3{
            border:2px solid;
            border-collapse:collapse
        }
        .td4{
            border:2px solid;
            border-collapse:collapse
        }
        /* Change background color on hover */
        .sidebar a:hover {
            background-color: blue;
        }
        </style>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </head>
    <body>
        <section class="website">
            <section class="webpage">
                    <section class="blue-color">
                    <nav>
                        <div class="row">
                            <div class="col-lg-3 col-sm-12">
                                <button class="btn btn-primary"><h5><img src="../assets/images/logo.png" width="40" height="40"> Leave - System</h5></button>
                            </div>
                            <div class="col-lg-6 col-sm-12">
                            <h3>Online Leave Management System - ADMIN</h3>
                            </div>
                            <div class="col-lg-3 col-sm-12" align="center">
                            <button2><h5><img src="../assets/images/admin2.png" width="50" height="40"> Admin</h5></button>
                            </div>
                        </div>
                    </nav>
                    </section>
                    <!-- Sidebar -->
                    <div class="sidebar"><br><br><br><br>
                        <h4>Staff Management</h4>
                    </div>
                    <!-- Main Content -->
                    <div class="content">
                        <div class="row">
                            <table>
                                <tr>
                                    <td colspan="4"><br></td>
                                </tr><br><br>
                                <tr>
                                    <td></td>
                                    <td class="td1">Search By Name</td>
                                    <td></td>
                                    <td class="td2">Search By Department</td>
                                    <td></td>
                                    <td class="td3">Search</td>
                                    <td></td>
                                    <td class="td4">Clear</td>
                                    <td></td>
                                </tr><br>
                                <tr>
                                    <td colspan="4"><br></td>
                                </tr><br>
                            </table>
                        </div><br><br>
                        <div class="row">
                            <table width="50%">
                                <tr>
                                    <td colspan="4"><br></td>
                                </tr><br><br>
                                <tr>
                                    <td></td>
                                    <td class="td1">Add Staff +</td>
                                    <td></td>
                                    <td class="td2">Search Box</td>
                                    <td></td>
                                </tr><br>
                                <tr>
                                    <td colspan="4"><br></td>
                                </tr><br>
                            <table>
                                <tr>
                                    <td class="td1">Full Name</td>
                                    <td class="td2">Email</td>
                                    <td class="td3">Department</td>
                                    <td class="td4">Action</td>
                                </tr>
                                <tr>
                                    <td class="td1"><br></td>
                                    <td class="td2"><br></td>
                                    <td class="td3"><br></td>
                                    <td class="td4"><br></td>
                                </tr>
                                <tr>
                                    <td class="td1"><br></td>
                                    <td class="td2"><br></td>
                                    <td class="td3"><br></td>
                                    <td class="td4"><br></td>
                                </tr>
                                <tr>
                                    <td class="td1"><br></td>
                                    <td class="td2"><br></td>
                                    <td class="td3"><br></td>
                                    <td class="td4"><br></td>
                                </tr>
                                <tr>
                                    <td class="td1"><br></td>
                                    <td class="td2"><br></td>
                                    <td class="td3"><br></td>
                                    <td class="td4"><br></td>
                                </tr>
                            </table>
                            </table>
                        </div>
                    </div>
            </section>
        </section>
    </body>
</html>









