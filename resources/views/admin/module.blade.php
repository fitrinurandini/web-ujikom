<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modul - Admin Dashboard</title>

    <!-- Styles -->
    <link rel="stylesheet" href="/asset/css/main/app.css">
    <link rel="stylesheet" href="/asset/css/main/app-dark.css">
    <link rel="stylesheet" href="/asset/extensions/simple-datatables/style.css">
    <link rel="stylesheet" href="/asset/css/pages/simple-datatables.css">
    <link rel="stylesheet" href="/assets/css/bootstrap.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/assets/vendors/iconly/bold.css">
    <link rel="stylesheet" href="/assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="/assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="/assets/css/app.css">
    <link rel="shortcut icon" href="/assets/images/favicon.svg" type="image/x-icon">
</head>

<body class="d-flex flex-column min-vh-100">
    <div id="app" class="flex-grow-1 d-flex">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
                @include('component.sidebar_admin')
            </div>
        </div>

        <div id="main" class="flex-grow-1 d-flex flex-column">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

            <main class="flex-grow-1 overflow-auto px-3">
                <div class="page-heading">
                    <div class="page-title">
                        <h3>Modul</h3>
                    </div>

                    <section class="section">
                        <div class="card">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <span>Modul</span>
                                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalTambahModule">Tambah Modul</button>
                            </div>
                            <div class="card-body">
                                <table class="table table-striped" id="table1">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Modul</th>
                                            <th>Deskripsi Modul</th>
                                            <th>Icon</th>
                                            <th>Status</th>
                                            <th>Index Order</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($modules as $index => $module)
                                        <tr>
                                            <td>{{ $index + 1 }}</td>
                                            <td>{{ $module->nama_module }}</td>
                                            <td>{{ $module->deskripsi_module }}</td>
                                            <td><img src="{{ asset('storage/' . $module->icon) }}" style="max-width: 50px; height: auto;"></td>
                                            <td>
                                                @if ($module->status)
                                                    <span class="badge bg-success">Aktif</span>
                                                @else
                                                    <span class="badge bg-secondary">Nonaktif</span>
                                                @endif
                                            </td>
                                            <td>{{ $module->index_module }}</td>
                                            <td>
                                                <button class="btn btn-sm btn-info" data-bs-toggle="modal" data-bs-target="#editModuleModal{{ $module->id }}">✏️</button>
                                                <form action="{{ route('modules.destroy', $module->id) }}" method="POST" style="display:inline-block;">
                                                    @csrf @method('DELETE')
                                                    <button class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus modul ini?')">🗑️</button>
                                                </form>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </section>
                </div>
            </main>
        </div>
    </div>

    <!-- Modal Tambah Modul -->
    <div class="modal fade" id="modalTambahModule" tabindex="-1" aria-labelledby="modalTambahModuleLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form action="{{ route('modules.store') }}" method="POST" enctype="multipart/form-data" class="modal-content">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTambahModuleLabel">Tambah Modul</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
                </div>
                <div class="modal-body">
                    <div class="form-group mb-3">
                        <label>Icon Modul</label>
                        <input type="file" name="icon" class="form-control" required>
                    </div>
                    <div class="form-group mb-3">
                        <label>Nama Modul</label>
                        <input type="text" name="nama_module" class="form-control" required>
                    </div>
                    <div class="form-group mb-3">
                        <label>Deskripsi Modul</label>
                        <textarea name="deskripsi_module" class="form-control" rows="3"></textarea>
                    </div>
                    <div class="form-group mb-3">
                        <label>Index Modul</label>
                        <input type="number" name="index_module" class="form-control" required>
                    </div>
                    <div class="form-group mb-3">
                        <label>Status Modul</label>
                        <select name="status" class="form-control" required>
                            <option value="1" selected>Aktif</option>
                            <option value="0">Nonaktif</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success">Simpan</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Modal Edit Modul -->
@foreach($modules as $module)
<div class="modal fade" id="editModuleModal{{ $module->id }}" tabindex="-1" aria-labelledby="editModuleModalLabel{{ $module->id }}" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <form action="{{ route('modules.update', $module->id) }}" method="POST" enctype="multipart/form-data" class="modal-content">
            @csrf
            @method('PUT')
            <div class="modal-header">
                <h5 class="modal-title" id="editModuleModalLabel{{ $module->id }}">Edit Modul</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3 text-center">
                    <label class="form-label fw-bold">Icon Saat Ini</label><br>
                    <img src="{{ asset('storage/' . $module->icon) }}" alt="icon" class="img-fluid" style="max-width: 150px; height: auto;">
                </div>
                <div class="mb-3">
                    <label class="form-label">Ganti Icon (Opsional)</label>
                    <input type="file" name="icon" class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label">Nama Modul</label>
                    <input type="text" name="nama_module" value="{{ $module->nama_module }}" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Deskripsi Modul</label>
                    <textarea name="deskripsi_module" class="form-control" rows="3">{{ $module->deskripsi_module }}</textarea>
                </div>
                <div class="mb-3">
                    <label class="form-label">Index Modul</label>
                    <input type="number" name="index_module" value="{{ $module->index_module }}" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Status Modul</label>
                    <select name="status" class="form-control">
                        <option value="1" {{ $module->status ? 'selected' : '' }}>Aktif</option>
                        <option value="0" {{ !$module->status ? 'selected' : '' }}>Nonaktif</option>
                    </select>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-success">Simpan Perubahan</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
            </div>
        </form>
    </div>
</div>
@endforeach


    <script src="/asset/js/bootstrap.js"></script>
    <script src="/asset/js/app.js"></script>
    <script src="/asset/extensions/simple-datatables/umd/simple-datatables.js"></script>
    <script>
        let table1 = document.querySelector('#table1');
        let dataTable = new simpleDatatables.DataTable(table1);
    </script>
    <script src="/assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="/assets/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/vendors/apexcharts/apexcharts.js"></script>
    <script src="/assets/js/pages/dashboard.js"></script>
    <script src="/assets/js/main.js"></script>
    

    @include('component.footer_admin')
</body>

</html>
