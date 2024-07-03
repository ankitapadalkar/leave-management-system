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
              text-align: justify;
        }
        .sidebar a {
            display: block;
            color: #fff;
            text-decoration: none;
            padding: 10px;
            margin-bottom: 10px;
            transition: background-color 0.3s;
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
                                <button class="btn btn-primary"><h5><img src="../assets/images/logo.png" width="40" height="40"> Leave- System</h5></button>
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
                    <div class="sidebar"><br>
                        <a href="dashboard.php">Dashboard</a>
                        <a href="department.php">Departments</a>
                        <a href="leave-type.php">Leave Type</a>
                        <a href="staff-management.php">Staff Management</a>
                        <a href="leave-report.php">Leave Report</a>
                        <a href="role-management.php">Role Management</a>
                    </div>
                    <!-- Main Content -->
                    <div class="content">
                    </div>
            </section>
        </section>
    </body>
</html>









