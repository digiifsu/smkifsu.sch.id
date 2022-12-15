<?php $this->extend('admin/layout/app_layout'); ?>

<?php $this->section('content') ?>
<div class="panel-header">
    <div class="page-inner py-3">
        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
            <div>
                <h2 class="pb-2 fw-bold">Dashboard</h2>
                <h5 class="op-7 mb-2">Selamat <span class="badge badge-info">Malam</span> di sistem informasi IFSU</h5>
            </div>
            <div class="ml-md-auto py-2 py-md-0">
                <a href="#" class="btn btn-success btn-border btn-round mr-2">Add Pages</a>
                <a href="#" class="btn btn-secondary btn-round">Add Post</a>
            </div>
        </div>
    </div>
</div>
<div class="page-inner">
    <div class="row">
        <!-- widget -->
        <div class="col-sm-6 col-md-3">
            <div class="card card-stats card-warning card-round">
                <div class="card-body">
                    <div class="row">
                        <div class="col-5">
                            <div class="icon-big text-center">
                                <i class="flaticon-interface-6"></i>
                            </div>
                        </div>
                        <div class="col-7 col-stats">
                            <div class="numbers">
                                <p class="card-category">Post</p>
                                <h4 class="card-title">29</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- widget -->
        <!-- widget -->
        <div class="col-sm-6 col-md-3">
            <div class="card card-stats card-success card-round">
                <div class="card-body">
                    <div class="row">
                        <div class="col-5">
                            <div class="icon-big text-center">
                                <i class="flaticon-interface-6"></i>
                            </div>
                        </div>
                        <div class="col-7 col-stats">
                            <div class="numbers">
                                <p class="card-category">Pages</p>
                                <h4 class="card-title">3</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- widget -->
        <!-- widget -->
        <div class="col-sm-6 col-md-3">
            <div class="card card-stats card-info card-round">
                <div class="card-body">
                    <div class="row">
                        <div class="col-5">
                            <div class="icon-big text-center">
                                <i class="flaticon-interface-6"></i>
                            </div>
                        </div>
                        <div class="col-7 col-stats">
                            <div class="numbers">
                                <p class="card-category">Message</p>
                                <h4 class="card-title">80</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- widget -->
        <!-- widget -->
        <div class="col-sm-6 col-md-3">
            <div class="card card-stats card-danger card-round">
                <div class="card-body">
                    <div class="row">
                        <div class="col-5">
                            <div class="icon-big text-center">
                                <i class="flaticon-interface-6"></i>
                            </div>
                        </div>
                        <div class="col-7 col-stats">
                            <div class="numbers">
                                <p class="card-category">Category</p>
                                <h4 class="card-title">6</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- widget -->
    </div>

    <!-- s:row2 -->
    <div class="row">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">
                    <div class="card-head-row">
                        <div class="card-title">Statistik Pengunjung</div>
                        <div class="card-tools">
                            <a href="#" class="btn btn-info btn-border btn-round btn-sm mr-2">
                                <span class="btn-label">
                                    <i class="fa fa-pencil"></i>
                                </span>
                                Export
                            </a>
                            <a href="#" class="btn btn-info btn-border btn-round btn-sm">
                                <span class="btn-label">
                                    <i class="fa fa-print"></i>
                                </span>
                                Print
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="chart-container" style="min-height: 375px">
                        <canvas id="statisticsChart"></canvas>
                    </div>
                    <div id="myChartLegend"></div>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card card-profile">
                <div class="card-header" style="background-image: url('../assets/img/blogpost.jpg')">
                    <div class="profile-picture">
                        <div class="avatar avatar-xl">
                            <img src="../assets/img/profile.jpg" alt="..." class="avatar-img rounded-circle">
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="user-profile text-center">
                        <div class="name">Superadmin</div>
                        <div class="job">superadmin@gmail.com</div>
                        <div class="job">Ip: 192.168.2.1</div>

                        <div class="view-profile">
                            <a href="#" class="btn btn-secondary btn-block">Edit Akun</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- e:row2 -->

</div>
<?php $this->endSection() ?>