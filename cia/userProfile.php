<?php include "header.php"; /*require 'classes/Session.php';
    $f = new Session();*/
?>
<section id="feature" class="section-padding wow fadeInUp delay-05s">
    <div class="container-fluid cards-row">
        <div class="container">
            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                <div class="wraper container-fluid">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="bg-picture text-center" style="background-image:url('images/big/bg.jpg')">
                                <div class="bg-picture-overlay"></div>
                                <div class="profile-info-name">
                                    <h3 class="text-white">User Profile</h3>
                                    <hr class="bottom-line">
                                </div>
                            </div>
                            <!--/ meta -->
                        </div>
                    </div>
                    <div class="row user-tabs">
                        <div class="col-lg-6 col-md-9 col-sm-9">
                            <ul class="nav nav-tabs tabs">
                            <li class="active tab">
                                <a href="#home-2" data-toggle="tab" aria-expanded="false" class="active">
                                    <span class="visible-xs"><i class="fa fa-home"></i></span>
                                    <span class="hidden-xs">About Me</span>
                                </a>
                            </li>
                            <li class="tab" >
                                <a href="#settings-2" data-toggle="tab" aria-expanded="false">
                                    <span class="visible-xs"><i class="fa fa-cog"></i></span>
                                    <span class="hidden-xs">Settings</span>
                                </a>
                            </li>
                        <div class="indicator"></div></ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">

                        <div class="tab-content profile-tab-content">
                            <div class="tab-pane active" id="home-2">
                                <div class="row">
                                    <div class="col-md-4">
                                        <!-- Personal-Information -->
                                        <div class="panel panel-default panel-fill">
                                            <div class="panel-heading">
                                                <h3 class="panel-title">Personal Information</h3>
                                            </div>
                                            <div class="panel-body">
                                                <div class="about-info-p">
                                                    <strong>Full Name</strong>
                                                    <br/>
                                                    <?php
                                                        echo '<p class="text-muted">'.$_SESSION['firstname'].' '.$_SESSION['lastname'].'</p>';
                                                    ?>
                                                </div>
                                                <div class="about-info-p">
                                                    <strong>Type</strong>
                                                    <br/>
                                                    <?php
                                                        echo '<p class="text-muted">'.$_SESSION['type'].'</p>';
                                                    ?>
                                                </div>
                                                <div class="about-info-p">
                                                    <strong>Username</strong>
                                                    <br/>
                                                    <?php
                                                        echo '<p class="text-muted">'.$_SESSION['username'].'</p>';
                                                    ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-md-8">
                                        <!-- Personal-Information -->
                                        <div class="panel panel-default panel-fill">
                                            <div class="panel-heading">
                                                <h3 class="panel-title">Assessment Results</h3>
                                            </div>
                                            <div class="panel-body">
                                                <p>
                                                    Answers from a user's most recent assesment shall be shown here.(CollegeName,Degree,Jobs).
                                                </p>
                                            </div>
                                        </div>
                                        <!-- Personal-Information -->
                                    </div>

                                </div>
                            </div>
                            <div class="tab-pane" id="settings-2">
                                <!-- Personal-Information -->
                                <!--TO BE DISCUSSED W/ THE TEAM-->
                                <!--<div class="panel panel-default panel-fill">-->
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Edit Profile</h3>
                                    </div>
                                    <div class="panel-body">
                                        <div class="panel panel-default panel-fill" id='userSettings'>
                                            <form role="form" class="user-settings">
                                                <div class="form-group">
                                                    <label for="FullName">First Name</label>
                                                    <input type="text" placeholder="John" id="firstName" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label for="Email">Last Name</label>
                                                    <input type="email" placeholder="Doe" id="lastName" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label for="Username">Username</label>
                                                    <input type="text" placeholder="john" id="username" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label for="Password">Password</label>
                                                    <input type="password" placeholder="6 - 15 Characters" id="password" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label for="RePassword">Re-Password</label>
                                                    <input type="password" placeholder="6 - 15 Characters" id="RePassword" class="form-control">
                                                </div>
                                                <button class="btn btn-primary waves-effect waves-light w-md" type="submit">Save</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!-- Personal-Information -->
                            </div>
                        </div>
                    </div>
                    </div>
                </div> <!-- container -->

                </div> <!-- content -->
            </div>
        </div>
    </div>
</section>
<?php include "footer.php"?>
