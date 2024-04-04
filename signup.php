<?php
   include_once('header.php');
?>
      <div class="brand_color">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>Signup Here</h2>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- contact -->
    <div class="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <form class="main_form" action ="" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                <input class="form-control" placeholder="Your name" type="text" name="cust_name">
                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                <input class="form-control" placeholder="Email" type="email" name="cust_email">
                            </div>
                            <div class=" col-md-12">
                                <input class="form-control" placeholder="Password" type="text" name="cust_pass">
                            </div>
                            <div class=" col-md-12">
                                <input class="form-control" placeholder="Mobile Number" type="number" name="cust_mobile">
                            </div>
                            <div class=" col-md-12">
                                <input class="form-control" placeholder="Image" type="file" name="img">
                            </div>
                            <div class=" col-md-12">
                               
                               <div>
                               <!-- <input type="submit" name="submit" value="Signup" id=""></div> -->
                                <button class="btn btn-dark"name="signup" value="signup">Signup </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- end contact -->
     <?php
         include_once('footer.php');
      ?>