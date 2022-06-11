<!DOCTYPE html>

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
            display: inline-flex;
        }

            .right > h3 {
                text-align: center;
                font-size: 20px;
            }

    .product > p {
        font-size: 25px;
        margin-left: 20px;
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
                    <p>Seach Result</p>
                    <?php
                        $connect = mysqli_connect("3.132.234.157","quanglxn","123@123a","quanglxn");
                        if($connect)
                        {
                            
                        }
                        else
                        {
                            echo "Connect Failed!";
                        }
                        if (isset($_GET['search']))
                        {
                            $search= $_GET['user_query'];
                        }
                    ?>
                    <h3><?php $search ?></h3>
                    <?php 
                        $sql= "select * from product where product_name like '%{$search}%'";
                        $result= mysqli_query($connect, $sql);
                        while($row_product= mysqli_fetch_array($result))
                        {
                            $product_id= $row_product['product_id'];
                            $product_name= $row_product['product_name'];
                            $product_price= $row_product['product_price'];
                            $product_image= $row_product['product_img'];
                    ?>
                                <div class="single-product">
                                    <h3><?php echo $product_name; ?></h3>
                                    <img src="X/<?php echo $product_image; ?>" width="180px" height="180px" />
                                    <p><b>Price: <?php echo $product_price; ?></b></p>
                                    <a href="" style="color:snow; text-decoration:none">Detail</a>
                                </div>
                    <?php
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