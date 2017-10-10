<!-- ========== Left Sidebar Start ========== -->
<?php
    $urls = ["index.php","users.php","colleges.php","collegedegrees.php","questions.php","answerkeys.php","assessments.php"];
    $classes = ["md md-home","md ion-android-social","md md-school","md md-book","md md-question-answer","md md-vpn-key","md md-view-list"];
    $desc = ["Dashboard","Users","Colleges","College Degrees","Questions","Answer Keys","Assesment Records"];
?>
<div class="left side-menu">
    <div class="sidebar-inner slimscrollleft">
        <div class="user-details">
            <div class="user-info">
                <div class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><?php echo $_SESSION['firstname'].' '.$_SESSION['lastname']?><span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="../assessment.php"><i class="md md-check"></i>Assessment</a></li>
                        <?php if($s->isLoggedIn() == 1 && $s->logOut() == 1){
                          echo '<li><a href="../index.php?page=logout" title="Log-Out"><i class="md md-settings-power"></i>Logout</a></li>';
                        }?>
                    </ul>
                </div>
                <p class="text-muted m-0"><?=$_SESSION['type'];?></p>
            </div>
        </div>
        <!--- Divider -->
        <div id="sidebar-menu">
            <ul>
                <?php $i; for($i = 0;$i < 7;$i++){ ?>
                <li><a href="<?=$urls[$i];?>" class="waves-effect"><i class="<?=$classes[$i];?>"></i><span> <?=$desc[$i];?> </span></a></li>
                <?php }?>
            </ul>
            <div class="clearfix"></div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<!-- Left Sidebar End -->
