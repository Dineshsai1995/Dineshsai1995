
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Farmers - Buy Fresh Live Healthy</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
</head>
<style>
.sticky {
  position: -webkit-sticky;
  position: sticky;
  top: 0;
  padding-top: 50px;
  /* font-size: 20px; */
}
.col-text {
  height:20em;
}
.grid-flex {
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-flex: 1;
  -webkit-flex-grow: 1;
  -ms-flex-positive: 1;
  flex-grow: 1;
  flex-direction: row; 
  -webkit-flex-direction: row;
  -webkit-flex-wrap: wrap;
  -webkit-justify-content: space-around;
}
.col {
  -webkit-box-flex: 1;
  -webkit-flex: 1;
  -ms-flex: 1;
  flex: 1;
}
.col-left {
  -webkit-box-ordinal-group:-1;
  -webkit-order: -1;
  -ms-flex-order: -1;
  order: -1;
}
.col-text{
  display: flex;
  align-items: center;
  justify-content: center;
}
.Aligner-item {
  width: 60%;
}
.col-image {
  background-size: cover;
  background-position:center center;
}
.zoom{
    overflow: hidden!important;
}

@media (max-width: 640px) {
  .grid-flex {
    height: 40em;
    display: -webkit-flex;
    -webkit-flex-direction: column;
    flex-direction: column; 
   }
  .col {
    order:vertical;
  }
  .col-left {
    -webkit-box-ordinal-group:0;
    -webkit-order: 0;
    -ms-flex-order: 0;
    order: 0;
  }
  .col-text div p {
    padding: 1em;
  }
  .Aligner-item {
    width: 90%;
  }
}



@media (max-width:786px){

}
</style>
<body>
<!-- Navigation Bar -->
<?php include './navigation.php'; ?>

  <!--/.Navbar-->
<!--Carousel Wrapper-->
<div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">
    <!--Indicators-->
    <!-- <ol class="carousel-indicators">
      <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
      <li data-target="#carousel-example-1z" data-slide-to="1"></li>
      <li data-target="#carousel-example-1z" data-slide-to="2"></li>
    </ol> -->
    <!--/.Indicators-->
    <!--Slides-->
    <div class="carousel-inner" role="listbox">
      <div class="carousel-item active">
        <img class="d-block w-100" src="./img/weiving/sli1.jpg" alt="First slide">
      </div>
    </div>
    <!--/.Slides-->
    <!--Controls-->
    <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
    <!--/.Controls-->
  </div>
  <!--/.Carousel Wrapper-->
<section class="my-5">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <img class="img-fluid " src="./img/coxz.png" alt="cover-panel">
            </div>
                <div class="col-md-5">
                        <h2 class="font-weight-bold my-5">Weaving Products Direct From Our Farmers</h2>
                            <div class="row mb-3">
                            <div class="col-xl-10 col-md-11 col-10">
                                <!-- <h5 class="font-weight-bold mb-3">Technology</h5> -->
                                <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit enim ad minima veniam,
                                quis nostrum exercitationem ullam. Reprehenderit maiores aperiam assumenda deleniti hic.</p>
                            </div>
                        </div>
                </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="row">
            <div class="col-md-6 mb-md-0 mb-4">
            <a href="farmers.php">
                <div class="card card-image" style="background-image: url(https://mdbootstrap.com/img/Photos/Horizontal/Nature/6-col/img%20%2873%29.jpg);">
                    <div class="text-white text-center d-flex align-items-center rgba-black-strong py-5 px-4 rounded">
                    <div>
                        <h6 class="pink-text">
                        <i class="fas fa-chart-pie"></i>
                        <strong> Marketing</strong>
                        </h6>
                        <h2 class="py-3 font-weight-bold">
                        <strong>Farmers To Counsumer</strong>
                        </h2>
                        <p class="pb-3 text-justify">Farm direct marketing is a long felt need of the farmers and consumers of the country as it goes a long way in ensuring higher remuneration to the farmers and meeting the satisfaction level of the consumers through direct sale of the agricultural commodity by the farmers to the consumer at affordable prices.
                        </p>
                    </div>
                    </div>
                </div>
                </a>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-6">
                <a href="new-arrival.php">
                <div class="card card-image" style="background-image: url(https://mdbootstrap.com/img/Photos/Horizontal/City/6-col/img%20%2847%29.jpg);">
                    <div class="text-white text-center d-flex align-items-center rgba-black-strong py-5 px-4 rounded">
                    <div>
                        <h6 class="green-text">
                        <i class="fas fa-eye"></i>
                        <strong> Marketing</strong>
                        </h6>
                        <h2 class="py-3 font-weight-bold">
                        <strong>Weavers To Consumer</strong>
                        </h2>
                        <p class="pb-3 text-justify">FarmersApp hosts signature collections created by the weaver communities, showcase traditional designs and products created from natural dyes. This e-market place will help sell to a broad set of customers, supporting weavers increase their income.
                        </p>
                    </div>
                    </div>
                </div>
                </a>
                </div>
                <!-- Grid column -->
      </div>
    </div>
