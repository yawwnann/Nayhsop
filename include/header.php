<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>WEB-PROJECT</title>
    <link rel="stylesheet" href="../navbar/home.css" />
    <script src="navbar.js"></script>
    <link rel="shortcut icon" href="../image/logoweb.png" type="image/x-icon" />
    <!-- link import icon & font -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400&family=Poppins:wght@200;300;400;600;700&display=swap"
        rel="stylesheet" />
    <style>
        @font-face {
            font-family: "Minecraft";
            /*memberikan nama bebas untuk font*/
            src: url("../font/Minecraft.ttf");
            /*memanggil file font eksternalnya di folder nexa*/
        }

        * {
            text-decoration: none;
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            font-family: "Poppins", sans-serif;
            list-style: none;
        }

        :root {
            background-color: #222327;
            color: #fff;
        }

        body {
            min-height: auto;
            /* background: #ffffff; */
            background: #419583;

            color: var(#fff);
            display: flex;
            flex-direction: column;
            font-family: "Poppins", sans-serif;
        }

        .container-header {
            position: relative;
            transition: 0.5s ease-in;
        }

        .mini-header {
            position: fixed;
            top: 0;
            right: 0;
            left: 0;
            width: 100%;
            height: auto;
            z-index: 200;
            display: flex;
            justify-content: space-between;
            background-color: #dedede;
            color: black;
            align-items: center;
            padding: 10px 30px;
        }

        .mini-header img {
            width: 20px;
            height: 20px;
        }

        .mini-menu ol {
            display: flex;
        }

        .mini-menu ol li a {
            color: black;
            padding: 0 10px;
        }

        .mini-menu ol li a:hover {
            color: #8b8b8b;
        }

        li a .dropdown {
            display: inline-block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            z-index: 999;
            text-decoration: none;
        }

        li a:hover,
        .dropdown:hover {
            z-index: 999;
            color: #eeeded;
        }

        .dropdown:hover ul.submenu {
            display: block;
            z-index: 999;
        }

        ul.submenu {
            color: black;
            display: none;

            width: 248px;
            top: 30px;
            right: 80px;
            height: auto;
            position: absolute;
            background-color: #fff;
            padding: 20px;
            z-index: 999;
            border-radius: 3px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        .submenu li a {
            margin: 10px;
            z-index: 999;
        }

        ul li .masuk-daftar {
            display: inline-block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            z-index: 999;
            text-decoration: none;
        }

        li a:hover,
        .masuk-daftar:hover {
            z-index: 999;
            color: #eeeded;
        }

        .masuk-daftar:hover ul.menu-masuk-daftar {
            display: block;
            z-index: 999;
        }

        ul.menu-masuk-daftar {
            color: black;
            display: none;
            width: auto;
            top: 35px;
            right: 20px;
            height: auto;
            position: absolute;
            background-color: #fff;
            padding: 10px;
            z-index: 999;
            border-radius: 3px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        header {
            position: fixed;
            display: flex;
            width: 100%;
            height: 80px;
            right: 0;
            top: 40px;
            left: 0;
            z-index: 100;
            align-items: center;
            justify-content: space-between;
            background-color: #0a4d68;
            padding: 28px 12%;
            border-bottom: 1px solid whitesmoke;
            transition: top 0.5s ease-in-out;
        }

        header .sticky {
            top: 0;
        }

        .top {
            top: 0;
        }

        .logo {
            display: flex;
            align-items: center;
        }

        .logo span {
            color: #fff;
            font-size: 1.2rem;
            font-weight: 600;
            font-family: "Minecraft";
            margin: 5px;
        }

        .navbar {
            display: flex;
            justify-content: space-evenly;
        }

        .navbar a {
            color: #fff;
            font-family: "Poppins", sans-serif;
            font-size: 1.1rem;
            font-weight: bold;
            padding: 5px 0;
            margin: 0px 10px;
            transition: all 0.5s ease;
        }

        .navbar a:hover {
            color: #0acc78;
        }

        .main {
            display: flex;
            align-items: center;
        }

        .main a {
            margin-right: 25px;
            margin-left: 10px;
            background-color: #0a4d68;

            color: #fff;
            font-size: 1.1rem;
            font-weight: bold;
            font-family: "Poppins", sans-serif;
            /* transition: all 0.5s ease; */
        }

        .main a #active {
            color: #0acc78;
        }

        .main .search {
            display: flex;
            align-items: center;
            font-size: 15px;
        }

        .main .search i {
            color: #0acc78;
            margin-right: 7px;
            font-size: 28px;
        }

        .main .search input {
            margin: 10px;
            width: auto;
            height: 30px;
            padding: 10px;
            border-radius: 7px;
            border: 0.5px solid black;
            display: none;
        }

        .cart {
            display: flex;
            align-items: center;
            font-size: 15px;
        }

        .cart i {
            color: #0acc78;
            margin-right: 7px;
            font-size: 28px;
        }

        .main a:hover {
            color: #0acc78;
        }

        #menu-icon {
            font-size: 35px;
            color: white;
            cursor: pointer;
            z-index: 10001;
            display: none;
        }

        @media (max-width: 1280px) {
            header {
                padding: 14px 2%;
                transition: 0.2s;
                height: 86.4px;
            }

            .navbar a {
                padding: 5px 0;
                margin: 0px 20px;
            }

            .promo {
                margin: 20px;
                margin-top: -100px;
            }
        }

        @media (max-width: 1090px) {
            #menu-icon {
                display: block;
            }

            .navbar {
                position: absolute;
                top: 100%;
                right: -100%;
                width: 270px;
                height: 29vh;
                background-color: #0a4d68;
                display: flex;
                flex-direction: column;
                justify-content: flex-start;
                border-radius: 5px;
                transition: all 0.5s ease;
                overflow: scroll;
            }

            .navbar a {
                display: block;
                margin: 8px 0;
                padding: 0px 25px;
                transition: all 0.5s ease;
            }

            .navbar a:hover {
                color: #fff;
                transform: translateY(5px);
            }

            .navbar a.active {
                color: #0acc78;
            }

            .navbar.open {
                top: 80%;
                right: 0%;
            }
        }

        /* footer */
        .container-footer {
            max-width: 1170px;
            margin: auto;
            display: flex;
            flex-direction: column;
        }

        .row {
            display: flex;
            flex-wrap: wrap;
        }

        ul {
            list-style: none;
        }

        .footer {
            background-color: #24262b;
            padding: 70px 0;
            height: auto;
        }

        .footer-col {
            width: 25%;
            padding: 0 15px;
        }

        .footer-col h4 {
            font-size: 18px;
            color: #ffffff;
            text-transform: capitalize;
            margin-bottom: 35px;
            font-weight: 500;
            position: relative;
        }

        .footer-col h4::before {
            content: "";
            position: absolute;
            left: 0;
            bottom: -10px;
            background-color: #e91e63;
            height: 2px;
            box-sizing: border-box;
            width: 50px;
        }

        .footer-col ul li:not(:last-child) {
            margin-bottom: 10px;
        }

        .footer-col ul li a {
            font-size: 16px;
            text-transform: capitalize;
            color: #ffffff;
            text-decoration: none;
            font-weight: 300;
            color: #bbbbbb;
            display: block;
            transition: all 0.3s ease;
        }

        .footer-col ul li a:hover {
            color: #ffffff;
            padding-left: 8px;
        }

        .footer-col .social-links a {
            display: inline-block;
            height: 40px;
            width: 40px;
            background-color: rgba(255, 255, 255, 0.2);
            margin: 0 10px 10px 0;
            text-align: center;
            line-height: 40px;
            border-radius: 50%;
            color: #ffffff;
            transition: all 0.5s ease;
        }

        .footer-col .social-links a:hover {
            color: #24262b;
            background-color: #ffffff;
        }

        .copyright {
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .copyright span {
            margin-top: 30px;
            text-align: center;
            font-size: 15px;
            font-family: helvetica;
        }

        /*responsive*/
        @media (max-width: 767px) {
            .container {
                margin-top: 10px;
            }

            .footer-col {
                width: 50%;
                margin-bottom: 30px;
            }
        }

        @media (max-width: 574px) {
            .footer-col {
                width: 100%;
            }
        }

        /* end footer */
    </style>

    <?php if (isset($customCSS)): ?>
        <link rel="stylesheet" href="<?php echo $customCSS; ?>">
    <?php else: ?>
        <link rel="stylesheet" href="style.css">
    <?php endif; ?>
</head>

<body>
    <div class="container-header">
        <div class="mini-header">
            <img src="../image/logoweb.png" alt="" />
            <div class="mini-menu">
                <ol>
                    <li>
                        <i class="ri-map-pin-line"> <a href="#" style="border-right: 2px solid black;">Find a Store
                            </a></i>
                    </li>
                    <li class="dropdown">
                        <a href="#" style="border-right: 2px solid black;">Help <i class="ri-arrow-down-s-line"></i></a>
                        <ul class="submenu">
                            <h2 style="margin: 10px 5px;">Help</h2>
                            <hr style="margin: 10px 5px">
                            <li><a href="#">FAQ</a></li>
                            <li><a href="#">shipping</a></li>
                            <li><a href="#">returns</a></li>
                            <li><a href="#">order status</a></li>
                            <li><a href="#">payment options</a></li>
                        </ul>
                    </li>
                    <li><a href="#" style="border-right: 2px solid black;">Join Us</a></li>
                    <li class="masuk-daftar" style="margin-left:10px"><i class="ri-account-pin-circle-line"><a
                                href="#">Akun</a></i>
                        <ul class="menu-masuk-daftar">
                            <a href="../login-page/login.php">Masuk</a>
                            <hr>
                            <a href="../login-page/daftar.php">Daftar</a>
                        </ul>
                    </li>
                </ol>
            </div>
        </div>
        <header class="sticky">
            <a href="#" class="logo"><span>N A Y S H O P</span></a>

            <ul class="navbar">
                <li><a href="../navbar/home.php ">Home</a></li>
                <li><a href="../pria/pria.php">Pria</a></li>
                <li><a href="../wanita/wanita.php">Wanita</a></li>
                <li><a href="../pesanan/semua.php">Pesanan</a></li>
                <li><a href="../About_us/about.php">About Us</a></li>
            </ul>

            <div class="main">
                <a href="#" class="search"><input type="search" placeholder="Cari disini..." /><i
                        class="ri-search-2-line"></i>PENCARIAN<a>
                        <a href="#" class="cart"><i class="ri-shopping-bag-line"></i>KERANJANG</a>

                        <div class="bx bx-menu" id="menu-icon"></div>
            </div>
        </header>
    </div>