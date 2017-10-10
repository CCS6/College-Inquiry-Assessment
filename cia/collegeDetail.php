<?php
include "header.php";
include 'config.php';
include 'classes/Colleges.php';
include 'classes/Degrees.php';

$c = new Colleges();
$d = new Degrees();
if(empty($_GET)){
  echo 'Page not Found!';
}else{
  $result = $c->getCollegedetail($db,$_GET['code']);
  $resultDegree = $d->getDegrees($db,$result);
  // echo '<pre>';
  // print_r($resultDegree);
  // echo '</pre>';
?>

<link href="css/agri-styles.css" rel="stylesheet">
<section id="feature" class="section-padding wow fadeInUp delay-05s">
  <div class="col-md-12 text-center">
    <h2 class="service-title pad-bt15"><?= $result[0]['collegeName']?></h2>
    <hr class="bottom-line">
  </div>
  <div class="container-fluid cards-row">
    <div class="container">
      <div id="collegeInfo" class="row">
        <div id="college-info"class="col-md-6">
          <div class="card">
            <ul class="nav nav-tabs" role="tablist">
              <li role="presentation" class="active"><a href="#about" aria-controls="home" role="tab" data-toggle="tab">About</a></li>
              <li role="presentation"><a href="#degrees" aria-controls="profile" role="tab" data-toggle="tab">Degrees</a></li>
              <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Contact Us</a></li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
              <div role="tabpanel" class="tab-pane active" id="about">
                <?=$result[0]['collegeAboutInfo']?><br /><br />
              </div>
            <div role="tabpanel" class="tab-pane" id="degrees">
            <div class="panel-group panel-group-joined" id="accordion-test">
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
                <?php } ?>
              </div>
              </div>
              <div role="tabpanel" class="tab-pane" id="messages">
                <i class="glyphicon glyphicon-user"><?= $result[0]['collegeDean']?></i><br /><br />
                <i class="glyphicon glyphicon-earphone"><?= $result[0]['collegePhoneNumber']?></i><br /><br />
                <i class="glyphicon glyphicon-envelope"><?= $result[0]['collegeEmail']?></i><br /><br />
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php
}
?>
<!-- /.container -->
<?php include "footer.php"; ?>
