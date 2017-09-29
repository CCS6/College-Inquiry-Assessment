<!-- ========== Left Sidebar Start ========== -->
<div class="left side-menu">
    <div class="sidebar-inner slimscrollleft">
        <div class="user-details">
            <div class="user-info">
                <div class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><?php echo $_SESSION['firstname'].' '.$_SESSION['lastname']?><span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="javascript:void(0)"><i class="md md-face-unlock"></i> Profile<div class="ripple-wrapper"></div></a></li>
                        <li><a href="javascript:void(0)"><i class="md md-settings"></i> Settings</a></li>
                        <li><a href="javascript:void(0)"><i class="md md-lock"></i> Lock screen</a></li>
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
                <li>
                    <a href="index.php" class="waves-effect active"><i class="md md-home"></i><span> Dashboard </span></a>
                </li>
                <li><a href="users.php" class="waves-effect"><i class="md ion-android-social"></i>Users</a></li>
                <li><a href="colleges.php" class="waves-effect"><i class="md md-school"></i>Colleges</a></li>
                <li><a href="collegedegrees.php" class="waves-effect"><i class="md md-book"></i>College Degrees</a></li>
                <li><a href="questions.php" class="waves-effect"><i class="md md-question-answer"></i>Questions</a></li>
                <li><a href="answerkeys.php" class="waves-effect"><i class="md md-vpn-key"></i>Answer Keys</a></li>
                <li><a href="assesments.php" class="waves-effect"><i class="md md-view-list"></i>Assesment Records</a></li>

            </ul>
            <div class="clearfix"></div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<!-- Left Sidebar End -->
