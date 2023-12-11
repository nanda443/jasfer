<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>{{ $title }} | Jasa Fotografer dan Sewa Kamera</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    @stack('styles')

    <!-- Favicons -->
    <link href="{{ asset('template/assets/img/logo1.png') }}" rel="icon">
    <link href="{{ asset('template/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('template/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('template/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('template/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('template/assets/vendor/quill/quill.snow.css') }}" rel="stylesheet">
    <link href="{{ asset('template/assets/vendor/quill/quill.bubble.css') }}" rel="stylesheet">
    <link href="{{ asset('template/assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('template/assets/vendor/simple-datatables/style.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('template/assets/css/style.css') }}" rel="stylesheet">

    <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: Sep 18 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">

        <div class="d-flex align-items-center justify-content-between">
            <a href="index.html" class="logo d-flex align-items-center">
                <img src="{{ asset('template/assets/img/logo1.png') }}" alt="">
                <span class="d-none d-lg-block">JasFer</span>
            </a>
            <i class="bi bi-list toggle-sidebar-btn"></i>
        </div><!-- End Logo -->

        <div class="search-bar">
            <form class="search-form d-flex align-items-center" method="POST" action="#">
                <input type="text" name="query" placeholder="Search" title="Enter search keyword">
                <button type="submit" title="Search"><i class="bi bi-search"></i></button>
            </form>
        </div><!-- End Search Bar -->

        <nav class="header-nav ms-auto">
            <ul class="d-flex align-items-center">

                <li class="nav-item d-block d-lg-none">
                    <a class="nav-link nav-icon search-bar-toggle " href="#">
                        <i class="bi bi-search"></i>
                    </a>
                </li><!-- End Search Icon-->
                @auth
                    <li class="nav-item dropdown">
                        <a class="nav-link nav-icon" href="" data-bs-toggle="dropdown">
                            <i class="bi bi-cart-check"></i>
                            <span class="badge bg-primary badge-number">{{ count($userCart) }}</span>
                        </a><!-- End Notification Icon -->
                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages ">
                            <li class="dropdown-header">
                                {{ count($userCart) }} barang di keranjang
                                <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">Lihat
                                        semua</span></a>
                            </li>
                            @if (isset($userCart))
                                @foreach ($userCart->slice(0, 5) as $item)
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li class="message-item">
                                        <a href="">
                                            <img src="{{ asset('template/assets/img/messages-1.jpg') }}" alt=""
                                                class="rounded-circle">
                                            <div>
                                                <h4>{{ $item->fotografer ? $item->fotografer->nama : $item->kamera->nama }}
                                                </h4>
                                                <p class="text-danger">Rp.
                                                    {{ $item->fotografer ? $item->fotografer->harga : $item->kamera->harga }}/hari
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                @endforeach
                            @endif

                        </ul><!-- End Notification Dropdown Items -->

                    </li><!-- End Notification Nav -->

                    <li class="nav-item dropdown">

                        <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
                            <i class="bi bi-chat-left-text"></i>
                            <span class="badge bg-success badge-number">3</span>
                        </a><!-- End Messages Icon -->

                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages">
                            <li class="dropdown-header">
                                You have 3 new messages
                                <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>

                            <li class="message-item">
                                <a href="#">
                                    <img src="{{ asset('template/assets/img/messages-1.jpg') }}" alt=""
                                        class="rounded-circle">
                                    <div>
                                        <h4>Maria Hudson</h4>
                                        <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                                        <p>4 hrs. ago</p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>

                            <li class="message-item">
                                <a href="#">
                                    <img src="{{ asset('template/assets/img/messages-2.jpg') }}" alt=""
                                        class="rounded-circle">
                                    <div>
                                        <h4>Anna Nelson</h4>
                                        <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                                        <p>6 hrs. ago</p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>

                            <li class="message-item">
                                <a href="#">
                                    <img src="{{ asset('template/assets/img/messages-3.jpg') }}" alt=""
                                        class="rounded-circle">
                                    <div>
                                        <h4>David Muldon</h4>
                                        <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                                        <p>8 hrs. ago</p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>

                            <li class="dropdown-footer">
                                <a href="#">Show all messages</a>
                            </li>

                        </ul><!-- End Messages Dropdown Items -->

                    </li><!-- End Messages Nav -->

                    <li class="nav-item dropdown pe-3">

                        <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#"
                            data-bs-toggle="dropdown">
                            <img src="{{ asset('template/assets/img/profile-img.jpg') }}" alt="Profile"
                                class="rounded-circle">
                            <span class="d-none d-md-block dropdown-toggle ps-2">{{ auth()->user()->name }}</span>
                        </a><!-- End Profile Iamge Icon -->

                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                            <li class="dropdown-header">
                                <h6>{{ auth()->user()->name }}</h6>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>

                            <li>
                                <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                                    <i class="bi bi-person"></i>
                                    <span>My Profile</span>
                                </a>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>

                            <li>
                                <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                                    <i class="bi bi-gear"></i>
                                    <span>Account Settings</span>
                                </a>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>

                            <li>
                                <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
                                    <i class="bi bi-question-circle"></i>
                                    <span>Need Help?</span>
                                </a>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>

                            <li>
                                <form action="/Logout" method="POST">
                                    @csrf
                                    <button type="submit" class="dropdown-item d-flex align-items-center"><i
                                            class="bi bi-box-arrow-right"></i>Logout</button>
                                </form>
                            </li>

                        </ul><!-- End Profile Dropdown Items -->
                    </li><!-- End Profile Nav -->
                @else
                    <div class="btn-group me-3 " role="group" aria-label="Basic example">
                        <a href="/Login" class="btn btn-primary px-3 d-block  fw-bold ">
                            <i class="bi bi-box-arrow-in-right pe-1"></i>Login</a>
                    </div>
                @endauth
            </ul>
        </nav><!-- End Icons Navigation -->

    </header><!-- End Header -->

    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">

        <ul class="sidebar-nav" id="sidebar-nav">

            <li class="nav-item">
                <a class="nav-link {{ request()->segment(1) == 'Beranda' || request()->segment(1) == '' ? '' : 'collapsed' }}"
                    href="/Beranda">
                    <i class="bi bi-house-fill"></i>
                    <span>Beranda</span>
                </a>
            </li><!-- End Beranda Nav -->

            <li class="nav-item">
                <a class="nav-link {{ request()->segment(1) == 'Produk' ? '' : 'collapsed' }}" href="/Produk">
                    <i class="bi bi-box-fill"></i>
                    <span>Produk</span>
                </a>
            </li><!-- End Produk Page Nav -->

            <li class="nav-item">
                <a class="nav-link {{ request()->segment(1) == 'Kamera' ? '' : 'collapsed' }}" href="/Kamera">
                    <i class="bi bi-camera-fill"></i>
                    <span>Kamera</span>
                </a>
            </li><!-- End Kamera Nav -->

            <li class="nav-item">
                <a class="nav-link {{ request()->segment(1) == 'Fotografer' ? '' : 'collapsed' }}"
                    href="/Fotografer">
                    <i class="bi bi-image-fill"></i>
                    <span>Fotografer</span>
                </a>
            </li><!-- End Fotografer Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" href="#">
                    <i class="bi bi-credit-card-fill"></i>
                    <span>Kerja Sama</span>
                </a>
            </li><!-- End Kerja Sama Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" href="#">
                    <i class="bi bi-people-fill"></i>
                    <span>Tentang Kami</span>
                </a>
            </li><!-- End Tentang kami Nav -->
        </ul>

    </aside><!-- End Sidebar-->

    <main id="main" class="main">
        @yield('content')

        <section class="section dashboard">
            <div class="row">
                @yield('main')

            </div>
        </section>

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
        <div class="copyright">
            &copy; Copyright <strong><span>JasFer</span></strong>. All Rights Reserved
        </div>

    </footer>

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('template/assets/vendor/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('template/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('template/assets/vendor/chart.js/chart.umd.js') }}"></script>
    <script src="{{ asset('template/assets/vendor/echarts/echarts.min.js') }}"></script>
    <script src="{{ asset('template/assets/vendor/quill/quill.min.js') }}"></script>
    <script src="{{ asset('template/assets/vendor/simple-datatables/simple-datatables.js') }}"></script>
    <script src="{{ asset('template/assets/vendor/tinymce/tinymce.min.js') }}"></script>
    <script src="{{ asset('template/assets/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('template/assets/js/main.js') }}"></script>

    @include('sweetalert::alert')

</body>

</html>
