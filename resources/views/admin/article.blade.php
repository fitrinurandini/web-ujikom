<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Artikel - Admin Dashboard</title>

    <!-- Styles (Tidak dihapus) -->
    <link rel="stylesheet" href="/asset/css/main/app.css">
    <link rel="stylesheet" href="/asset/css/main/app-dark.css">
    <link rel="shortcut icon" href="/asset/images/logo/favicon.svg" type="image/x-icon">
    <link rel="shortcut icon" href="/asset/images/logo/favicon.png" type="image/png">
    <link rel="stylesheet" href="/asset/css/shared/iconly.css">
    <link rel="stylesheet" href="/asset/extensions/simple-datatables/style.css">
    <link rel="stylesheet" href="/asset/css/pages/simple-datatables.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/bootstrap.css">
    <link rel="stylesheet" href="/assets/vendors/iconly/bold.css">
    <link rel="stylesheet" href="/assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="/assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="/assets/css/app.css">
    <link rel="shortcut icon" href="/assets/images/favicon.svg" type="image/x-icon">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
                        <h3>Artikel</h3>
                    </div>

                    <section class="section">
                        <div class="card">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <span>Daftar Artikel</span>
                                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalTambahArtikel">Tambah Artikel</button>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped" id="tableArtikel">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Judul</th>
                                                <th>Tag</th>
                                                <th>Status</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($articles as $index => $article)
                                            <tr>
                                                <td>{{ $index + 1 }}</td>
                                                <td>{{ $article->title }}</td>
                                                <td>
                                                    @foreach ($article->tags as $tag)
                                                    <span class="badge bg-info">{{ $tag->name }}</span>
                                                    @endforeach
                                                </td>
                                                <td>{{ $article->status ? 'Aktif' : 'Tidak Aktif' }}</td>
                                                <td>
                                                    <button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEditArtikel{{ $article->id }}">✏️</button>
                                                    <form action="{{ route('articles.destroy', $article->id) }}" method="POST" class="d-inline delete-form">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="button" class="btn btn-danger btn-sm btn-delete" data-id="{{ $article->id }}">🗑️</button>
                                                    </form>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>

                                {{-- Modal Tambah Artikel --}}
                                <div class="modal fade" id="modalTambahArtikel" tabindex="-1" aria-labelledby="modalTambahArtikelLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <form action="{{ route('articles.store') }}" method="POST" class="modal-content">
                                            @csrf
                                            <div class="modal-header">
                                                <h5 class="modal-title">Tambah Artikel</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="form-group mb-3">
                                                    <label>Judul</label>
                                                    <input type="text" name="title" class="form-control" required>
                                                </div>
                                                <div class="form-group mb-3">
                                                    <label>Konten</label>
                                                    <textarea name="content" class="form-control" required></textarea>
                                                </div>
                                                <div class="form-group mb-3">
                                                    <label>Tag</label>
                                                    <div class="d-flex flex-wrap gap-2">
                                                        @foreach ($tags as $tag)
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" name="tags[]" value="{{ $tag->id }}" id="tag{{ $tag->id }}">
                                                            <label class="form-check-label" for="tag{{ $tag->id }}">
                                                                {{ $tag->name }}
                                                            </label>
                                                        </div>
                                                        @endforeach
                                                    </div>
                                                </div>
                                                
                                                <div class="form-group mb-3">
                                                    <label>Status</label>
                                                    <select name="status" class="form-control">
                                                        <option value="1">Aktif</option>
                                                        <option value="0">Tidak Aktif</option>
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

                                {{-- Modal Edit Artikel --}}
                                @foreach ($articles as $article)
                                <div class="modal fade" id="modalEditArtikel{{ $article->id }}" tabindex="-1" aria-labelledby="modalEditArtikelLabel{{ $article->id }}" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <form action="{{ route('articles.update', $article->id) }}" method="POST" class="modal-content">
                                            @csrf
                                            @method('PUT')
                                            <div class="modal-header">
                                                <h5 class="modal-title">Edit Artikel</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="form-group mb-3">
                                                    <label>Judul</label>
                                                    <input type="text" name="title" class="form-control" value="{{ $article->title }}" required>
                                                </div>
                                                <div class="form-group mb-3">
                                                    <label>Konten</label>
                                                    <textarea name="content" class="form-control" required>{{ $article->content }}</textarea>
                                                </div>
                                                <div class="form-group mb-3">
                                                    <label>Tag</label>
                                                    <div class="d-flex flex-wrap gap-2">
                                                        @foreach ($tags as $tag)
                                                        <div class="form-check">
                                                            <input 
                                                                class="form-check-input" 
                                                                type="checkbox" 
                                                                name="tags[]" 
                                                                value="{{ $tag->id }}" 
                                                                id="editTag{{ $article->id }}_{{ $tag->id }}"
                                                                {{ $article->tags->contains($tag->id) ? 'checked' : '' }}>
                                                            <label class="form-check-label" for="editTag{{ $article->id }}_{{ $tag->id }}">
                                                                {{ $tag->name }}
                                                            </label>
                                                        </div>
                                                        @endforeach
                                                    </div>
                                                </div>
                                                
                                                <div class="form-group mb-3">
                                                    <label>Status</label>
                                                    <select name="status" class="form-control">
                                                        <option value="1" {{ $article->status == 1 ? 'selected' : '' }}>Aktif</option>
                                                        <option value="0" {{ $article->status == 0 ? 'selected' : '' }}>Tidak Aktif</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-primary">Simpan</button>
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </section>
                </div>
            </main>
        </div>
    </div>

    <!-- Scripts (Tidak dihapus) -->
    <script src="/asset/js/bootstrap.js"></script>
    <script src="/asset/js/app.js"></script>
    <script src="/asset/extensions/apexcharts/apexcharts.min.js"></script>
    <script src="/asset/js/pages/dashboard.js"></script>
    <script src="/asset/extensions/simple-datatables/umd/simple-datatables.js"></script>
    <script src="/assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="/assets/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/vendors/apexcharts/apexcharts.js"></script>
    <script src="/assets/js/pages/dashboard.js"></script>
    <script src="/assets/js/main.js"></script>
    <script>
        let tableArtikel = document.querySelector('#tableArtikel');
        let dataTable = new simpleDatatables.DataTable(tableArtikel);
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const deleteButtons = document.querySelectorAll('.btn-delete');
    
            deleteButtons.forEach(button => {
                button.addEventListener('click', function () {
                    const articleId = this.getAttribute('data-id');
                    const form = this.closest('form');
    
                    Swal.fire({
                        title: 'Yakin ingin menghapus artikel ini?',
                        text: "Data tidak dapat dikembalikan setelah dihapus.",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#d33',
                        cancelButtonColor: '#3085d6',
                        confirmButtonText: 'Ya, hapus!'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            form.submit();
                        }
                    });
                });
            });
        });
    </script>

    @include('component.footer_admin')

</body>

</html>
