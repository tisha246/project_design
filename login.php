<?php
   include_once('header.php');
?>
      <div class="brand_color">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>Login US</h2>
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

                    <form class="main_form" action="" method="">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                <input class="form-control" placeholder="User Name" type="text" name="cust_email">
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                <input class="form-control" placeholder="Password" type="text" name="cust_pass">
                            </div>
                           
                            <div>
                                <input class="btn btn-primary py-3 px-5" name="login" type="submit" value="Login">&ensp;&ensp;
								<a href="signup" class="btn btn-dark py-3 px-5">Signup</a>
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