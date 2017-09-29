<?php
  include 'header.php';
  include '../classes/Colleges.php';
  $user = new Colleges();
  $result = $user->getColleges($db);
?>

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">

                        <!-- Page-Title -->
                        <div class="row">
                            <div class="col-sm-12">
                                <h4 class="pull-left page-title">Colleges Table</h4>
                            </div>
                        </div>


                        <div class="panel">

                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="m-b-30">
                                            <button id="addToTable" class="btn btn-primary waves-effect waves-light">Add <i class="fa fa-plus"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <table class="table table-bordered table-striped" id="datatable-editable">
                                    <thead>
                                        <tr>
                                            <th>College Code</th>
                                            <th>College Name</th>
                                            <th>College About Info</th>
                                            <th>College Dean</th>
                                            <th>College Email</th>
                                            <th>College Phone Number</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                      <?php
                                          foreach($result as $key){
                                      ?>
                                      <tr class="gradeX">
                                        <td><?=$key['collegeCode']?></td>
                                        <td><?=$key['collegeName']?></td>
                                        <td><?=$key['collegeAboutInfo']?></td>
                                        <td><?=$key["collegeDean"]?></td>
                                        <td><?=$key["collegeEmail"]?></td>
                                        <td><?=$key["collegePhoneNumber"]?></td>
                                        <td class="actions">
                                                  <a href="#" data-rel="<?=$key['collegeID']?>" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
                                                  <a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
                                                  <a href="#" data-rel="<?=$key['collegeID']?>" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
                                                  <a href="#" data-rel="<?=$key['collegeID']?>" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
                                        </td>
                                      </tr>
                                      <?php
                                          }
                                      ?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- end: page -->

                        </div> <!-- end Panel -->

                    </div> <!-- container -->

                </div> <!-- content -->

<?php include 'footer.php';?>
