<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Cart (4) - Farmers</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
</head>
<style>
.cc-selector input{
    margin:0;padding:0;
    -webkit-appearance:none;
       -moz-appearance:none;
            appearance:none;
}


.visa{background-image:url('./img/icici.png');}
.mastercard{background-image:url('./img/sbi.png');}
.paytm{background-image:url('./img/paytm.png');}
.mobiqwik{background-image:url('./img/mobiqwik.png');}

.freecharge{background-image:url('./img/fc.png');}
.oxigen{background-image:url('./img/oxygen.png');}


.cc-selector-2 input:active +.drinkcard-cc, .cc-selector input:active +.drinkcard-cc{opacity: .9;}
.cc-selector-2 input:checked +.drinkcard-cc, .cc-selector input:checked +.drinkcard-cc{
    -webkit-filter: none;
       -moz-filter: none;
            filter: none;
}
.drinkcard-cc{
    cursor:pointer;
    background-size:contain;
    background-repeat:no-repeat;
    display:inline-block;
    width:100px;height:70px;
    -webkit-transition: all 100ms ease-in;
       -moz-transition: all 100ms ease-in;
            transition: all 100ms ease-in;
    -webkit-filter: brightness(1.8) grayscale(1) opacity(.7);
       -moz-filter: brightness(1.8) grayscale(1) opacity(.7);
            filter: brightness(1.8) grayscale(1) opacity(.7);
}
.drinkcard-cc:hover{
    -webkit-filter: brightness(1.2) grayscale(.5) opacity(.9);
       -moz-filter: brightness(1.2) grayscale(.5) opacity(.9);
            filter: brightness(1.2) grayscale(.5) opacity(.9);
}

