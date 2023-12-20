<?php
require('connection.php');
session_start();


 

?>



<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tutorial</title>
        <link rel="stylesheet" href="bootstrap.css">


        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
            integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />

        <link rel="stylesheet" href="style.css">
    </head>

    <body>
      <nav class="navbar navbar-expand-lg navbar-light bg-light py-3 fixed-top ">
        <div class="container">
          <a class="navbar-brand" href="#"><img src="img/logo1.png" alt=""></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span ><i id="bar" class="fas fa-bars"></i></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto ml-8px">
              
              <li class="nav-item">
                <a class="nav-link active" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="shop.php">Shop</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.html">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="complain.php">Contact Us</a>
              </li>
             
              <li class="nav-item">
               
                <a href="cart.php" class="nav-link"><i class="fal fa-shopping-bag"></i></a>
              </li>
              <div class="logged">
              <?php
                      if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']==true){
                        echo"
                        <div class='user'>
                        welcome-$_SESSION[username] --- <a href='logout.php'>LOGOUT
                       
                        
                        </a>
                        </div>";
        
                        }  
                        else{
                          echo"
                          
                          <div class='sign-in-up py-2'>
                            <button type='button' onclick=\"popup('login-popup')\">LOGIN</button>
                            <button type='button' onclick=\"popup('register-popup')\">REGISTER</button>
                          </div>

                          ";
                        }
  
               ?>

            
            
          </div>
        </div>
      </nav>

      <section id="home">
        <div class="container">
          <h5>NEW ARRIVALS</h5>
          <h1><span>BEST PRICE</span> THIS YEAR</h1>
          <p>shoomatic offers your very comfortable time <br>on Walking and exercise</p>
          <button>Shop Now</button>
        </div>
        
      </section>

      <section id="brand">
        <div class="row"  >
          <img class="img-fluid col-lg-2 col-md-4 col-6" src="img/brands/1.png" alt="">
          <img class="img-fluid col-lg-2 col-md-4 col-6" src="img/brands/2.png" alt="">
          <img class="img-fluid col-lg-2 col-md-4 col-6" src="img/brands/3.png" alt="">
          <img class="img-fluid col-lg-2 col-md-4 col-6" src="img/brands/4.png" alt="">
          <img class="img-fluid col-lg-2 col-md-4 col-6" src="img/brands/6.png" alt="">
          <img class="img-fluid col-lg-2 col-md-4 col-6" src="img/brands/5.png" alt="">

        </div>
      </section>

      <section id="new" class="w-100">
        <div class="row p-0 m-0" >
          <div class="one col-lg-4 col-md-12 col-12 p-0">
            <img class="img-fluid" src="img/new/1.jpg" alt="">
            <div class="details">
              <h2>Extreme Rare Sneakers</h2>
              <button class="text-uppercase">Shop Now</button>
            </div>
          </div>
          <div class="one col-lg-4 col-md-12 col-12 p-0">
            <img class="img-fluid" src="img/new/3.jpg" alt="">
            <div class="details">
              <h2>Awesome Blank Outfit</h2>
              <button class="text-uppercase">Shop Now</button>
            </div>
          </div>
          <div class="one col-lg-4 col-md-12 col-12 p-0">
            <img class="img-fluid" src="img/new/5.jpg" alt="">
            <div class="details">
              <h2>Sportswear Up Tp 50% Off</h2>
              <button class="text-uppercase">Shop Now</button>
            </div>
          </div>
        </div>
      </section>

        <section id="featured" class="my-5 pb-5" >
          <div class="f-details">
            <h3>Our Feautred</h3>
            <hr class="mx-auto ">
            <p>Here you can check out our new products with the fair price on rymo.</p>

          
          </div>
          <div class="row f-pro" >
            <div class="products text-center col-lg-3 col-md-4 col-12">
              <img class="img-fluid mb-3" src="img/featured/1.jpg" alt="">
              <div class="star">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>
              <h5 class="product name">
                Sports Shoes
              </h5>
              <h4 class="p-price">2555RS</h4>
              <button class="buy-btn">Buy Now</button>
            </div>
            <div class="products text-center col-lg-3 col-md-4 col-12">
              <img class="img-fluid mb-3" src="img/featured/2.jpg" alt="">
              <div class="star">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>
              <h5 class="product name">
                Sports Shoes
              </h5>
              <h4 class="p-price">2555RS</h4>
              <button class="buy-btn">Buy Now</button>
            </div>
            <div class="products text-center col-lg-3 col-md-4 col-12">
              <img class="img-fluid mb-3" src="img/featured/3.jpg" alt="">
              <div class="star">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>
              <h5 class="product name">
                Sports Shoes
              </h5>
              <h4 class="p-price">2555RS</h4>
              <button class="buy-btn">Buy Now</button>
            </div>
            <div class="products text-center col-lg-3 col-md-4 col-12">
              <img class="img-fluid mb-3" src="img/featured/4.jpg" alt="">
              <div class="star">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>
              <h5 class="product name">
                Sports Shoes
              </h5>
              <h4 class="p-price">2555RS</h4>
              <button class="buy-btn">Buy Now</button>
            </div>
          </div>
        </section>
 
        <section id="banner" class="my-5 py-5">
          <div class="">
            <h4>MID SEASON'S SALE</h4>
            <h1>Autum Collection <br> Up to 20%Off</h1>
            <button class="text-uppercase">shop now</button>
          </div>
        </section>

        <section id="clothes" class="my-5 " >
          <div class="f-details">
            <h3>Dresses and Jumpsuits</h3>
            <hr class="mx-auto ">
            <p>Here you can check out our new products with the fair price on rymo.</p>

          
          </div>
          <div class="row f-pro" >
            <div class="products text-center col-lg-3 col-md-4 col-12">
              <img class="img-fluid mb-3" src="img/clothes/1.jpg" alt="">
              <div class="star">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>
              <h5 class="product name">
                Sports Shoes
              </h5>
              <h4 class="p-price">2555RS</h4>
              <button class="buy-btn">Buy Now</button>
            </div>
            <div class="products text-center col-lg-3 col-md-4 col-12">
              <img class="img-fluid mb-3" src="img/clothes/2.jpg" alt="">
              <div class="star">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>
              <h5 class="product name">
                Sports Shoes
              </h5>
              <h4 class="p-price">2555RS</h4>
              <button class="buy-btn">Buy Now</button>
            </div>
            <div class="products text-center col-lg-3 col-md-4 col-12">
              <img class="img-fluid mb-3" src="img/clothes/3.jpg" alt="">
              <div class="star">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>
              <h5 class="product name">
                Sports Shoes
              </h5>
              <h4 class="p-price">2555RS</h4>
              <button class="buy-btn">Buy Now</button>
            </div>
            <div class="products text-center col-lg-3 col-md-4 col-12">
              <img class="img-fluid mb-3" src="img/clothes/1.jpg" alt="">
              <div class="star">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>
              <h5 class="product name">
                Sports Shoes
              </h5>
              <h4 class="p-price">2555RS</h4>
              <button class="buy-btn">Buy Now</button>
            </div>
          </div>
        </section>

        <section id="watches" class="my-5 pb-5" >
          <div class="f-details">
            <h3>Best Watches</h3>
            <hr class="mx-auto ">
            <p>Here you can check out our new products with the fair price on rymo.</p>

          
          </div>
          <div class="row f-pro" >
            <div class="products text-center col-lg-3 col-md-4 col-12">
              <img class="img-fluid mb-3" src="img/watches/1.jpg" alt="">
              <div class="star">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>
              <h5 class="product name">
                Sports Shoes
              </h5>
              <h4 class="p-price">2555RS</h4>
              <button class="buy-btn">Buy Now</button>
            </div>
            <div class="products text-center col-lg-3 col-md-4 col-12">
              <img class="img-fluid mb-3" src="img/watches/2.jpg" alt="">
              <div class="star">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>
              <h5 class="product name">
                Sports Shoes
              </h5>
              <h4 class="p-price">2555RS</h4>
              <button class="buy-btn">Buy Now</button>
            </div>
            <div class="products text-center col-lg-3 col-md-4 col-12">
              <img class="img-fluid mb-3" src="img/watches/3.jpg" alt="">
              <div class="star">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>
              <h5 class="product name">
                Sports Shoes
              </h5>
              <h4 class="p-price">2555RS</h4>
              <button class="buy-btn">Buy Now</button>
            </div>
            <div class="products text-center col-lg-3 col-md-4 col-12">
              <img class="img-fluid mb-3" src="img/watches/4.jpg" alt="">
              <div class="star">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>
              <h5 class="product name">
                Sports Shoes
              </h5>
              <h4 class="p-price">2555RS</h4>
              <button class="buy-btn">Buy Now</button>
            </div>
          </div>
        </section>

        <section id="shoes" class="my-5 pb-5" >
          <div class="f-details">
            <h3>Best Shoes</h3>
            <hr class="mx-auto ">
            <p>Here you can check out our new products with the fair price on rymo.</p>

          
          </div>
          <div class="row f-pro" >
            <div class="products text-center col-lg-3 col-md-4 col-12">
              <img class="img-fluid mb-3" src="img/shoes/1.jpg" alt="">
              <div class="star">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>
              <h5 class="product name">
                Sports Shoes
              </h5>
              <h4 class="p-price">2555RS</h4>
              <button class="buy-btn">Buy Now</button>
            </div>
            <div class="products text-center col-lg-3 col-md-4 col-12">
              <img class="img-fluid mb-3" src="img/shoes/2.jpg" alt="">
              <div class="star">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>
              <h5 class="product name">
                Sports Shoes
              </h5>
              <h4 class="p-price">2555RS</h4>
              <button class="buy-btn">Buy Now</button>
            </div>
            <div class="products text-center col-lg-3 col-md-4 col-12">
              <img class="img-fluid mb-3" src="img/shoes/3.jpg" alt="">
              <div class="star">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>
              <h5 class="product name">
                Sports Shoes
              </h5>
              <h4 class="p-price">2555RS</h4>
              <button class="buy-btn">Buy Now</button>
            </div>
            <div class="products text-center col-lg-3 col-md-4 col-12">
              <img class="img-fluid mb-3" src="img/shoes/4.jpg" alt="">
              <div class="star">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>
              <h5 class="product name">
                Sports Shoes
              </h5>
              <h4 class="p-price">2555RS</h4>
              <button class="buy-btn">Buy Now</button>
            </div>
          </div>
        </section>

        <footer>
          <div class="container pt-5 border-bottom">
            <div class="row">
              <div class="col-md-3 col-sm-12 mb-3 text-center">
                <img src="img/logo1.png" alt="">
              </div>
              <div class="col-md-9 col-sm-12">
        
                <div class="col-md-3 col-sm-6 col-6 p-0 float-left mb-3">
                  <h5 class="mb-4 font-weight-bold text-uppercase">Solutions</h5>
                <ul class="list-group">
                  <li class="list-group-item bg-transparent border-0 p-0 mb-2"><a href="../sales/sales-performance-market-pipeline.html">Men</a></li>
                  <li class="list-group-item bg-transparent border-0 p-0 mb-2"><a href="href="../project-management/project-management.html"">Womens</a></li>
                  <li class="list-group-item bg-transparent border-0 p-0 mb-2"><a href="../workforce/workforce-organization-management-hr.html">Boys</a></li>
                  <li class="list-group-item bg-transparent border-0 p-0 mb-2"><a href="../e-commerce/e-commerce.html"> Girls</a></li>
                  <li class="list-group-item bg-transparent border-0 p-0 mb-2"><a href="../finance/finance-accounting-erp.html">Shoes</a></li>
                  <li class="list-group-item bg-transparent border-0 p-0 mb-2"><a href="../business-apps/business-apps.html">Clothes</a></li>
                </ul>
                </div>
        
                <div class="col-md-3 col-sm-6 col-6 p-0 mb-3 float-left">
                  <h5 class="mb-4 font-weight-bold text-uppercase">Developers</h5>
                <ul class="list-group">
                  <li class="list-group-item bg-transparent border-0 p-0 mb-2"><a href="https://github.com/naologic">Open Source</a></li>
                  <li class="list-group-item bg-transparent border-0 p-0 mb-2"><a href="https://stackshare.io/naologic">Technology</a></li>
                </ul>
                </div>
        
                <div class="col-md-3 col-sm-6 col-6 mb-3 p-0 float-left">
                  <h5 class="mb-4 font-weight-bold text-uppercase">Company</h5>
                <ul class="list-group">
                  <li class="list-group-item bg-transparent border-0 p-0 mb-2"><a href="../about-naologic.html"></i>About</a></li>
                  <li class="list-group-item bg-transparent border-0 p-0 mb-2"><a href="https://blog.naologic.com"></i> Blog</a></li>
                </ul>
                </div>
        
                <div class="col-md-3 col-sm-6 col-6 mb-3 p-0 float-left">
                  <h5 class="mb-4 font-weight-bold text-uppercase">Connect</h5>
                <ul class="list-group">
                  <li class="list-group-item bg-transparent border-0 p-0 mb-2">
                    <a href="https://www.linkedin.com/company/naologic"><i class="fa fa-linkedin mr-1"></i> LinkedIn</a>
                  </li>
                  <li class="list-group-item bg-transparent border-0 p-0 mb-2">
                    <a href="https://twitter.com/naologicerp"><i class="fa fa-twitter mr-1"></i> Twitter</a>       
                  </li class="list-group-item bg-transparent border-0 p-0 mb-2">
                  <li class="list-group-item bg-transparent border-0 p-0 mb-2"> 
                    <a href="https://www.reddit.com/r/naologic/"><i class="fa fa-reddit mr-1"></i> Reddit</a>
                  </li>
                  <li class="list-group-item bg-transparent border-0 p-0 mb-2">
                    <a href="https://plus.google.com/109511516185666043480" target="_blank"><i class="fa fa-google-plus mr-1"></i> Google+</a>
                    
                  </li>
                  <li class="list-group-item bg-transparent border-0 p-0 mb-2">
                    <a href="https://github.com/naologic" target="_blank"><i class="fa fa-github mr-1"></i> Github</a>  
                  </li>
                  <li class="list-group-item bg-transparent border-0 p-0 mb-2">
                    <a href="https://blog.naologic.com" target="_blank"><i class="fa fa-medium mr-1"></i> Medium</a>
                  </li>
                  <li class="list-group-item bg-transparent border-0 p-0 mb-2">
                    <a href="https://www.facebook.com/naologic/" target="_blank"><i class="fa fa-facebook mr-1"></i> Facebook</a>
                  </li>
                  <li class="list-group-item bg-transparent border-0 p-0 mb-2">
                    <a href="https://www.youtube.com/channel/UCtHmuf2oQLnksokfz8GIbKA" target="_blank"><i class="fa fa-youtube mr-1"></i> YouTube</a>
                  </li>
                </ul>
                </div>
        
              </div>
                <div class="col-md-12">
                  <div class="py-4 d-flex justify-content-center align-items-center">
                    <a class="mr-4" href="../privacy.html">Privacy & terms</a>
                    <a href="../sitemap.xml">Sitemap</a>
                  </div>
                </div>
            </div>
          </div>
        </footer>

        <div class="popup-container" id="login-popup">
    <div class="popup">
      <form method="POST" action="login_register.php">
        <h2>
          <span>USER LOGIN</span>
          <button type="reset" onclick="popup('login-popup')">X</button>
        </h2>
        <input type="text" placeholder="E-mail or Username" name="email_username">
        <input type="password" placeholder="Password" name="password">
        <button type="submit" class="login-btn" name="login">LOGIN</button>
        <a href="forgetpw.php" >Forget Password?</a>
      </form>
    </div>
  </div>

  <div class="popup-container" id="register-popup">
    <div class="register popup">
      <form method="POST" action="login_register.php">
        <h2>
          <span>USER REGISTER</span>
          <button type="reset" onclick="popup('register-popup')">X</button>
        </h2>
        <input type="text" placeholder="Full Name" name="name">
        <input type="text" placeholder="Username" name="username">
        <input type="email" placeholder="E-mail" name="email">
        <input type="password" placeholder="Password" name="password">
        <button type="submit" class="register-btn" name="register">REGISTER</button>
      </form>
    </div>
  </div>

  <script>
    function popup(popup_name)
    {
      get_popup=document.getElementById(popup_name);
      if(get_popup.style.display=="flex")
      {
        get_popup.style.display="none";
      }
      else
      {
        get_popup.style.display="flex";
      }
    }
  </script>

 



        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"
            integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG"
            crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js"
            integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc"
            crossorigin="anonymous"></script>
    </body>

</html>