<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <title>Edit Mahasiswa</title>
</head>
<body>
<center>
    <div class="container-fluid">
        <div class="container position-center">
            <div class="row page-bg">
                <div class="p-4 col-md-12">
                    <div class="text-center top-icon">
                        <h1 class="mt-3">Edit Mahasiswa</h1>
                        <br>
                        @if (Session::has('error'))
                            <div class="alert alert-danger">{{ Session::get('error') }}</div>
                        @endif

                        @if (Session::has('wrongUsername'))
                            <div class="alert alert-danger">{{ Session::get('wrongUsername') }}</div>
                        @endif

                        <form id="form-login" action="{{ route('mahasiswa.update', $data->id) }}" method="post" onsubmit="return confirm('Apakah Anda Yakin Edit Data ?');">
                            @csrf

                            <div>
                                <input class="mt-3 form-control form-control-lg @error('nama') is-invalid @enderror" name="nama" type="text"
                                       placeholder="Nama" value="{{ $data->nama ? $data->nama : 'Tidak Ada Data' }}" autofocus required>
                            </div>

                            @error('nama')
                            <div class="alert alert-danger">
                                Nama salah
                            </div>
                            @enderror

                            <div>
                                <input class="mt-3 form-control form-control-lg @error('nrp') is-invalid @enderror" name="nrp" type="text"
                                       placeholder="NRP" value="{{ $data->nrp ? $data->nrp : 'Tidak Ada Data' }}" autofocus required>
                            </div>

                            @error('nrp')
                            <div class="alert alert-danger">
                                NRP Salah
                            </div>
                            @enderror
                        </form>
                        <br>
                        <div class="mt-4 text-center submit-btn">
                            <a href="{{ route('home') }}" class="btn btn-secondary" onclick="return confirm('Apakah Anda Yakin Kembali ke Halaman Utama ?');">Kembali</a>
                            <button type="submit" class="btn btn-primary" form="form-login">Edit Data</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</center>
</body>
</html>
