<?php
  include 'header.php';
  include '../classes/Users.php';
  $user = new Users();
  $result = $user->getUsers($db);
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
                                <h4 class="pull-left page-title">Editable Table</h4>
                                <ol class="breadcrumb pull-right">
                                    <li><a href="#">Moltran</a></li>
                                    <li><a href="#">Tables</a></li>
                                    <li class="active">Editable Table</li>
                                </ol>
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
                                            <th>Account No</th>
                                            <th>Account Type</th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>User Name</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                      <?php
                                        foreach($result as $key){

                                              $html = '';
                                              $html.='<tr class="gradeX">';
                                                $html.="<td>".$key['acctID']."</td>";
                                                $html.="<td>".$key['acctType']."</td>";
                                                $html.="<td>".$key['firstName']."</td>";
                                                $html.="<td>".$key["lastName"]."</td>";
                                                $html.="<td>".$key["username"]."</td>";
                                                $html.='<td class="actions">';
                                                          $html.='<a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>';
                                                          $html.='<a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>';
                                                          $html.='<a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>';
                                                          $html.='<a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>';
                                                $html.='</td>';
                                              $html.='</tr>';

                                              echo $html;
                                        }
                                      ?>

                                        <!--<tr class="gradeX">
                                            <td>Trident</td>
                                            <td>Internet
                                                Explorer 4.0
                                            </td>
                                            <td>Win 95+</td>
                                            <td>Trident</td>
                                            <td>Internet
                                                Explorer 4.0
                                            </td>
                                            <td>Win 95+</td>
                                            <td class="actions">
                                                <a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
                                                <a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
                                                <a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
                                                <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
                                            </td>
                                        </tr>
                                        <tr class="gradeC">
                                            <td>Trident</td>
                                            <td>Internet
                                                Explorer 4.0
                                            </td>
                                            <td>Win 95+</td>
                                            <td>Trident</td>
                                            <td>Internet
                                                Explorer 4.0
                                            </td>
                                            <td>Win 95+</td>
                                            <td class="actions">
                                                <a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
                                                <a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
                                                <a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
                                                <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
                                            </td>
                                        </tr>

                                        <tr class="gradeA">
                                          <td>Trident</td>
                                          <td>Internet
                                              Explorer 4.0
                                          </td>
                                          <td>Win 95+</td>
                                          <td>Trident</td>
                                          <td>Internet
                                              Explorer 4.0
                                          </td>
                                          <td>Win 95+</td>
                                            <td class="actions">
                                                <a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
                                                <a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
                                                <a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
                                                <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
                                            </td>
                                        </tr>
                                        <tr class="gradeU">
                                          <td>Trident</td>
                                          <td>Internet
                                              Explorer 4.0
                                          </td>
                                          <td>Win 95+</td>
                                          <td>Trident</td>
                                          <td>Internet
                                              Explorer 4.0
                                          </td>
                                          <td>Win 95+</td>
                                            <td class="actions">
                                                <a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
                                                <a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
                                                <a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
                                                <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
                                            </td>
                                        </tr>-->
                                    </tbody>
                                </table>
                            </div>
                            <!-- end: page -->

                        </div> <!-- end Panel -->

                    </div> <!-- container -->

                </div> <!-- content -->

<?php include 'footer.php';?>
