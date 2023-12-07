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
                @if (session('warn'))
                    <div class="alert alert-warning" role="alert">
                        {{ session('warn') }}
                    </div>
                @endif
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                    <div class="card-header">
                        <h3 class="text-center font-weight-light my-4">Login</h3>
                    </div>
                    <div class="card-body">
                        <form action="/login" method="post">
                            @csrf
                            <div class="form-floating mb-3">
                                <input class="form-control" name="email" id="email" type="email"
                                    placeholder="masukan email" required />
                                <label for="email">email</label>
                            </div>
                            <div class="form-floating mb-5">
                                <input class="form-control" name="password" id="password" type="password"
                                    placeholder="Password" required />
                                <label for="password">Password</label>
                            </div>
                            <!-- <div class="form-check mb-3">
                                <input class="form-check-input" id="inputRememberPassword" type="checkbox" value="" />
                                <label class="form-check-label" for="inputRememberPassword">Remember Password</label>
                            </div>  -->
                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                <!-- <a class="small" href="password.html">Forgot Password?</a> -->
                                <!-- <a class="btn btn-primary">Login</a> -->
                                <button class="btn btn-primary" type="submit">Login</button>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer text-center py-3">
                        <div class="small"><a href="{{ route('register') }}">Belum mempunyai akun?</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
