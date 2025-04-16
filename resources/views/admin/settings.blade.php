<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Settings - Admin Dashboard</title>

    <!-- Styles -->
    <link rel="stylesheet" href="/assets/css/main/app.css">
    <link rel="stylesheet" href="/assets/css/main/app-dark.css">
    <link rel="stylesheet" href="/assets/extensions/simple-datatables/style.css">
    <link rel="stylesheet" href="/assets/css/pages/simple-datatables.css">
    <link rel="stylesheet" href="/assets/css/bootstrap.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/bootstrap.css">

    <link rel="stylesheet" href="/assets/vendors/iconly/bold.css">

    <link rel="stylesheet" href="/assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="/assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="/assets/css/app.css">
    <link rel="shortcut icon" href="/assets/images/favicon.svg" type="image/x-icon">
</head>

<body>
    <div id="app" class="d-flex">
        <div id="sidebar">
            @include('component.sidebar_admin')
        </div>

        <div id="main" class="flex-grow-1">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

            <div class="page-heading">
                <h3>Settings</h3>
            </div>

            <div class="page-content">
                <section class="row">
                    <div class="col-12 col-lg-3">
                        <div class="card">
                            <div class="card-header">
                                <h4>Menu Settings</h4>
                            </div>
                            <div class="card-body">
                                <ul class="list-group">
                                    <li class="list-group-item">
                                        <button class="btn btn-primary w-100" data-bs-toggle="modal" data-bs-target="#profileModal">Profile</button>
                                    </li>
                                    <li class="list-group-item">
                                        <button class="btn btn-primary w-100" data-bs-toggle="modal" data-bs-target="#contactModal">Kontak</button>
                                    </li>
                                    <li class="list-group-item">
                                        <button class="btn btn-primary w-100" data-bs-toggle="modal" data-bs-target="#socialMediaModal">Media Sosial</button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Profile Modal -->
                    <div class="modal fade" id="profileModal" tabindex="-1" aria-labelledby="profileModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="profileModalLabel">Profile Setting</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="{{ route('settings.profile.update') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <div class="mb-3">
                                            <label for="website_name" class="form-label">Nama Website</label>
                                            <input type="text" class="form-control" id="website_name" name="website_name" value="{{ old('website_name', $settings->website_name) }}" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="website_description" class="form-label">Deskripsi Website</label>
                                            <textarea class="form-control" id="website_description" name="website_description" required>{{ old('website_description', $settings->website_description) }}</textarea>
                                        </div>
                                        <div class="mb-3">
                                            <label for="website_logo" class="form-label">Logo Website</label>
                                            <input type="file" class="form-control" id="website_logo" name="website_logo" accept="image/*">
                                        </div>
                                        <button type="submit" class="btn btn-primary">Update Profile</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Contact Modal -->
                    <div class="modal fade" id="contactModal" tabindex="-1" aria-labelledby="contactModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="contactModalLabel">Kontak Setting</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="{{ route('settings.contact.update') }}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <div class="mb-3">
                                            <label for="email" class="form-label">Email</label>
                                            <input type="email" class="form-control" id="email" name="email" value="{{ old('email', $settings->email) }}" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="phone" class="form-label">Telepon</label>
                                            <input type="text" class="form-control" id="phone" name="phone" value="{{ old('phone', $settings->phone) }}" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="address" class="form-label">Alamat</label>
                                            <textarea class="form-control" id="address" name="address" required>{{ old('address', $settings->address) }}</textarea>
                                        </div>
                                        <div class="mb-3">
                                            <label for="maps" class="form-label">Maps</label>
                                            <input type="text" class="form-control" id="maps" name="maps" value="{{ old('maps', $settings->maps) }}" required>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Update Kontak</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Social Media Modal -->
                    <div class="modal fade" id="socialMediaModal" tabindex="-1" aria-labelledby="socialMediaModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="socialMediaModalLabel">Media Sosial Setting</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="{{ route('settings.socialmedia.update') }}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <div class="mb-3">
                                            <label for="facebook" class="form-label">Facebook</label>
                                            <input type="url" class="form-control" id="facebook" name="facebook" value="{{ old('facebook', $settings->facebook) }}">
                                        </div>
                                        <div class="mb-3">
                                            <label for="youtube" class="form-label">YouTube</label>
                                            <input type="url" class="form-control" id="youtube" name="youtube" value="{{ old('youtube', $settings->youtube) }}">
                                        </div>
                                        <div class="mb-3">
                                            <label for="instagram" class="form-label">Instagram</label>
                                            <input type="url" class="form-control" id="instagram" name="instagram" value="{{ old('instagram', $settings->instagram) }}">
                                        </div>
                                        <div class="mb-3">
                                            <label for="twitter" class="form-label">Twitter</label>
                                            <input type="url" class="form-control" id="twitter" name="twitter" value="{{ old('twitter', $settings->twitter) }}">
                                        </div>
                                        <button type="submit" class="btn btn-primary">Update Media Sosial</button>
                                    </div>
                                    </form>
                                </div>
                            </div>
                           

                        </div>
                    </div>
                </section>
            </div>

        </div>
    </div>

    <script src="/assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="/assets/js/bootstrap.bundle.min.js"></script>

    <script src="/assets/vendors/apexcharts/apexcharts.js"></script>
    <script src="/assets/js/pages/dashboard.js"></script>

    <script src="/assets/js/main.js"></script>
    
    <script>
        let table1 = document.querySelector('#table1');
        let dataTable = new simpleDatatables.DataTable(table1);
    </script>
    
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const deleteButtons = document.querySelectorAll('.btn-delete');
    
            deleteButtons.forEach(button => {
                button.addEventListener('click', function () {
                    const userId = this.getAttribute('data-id');
                    const form = this.closest('form');
    
                    Swal.fire({
                        title: 'Yakin ingin menghapus?',
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
