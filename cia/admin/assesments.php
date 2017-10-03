<?php
include 'header.php';
include '../classes/ResultTables.php';
$r = new ResultTables();
$result = $r->getResultsTable($db);
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
                    <h4 class="pull-left page-title">Results Table</h4>
                </div>
            </div>


            <div class="panel">

                <div class="panel-body">
                    <div class="row">
                        <div class="col-sm-6">
                        </div>
                    </div>

                    <table class="table table-bordered table-striped" id="datatable-editable">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>User Name</th>
                            <th>Question</th>
                            <th>Answer</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $i=1;
                        foreach($result as $key){
                            ?>
                            <tr class="gradeX">
                                <td><?=$key['uName']?></td>
                                <td><?=$key['userName']?></td>
                                <td><?=$key['question']?></td>
                                <td><?=$key['answer']?></td>
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
