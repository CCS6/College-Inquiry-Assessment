<?php
include "header.php";
include 'config.php';
include 'classes/Colleges.php';

$c = new Colleges();

if(empty($_GET)){
  echo 'Page not Found!';
}else{

  $result = $c->getCollegedetail($db,$_GET['code']);
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
                <?=$result[0]['collegeDesc']?><br /><br />
              </div>

              <div role="tabpanel" class="tab-pane" id="degrees">
                <div id="degree-gap" class="container">
                  <button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="right" data-html="true" title="Careers: Farm appraiser, Agricultural policy analyst, Farm manager, Crop producer<br />Grain and livestock buyer, Market analyst, Financer, Quality controller<br />Marketing head">
                    Bachelor of Science in Agricultural Business
                  </button>
                </div>
                <div id="degree-gap" class="container">
                  <button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="right" data-html="true" title="Careers: Horticulturist, Fish farm manager, Irrigation Specialists, Rural practice surveyor<br />Grain and livestock buyer, Market analyst, Financer, Quality controller<br />Marketing head">
                    Bachelor of Science in Agriculture Major in Agronomy and Animal Science
                  </button>
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
