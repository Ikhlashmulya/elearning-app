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

    <x-navbar />

    <br><br>

    <main>
        {{ $slot }}
    </main>



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
