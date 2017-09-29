<?php
include 'header.php';
include '../classes/Questions.php';
$user = new Questions();
$result = $user->getQuestions($db);
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
                    <h4 class="pull-left page-title">Questions Table</h4>
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
                            <!--<th>Cnt</th>-->
                            <th>Question ID</th>
                            <th>Question</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $i=1;
                        foreach($result as $key){
                            ?>
                            <tr class="gradeX">
                                <!--<td><?=$i++;?></td>-->
                                <td><?=$key['questionID']?></td>
                                <td><?=$key['questionText']?></td>
                                <td class="actions">
                                    <a href="#" data-rel="<?=$key['questionID']?>" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
                                    <a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
                                    <a href="#" data-rel="<?=$key['questionID']?>" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
                                    <a href="#" data-rel="<?=$key['questionID']?>" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
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
