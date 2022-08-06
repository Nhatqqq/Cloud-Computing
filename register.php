﻿<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title></title>
    <style type="text/css">
        .wrapper {
            width: 1000px;
            margin: auto;
        }

        .header {
            height: 55px;
            border: 1px solid black;
            background-color: darkseagreen;
        }

            .header img {
                width: 125px;
                height: 55px;
                float: left;
            }

        .banner img{
            width:1000px;
            height:300px;
        }

        .form-search {
            padding-top: 10px;
        }

            .form-search input[type=text] {
                width: 300px;
                height: 30px;
            }

            .form-search input[type=submit] {
                height: 30px;
            }

        .menu {
            height: 30px;
            background-color: darkcyan;
        }

            .menu ul li {
                list-style: none;
                text-align: center;
                display: inline-block;
            }

                .menu ul li a {
                    text-decoration: none;
                    font-size: 18px;
                    margin: 30px;
                    padding: 5px;
                    text-transform: uppercase;
                    color: white;
                }

        .content {
            height: 1000px;
        }

        .left {
            width: 20%;
            background-color: darkslateblue;
            float: left;
            height: flex;
        }

            .left > p {
                background-color: white;
                font-size: 22px;
                font-family: Arial;
                text-align: center;
            }

        .category ul li {
            list-style: none;
        }

            .category ul li a {
                color: white;
                text-align: center;
                font-size: 20px;
                text-decoration: none;
            }

        .category a:hover {
            text-decoration: underline;
        }

        .brand ul li {
            list-style: none;
        }

            .brand ul li a {
                color: white;
                text-align: center;
                font-size: 20px;
                text-decoration: none;
            }

        .brand a:hover {
            text-decoration: underline;
        }

        .right {
            width: 80%;
            background-color: darkturquoise;
            float: right;
            display: flex;
        }

            .right > h3 {
                text-align: center;
                font-size: 20px;
            }

        .single-product {
            margin-left: 30px;
            margin-right: 30px;
            float: left;
        }

            .single-product img {
                border: 2px solid black;
            }

        .footer tr td a{
            text-decoration:none;
        }

        .welcom p{
            text-align:right;
        }
    </style>
</head>
<body style="background-color:black">
    <div class="wrapper">
        <div class="header">
            <img src="https://i.pinimg.com/originals/4e/f7/bc/4ef7bcae3515ae56fcc5bc2b19f4c27e.jpg" />
            <a href="">
              <div class="cart">
                  <img style="float:right" id="cart" src="X/cart.png" />
              </div>
            </a>
            <div class="form-search">
                <form method="GET" action="search.php">
                    <input type="text" name="user_query" placeholder="Search" />
                    <input type="submit" name="search" value="Search" />
                </form>
            </div>
        </div>
        <?php
            session_start();
            if($_SESSION['username'])
            {
                $u= $_SESSION['username'];
        ?>
            <div class="welcom">
                <p>Welcom, <?php echo $u ?></p>
            </div>
        <?php
            }
        ?>
        <div class="banner">
            <img src="https://kidsland.vn/media/catalog/category/Lego-banner.jpg" />
        </div>
        <div class="menu">
            <ul>
                <li><a href="index.php" target="_blank">Homepage</a></li>
                <li><a href="#" target="_blank">Information</a></li>
                <li><a href="#" target="_blank">Contact</a></li>
                <li><a href="login.php" target="_blank">Login</a></li>
                <li><a href="register.php" target="_blank">Register</a></li>
            </ul>
        </div>
        <div class="content">
            <div class="left">
                <p>Function</p>
                <div class="category">
                    <ul>
                        <li><a href="addproduct.php" target="_blank">Add Product</a></li>
                    </ul>
                </div>
                <p>Product</p>
                <div class="category">
                    <ul>
                        <li><a href="">Dolls</a></li>
                        <li><a href=""target="_blank">LEGO</a></li>
                        <li><a href="">Puzzles</a></li>
                    </ul>
                </div>
                <p>Brand</p>
                <div class="brand">
                    <ul>
                        <li><a href="">Lego</a></li>
                        <li><a href="">Bandai Namco</a></li>
                        <li><a href="">Barbie</a></li>
                    </ul>
                </div>
            </div>
            <div class="right">
                <div class="product">
                    <form method="POST">
                        <table align="left">
                            <tr>
                                <td><b>Register:</b></td>
                            </tr>
                            <tr>
                                <td><br /></td>
                            </tr>
                            <tr>
                                <td>
                                    Already have account?
                                    <a href="login.php" target="_blank">Login Now.</a>
                                </td>
                            </tr>
                            <tr>
                                <td><br /></td>
                            </tr>
                            <tr>
                                <td><b>User ID:</b></td>
                                <td><input type="text" name="user_id" size="50" placeholder="User ID" /></td>
                            </tr>
                            <tr>
                                <td><b>Username:</b></td>
                                <td><input type="text" name="username" size="50" placeholder="Username" /></td>
                            </tr>
                            <tr>
                                <td><b>Password:</b></td>
                                <td><input type="password" name="password" size="50" placeholder="Password" /></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><input type="submit" name="register" value="Register" style="background-color:deepskyblue; color:snow; width:80px; height:30px" /></td>
                            </tr>
                        </table>
                    </form>

                    <?php
                        $connect = mysqli_connect("3.132.234.157","quanglxn","123@123a","quanglxn");
                        if($connect)
                        {
                            
                        }
                        else
                        {
                            echo "Connect failed!";
                        }
                        if(isset($_POST["register"]))
                        {
                            $user_id= $_POST['user_id'];
                            $username= $_POST['username'];
                            $password= $_POST['password'];
                            $sql= "insert into user values ('$user_id', '$username', '$password')";
                            $result= mysqli_query($connect, $sql);
                            if($result)
                            {
                                echo"<script>alert('Register successfully!')</script>";
                                echo"<script> window.open('login.php', '_self')</script>";
                            }
                            else
                            {
                                echo"<script>alert('Register failed!')</script>";
                            }
                        }
                    ?>
                    
                </div>
            </div>
        </div>
        <div class="footer" style="background-color:aquamarine">
            <table style="width:500px">
                <tr>
                    <th>LY Sponcer</th>
                    <th>Someone Brand</th>
                    <th>NF</th>
                </tr>
            </table>
        </div>
    </div>
</body>
</html>