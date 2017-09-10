<?php include "header.php";?>
<link href="css/form-elements.css" rel="stylesheet">
<link href="css/login-styles.css" rel="stylesheet">
<!-- Page Content -->
<section id="feature" class="section-padding wow fadeInUp delay-05s">
        <div class="col-md-12 text-center">
               <h2 class="service-title pad-bt15">Log-In</h2>
               <hr class="bottom-line">
        </div>
        <div class="container-fluid cards-row">
    <div class="container">
        <div class="row">
            <div class="col-sm-5">

                <div class="form-box">
                    <div class="form-top">
                        <div class="form-top-left">
                            <h3>Login to our site</h3>
                            <p>Enter username and password to log on:</p>
                        </div>
                        <div class="form-top-right">
                            <i class="fa fa-lock"></i>
                        </div>
                    </div>
                    <div class="form-bottom">
                        <form role="form" action="loginConfirm.php" method="post" class="login-form">
                            <div class="form-group">
                                <label class="sr-only" for="form-username">Username</label>
                                <input type="text" name="login-username" placeholder="Username" class="form-username form-control" id="form-username">
                            </div>
                            <div class="form-group">
                                <label class="sr-only" for="form-password">Password</label>
                                <input type="password" name="login-password" placeholder="Password" class="form-password form-control" id="form-password">
                            </div>
                            <button type="submit" name ="submit"class="btn">Sign in!</button>
                        </form>
                    </div>
                </div>

            </div>

            <div class="col-sm-1 middle-border"></div>
            <div class="col-sm-1"></div>

            <div class="col-sm-5">

                <div class="form-box">
                    <div class="form-top">
                        <div class="form-top-left">
                            <h3>Sign up now</h3>
                            <p>Fill in the form below to get instant access:</p>
                        </div>
                        <div class="form-top-right">
                            <i class="fa fa-pencil"></i>
                        </div>
                    </div>
                    <div class="form-bottom">
                        <!---->
                        <form role="form" action="registerConfirm.php" name="registration-form" method="post" class="registration-form">
                            <div class="form-group">
                                <label class="sr-only" for="form-email">First Name</label>
                                <input type="text" name="form-firstname" placeholder="First Name" class="form-firstname form-control">
                            </div>
                            <div class="form-group">
                                <label class="sr-only" for="form-about-yourself">Last Name</label>
                                <input type="text" name="form-lastname" placeholder="Last Name" class="form-lastname form-control">
                            </div>
                            <div class="form-group">
                                <label class="sr-only" for="form-first-name">Username</label>
                                <input type="text" name="form-username" placeholder="Username" class="form-username form-control">
                            </div>
                            <div class="form-group">
                                <label class="sr-only" for="form-last-name">Password</label>
                                <input type="password" name="form-password" placeholder="Password" class="form-password form-control">
                            </div>
                            <div class="form-group">
                                <label class="sr-only" for="form-last-name">Confirm Password</label>
                                <input type="password" name="form-confpass" placeholder="Confirm Password" class="form-confpass form-control">
                            </div>
                            <button type="submit" name="submit" class="btn">Sign me up!</button>
                            <br /><br />
                            <!--alert-success-->
                            <div class="alert" role="alert">
                              
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>

</section><!-- /.container -->
<?php include "footer.php"; ?>
