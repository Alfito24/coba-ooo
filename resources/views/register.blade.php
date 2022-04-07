<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Daftar</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
    <link href="{{ url('css/jquery.flexdatalist.min.css') }}" rel="stylesheet" type="text/css">
</head>

<body>
    <div class="container">
        <div class="row d-flex flex-column min-vh-100 justify-content-center align-items-center">
            <div class="col-lg-4">
                <main class="form-signin">
                    <h1 class="h3 mb-3 fw-normal text-center">Daftar</h1>
                    <form action="/register" method="post">
                        @csrf
                        <div class="form-floating">
                            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                                id="name" placeholder="Nama" required value="{{ old('name') }}">
                            <label for="nama">Nama</label>
                            @error('nama')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mt-1 form-floating">
                            <input type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                                id="email" placeholder="Email" required value="{{ old('email') }}">
                            <label for="email">Email</label>
                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mt-1 form-floating">
                            <input type="password" class="form-control @error('password') is-invalid @enderror"
                                name="password" id="password" placeholder="Password" required>
                            <label for="password">Password</label>
                            @error('password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mt-1 form-floating" style="display: none;">
                            <label for="peran" class="form-label">Peran</label>
                            <select class="form-select" required id="peran" name="peran" aria-label="Default select example">
                              <option value="">Please Choose</option>
                              <option value="1">Pelanggan</option>
                              <option value="2">Admin</option>
                              <option value="3">Mitra</option>
                            </select>
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Please choose a state.</div>
                        </div>

                        <button class="mt-2 w-100 btn btn-lg btn-primary" type="submit">Daftar</button>
                    </form>
                    <small class="d-block text-center mt-2">Sudah memiliki akun? <a href="/login">Login</a></small>
                </main>

            </div>
        </div>
    </div>
</body>

</html>
