<?php
include_once __DIR__ . '/../layouts/admin_sidebar.php';
include_once __DIR__ . '/../controller/tutorialsController.php';
include_once __DIR__ . '/../controller/usersController.php';

$tuto_controller = new tutorialsController();
$ftotals = $tuto_controller->totalfreepackage();
$ptotals = $tuto_controller->totalbypackage();

$users_controller = new usersController();
$usertotals = $users_controller->totaluser();
?>
<div class="main-panel mt-5">
    <div class="content-wrapper">

        <div class="row">
            <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-9">
                                <div class="d-flex align-items-center align-self-start">
                                    <?php
                                    // var_dump($ptotals);
                                    foreach ($usertotals as $usertotal) {
                                    }
                                    ?>
                                    <h4>Total Users</h4>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="icon icon-box-success ">
                                    <span class="mdi mdi-arrow-top-right icon-item"></span>
                                </div>
                            </div>
                        </div>
                        <h6 class="text-muted font-weight-normal">Total - <?php echo $usertotal['total']; ?></h6>
                    </div>
                </div>
            </div>


            <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-9">
                                <div class="d-flex align-items-center align-self-start">
                                    <?php
                                    // var_dump($ptotals);
                                    foreach ($ftotals as $total) {
                                    }
                                    ?>
                                    <h4 class="mb-0">Free Package</h4>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="icon icon-box-success ">
                                    <span class="mdi mdi-arrow-top-right icon-item"></span>
                                </div>
                            </div>
                        </div>
                        <h6 class="text-muted font-weight-normal">Total Tutotials - <?php echo $total['total']; ?></h6>
                    </div>
                </div>
            </div>

            <?php
            foreach ($ptotals as $ptotal) {
                // var_dump($ptotal);
            ?>
                <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-9">
                                    <div class="d-flex align-items-center align-self-start">
                                        <h4 class="mb-0"><?php echo $ptotal['name']; ?> Package</h4>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="icon icon-box-success">
                                        <span class="mdi mdi-arrow-top-right icon-item"></span>
                                    </div>
                                </div>
                            </div>
                            <h6 class="text-muted font-weight-normal">Total Tutorials - <?php echo $ptotal['total']; ?></h6>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>

        <div class="row">
            <div class="col-md-12 col-xl-4 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">To do list</h4>
                        <div class="add-items d-flex">
                            <input type="text" class="form-control todo-list-input" placeholder="enter task..">
                            <button class="add btn btn-primary todo-list-add-btn">Add</button>
                        </div>
                        <div class="list-wrapper">
                            <ul class="">
                                <li>Total Income
                                    <span class="mx-auto">300000ks</span>
                                </li>
                                <li>Total Income
                                    <span class="mx-auto">300000ks</span>
                                </li>
                                <li>Total Income
                                    <span class="mx-auto">300000ks</span>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex flex-row justify-content-between">
                            <h4 class="card-title mb-1">Sale Users</h4>
                            <p class="text-muted mb-1">Your data status</p>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="preview-list">
                                    <div class="preview-item border-bottom">
                                        <div class="preview-thumbnail">
                                            <div class="preview-icon bg-primary">
                                                <i class="mdi mdi-file-document"></i>
                                            </div>
                                        </div>
                                        <div class="preview-item-content d-sm-flex flex-grow">
                                            <div class="flex-grow">
                                                <h6 class="preview-subject">Admin dashboard design</h6>
                                                <p class="text-muted mb-0">Broadcast web app mockup</p>
                                            </div>
                                            <div class="mr-auto text-sm-right pt-2 pt-sm-0">
                                                <p class="text-muted">15 minutes ago</p>
                                                <p class="text-muted mb-0">30 tasks, 5 issues </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="preview-item border-bottom">
                                        <div class="preview-thumbnail">
                                            <div class="preview-icon bg-success">
                                                <i class="mdi mdi-cloud-download"></i>
                                            </div>
                                        </div>
                                        <div class="preview-item-content d-sm-flex flex-grow">
                                            <div class="flex-grow">
                                                <h6 class="preview-subject">Wordpress Development</h6>
                                                <p class="text-muted mb-0">Upload new design</p>
                                            </div>
                                            <div class="mr-auto text-sm-right pt-2 pt-sm-0">
                                                <p class="text-muted">1 hour ago</p>
                                                <p class="text-muted mb-0">23 tasks, 5 issues </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="preview-item border-bottom">
                                        <div class="preview-thumbnail">
                                            <div class="preview-icon bg-info">
                                                <i class="mdi mdi-clock"></i>
                                            </div>
                                        </div>
                                        <div class="preview-item-content d-sm-flex flex-grow">
                                            <div class="flex-grow">
                                                <h6 class="preview-subject">Project meeting</h6>
                                                <p class="text-muted mb-0">New project discussion</p>
                                            </div>
                                            <div class="mr-auto text-sm-right pt-2 pt-sm-0">
                                                <p class="text-muted">35 minutes ago</p>
                                                <p class="text-muted mb-0">15 tasks, 2 issues</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="preview-item border-bottom">
                                        <div class="preview-thumbnail">
                                            <div class="preview-icon bg-danger">
                                                <i class="mdi mdi-email-open"></i>
                                            </div>
                                        </div>
                                        <div class="preview-item-content d-sm-flex flex-grow">
                                            <div class="flex-grow">
                                                <h6 class="preview-subject">Broadcast Mail</h6>
                                                <p class="text-muted mb-0">Sent release details to team</p>
                                            </div>
                                            <div class="mr-auto text-sm-right pt-2 pt-sm-0">
                                                <p class="text-muted">55 minutes ago</p>
                                                <p class="text-muted mb-0">35 tasks, 7 issues </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="preview-item">
                                        <div class="preview-thumbnail">
                                            <div class="preview-icon bg-warning">
                                                <i class="mdi mdi-chart-pie"></i>
                                            </div>
                                        </div>
                                        <div class="preview-item-content d-sm-flex flex-grow">
                                            <div class="flex-grow">
                                                <h6 class="preview-subject">UI Design</h6>
                                                <p class="text-muted mb-0">New application planning</p>
                                            </div>
                                            <div class="mr-auto text-sm-right pt-2 pt-sm-0">
                                                <p class="text-muted">50 minutes ago</p>
                                                <p class="text-muted mb-0">27 tasks, 4 issues </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- content-wrapper ends -->
    <?php include_once __DIR__ . '/../layouts/admin_footer.php'; ?>