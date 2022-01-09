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

<body>
  <!--Navbar-->
  <?php include './navigation.php'; ?>
  <!--/.Navbar-->
  
  <!-- Banner -->

  <!-- /.Banner -->

  <div class="container ">

    <section id="popular" class="text-center py-5">
      <!-- Section Heading -->
      <h3 class="section-heading mb-1 h1 mt-4">Your Cart</h3>
      <h5 class="pb-1">Your favourite products are now in the basket</h5>

      <div class="row">
        <!-- Cart List -->
        <!--Grid column-->
        <div class="col-md-12 my-3 text-left">

            <div class="card">
                <div class="card-body">

                    <!-- Shopping Cart table -->
                    <div class="table-responsive">

                        <table class="table product-table">

                            <!-- Table head -->
                            <thead class="mdb-color lighten-5">
                                <tr>
                                    <th></th>
                                    <th class="font-weight-bold">
                                        <strong>Product</strong>
                                    </th>
                                    <th class="font-weight-bold">
                                        <strong>Category</strong>
                                    </th>
                                    <th></th>
                                    <th class="font-weight-bold">
                                        <strong>Price</strong>
                                    </th>
                                    <th class="font-weight-bold">
                                        <strong>Quantity</strong>
                                    </th>
                                    <th class="font-weight-bold">
                                        <strong>Amount</strong>
                                    </th>
                                    <th></th>
                                </tr>
                            </thead>
                            <!-- /.Table head -->

                            <!-- Table body -->
                            <tbody>

                                <!-- First row -->
                                <tr>
                                    <th scope="row">
                                        <img src="img/weiving/x1.jpg" alt="" class="img-fluid z-depth-0">
                                    </th>
                                    <td>
                                        <h5 class="mt-3">
                                            <strong>Silk Saree</strong>
                                        </h5>
                                        <p class="text-muted">KanchiPuram Silk Product</p>
                                    </td>
                                    <td>Saree</td>
                                    <td></td>
                                    <td>₹3490.54</td>
                                    <td>
                                        <i class="fa fa-minus-circle" aria-hidden="true"></i>
                                        <input type="number" value="1" aria-label="Search" class="form-control" style="width: 100px">
                                        <i class="fa fa-plus-circle" aria-hidden="true"></i>
                                    </td>
                                    <td class="font-weight-bold">
                                        <strong>₹3490.54</strong>
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-sm btn-danger waves-effect waves-light" data-toggle="tooltip" data-placement="top" title="" data-original-title="Remove item">X
                                        </button>
                                    </td>
                                </tr>
                                <!-- /.First row -->
                                <tr class="pull-xs-left">
                                    <td colspan="3"></td>
                                    <td>
                                        <h4 class="mt-2">
                                            <strong>Total</strong>
                                        </h4>
                                    </td>
                                    <td class="text-right">
                                        <h4 class="mt-2">
                                            <strong>₹3200</strong>
                                        </h4>
                                    </td>
                                    <td colspan="3" class="text-right">
                                      <a href="payment.php">
                                        <button type="button"  class="btn btn-primary btn-rounded waves-effect waves-light">Proceed To Checkout
                                            <i class="fa fa-angle-right right"></i>
                                        </button>
                                      </a>  
                                    </td>
                                </tr>
                                <!-- Fifth row -->

                            </tbody>
                            <!-- /.Table body -->

                        </table>

                    </div>
                    <!-- /.Shopping Cart table -->

                </div>

            </div>

        </div>
        <!--Grid column-->
        <!-- /.Cart List -->
      </div>

    </section>
  </div>

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
</body>

</html>
