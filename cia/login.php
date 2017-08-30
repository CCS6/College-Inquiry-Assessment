<?php include "header.php"; ?>
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
                        <form role="form" action="" method="post" class="login-form">
                            <div class="form-group">
                                <label class="sr-only" for="form-username">Username</label>
                                <input type="text" name="form-username" placeholder="Username..." class="form-username form-control" id="form-username">
                            </div>
                            <div class="form-group">
                                <label class="sr-only" for="form-password">Password</label>
                                <input type="password" name="form-password" placeholder="Password..." class="form-password form-control" id="form-password">
                            </div>
                            <button type="submit" class="btn">Sign in!</button>
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
                        <form role="form" action="" method="post" class="registration-form">
                            <div class="form-group">
                                <label class="sr-only" for="form-first-name">Username</label>
                                <input type="text" name="form-first-name" placeholder="Username..." class="form-first-name form-control" id="form-first-name">
                            </div>
                            <div class="form-group">
                                <label class="sr-only" for="form-last-name">Password</label>
                                <input type="text" name="form-last-name" placeholder="Password..." class="form-last-name form-control" id="form-last-name">
                            </div>
                            <div class="form-group">
                                <label class="sr-only" for="form-email">First Name</label>
                                <input type="text" name="form-email" placeholder="First Name..." class="form-email form-control" id="form-email">
                            </div>
                            <div class="form-group">
                                <label class="sr-only" for="form-about-yourself">Last Name</label>
                                <input type="text" name="form-email" placeholder="Last Name..." class="form-email form-control" id="form-email">
                            </div>
                            <button type="submit" class="btn">Sign me up!</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>

</section><!-- /.container -->
<?php include "footer.php"; ?>
