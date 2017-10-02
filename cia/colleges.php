<?php
include "header.php";
include 'config.php';
include "classes/Colleges.php";
$c = new Colleges();
$result = $c->getColleges($db);

?>
<<section id="services" class="section-padding wow fadeInUp delay-05s">
     <div class="container">
       <div class="row">
         <div class="col-md-12 text-center">
           <h2 class="service-title pad-bt15">Colleges</h2>
           <hr class="bottom-line">
         </div>
         <?php
         $rowOpen = '';
         $rowClose = '';
         $i = 1;
         foreach($result as $key) {
             ?>
             <div class="col-md-3 col-sm-6 col-xs-12">
               <div class="service-item">
                 <h3><span><?= substr($key['collegeName'], 0, 1) ?></span><?= substr($key['collegeName'], 1) ?></h3>
                <p><?= $c->get_words($key['collegeAboutInfo'])?>...</p>
                 <a href="collegeDetail.php?code=<?=$key['collegeCode']?>">Learn more</a>
               </div>
             </div>
             <?php
             if(($i%4) == 0){
                 $rowClose = '</div>';
                $rowOpen = '<div class="row">';
                 echo $rowClose;
                 echo $rowOpen;
             }
             $i++;
         }
             ?>
       </div>
     </div>
 </section>

<!-- /.container -->
<?php include "footer.php"; ?>