</section>




<section class="products ">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3 ">
                <div class="sticky">
                <!--  *** MENUS AND FILTERS ***-->
                <div class="card sidebar-menu">
                    <div class="card-header">
                        <h5 class="mb-0 text-uppercase">Categories</h5>
                    </div>
                    <div class="card-body" id="prod-list">
                    <ul class="nav nav-pills flex-column category-menu">
                        <li class="nav-item"><a href="farmers.php" class="nav-link">Farmers Product</a></li>
                        <li class="nav-item"><a href="new-arrival.php" class="nav-link">Weavers Product</a></li>
                        <li class="nav-item"><a href="grocery.php" class="nav-link">Groceries</a></li>
                        <li class="nav-item"><a href="vegetables.php" class="nav-link">Vegetables</a></li>
                        <!-- <li class="nav-item"><a href="new-arrival.php" class="nav-link">Womens Fashion</a></li> -->
                        <!-- <li class="nav-item"><a href="#Ot-p" class="nav-link">Men's Fashion</a></li> -->
                    </ul>
                    
                    </div>
                </div>
                
                </div>
            </div>
            <div class="col-md-9">
            <section class="text-center my-5">
                <!-- <p class="grey-text text-left w-responsive mb-3">Duis aute irure dolor in reprehenderit in
                    voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit est laborum.</p> -->
                <div class="row">
                    <div class="col-md-12 mb-md-0 mb-4" id="frmr">
                        <div class="card card-image" style="background-image: url('./img/farmer.jpg');background-repeat: no-repeat;background-position:center">
                            <div class="text-white text-center d-flex align-items-center rgba-black-strong py-5 px-4 rounded">
                                <div class="mr-auto">
                                    <h3 class="py-3 font-weight-bold">
                                    <strong>Farmers product</strong>
                                    
                                    </h3>
                                </div>
                                <div class="ml-auto">
                                   <a href="farmers.php"><button class="btn btn-sm btn-success ">View More</button></a> 
                                </div>
                            </div>
                        </div>
                        <div class="owl-carousel owl-theme mt-3">
                                <div class="item">
                                    <div class=" card collection-card z-depth-1-half">
                                        <div class="view zoom ">
                                            <div class="mb-1"><b class="text-left">Wheat</b></div>
                                            <img src="img/food1.jpg" class="img-fluid" alt="">
                                        </div>
                                        <div class="card-footer px-1">
                                            <span class="float-left font-weight-bold">
                                                <strong class="price">₹90</strong>
                                            </span>
                                            <span class="float-right">
                                                <a href="product.php">
                                                    <button class="btn btn-sm btn-primary">Buy</button>
                                                </a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class=" card collection-card z-depth-1-half">
                                        <div class="view zoom ">
                                            <div class="mb-1"><b class="text-left">Urad Dal</b></div>
                                            <img src="img/udal.jpg" class="img-fluid" alt="">
                                        </div>
                                        <div class="card-footer px-1">
                                            <span class="float-left font-weight-bold">
                                                <strong class="price">₹99</strong>
                                            </span>
                                            <span class="float-right">
                                                <a href="product.php">
                                                    <button class="btn btn-sm btn-primary">Buy</button>
                                                </a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class=" card collection-card z-depth-1-half">
                                        <div class="view zoom ">
                                            <div class="mb-1"><b class="text-left">Rice</b></div>
                                            <img src="img/rice.jpg" class="img-fluid" alt="">
                                        </div>
                                        <div class="card-footer px-1">
                                            <span class="float-left font-weight-bold">
                                                <strong class="price">₹1239</strong>
                                            </span>
                                            <span class="float-right">
                                                <a href="product.php">
                                                    <button class="btn btn-sm btn-primary">Buy</button>
                                                </a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class=" card collection-card z-depth-1-half">
                                        <div class="view zoom ">
                                            <div class="mb-1"><b class="text-left">Brown Chana</b></div>
                                            <img src="img/bch.jpg" class="img-fluid" alt="">
                                        </div>
                                        <div class="card-footer px-1">
                                            <span class="float-left font-weight-bold">
                                                <strong class="price">₹192</strong>
                                            </span>
                                            <span class="float-right">
                                                <a href="product.php">
                                                    <button class="btn btn-sm btn-primary">Buy</button>
                                                </a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                    <!-- Collection card -->
                        </div>
                    </div>
                    <div class="col-md-12 mb-md-0 mb-4" id="wvrs">
                        <div class="card card-image" style="background-image: url('./img/xs.jpg');background-repeat: no-repeat;background-position:center">
                            <div class="text-white text-center d-flex align-items-center rgba-black-strong py-5 px-4 rounded">
                                <div>
                                    <h3 class="py-3 font-weight-bold">
                                    <strong>Weavers Product</strong>
                                    </h3>
                                </div>
                                <div class="ml-auto">
                                    <a href="new-arrival.php"><button class="btn btn-sm btn-success ">View More</button></a>
                                </div>
                            </div>
                        </div>
                        <div class="owl-carousel owl-theme mt-3">
                                <div class="item">
                                    <div class=" card collection-card z-depth-1-half">
                                        <div class="view zoom ">
                                            <div class="mb-1"><b class="text-left">Saree</b></div>
                                            <img src="img/x2.jpg" class="img-fluid" alt="">
                                        </div>
                                        <div class="card-footer px-1">
                                            <span class="float-left font-weight-bold">
                                                <strong class="price">₹3500</strong>
                                            </span>
                                            <span class="float-right">
                                                <a href="product.php">
                                                    <button class="btn btn-sm btn-primary">Buy</button>
                                                </a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class=" card collection-card z-depth-1-half">
                                        <div class="view zoom ">
                                            <div class="mb-1"><b class="text-left">Handmade door mat</b></div>
                                            <img src="img/mat.jpg" class="img-fluid" alt="">
                                        </div>
                                        <div class="card-footer px-1">
                                            <span class="float-left font-weight-bold">
                                                <strong class="price">₹250</strong>
                                            </span>
                                            <span class="float-right">
                                                <a href="product.php">
                                                    <button class="btn btn-sm btn-primary">Buy</button>
                                                </a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class=" card collection-card z-depth-1-half">
                                        <div class="view zoom ">
                                            <div class="mb-1"><b class="text-left">Handmade Galeecha</b></div>
                                            <img src="img/wd3.jpg" class="img-fluid" alt="">
                                        </div>
                                        <div class="card-footer px-1">
                                            <span class="float-left font-weight-bold">
                                                <strong class="price">₹1439</strong>
                                            </span>
                                            <span class="float-right">
                                                <a href="product.php">
                                                    <button class="btn btn-sm btn-primary">Buy</button>
                                                </a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class=" card collection-card z-depth-1-half">
                                        <div class="view zoom ">
                                            <div class="mb-1"><b class="text-left">Saree</b></div>
                                            <img src="img/v1.jpg" class="img-fluid" alt="">
                                        </div>
                                        <div class="card-footer px-1">
                                            <span class="float-left font-weight-bold">
                                                <strong class="price">₹3439</strong>
                                            </span>
                                            <span class="float-right">
                                                <a href="product.php">
                                                    <button class="btn btn-sm btn-primary">Buy</button>
                                                </a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                    <!-- Collection card -->
                        </div>
                    </div>
                    <!-- <div class="col-md-12 mb-md-0 mb-4" id="grs">
                            <div class="card card-image" style="background-image: url('./img/veg.jpg');background-repeat: no-repeat;background-position:center">
                                <div class="text-white text-center d-flex align-items-center rgba-black-strong py-5 px-4 rounded">
                                    <div>
                                        <h3 class="py-3 font-weight-bold">
                                        <strong>Groceries</strong>
                                        </h3>
                                    </div>
                                    <div class="ml-auto">
                                        <a href="grocery.php"><button class="btn btn-sm btn-success ">View More</button></a>
                                    </div>
                                </div>
                                </div>
                                <div class="owl-carousel owl-theme mt-3">
                                        <div class="item">
                                            <div class=" card collection-card z-depth-1-half">
                                                <div class="view zoom ">
                                                    <div class="mb-1"><b class="text-left">Atta</b></div>
                                                    <img src="img/groseries/atta.jpeg" class="img-fluid" alt="">
                                                </div>
                                                <div class="card-footer px-1">
                                                    <span class="float-left font-weight-bold">
                                                        <strong class="price">₹90</strong>
                                                    </span>
                                                    <span class="float-right">
                                                        <a href="product.php">
                                                            <button class="btn btn-sm btn-primary">Buy</button>
                                                        </a>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class=" card collection-card z-depth-1-half">
                                                <div class="view zoom ">
                                                    <div class="mb-1"><b class="text-left">Cashew</b></div>
                                                    <img src="img/groseries/cashew.jpeg" class="img-fluid" alt="">
                                                </div>
                                                <div class="card-footer px-1">
                                                    <span class="float-left font-weight-bold">
                                                        <strong class="price">₹239</strong>
                                                    </span>
                                                    <span class="float-right">
                                                        <a href="product.php">
                                                            <button class="btn btn-sm btn-primary">Buy</button>
                                                        </a>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class=" card collection-card z-depth-1-half">
                                                <div class="view zoom ">
                                                    <div class="mb-1"><b class="text-left">Moong Dal</b></div>
                                                    <img src="img/groseries/md.jpeg" class="img-fluid" alt="">
                                                </div>
                                                <div class="card-footer px-1">
                                                    <span class="float-left font-weight-bold">
                                                        <strong class="price">₹200</strong>
                                                    </span>
                                                    <span class="float-right">
                                                        <a href="product.php">
                                                            <button class="btn btn-sm btn-primary">Buy</button>
                                                        </a>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class=" card collection-card z-depth-1-half">
                                                <div class="view zoom ">
                                                    <div class="mb-1"><b class="text-left">Marie Gold</b></div>
                                                    <img src="img/groseries/mg.jpeg" class="img-fluid" alt="">
                                                </div>
                                                <div class="card-footer px-1">
                                                    <span class="float-left font-weight-bold">
                                                        <strong class="price">₹40</strong>
                                                    </span>
                                                    <span class="float-right">
                                                        <a href="product.php">
                                                            <button class="btn btn-sm btn-primary">Buy</button>
                                                        </a>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class=" card collection-card z-depth-1-half">
                                                <div class="view zoom ">
                                                    <div class="mb-1"><b class="text-left">Mikl</b></div>
                                                    <img src="img/groseries/v1.jpg" class="img-fluid" alt="">
                                                </div>
                                                <div class="card-footer px-1">
                                                    <span class="float-left font-weight-bold">
                                                        <strong class="price">₹1439</strong>
                                                    </span>
                                                    <span class="float-right">
                                                        <a href="product.php">
                                                            <button class="btn btn-sm btn-primary">Buy</button>
                                                        </a>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class=" card collection-card z-depth-1-half">
                                                <div class="view zoom ">
                                                    <div class="mb-1"><b class="text-left">Ghee</b></div>
                                                    <img src="img/groseries/ntea.jpg" class="img-fluid" alt="">
                                                </div>
                                                <div class="card-footer px-1">
                                                    <span class="float-left font-weight-bold">
                                                        <strong class="price">₹1439</strong>
                                                    </span>
                                                    <span class="float-right">
                                                        <a href="product.php">
                                                            <button class="btn btn-sm btn-primary">Buy</button>
                                                        </a>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                
                                </div>
                            </div>
                    <div class="col-md-12 mb-md-0 mb-4" id="wwr">
                        <div class="card card-image" style="background-image: url('./img/fveg.jpg');background-repeat: no-repeat;background-position:center">
                            <div class="text-white text-center d-flex align-items-center rgba-black-strong py-5 px-4 rounded">
                                <div>
                                    <h3 class="py-3 font-weight-bold">
                                    <strong>Vegetables</strong>
                                    </h3>
                                </div>
                                <div class="ml-auto">
                                   <a href="vegetables.php"> <button class="btn btn-sm btn-success ">View More</button></a>
                                </div>
                            </div>
                        </div>
                        <div class="owl-carousel owl-theme mt-3">
                                <div class="item">
                                    <div class=" card collection-card z-depth-1-half">
                                        <div class="view zoom ">
                                            <div class="mb-1"><b class="text-left">Cucumber</b></div>
                                            <img src="img/product-slider/v1.jpg" class="img-fluid" alt="">
                                        </div>
                                        <div class="card-footer px-1">
                                            <span class="float-left font-weight-bold">
                                                <strong class="price">₹30</strong>
                                            </span>
                                            <span class="float-right">
                                                <a href="product.php">
                                                    <button class="btn btn-sm btn-primary">Buy</button>
                                                </a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class=" card collection-card z-depth-1-half">
                                        <div class="view zoom ">
                                            <div class="mb-1"><b class="text-left">Green Pees</b></div>
                                            <img src="img/product-slider/v2.jpg" class="img-fluid" alt="">
                                        </div>
                                        <div class="card-footer px-1">
                                            <span class="float-left font-weight-bold">
                                                <strong class="price">₹1439</strong>
                                            </span>
                                            <span class="float-right">
                                                <a href="product.php">
                                                    <button class="btn btn-sm btn-primary">Buy</button>
                                                </a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class=" card collection-card z-depth-1-half">
                                        <div class="view zoom ">
                                            <div class="mb-1"><b class="text-left">Ginger</b></div>
                                            <img src="img/product-slider/v3.jpg" class="img-fluid" alt="">
                                        </div>
                                        <div class="card-footer px-1">
                                            <span class="float-left font-weight-bold">
                                                <strong class="price">₹1439</strong>
                                            </span>
                                            <span class="float-right">
                                                <a href="product.php">
                                                    <button class="btn btn-sm btn-primary">Buy</button>
                                                </a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class=" card collection-card z-depth-1-half">
                                        <div class="view zoom ">
                                            <div class="mb-1"><b class="text-left">Beetroot</b></div>
                                            <img src="img/product-slider/v5.jpg" class="img-fluid" alt="">
                                        </div>
                                        <div class="card-footer px-1">
                                            <span class="float-left font-weight-bold">
                                                <strong class="price">₹1439</strong>
                                            </span>
                                            <span class="float-right">
                                                <a href="product.php">
                                                    <button class="btn btn-sm btn-primary">Buy</button>
                                                </a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class=" card collection-card z-depth-1-half">
                                        <div class="view zoom ">
                                            <div class="mb-1"><b class="text-left">Carrot</b></div>
                                            <img src="img/product-slider/v6.jpg" class="img-fluid" alt="">
                                        </div>
                                        <div class="card-footer px-1">
                                            <span class="float-left font-weight-bold">
                                                <strong class="price">₹1439</strong>
                                            </span>
                                            <span class="float-right">
                                                <a href="product.php">
                                                    <button class="btn btn-sm btn-primary">Buy</button>
                                                </a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class=" card collection-card z-depth-1-half">
                                        <div class="view zoom ">
                                            <div class="mb-1"><b class="text-left">Cauliflower</b></div>
                                            <img src="img/product-slider/v7.jpg" class="img-fluid" alt="">
                                        </div>
                                        <div class="card-footer px-1">
                                            <span class="float-left font-weight-bold">
                                                <strong class="price">₹1439</strong>
                                            </span>
                                            <span class="float-right">
                                                <a href="product.php">
                                                    <button class="btn btn-sm btn-primary">Buy</button>
                                                </a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class=" card collection-card z-depth-1-half">
                                        <div class="view zoom ">
                                            <div class="mb-1"><b class="text-left">Groundnut</b></div>
                                            <img src="img/product-slider/v9.jpg" class="img-fluid" alt="">
                                        </div>
                                        <div class="card-footer px-1">
                                            <span class="float-left font-weight-bold">
                                                <strong class="price">₹1439</strong>
                                            </span>
                                            <span class="float-right">
                                                <a href="product.php">
                                                    <button class="btn btn-sm btn-primary">Buy</button>
                                                </a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>                        -->
                </div>
            </section>
            </div>
            </div>
            </div>
        </div>
    </section>

<!-- <section class="my-5">
    <div class="grid-flex">
        <div  style="background-image: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/280406/seattle-botanical-gardens.jpg);" class="col col-image rgba-green-strong">
        </div>
        <div class="col col-text ">
        <div class="Aligner-item">
            <p>&ldquo;I've learned that people will forget what you said, people will forget what you did, but people will never forget how you made them feel.&rdquo;
            <cite>- Maya Angelou</cite>
            </p>
        </div>
        </div>
    </div>
    
    <div class="grid-flex">
        <div class="col col-image" style="background-image: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/280406/seattle-library-sm.jpg);">
        &nbsp;
        </div>
        <div class="col col-text col-left">
        <div class="Aligner-item">
            <p>&ldquo;Simple is good.&rdquo;
            <cite>- Jim Henson</cite>
            </p>
        </div>
        </div>
    </div>
</section> -->
  <!-- Footer -->
 <?php include './footer.php' ?>

  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
  <script>
    $(document).ready(function(){
        $('#owl-xl').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    dots:false,
    autoplay:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:5
        },
        1000:{
            items:5
        }
    }
})



      $('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    autoplay:true,
    dots:false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:4
        }
    }
})


});
  </script>
</body>

</html>
