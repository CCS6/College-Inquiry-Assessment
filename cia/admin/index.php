<?php
  require '../classes/Users.php';
  require '../config.php';


  $count = new Users();
  $userCount = $count->getTotalUsers($db);
  include 'header.php';
?>

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">

                        <!-- Start Widget -->
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-lg-3">
                                <div class="mini-stat clearfix bx-shadow">
                                    <span class="mini-stat-icon bg-primary"><i class="ion-android-contacts"></i></span>
                                    <div class="mini-stat-info text-right text-muted">
                                        <?php echo '<span class="counter">'.$userCount.'</span>';?>
                                        User Count
                                    </div>
                                    <div class="tiles-progress">
                                        <div class="m-t-20">
                                            <h5 class="text-uppercase">Users <span class="pull-right">57%</span></h5>
                                            <div class="progress progress-sm m-0">
                                                <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="57" aria-valuemin="0" aria-valuemax="100" style="width: 57%;">
                                                    <span class="sr-only">57% Complete</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End row-->

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="panel panel-border panel-primary">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Line Chart</h3>
                                    </div>
                                    <div class="panel-body">
                                        <canvas id="lineChart" data-type="Line" width="520" height="250"></canvas>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="panel panel-border panel-primary">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Bar chart</h3>
                                    </div>
                                    <div class="panel-body">
                                        <canvas id="bar" data-type="Bar" height="250" width="800" ></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- container -->

                </div> <!-- content -->

<?php include 'footer.php';?>