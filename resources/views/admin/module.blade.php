<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Module - Admin Dashboard</title>
    <link rel="stylesheet" href="/asset/css/main/app.css">
    <link rel="stylesheet" href="/asset/css/main/app-dark.css">
    <link rel="shortcut icon" href="/asset/images/logo/favicon.svg" type="image/x-icon">
    <link rel="shortcut icon" href="/asset/images/logo/favicon.png" type="image/png">
    <link rel="stylesheet" href="/asset/css/shared/iconly.css">
    <link rel="stylesheet" href="/asset/extensions/simple-datatables/style.css">
    <link rel="stylesheet" href="/asset/css/pages/simple-datatables.css">
</head>

<body>
    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
                @include('component.sidebar_admin')
            </div>
        </div>
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>
            <div class="page-heading">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last">
                            <h3>Module Management</h3>
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="/admin">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Module</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
                <section class="section">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalManageModule">Add New</button>
                            <input type="text" class="form-control w-50" placeholder="Search Module...">
                        </div>
                        <div class="card-body">
                            <table class="table table-striped" id="tableModule">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Action</th>
                                        <th>Module Name</th>
                                        <th>Module Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- Data module dari controller -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </section>
            </div>
            <footer>
                <div class="footer clearfix mb-0 text-muted">
                    <div class="float-start">
                        <p>2025 &copy; SMKN 1 Kawali</p>
                    </div>
                    <div class="float-end">
                        <p>Dibuat dengan <span class="text-danger"><i class="bi bi-heart"></i></span> oleh Admin</p>
                    </div>
                </div>
            </footer>
        </div>
    </div>

    <!-- Modal Manage Module -->
    <div class="modal fade" id="modalManageModule" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Manage Module</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="/path-to-image.jpg" class="img-fluid mb-3" alt="Current Module Image">
                    <table class="table table-bordered mb-3">
                        <thead>
                            <tr>
                                <th>Module Name</th>
                                <th>Module Description</th>
                                <th>Index Order</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><input type="text" class="form-control"></td>
                                <td><input type="text" class="form-control"></td>
                                <td><input type="number" class="form-control"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button class="btn btn-success">Save Module</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Manage Module Object -->
    <div class="modal fade" id="modalManageModuleObject" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Manage Module Object</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row g-3 mb-3">
                        <div class="col-md-4">
                            <label>Module Object Name</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-md-4">
                            <label>Module Object Description</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-md-4">
                            <label>Index Order</label>
                            <input type="number" class="form-control">
                        </div>
                        <div class="col-md-4">
                            <label>Parent Module</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-md-4">
                            <label>Icon CSS</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-md-4">
                            <label>Status</label>
                            <select class="form-control">
                                <option value="1">Active</option>
                                <option value="0">Inactive</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label>Object Detail Header</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label>Object Detail Description</label>
                        <textarea class="form-control"></textarea>
                    </div>
                    <div class="d-flex justify-content-end mb-3">
                        <button class="btn btn-success me-2">Save</button>
                        <button class="btn btn-warning">Clear</button>
                    </div>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Action</th>
                                <th>Object Name</th>
                                <th>Object Description</th>
                                <th>Index</th>
                                <th>Parent Module</th>
                                <th>Is Active</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Data object module -->
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <script src="/asset/js/bootstrap.js"></script>
    <script src="/asset/js/app.js"></script>
    <script src="/asset/extensions/simple-datatables/umd/simple-datatables.js"></script>
    <script>
        let table = document.querySelector('#tableModule');
        let dataTable = new simpleDatatables.DataTable(table);
    </script>
</body>

</html>
