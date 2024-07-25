<div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
        <nav class="navbar p-0 fixed-top d-flex flex-row">
        <div class="navbar-menu-wrapper flex-grow d-flex align-items-center justify-content-between">
            <!-- Tombol Minimize di Kiri -->
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                <span class="mdi mdi-menu"></span>
            </button>

            <!-- Konten Navbar (misalnya logo, pencarian, dll.) -->
            <x-app-layout></x-app-layout>

            <!-- Tombol Offcanvas di Kanan -->
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
                <span class="mdi mdi-format-line-spacing"></span>
            </button>
        </div>
    </nav>