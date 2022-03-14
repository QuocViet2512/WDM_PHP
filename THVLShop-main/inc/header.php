<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>THVL Shop</title>

    <!-- CSS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/8648b5710f.css">
    <link rel="stylesheet" href="./public/css/home.css">
    <link rel="stylesheet" href="./public/css/LoginStyle.css">
    <link rel="stylesheet" href="./public/css/nav.css">
    <link rel="stylesheet" href="./public/css/test.css">
    <script
      src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"
      type="text/javascript"
    ></script>
    <script src="./public/js/nav.js"></script>
    <script src="./public/js/LoginJS.js"></script>
    <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css" integrity="sha512-wR4oNhLBHf7smjy0K4oqzdWumd+r5/+6QO/vDda76MW5iug4PT7v86FoEkySIJft3XA0Ae6axhIvHrqwm793Nw==" crossorigin="anonymous" referrerpolicy="no-referrer" />-->
</head>
<body>
  <div  class="navbar">
    <div class="nav">
            <img src="./public/img/dark-logo.png" class="brand-logo" alt="">
            <div class="nav-items">
                <div class="search">
                    <input type="text" class="search-box" placeholder="Tìm kiếm sản phẩm">
                    <button class="search-btn">Tìm kiếm</button>
                </div>
                <a href="#"><i class="fa fa-user-circle-o" onclick="showlogin()"  aria-hidden="true"></i></a>
                <a href="cart.php"><i class="fa fa-shopping-bag" aria-hidden="true"></i>
                </a>
            </div>
        </div>
        <ul class="links-container">
            <li class="link-item"><a href="index.php" class="link">Trang chủ</a></li>
            <li class="link-item"><a href="products.php" class="link">Sản phẩm</a></li>
            <li class="link-item"><a href="topbrands.php" class="link">Hãng sản xuất</a></li>
            <li class="link-item"><a href="contact.php" class="link">Liên hệ</a></li>
        </ul>    
  </div>
  <div class="modal" id="LoginModal">
    <div class="form">
      <div class="subform">
        <div id="LoginForm" style="transition: all 1s">
          <h1 class="tit">Login</h1>
          <div class="bd">
            <input
              type="text"
              class="ip"
              id="LUser"
              oninput="jsc()"
              placeholder="User Name"
            />
            <button class="bt" onclick="rm(1)">
              <img
                id="LIUser"
                src="./public/img/add.png"
                class="ripbt"
                alt=""
              />
            </button>
          </div>
          <div class="bd">
            <input
              type="password"
              class="ip"
              id="LPass"
              oninput="jsc()"
              placeholder="PassWord"
            />
            <button class="bt" onclick="rm(2)">
              <img
                id="LIPass"
                src="./public/img/add.png"
                class="ripbt"
                alt=""
              />
            </button>
          </div>
        </div>

        <!--SignUp-->
        <div style="display: none; transition: all 1s" id="SignupForm">
          <h1 class="tit">Sign Up</h1>
          <div class="bd">
            <input
              type="text"
              class="ip"
              id="SUser"
              oninput="jsc()"
              placeholder="User Name"
            />
            <button class="bt" onclick="rm(3)">
              <img
                id="SIUser"
                src="./public/img/add.png"
                class="ripbt"
                alt=""
              />
            </button>
          </div>
          <div class="bd">
            <input
              type="password"
              class="ip"
              id="SPass"
              oninput="jsc()"
              placeholder="PassWord"
            />
            <button class="bt" onclick="rm(4)">
              <img
                id="SIPass"
                src="./public/img/add.png"
                class="ripbt"
                alt=""
              />
            </button>
          </div>
          <div class="bd">
            <input
              type="password"
              class="ip"
              id="SPass2"
              oninput="jsc()"
              placeholder="Confirm PassWord"
            />
            <button class="bt" onclick="rm(5)">
              <img
                id="SIPass2"
                src="./public/img/add.png"
                class="ripbt"
                alt=""
              />
            </button>
          </div>
        </div>
        <!---->

        <div class="bbtn">
          <button onclick="SignUp(1)" class="botbut">Sign In</button>
          <button
            onclick="SignUp(0)"
            class="botbut"
            style="background-color: rgba(64, 227, 93, 0.77)"
          >
            Sign Up
          </button>
        </div>
      </div>
    </div>
  </div>