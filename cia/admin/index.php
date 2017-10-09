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
                            <div class="col-md-6 col-sm-6 col-lg-2">
                                <div class="mini-stat clearfix bx-shadow">
                                    <span class="mini-stat-icon bg-primary"><i class="ion-android-contacts"></i></span>
                                    <div class="mini-stat-info text-right text-muted">
                                        <?php echo '<span class="counter">'.$userCount.'</span>';?>
                                        Users
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-lg-2">
                                <div class="mini-stat clearfix bx-shadow">
                                    <span class="mini-stat-icon bg-warning"><i class="md md-school"></i></span>
                                    <div class="mini-stat-info text-right text-muted">
                                        <?php echo '<span class="counter">'.$collegeCount.'</span>';?>
                                        Colleges
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-lg-2">
                                <div class="mini-stat clearfix bx-shadow">
                                    <span class="mini-stat-icon bg-pink"><i class="md md-book"></i></span>
                                    <div class="mini-stat-info text-right text-muted">
                                        <?php echo '<span class="counter">'.$degreeCount.'</span>';?>
                                        Degrees
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-lg-2">
                                <div class="mini-stat clearfix bx-shadow">
                                    <span class="mini-stat-icon bg-success"><i class="md md-question-answer"></i></span>
                                    <div class="mini-stat-info text-right text-muted">
                                        <?php echo '<span class="counter">'.$questionCount.'</span>';?>
                                        Questions
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-lg-2">
                                <div class="mini-stat clearfix bx-shadow">
                                    <span class="mini-stat-icon bg-primary"><i class="md md-vpn-key"></i></span>
                                    <div class="mini-stat-info text-right text-muted">
                                        <?php echo '<span class="counter">'.$answerKeyCount.'</span>';?>
                                        Answer Keys
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-lg-2">
                                <div class="mini-stat clearfix bx-shadow">
                                    <span class="mini-stat-icon bg-warning"><i class="md md-view-list"></i></span>
                                    <div class="mini-stat-info text-right text-muted">
                                        <?php echo '<span class="counter">'.$resultTableCount.'</span>';?>
                                        Results
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End row-->

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="panel panel-border panel-primary">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Recommended Users per College</h3>
                                    </div>
                                    <div class="panel-body">
                                        <canvas id="bar" data-type="Bar"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- container -->
                </div> <!-- content -->
<?php include 'footer.php';?>
