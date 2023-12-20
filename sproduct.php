<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Product Details</title>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
            integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />

        <link rel="stylesheet" href="style.css">

        <style>
            .sproduct{
                margin-top: 20px;
                
            }
            .small-img-group{
                display: flex;
                justify-content: space-between;
                margin-top: 5px;
                margin-left: 2px;
            }
            .small-img-col{
                flex-basis: 24%;
            }
            .sproduct{
                display: block;
                padding: 10px 5px;
            }
            
            .selec{
                display: block;
                padding: 10px;
            }
            .button{
                display: block;
                margin-top: 5px;
                padding: 10px;
            }
            #related-pro{
                padding: 15px;
            }
           .pro-d{
            margin-top: 10px ;
           }
        </style>

    </head>

    <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light py-3 fixed-top">
        <div class="container">
          <a class="navbar-brand" href="#"><img src="img/logo1.png" alt=""></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span ><i id="bar" class="fas fa-bars"></i></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
              
              <li class="nav-item">
                <a class="nav-link " href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="shop.php">Shop</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.html">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact us.html">Contact Us</a>
              </li>
              <li class="nav-item">
                <i class="fal fa-search"></i>
                <i class="fal fa-shopping-bag"></i>
              </li>
            
          </div>
        </div>
      </nav>

      <section class=" container sproduct my-15 py-5">
        <div class="row mt-5">
            <div class="col-lg-5 col-md-12 col-12">
                <img class="img-fluid w-100" src="img/shop/1.jpg" id="main-img" alt="">

                <div class="small-img-group">
                    <div class="small-img-col">
                        <img src="img/shop/1.jpg" width="100%" class="small-img" alt="">

                    </div>
                    <div class="small-img-col">
                        <img src="img/Shop/26.jpg" width="100%" class="small-img" alt="">
                    </div>
                    <div class="small-img-col">
                        <img src="img/shop/24.jpg" width="100%" class="small-img" alt="">
                    </div>
                    <div class="small-img-col">
                        <img src="img/shop/25.jpg" width="100%" class="small-img" alt="">
                    </div>
                </div>
            </div>
            <div class="col-lg-6" col-md-12 col-12>
                <h6>Home/T-shirt</h6>
                <h3 class="py-5">Mens's fashion T-shirt</h3>
                <h2>RS2000</h2>
                <select class="my-3 selec">
                    <option value="">select size</option>
                    <option value="">XL</option>
                    <option value="">L</option>
                    <option value="">M</option>
                    <option value="">S</option>
                </select>
                <input type="number" value="1">
                <button class="btn-btn button" >Add to Cart</button>
                <h4 class="pro-d" >Products Details</h4>
                <span>hdbhib  ueueuberhueruebrgeurue</span>
            </div>
        </div>
      </section>


      <section id="related-pro">
        
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


        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"
            integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG"
            crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js"
            integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc"
            crossorigin="anonymous"></script>

        <script>
           var mainimg = document.getElementById('main-img');
           var smallimg =document.getElementsByClassName('small-img');
           smallimg[0].onclick=function(){
            mainimg.src=smallimg[0].src;
           }
           smallimg[1].onclick=function(){
            mainimg.src=smallimg[1].src;
           }
           smallimg[2].onclick=function(){
            mainimg.src=smallimg[2].src;
           }
           smallimg[3].onclick=function(){
            mainimg.src=smallimg[3].src;
           }
        </script>
    </body>

</html>