<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistem E-Learning</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="shortcut icon" href="assets/favicon.ico" type="image/x-icon" />
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary bg-dark fixed-top" data-bs-theme="dark">
        <div class="container">
            <a class="navbar-brand" href="/">
                <img src="" alt="Bootstrap" width="50" height="50">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/">Courses</a>
                    </li>
                </ul>
            </div>
        </div>

    </nav>

    <br><br><br>


    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                    <div class="card-header">
                        <h3 class="text-center font-weight-light my-4">Login</h3>
                    </div>
                    <div class="card-body">
                        <form action="autentikasi.php" method="post">
                            <div class="form-floating mb-3">
                                <input class="form-control" name="username" id="username" type="text"
                                    placeholder="masukan username" />
                                <label for="username">Username</label>
                            </div>
                            <div class="form-floating mb-5">
                                <input class="form-control" name="password" id="password" type="password"
                                    placeholder="Password" />
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
                        <!-- <div class="small"><a href="register.html">Need an account?</a></div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>




    <br><br><br>
    <!-- Footer -->
    <footer class="bg-dark text-center text-white">
        <!-- Grid container -->
        <div class="container p-4 mt-5">

            <!-- Section: Links -->
            <section class="">
                <!--Grid row-->
                <div class="row">
                    <!--Grid column-->
                    <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                        <h5 class="text-uppercase">E-Learning UNPI</h5>

                        <section class="mb-4">
                            <p>
                                Pembelajaran Elearning Bagi Masyarakat Umum di Universitas Putra Indonesia
                            </p>
                        </section>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                        <h5 class="text-uppercase">Quick Links</h5>

                        <ul class="list-unstyled mb-0">
                            <li>
                                <a href="#!" class="text-white">About us</a>
                            </li>
                        </ul>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                        <h5 class="text-uppercase">Follow us</h5>

                        <ul class="list-unstyled mb-0">
                            <li>
                                <a href="#!" class="text-white">facebook</a>
                            </li>
                            <li>
                                <a href="#!" class="text-white">Instagram</a>
                            </li>
                            <li>
                                <a href="#!" class="text-white">Twitter</a>
                            </li>
                        </ul>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                        <h5 class="text-uppercase">Contact</h5>

                        <section class="mb-4">
                            <p>
                                Jl. Dr Muwardi No. 66, Bypass Cianjur 43215
                            </p>
                            <ul>
                                <li>Telepon : +62 263 262604</li>
                                <li>Email : info@unpi-cianjur.ac.id</li>
                            </ul>
                        </section>
                    </div>
                    <!--Grid column-->
                </div>
                <!--Grid row-->
            </section>
            <!-- Section: Links -->
        </div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            Copyright © 2023 Universitas Putra Indonesia Cianjur. All rights reserved.
        </div>
        <!-- Copyright -->
    </footer>
    <!-- Footer -->

</body>

</html>
