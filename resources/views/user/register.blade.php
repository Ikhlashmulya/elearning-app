<x-layout>
    <br><br>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5">
                @if (session('error'))
                    <div class="alert alert-danger" role="alert">
                        {{ session('error') }}
                    </div>
                @endif
                @if (session('success'))
                    <div class="alert alert-success" role="alert">
                        <h4 class="alert-heading">Registrasi sukses!</h4>
                        <p>Registrasi akun sukses, tunggu sampai admin mengaktivasi akun anda.</p>
                        <hr>
                        <a href="/" class="mb-0">kembali.</a>
                    </div>
                @endif
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                    <div class="card-header">
                        <h3 class="text-center font-weight-light my-4">Register</h3>
                    </div>
                    <div class="card-body">
                        <form action="/register" method="post">
                            @csrf
                            <div class="form-floating mb-3">
                                <input class="form-control" name="name" id="name" type="text"
                                    placeholder="masukan nama" required />
                                <label for="name">nama</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" name="email" id="email" type="email"
                                    placeholder="masukan email" required />
                                <label for="email">email</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" name="password" id="password" type="password"
                                    placeholder="Password" required />
                                <label for="password">Password</label>
                            </div>
                            <div class="form-floating mb-5">
                                <input class="form-control" name="password_confirmation" id="password_confirmation"
                                    type="password" placeholder="konfirmasi password" required />
                                <label for="password_confirmation">Konfirmasi Password</label>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                <button class="btn btn-primary" type="submit">Register</button>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer text-center py-3">

                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