/* Extras */
a:visited{color:#888}
a{color:#444;text-decoration:none;}
/* p{margin-bottom:.3em;}
* { font-family:monospace; } */
.cc-selector-2 input{ margin: 5px 0 0 12px; }
.cc-selector-2 label{ margin-left: 7px; }
span.cc{ color:#6d84b4 }
</style>

<body>
  <!--Navbar-->
  <?php include './navigation.php'; ?>
 <!--/.Navbar-->
  <section class="pt-5">
    <div class="container mt-4">
      <div class="row">
        <div class="col-md-6">
          <h4 class="mb-3">Billing address</h4>
          <form class="needs-validation" novalidate="">
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="firstName">Full Name</label>
                <input type="text" class="form-control" id="firstName" placeholder="" value="" required="">
                <div class="invalid-feedback">
                  Valid first name is required.
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="lastName">Phone</label>
                <input type="text" class="form-control" id="lastName" placeholder="" value="" required="">
                <div class="invalid-feedback">
                  Valid last name is required.
                </div>
              </div>
                <div class="col-md-6 mb-3">
                    <label for="email">Email </label>
                    <input type="email" class="form-control" id="email" placeholder="you@example.com">
                    <div class="invalid-feedback">
                        Please enter a valid email address for shipping updates.
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="email">Pincode</label>
                    <input type="email" class="form-control" id="email" placeholder="">
                    <div class="invalid-feedback">
                        Please enter a valid email address for shipping updates.
                    </div>
                </div>

            </div>
            <div class="mb-3">
              <label for="address">Address</label>
              <input type="text" class="form-control" id="address" placeholder="1234 Main St" required="">
              <div class="invalid-feedback">
                Please enter your shipping address.
              </div>
            </div>

            <div class="mb-3">
              <label for="address2">Address 2 <span class="text-muted">(Optional)</span></label>
              <input type="text" class="form-control" id="address2" placeholder="Apartment or suite">
            </div>

            <hr class="mb-4">
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="same-address">
              <label class="custom-control-label" for="same-address">Shipping address is the same as my billing address</label>
            </div>
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="save-info">
              <label class="custom-control-label" for="save-info">Save this information for next time</label>
            </div>
            <hr class="mb-4">
          </form>
        </div>
        <div class="col-md-6">
            <h4 class="my-3">Payment Methods</h4>
            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab"
                    aria-controls="pills-home" aria-selected="true">Card Payment</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab"
                    aria-controls="pills-contact" aria-selected="false">Wallets Payment</a>
                </li>

              </ul>
              <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                <div class="row">
                    <div class="col-md-12"><h5>Pay By Card</h5></div>
                    <!-- Default inline 1-->
                  <div class="col-md-12 my-3">
                    <div class="form-group">
                      <div class="custom-control custom-radio custom-control-inline ">
                          <input type="radio" class="custom-control-input" id="defaultInline1" name="inlineDefaultRadiosExample">
                          <label class="custom-control-label" for="defaultInline1">Credit Card</label>
                        </div>
                        
                        <!-- Default inline 2-->
                        <div class="custom-control custom-radio custom-control-inline">
                          <input type="radio" class="custom-control-input" id="defaultInline2" name="inlineDefaultRadiosExample">
                          <label class="custom-control-label" for="defaultInline2">Debit Card</label>
                        </div>
                      </div>
                  </div>
                    
                    <!-- Default inline 3-->
                <div class="col-md-6 mb-3">
                        
                    <label for="cc-name">Name on card</label>
                    <input type="text" class="form-control" id="cc-name" placeholder="" required="">
                    
                    <div class="invalid-feedback">
                        Name on card is required
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                <label for="cc-number">Card number</label>
                <input type="text" class="form-control" id="cc-number" placeholder="" required="">
                <div class="invalid-feedback">
                    Card number is required
                </div>
                </div>
            </div>
                <div class="row">
                  <div class="col-md-3 mb-3">
                    <label for="cc-expiration">Expiration</label>
                    <input type="text" class="form-control" id="cc-expiration" placeholder="" required="">
                    <div class="invalid-feedback">
                      Expiration date required
                    </div>
                  </div>
                  <div class="col-md-3 mb-3">
                    <label for="cc-expiration">CVV</label>
                    <input type="text" class="form-control" id="cc-cvv" placeholder="" required="">
                    <div class="invalid-feedback">
                      Security code required
                    </div>
                  </div>
                </div>
                <button class="btn btn-primary btn-block" type="submit">Continue to checkout</button>
                </div>
                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                    <h5>Pay by UPI</h5>
                    <div class="col-md-6 mb-3">
                        <input type="text" class="form-control" id="cc-cvv" placeholder=" Enter VPA" required="">
                        <label for="materialRegisterFormLastName text-muted">Ex. 123@okicicib, 123@okhdfcbank</label>
                        <br>
                        <button class="btn btn-primary" type="submit">Continue to checkout</button>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                    <h5>Pay by Wallets</h5>
                    <div class="col-md-12 mb-3">
                        <div class="cc-selector">
                            <input id="paytm" type="radio" name="credit-card" value="paytm" />
                            <label class="drinkcard-cc paytm"for="paytm"></label>
                            <input id="oxigen" type="radio" name="credit-card" value="oxigen" />
                            <label class="drinkcard-cc oxigen"for="oxigen"></label>
                            <input id="freecharge" type="radio" name="credit-card" value="freecharge" />
                            <label class="drinkcard-cc freecharge"for="freecharge"></label>
                            <input id="mobiqwik" type="radio" name="credit-card" value="mobiqwik" />
                            <label class="drinkcard-cc mobiqwik"for="mobiqwik"></label>
                        </div>       
                          <br>
                          <div>
                              <button class="btn btn-primary" type="submit">Continue to checkout</button>
                          </div>    
                    </div>
                </div>
                
              </div>
        </div>
      </div>

    </div>
  </section>
  <!-- Footer -->
  <?php include './footer.php'; ?>

  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <script>
    $(document).ready(function(){
        $('input[type="radio"]').click(function(){
            var demovalue = $(this).val(); 
            $("div.myDiv").hide();
            $("#show"+demovalue).show();
        });
    });
    </script>
</body>

</html>
