
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
<?php  include 'navigation.php'; ?> 
   
<section class="products ">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3 mt-5 ">
                <div class="sticky">
                <!--  *** MENUS AND FILTERS ***-->
                <div class="card sidebar-menu">
                    <div class="card-header">
                        <h5 class="mb-0 text-uppercase">Farmers Proucts</h5>
                    </div>
                    <div class="card-body" id="prod-list">
                    <ul class="nav nav-pills flex-column category-menu">
                    <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
                    <br>
                        <li class="nav-item"><a href="#dl" class="nav-link">Fresh Vegetable</a></li>
                        <li class="nav-item"><a href="#grn" class="nav-link">Fruits</a></li>

                        <!-- <li class="nav-item"><a href="#grn" class="nav-link">Grain</a></li> -->
                    </ul>
                    
                    </div>
                </div>
                
                </div>
            </div>
	
            <div class="col-md-9">
            <section class="text-center my-5"><br>
                <!-- <p class="grey-text text-left w-responsive mb-3">Duis aute irure dolor in reprehenderit in
                    voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit est laborum.</p> -->
                <div class="row">
                    <div class="col-md-12 mb-md-0 mb-4">
                        
						
                                      
                                <div class="text-left mt-3" id="dl">
								 <h3 class="mt-4 font-weight-bold">
                                    <strong>Fresh Vegetable</strong>
										
                                    </h3>
								
									
                                </div>
                                <div class="owl-carousel owl-theme mt-3">
                                <div class="item">
                                    <div class=" card collection-card z-depth-1-half">
                                        <div class="view zoom ">
                                            <div class="mb-1"><b class="text-left">Spinasch</b></div>
                                            <img src="img/spnch.jpg" class="img-fluid" alt="">
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
                                            <div class="mb-1"><b class="text-left">Drumsticks</b></div>
                                            <img src="img/drs.jpg" class="img-fluid" alt="">
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
                                            <div class="mb-1"><b class="text-left">Lady Finger</b></div>
                                            <img src="img/ldf.jpg" class="img-fluid" alt="">
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
                                    <!-- Collection card -->
                        </div>
						            
                                <div class="text-left" id="chna">
								 <h3 class=" font-weight-bold">
                                    <strong>Fruits</strong>
							
                                    </h3>
								
									
                                </div>
                        <div class="owl-carousel owl-theme" style="height: 350px;">
                                <div class="item">
                                    <div class=" card collection-card z-depth-1-half">
                                        <div class="view zoom ">
                                            <div class="mb-1"><b class="text-left">Grapes</b></div>
                                            <img src="img/grps.jpg" class="img-fluid" alt="">
                                        </div>
                                        <div class="card-footer px-1">
                                            <span class="float-left font-weight-bold">
                                                <strong class="price">₹130</strong>
                                            </span>
                                            <span class="float-right">
                                                <a href="product.html">
                                                    <button class="btn btn-sm btn-primary">Buy</button>
                                                </a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class=" card collection-card z-depth-1-half">
                                        <div class="view zoom ">
                                            <div class="mb-1"><b class="text-left">Delhi Apple</b></div>
                                            <img src="img/bbh.jpg" class="img-fluid" alt="">
                                        </div>
                                        <div class="card-footer px-1">
                                            <span class="float-left font-weight-bold">
                                                <strong class="price">₹239</strong>
                                            </span>
                                            <span class="float-right">
                                                <a href="product.html">
                                                    <button class="btn btn-sm btn-primary">Buy</button>
                                                </a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class=" card collection-card z-depth-1-half">
                                        <div class="view zoom ">
                                            <div class="mb-1"><b class="text-left">Kiwi</b></div>
                                            <img src="img/kwi.jpg" class="img-fluid" alt="">
                                        </div>
                                        <div class="card-footer px-1">
                                            <span class="float-left font-weight-bold">
                                                <strong class="price">₹99</strong>
                                            </span>
                                            <span class="float-right">
                                                <a href="product.html">
                                                    <button class="btn btn-sm btn-primary">Buy</button>
                                                </a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class=" card collection-card z-depth-1-half">
                                        <div class="view zoom ">
                                            <div class="mb-1"><b class="text-left">Peach</b></div>
                                            <img src="img/pch.jpg" class="img-fluid" alt="">
                                        </div>
                                        <div class="card-footer px-1">
                                            <span class="float-left font-weight-bold">
                                                <strong class="price">₹39</strong>
                                            </span>
                                            <span class="float-right">
                                                <a href="product.html">
                                                    <button class="btn btn-sm btn-primary">Buy</button>
                                                </a>
                                            </span>
                                        </div>
                                    </div>
                                </div>

                              
                                <!-- Collection card -->
                         </div>
						            
                    
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

<?php  include 'footer.php'; ?> 
  <!-- /Start your project here-->

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
    nav:false,
    dots:false,
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
    nav:false,
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
