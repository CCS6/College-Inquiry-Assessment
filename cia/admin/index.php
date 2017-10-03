<?php
  require '../classes/Users.php';
  require '../classes/Colleges.php';
  require '../classes/Degrees.php';
  require '../classes/Questions.php';
  require '../classes/AnswerKeys.php';
  require '../classes/ResultTables.php';
  require '../config.php';


  $countUser = new Users();
  $userCount = $countUser->getTotalUsers($db);
  $countCollege = new Colleges();
  $collegeCount = $countCollege->getTotalColleges($db);
  $countDegree = new Degrees();
  $degreeCount = $countDegree->getTotalDegrees($db);
  $countquestion = new Questions();
  $questionCount = $countquestion->getTotalQuestions($db);
  $countAnswerKey = new AnswerKeys();
  $answerKeyCount = $countAnswerKey->getTotalAnswerKeys($db);
  $countResultTable = new ResultTables();
  $resultTableCount = $countResultTable->getTotalResultTables($db);
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
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-lg-3">
                                <div class="mini-stat clearfix bx-shadow">
                                    <span class="mini-stat-icon bg-warning"><i class="md md-school"></i></span>
                                    <div class="mini-stat-info text-right text-muted">
                                        <?php echo '<span class="counter">'.$collegeCount.'</span>';?>
                                        College Count
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-lg-3">
                                <div class="mini-stat clearfix bx-shadow">
                                    <span class="mini-stat-icon bg-pink"><i class="md md-book"></i></span>
                                    <div class="mini-stat-info text-right text-muted">
                                        <?php echo '<span class="counter">'.$degreeCount.'</span>';?>
                                        Degree Count
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-lg-3">
                                <div class="mini-stat clearfix bx-shadow">
                                    <span class="mini-stat-icon bg-success"><i class="md md-question-answer"></i></span>
                                    <div class="mini-stat-info text-right text-muted">
                                        <?php echo '<span class="counter">'.$questionCount.'</span>';?>
                                        Question Count
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-lg-3">
                                <div class="mini-stat clearfix bx-shadow">
                                    <span class="mini-stat-icon bg-primary"><i class="md md-vpn-key"></i></span>
                                    <div class="mini-stat-info text-right text-muted">
                                        <?php echo '<span class="counter">'.$answerKeyCount.'</span>';?>
                                        User Count
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-lg-3">
                                <div class="mini-stat clearfix bx-shadow">
                                    <span class="mini-stat-icon bg-warning"><i class="md md-view-list"></i></span>
                                    <div class="mini-stat-info text-right text-muted">
                                        <?php echo '<span class="counter">'.$resultTableCount.'</span>';?>
                                        College Count
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End row-->

                        <div class="row">
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
