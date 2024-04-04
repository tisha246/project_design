<?php
   include_once('header.php');
?>
<!-- inner page banner -->
<div id="inner_banner" class="section inner_banner_section">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="full">
          <div class="title-holder">
            <div class="title-holder-cell text-left">
              <h1 class="page-title">Shopping Cart</h1>
              <ol class="breadcrumb">
                <li><a href="index">Home</a></li>
                <li class="active">Shopping Cart</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- end inner page banner -->
<div class="section padding_layout_1 Shopping_cart_section">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-12">
        <div class="product-table">
          <table class="table">
            <thead>
              <tr>
                <th>Product</th>
                <th>Quantity</th>
                <th class="text-center">Price</th>
                <th class="text-center">Total</th>
                <th> </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="col-sm-8 col-md-6"><div class="media"> <a class="thumbnail pull-left" href="#"> <img class="media-object" src="icon/p1.png" alt="#"></a>
                    <div class="media-body">
                      <h4 class="media-heading"><a href="#">Norton Internet Security</a></h4>
                      <span>Status: </span><span class="text-success">In Stock</span> </div>
                  </div></td>
                <td class="col-sm-1 col-md-1" style="text-align: center"><input class="form-control" value="3" type="email">
                </td>
                <td class="col-sm-1 col-md-1 text-center"><p class="price_table">$25.00</p></td>
                <td class="col-sm-1 col-md-1 text-center"><p class="price_table">$25.00</p></td>
                <td class="col-sm-1 col-md-1"><button type="button" class="bt_main"><i class="fa fa-trash"></i> Remove</button></td>
              </tr>
              <tr>
                <td class="col-md-6"><div class="media"> <a class="thumbnail pull-left" href="#"> <img class="media-object" src="icon/p2.png" alt="#"></a>
                    <div class="media-body">
                      <h4 class="media-heading"><a href="#">Kaspersky Internet Security</a></h4>
                      <span>Status: </span><span class="text-danger">Out Stock</span> </div>
                  </div></td>
                <td class="col-md-1" style="text-align: center"><input class="form-control" value="2" type="email">
                </td>
                <td class="col-sm-1 col-md-1 text-center"><p class="price_table">$25.00</p></td>
                <td class="col-sm-1 col-md-1 text-center"><p class="price_table">$25.00</p></td>
                <td class="col-md-1"><button type="button" class="bt_main"><i class="fa fa-trash"></i> Remove</button></td>
              </tr>
              <tr>
                <td class="col-sm-8 col-md-6"><div class="media"> <a class="thumbnail pull-left" href="#"> <img class="media-object" src="icon/p3.png" alt="#"></a>
                    <div class="media-body">
                      <h4 class="media-heading"><a href="#">Mcafee Livesafe Antivirus</a></h4>
                      <span>Status: </span><span class="text-success">In Stock</span> </div>
                  </div></td>
                <td class="col-sm-1 col-md-1" style="text-align: center"><input class="form-control" value="3" type="email">
                </td>
                <td class="col-sm-1 col-md-1 text-center"><p class="price_table">$25.00</p></td>
                <td class="col-sm-1 col-md-1 text-center"><p class="price_table">$25.00</p></td>
                <td class="col-sm-1 col-md-1"><button type="button" class="bt_main"><i class="fa fa-trash"></i> Remove</button></td>
              </tr>
              <tr>
                <td class="col-md-6"><div class="media"> <a class="thumbnail pull-left" href="#"> <img class="media-object" src="icon/p4.png" alt="#"></a>
                    <div class="media-body">
                      <h4 class="media-heading"><a href="#">Norton Internet Security</a></h4>
                      <span>Status: </span><span class="text-danger">Out Stock</span> </div>
                  </div></td>
                <td class="col-md-1" style="text-align: center"><input class="form-control" value="2" type="email">
                </td>
                <td class="col-sm-1 col-md-1 text-center"><p class="price_table">$25.00</p></td>
                <td class="col-sm-1 col-md-1 text-center"><p class="price_table">$25.00</p></td>
                <td class="col-md-1"><button type="button" class="bt_main"><i class="fa fa-trash"></i> Remove</button></td>
              </tr>
            </tbody>
          </table>
          
        </div>
        
      </div>
    </div>
  </div>
</div>
      <?php
         include_once('footer.php');
      ?>