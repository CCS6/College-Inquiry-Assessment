<?php include "header.php"; ?>
<link href="css/agri-styles.css" rel="stylesheet">
<section id="feature" class="section-padding wow fadeInUp delay-05s">
  <div class="col-md-12 text-center">
         <h2 class="service-title pad-bt15">College of Mass Communication</h2>
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
              <div role="tabpanel" class="tab-pane active" id="about">Vision<br />
                <?php
                    echo '<p class="text-muted">'.$_SESSION['masscomAboutInfo'].'</p>';
                ?>
              <br /><br /></div>
              <div role="tabpanel" class="tab-pane" id="degrees">
                <div id="degree-gap" class="container">
                  <button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="right" data-html="true" title="Careers: <br />Marketing head">
                      Bachelor of Mass Communication
                    </button>
                </div>
                <div id="degree-gap" class="container">
                  <button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="right" data-html="true" title="Careers: <br />Marketing head">
                      Bachelor of Mass Communication Major in Broadcasting
                    </button>
                </div>
              </div>
              <div role="tabpanel" class="tab-pane" id="messages">
                  <i class="glyphicon glyphicon-user">
                    <?php
                        echo '<p class="text-muted">'.$_SESSION['masscomDean'].'</p>';
                    ?>
                  </i><br /><br />
                  <i class="glyphicon glyphicon-earphone">
                    <?php
                        echo '<p class="text-muted">'.$_SESSION['masscomPhoneNumber'].'</p>';
                    ?>
                  </i><br /><br />
                  <i class="glyphicon glyphicon-envelope">
                    <?php
                        echo '<p class="text-muted">'.$_SESSION['masscomEmail'].'</p>';
                    ?>
                  </i><br /><br />
              </div>
          </div>
        </div>
      </div>
    </div>
</div>
  </div>
</section>
<?php include "footer.php"; ?>
