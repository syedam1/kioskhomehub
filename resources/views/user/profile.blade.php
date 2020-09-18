@extends('layouts.account')
@section('accountcontent')
<!-- Page content -->
<div class="page-content">
    <!-- Page title -->
    <div class="page-title">
        <div class="row justify-content-between align-items-center">
            <div
                class="col-md-6 d-flex align-items-center justify-content-between justify-content-md-start mb-3 mb-md-0">
                <!-- Page title + Go Back button -->
                <div class="d-inline-block">
                    <h5 class="h4 d-inline-block font-weight-400 mb-0 text-white">My profile</h5>
                </div>
                <!-- Additional info -->
            </div>
            <div class="col-md-6 d-flex align-items-center justify-content-between justify-content-md-end">
                <div class="actions actions-dark d-inline-block">
                    <a href="#" class="action-item ml-md-4">
                        <i class="fas fa-file-export mr-2"></i>Export
                    </a>
                    <a href="#" class="action-item ml-3">
                        <i class="fas fa-cog mr-2"></i>Settings
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-4">
            <!-- Profile stats -->
            <div class="card card-fluid">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col-auto">
                            <!-- Avatar -->
                            <a href="#" class="avatar rounded-circle">
                                <img alt="Image placeholder" src="../../assets/img/theme/light/team-3-800x800.jpg"
                                    class="">
                            </a>
                        </div>
                        <div class="col ml-md-n2">
                            <a href="#!" class="d-block h6 mb-0">John Sullivan</a>
                            <small class="d-block text-muted">Laravel Developer</small>
                        </div>
                        <div class="col-auto">
                            <button type="button" class="btn btn-xs btn-primary btn-icon rounded-pill">
                                <span class="btn-inner--icon"><i class="fas fa-edit"></i></span>
                                <span class="btn-inner--text">Edit</span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-4 text-center">
                            <span class="h5 mb-0">86</span>
                            <span class="d-block text-sm">Images</span>
                        </div>
                        <div class="col-4 text-center">
                            <span class="h5 mb-0">8</span>
                            <span class="d-block text-sm">Products</span>
                        </div>
                        <div class="col-4 text-center">
                            <span class="h5 mb-0">1578</span>
                            <span class="d-block text-sm">Followers</span>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="row align-items-center">
                        <div class="col-6">
                            <button type="button"
                                class="btn btn-sm px-0 font-weight-bold btn-link text-primary btn-icon">
                                Message
                            </button>
                        </div>
                        <div class="col-6 text-right">
                            <button type="button" class="btn btn-xs btn-secondary rounded-pill">Follow</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <!-- Profile contacts -->
            <div class="card card-fluid">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col">
                            <h6 class="text-sm mb-0">
                                <i class="fab fa-facebook mr-2"></i>Facebook
                            </h6>
                        </div>
                        <div class="col-auto">
                            <span class="text-sm">john.sullivan</span>
                        </div>
                    </div>
                    <hr class="my-3">
                    <div class="row align-items-center">
                        <div class="col">
                            <h6 class="text-sm mb-0">
                                <i class="fab fa-whatsapp mr-2"></i>Whats App
                            </h6>
                        </div>
                        <div class="col-auto">
                            <span class="text-sm">+40-788-45-67</span>
                        </div>
                    </div>
                    <hr class="my-3">
                    <div class="row align-items-center">
                        <div class="col">
                            <h6 class="text-sm mb-0">
                                <i class="fab fa-instagram mr-2"></i>Instagram
                            </h6>
                        </div>
                        <div class="col-auto">
                            <span class="text-sm">@johnthedon</span>
                        </div>
                    </div>
                    <hr class="my-3">
                    <div class="row align-items-center">
                        <div class="col">
                            <h6 class="text-sm mb-0">
                                <i class="fab fa-linkedin mr-2"></i>LinkedIn
                            </h6>
                        </div>
                        <div class="col-auto">
                            <span class="text-sm">johnsullivan</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <!-- Profile performance -->
            <div class="card card-fluid">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col">
                            <h6 class="text-sm mb-0">Performance</h6>
                            <span class="text-nowrap h6 text-muted text-sm">65%</span>
                            <span class="badge badge-xs badge-soft-warning ml-2"><i class="fas fa-arrow-down"></i>
                                13%</span>
                        </div>
                        <div class="col-4">
                            <div style="max-width: 100px;">
                                <div class="spark-chart" data-toggle="spark-chart" data-type="line" data-height="30"
                                    data-color="warning" data-dataset="[47, 94, 24, 18, 26, 65, 31, 47, 10, 44, 45]">
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr class="my-3">
                    <div class="row align-items-center">
                        <div class="col">
                            <h6 class="text-sm mb-0">Sales</h6>
                            <span class="text-nowrap h6 text-muted text-sm">$3.068,90</span>
                            <span class="badge badge-xs badge-soft-success ml-2"><i class="fas fa-arrow-up"></i>
                                25%</span>
                        </div>
                        <div class="col-4">
                            <div style="max-width: 100px;">
                                <div class="spark-chart" data-toggle="spark-chart" data-type="line" data-height="30"
                                    data-color="success" data-dataset="[47, 94, 24, 18, 26, 65, 31, 47, 10, 44, 45]">
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr class="my-3">
                    <div class="row align-items-center">
                        <div class="col">
                            <h6 class="text-sm mb-0">Followers</h6>
                            <span class="text-nowrap h6 text-muted text-sm">80</span>
                            <span class="badge badge-xs badge-soft-info ml-2"><i class="fas fa-arrow-up"></i> 17%</span>
                        </div>
                        <div class="col-4">
                            <div style="max-width: 100px;">
                                <div class="spark-chart" data-toggle="spark-chart" data-type="bar" data-height="30"
                                    data-color="primary" data-dataset="[47, 94, 24, 18, 26, 65, 31, 47, 10, 44, 45]">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-4 col-md-6">
            <div class="card card-fluid">
                <div class="card-header">
                    <h6 class="mb-0">Worked hours</h6>
                </div>
                <div class="card-body">
                    <!-- Chart -->
                    <div id="apex-worked-hours" data-color="primary" data-height="280"></div>
                </div>
            </div>
        </div>
        <div class="col-xl-8 col-md-6">
            <div class="card card-fluid">
                <div class="card-header border-0">
                    <h6 class="mb-0">My projects</h6>
                </div>
                <div class="table-responsive">
                    <table class="table align-items-center">
                        <thead>
                            <tr>
                                <th scope="col" class="sort" data-sort="name">Project</th>
                                <th scope="col" class="sort" data-sort="budget">Tasks</th>
                                <th scope="col" class="sort" data-sort="status">Status</th>
                                <th scope="col" class="sort" data-sort="completion">Completion</th>
                            </tr>
                        </thead>
                        <tbody class="list">
                            <tr>
                                <th scope="row">
                                    <div class="media align-items-center">
                                        <div>
                                            <img alt="Image placeholder"
                                                src="../../assets/img/theme/light/brand-avatar-1.png"
                                                class="avatar  rounded-circle avatar-sm">
                                        </div>
                                        <div class="media-body ml-4">
                                            <a href="overview.blade.php" class="name mb-0 h6 text-sm">Purpose Website
                                                UI</a>
                                        </div>
                                    </div>
                                </th>
                                <td class="budget">
                                    1
                                </td>
                                <td>
                                    <span class="badge badge-dot mr-4">
                                        <i class="bg-warning"></i>
                                        <span class="status">pending</span>
                                    </span>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <span class="completion mr-2">60%</span>
                                        <div>
                                            <div class="progress" style="width: 100px;">
                                                <div class="progress-bar bg-warning" role="progressbar"
                                                    aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"
                                                    style="width: 60%;"></div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">
                                    <div class="media align-items-center">
                                        <div>
                                            <img alt="Image placeholder"
                                                src="../../assets/img/theme/light/brand-avatar-2.png"
                                                class="avatar  rounded-circle avatar-sm">
                                        </div>
                                        <div class="media-body ml-4">
                                            <a href="overview.blade.php" class="name mb-0 h6 text-sm">Website
                                                Redesign</a>
                                        </div>
                                    </div>
                                </th>
                                <td class="budget">
                                    2
                                </td>
                                <td>
                                    <span class="badge badge-dot mr-4">
                                        <i class="bg-success"></i>
                                        <span class="status">completed</span>
                                    </span>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <span class="completion mr-2">100%</span>
                                        <div>
                                            <div class="progress" style="width: 100px;">
                                                <div class="progress-bar bg-success" role="progressbar"
                                                    aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"
                                                    style="width: 100%;"></div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">
                                    <div class="media align-items-center">
                                        <div>
                                            <img alt="Image placeholder"
                                                src="../../assets/img/theme/light/brand-avatar-3.png"
                                                class="avatar  rounded-circle avatar-sm">
                                        </div>
                                        <div class="media-body ml-4">
                                            <a href="overview.blade.php" class="name mb-0 h6 text-sm">Webpixels
                                                Website</a>
                                        </div>
                                    </div>
                                </th>
                                <td class="budget">
                                    3
                                </td>
                                <td>
                                    <span class="badge badge-dot mr-4">
                                        <i class="bg-danger"></i>
                                        <span class="status">delayed</span>
                                    </span>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <span class="completion mr-2">72%</span>
                                        <div>
                                            <div class="progress" style="width: 100px;">
                                                <div class="progress-bar bg-danger" role="progressbar"
                                                    aria-valuenow="72" aria-valuemin="0" aria-valuemax="100"
                                                    style="width: 72%;"></div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">
                                    <div class="media align-items-center">
                                        <div>
                                            <img alt="Image placeholder"
                                                src="../../assets/img/theme/light/brand-avatar-4.png"
                                                class="avatar  rounded-circle avatar-sm">
                                        </div>
                                        <div class="media-body ml-4">
                                            <a href="overview.blade.php" class="name mb-0 h6 text-sm">Purpose
                                                Application UI</a>
                                        </div>
                                    </div>
                                </th>
                                <td class="budget">
                                    4
                                </td>
                                <td>
                                    <span class="badge badge-dot mr-4">
                                        <i class="bg-info"></i>
                                        <span class="status">on schedule</span>
                                    </span>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <span class="completion mr-2">90%</span>
                                        <div>
                                            <div class="progress" style="width: 100px;">
                                                <div class="progress-bar bg-info" role="progressbar" aria-valuenow="90"
                                                    aria-valuemin="0" aria-valuemax="100" style="width: 90%;"></div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-4">
            <!-- Profile storage -->
            <div class="card card-fluid">
                <div class="card-header">
                    <h6 class="mb-0">Cloud storage</h6>
                </div>
                <div class="card-body">
                    <div class="progress-circle progress-lg mx-auto" id="progress-circle-1" data-progress="35"
                        data-text="35%" data-color="warning"></div>
                    <div class="d-flex my-4 px-5">
                        <div class="col">
                            <span class="badge badge-dot badge-lg h6">
                                <i class="bg-success"></i>4TB
                            </span>
                            <small class="d-block text-muted">Total storage</small>
                        </div>
                        <div class="col">
                            <span class="badge badge-dot badge-lg h6">
                                <i class="bg-warning"></i>875GB
                            </span>
                            <small class="d-block text-muted">Used storage</small>
                        </div>
                    </div>
                    <a href="#" class="btn btn-block btn-secondary">Upgrade storage</a>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card card-fluid">
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h6 class="mb-0">Recent files</h6>
                        </div>
                        <div class="text-right">
                            <div class="actions">
                                <a href="#" class="action-item"><i class="fas fa-sync"></i></a>
                                <div class="dropdown action-item" data-toggle="dropdown">
                                    <a href="#" class="action-item"><i class="fas fa-ellipsis-h"></i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a href="#" class="dropdown-item">Refresh</a>
                                        <a href="#" class="dropdown-item">Manage Widgets</a>
                                        <a href="#" class="dropdown-item">Settings</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-wrapper p-3">
                    <!-- Files -->
                    <div class="card mb-3 border shadow-none">
                        <div class="px-3 py-3">
                            <div class="row align-items-center">
                                <div class="col-auto">
                                    <img alt="Image placeholder" src="../../assets/img/icons/files/pdf.png"
                                        class="img-fluid" style="width: 40px;">
                                </div>
                                <div class="col ml-n2">
                                    <h6 class="text-sm mb-0">
                                        <a href="#!">design-principles.pdf</a>
                                    </h6>
                                    <p class="card-text small text-muted">
                                        189 KB
                                    </p>
                                </div>
                                <div class="col-auto actions">
                                    <div class="dropdown" data-toggle="dropdown">
                                        <a href="#" class="action-item" role="button" data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-h"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a href="#" class="dropdown-item">Refresh</a>
                                            <a href="#" class="dropdown-item">Manage Widgets</a>
                                            <a href="#" class="dropdown-item">Settings</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-3 border shadow-none">
                        <div class="px-3 py-3">
                            <div class="row align-items-center">
                                <div class="col-auto">
                                    <img alt="Image placeholder" src="../../assets/img/icons/files/psd.png"
                                        class="img-fluid" style="width: 40px;">
                                </div>
                                <div class="col ml-n2">
                                    <h6 class="text-sm mb-0">
                                        <a href="#!">website-wireframe.psd</a>
                                    </h6>
                                    <p class="card-text small text-muted">
                                        45.9 MB
                                    </p>
                                </div>
                                <div class="col-auto actions">
                                    <div class="dropdown" data-toggle="dropdown">
                                        <a href="#" class="action-item" role="button" data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-h"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a href="#" class="dropdown-item">Refresh</a>
                                            <a href="#" class="dropdown-item">Manage Widgets</a>
                                            <a href="#" class="dropdown-item">Settings</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-3 border shadow-none">
                        <div class="px-3 py-3">
                            <div class="row align-items-center">
                                <div class="col-auto">
                                    <img alt="Image placeholder" src="../../assets/img/icons/files/doc.png"
                                        class="img-fluid" style="width: 40px;">
                                </div>
                                <div class="col ml-n2">
                                    <h6 class="text-sm mb-0">
                                        <a href="#!">product-guidelines.doc</a>
                                    </h6>
                                    <p class="card-text small text-muted">
                                        87 KB
                                    </p>
                                </div>
                                <div class="col-auto actions">
                                    <div class="dropdown" data-toggle="dropdown">
                                        <a href="#" class="action-item" role="button" data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-h"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a href="#" class="dropdown-item">Refresh</a>
                                            <a href="#" class="dropdown-item">Manage Widgets</a>
                                            <a href="#" class="dropdown-item">Settings</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <!-- Project status -->
            <div class="card card-fluid">
                <div class="card-header">
                    <h6 class="mb-0">Project status</h6>
                </div>
                <div class="card-body">
                    <div class="row mb-3">
                        <div class="col-9">
                            <div class="progress-wrapper">
                                <span class="progress-label text-muted text-sm">Logo design</span>
                                <div class="progress mt-1 mb-2" style="height: 5px;">
                                    <div class="progress-bar bg-purple" role="progressbar" aria-valuenow="40"
                                        aria-valuemin="0" aria-valuemax="100" style="width: 40%;"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-3 align-self-end text-right">
                            <span class="h6 mb-0">40%</span>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-9">
                            <div class="progress-wrapper">
                                <span class="progress-label text-muted text-sm">Website mockup</span>
                                <div class="progress mt-1 mb-2" style="height: 5px;">
                                    <div class="progress-bar bg-purple" role="progressbar" aria-valuenow="67"
                                        aria-valuemin="0" aria-valuemax="100" style="width: 67%;"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-3 align-self-end text-right">
                            <span class="h6 mb-0">67%</span>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-9">
                            <div class="progress-wrapper">
                                <span class="progress-label text-muted text-sm">Landing page</span>
                                <div class="progress mt-1 mb-2" style="height: 5px;">
                                    <div class="progress-bar bg-purple" role="progressbar" aria-valuenow="89"
                                        aria-valuemin="0" aria-valuemax="100" style="width: 89%;"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-3 align-self-end text-right">
                            <span class="h6 mb-0">89%</span>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-9">
                            <div class="progress-wrapper">
                                <span class="progress-label text-muted text-sm">Mobile testing</span>
                                <div class="progress mt-1 mb-2" style="height: 5px;">
                                    <div class="progress-bar bg-purple" role="progressbar" aria-valuenow="55"
                                        aria-valuemin="0" aria-valuemax="100" style="width: 55%;"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-3 align-self-end text-right">
                            <span class="h6 mb-0">55%</span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-9">
                            <div class="progress-wrapper">
                                <span class="progress-label text-muted text-sm">Theme launch</span>
                                <div class="progress mt-1 mb-2" style="height: 5px;">
                                    <div class="progress-bar bg-purple" role="progressbar" aria-valuenow="99"
                                        aria-valuemin="0" aria-valuemax="100" style="width: 99%;"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-3 align-self-end text-right">
                            <span class="h6 mb-0">99%</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection