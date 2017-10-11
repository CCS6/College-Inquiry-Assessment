<?php
    include "header.php";
    require_once 'config.php';
    include 'classes/Colleges.php';
    include 'classes/Users.php';
    include 'classes/Degrees.php';


    $u=new Users();
    $c=new Colleges();
    $d=new Degrees();
    $result = $u->getUserbyId($db,$_SESSION['userID']);
    $arr = explode(',',$result[0]['resultCollege']);
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
                                                <div class="panel-group panel-group-joined" id="accordion-test">
                                                  <?php
                                                  foreach($arr as $value){
                                                      $resultCollege = $c->getCollegeDetail($db,$value);
                                                      $resultDegree = $d->getDegrees($db,$resultCollege);
                                                   ?>
                                                      <div class="panel-group panel-group-joined" id="accordion-test">
                                                        <?php foreach ($resultCollege as $colleges) {?>
                                                            <div class="panel panel-default">
                                                                <div class="panel-heading">
                                                                    <h4 class="panel-title">
                                                                        <a data-toggle="collapse" data-parent="#accordion-test-2" href="#<?=$colleges['collegeID']?>" aria-expanded="false" class="collapsed">
                                                                            <?=$colleges['collegeName']?>
                                                                        </a>
                                                                    </h4>
                                                                </div>
                                                                <div id="<?=$colleges['collegeID']?>" class="panel-collapse collapse">
                                                                    <div class="panel-body">
                                                                    <?php foreach ($resultDegree as $key) {?>
                                                                        <div class="panel panel-default">
                                                                            <div class="panel-heading">
                                                                                <h4 class="panel-title">
                                                                                    <a data-toggle="collapse" data-parent="#accordion-test-2" href="#<?=$key['degreeID']?>" aria-expanded="false" class="collapsed">
                                                                                        <?=$key['degreeDesc']?>
                                                                                    </a>
                                                                                </h4>
                                                                            </div>
                                                                            <div id="<?=$key['degreeID']?>" class="panel-collapse collapse">
                                                                                <div class="panel-body">
                                                                                    <p>
                                                                                      Jobs: <?=$key['degreeJobs']?>
                                                                                    </p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                      <?php }?>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                          <?php }?>
                                                <?php }?>
                                                  </div>
                                            </div>
                                        </div>
                                        <!-- Personal-Information -->
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
