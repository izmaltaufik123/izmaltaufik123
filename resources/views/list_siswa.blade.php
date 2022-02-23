<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- General CSS Files -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" media="screen"
        href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <title>List Data Siswa</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">BIO</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Blog</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Siswa
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Lihat Data</a></li>
                            <li><a class="dropdown-item" href="#">Tambah Siswa</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="jumbotron jumbotron-fluid">
        <div class="container-fluid">
            <h1 class="display-5">Lihat Siswa</h1>
            <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <table id="table_siswa" class="display">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Lahir</th>
                            <th scope="col">Agama</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Telp</th>
                            <th scope="col">Email</th>
                            <th scope="col">SMA</th>
                            <th scope="col">SMP</th>
                            <th scope="col">SD</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <body>
                        @php $i=0 @endphp
                        @foreach ($siswas as $siswa)
                        @php $i++ @endphp
                        <tr>
                            <td>{{ $i }}</td>
                            <td>{{ $siswa->nama }}</td>
                            <td>{{ $siswa->lahir }}, {{ \Carbon\Carbon::parse($siswa->tgl)->format('d/m/Y')}}</td>
                            <td>{{ $siswa->agama }}</td>
                            <td>{{ $siswa->alamat }}</td>
                            <td>{{ $siswa->telp }}</td>
                            <td>{{ $siswa->email }}</td>
                            <td>{{ $siswa->sma }}</td>
                            <td>{{ $siswa->smp }}</td>
                            <td>{{ $siswa->sd }}</td>
                            <td><form method="POST" action="{{ route('destroy_siswa',$siswa->id) }}">
                                <a button type="button" class="btn btn-warning" href="{{ route('edit_siswa',$siswa->id) }}">Edit</button></a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" >Delete</button>
                                <a button type="button" class="btn btn-primary" href="{{ route('show_bio',$siswa->id) }}">Lihat</button></a>
                            </form>
                            </td>
                        </tr>
                        @endforeach
                    </body>
                </table>
                <a href="{{ route('add_siswa') }}">
                    <button type="button" class="btn btn-primary">Add New</button></a>
            </div>
            <div>
                <div>
                </div>
                <script>
                    $(document).ready(function() {
                        $('#table_siswa').DataTable();
                    });
                </script>
</body>
<!-- Datatables -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js"
    integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js"></script>

</html>
