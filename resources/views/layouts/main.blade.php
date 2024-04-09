<!DOCTYPE html>

<!-- =========================================================
* Sneat - Bootstrap 5 HTML Admin Template - Pro | v1.0.0
==============================================================

* Product Page: https://themeselection.com/products/sneat-bootstrap-html-admin-template/
* Created by: ThemeSelection
* License: You must have a valid license purchased in order to legally use the theme for your project.
* Copyright ThemeSelection (https://themeselection.com)

=========================================================
 -->
<!-- beautify ignore:start -->
<html
  lang="en"
  class="light-style layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="../assets/"
  data-template="vertical-menu-template-free"
>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>Dashboard - Analytics | Sneat - Bootstrap 5 HTML Admin Template - Pro</title>

    <meta name="description" content="" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-bracket/0.11.1/jquery.bracket.min.css" />
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-bracket/0.11.1/jquery.bracket.min.js"></script>

    <!-- Favicon -->
<link rel="icon" type="image/x-icon" href="{{ asset('assets/img/favicon/favicon.ico') }}" />

<!-- Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com" />
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
<link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet" />

<!-- Icons. Uncomment required icon fonts -->
<link rel="stylesheet" href="{{ asset('assets/vendor/fonts/boxicons.css') }}" />

<!-- Core CSS -->
<link rel="stylesheet" href="{{ asset('assets/vendor/css/core.css') }}" class="template-customizer-core-css" />
<link rel="stylesheet" href="{{ asset('assets/vendor/css/theme-default.css') }}" class="template-customizer-theme-css" />
<link rel="stylesheet" href="{{ asset('assets/css/demo.css') }}" />

<!-- Vendors CSS -->
<link rel="stylesheet" href="{{ asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/vendor/libs/apex-charts/apex-charts.css') }}" />

<!-- Page CSS -->

<!-- Helpers -->
<script src="{{ asset('assets/vendor/js/helpers.js') }}"></script>

<!-- Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
<!-- Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
<script src="{{ asset('assets/js/config.js') }}"></script>

<style>
  .jQBracket .team .name {
    width: 200px; /* Atur lebar sesuai kebutuhan Anda */
}

</style>
  </head>

<body>
  <!-- Layout wrapper -->
  <div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
      <!-- Menu -->

      @include('layouts.sidebar')

      @include('layouts.navbar')

      @yield('content')

      @include('layouts.footer')
           
            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>

    <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>
  </div>
  <!-- / Layout wrapper -->

    <div class="buy-now">
      <a
        href="https://themeselection.com/products/sneat-bootstrap-html-admin-template/"
        target="_blank"
        class="btn btn-danger btn-buy-now"
        >Upgrade to Pro</a
      >
    </div>

    <script>
// Data untuk semua bracket
var bracketData = {
        "#myBracket": {
            teams: [
                ["Participants 1", "Participants 2"],
                ["Participants 3", "Participants 4"],
                ["Participants 5", "Participants 6"],
                ["Participants 7", "Participants 8"],
                ["Participants 9", "Participants 10"],
                ["Participants 11", "Participants 12"],
                ["Participants 13", "Participants 14"],
                ["Participants 15", "Participants 16"]
            ],
            results: []
        },
        "#myBracket2": {
            // Data untuk bracket 2
            teams: [
                ["Participants 17", "Participants 18"],
                ["Participants 19", "Participants 20"],
                ["Participants 21", "Participants 22"],
                ["Participants 23", "Participants 24"],
                ["Participants 25", "Participants 26"],
                ["Participants 27", "Participants 28"],
                ["Participants 29", "Participants 30"],
                ["Participants 31", "Participants 32"]
            ],
            results: []
        },
        "#myBracket3": {
            // Data untuk bracket 3
            teams: [
                ["Participants 33", "Participants 34"],
                ["Participants 35", "Participants 36"],
                ["Participants 37", "Participants 38"],
                ["Participants 39", "Participants 40"],
                ["Participants 41", "Participants 42"],
                ["Participants 43", "Participants 44"],
                ["Participants 45", "Participants 46"],
                ["Participants 47", "Participants 48"]
            ],
            results: []
        },
        "#myBracket4": {
            // Data untuk bracket 3
            teams: [
                ["Participants 33", "Participants 34"],
                ["Participants 35", "Participants 36"],
                ["Participants 37", "Participants 38"],
                ["Participants 39", "Participants 40"],
                ["Participants 41", "Participants 42"],
                ["Participants 43", "Participants 44"],
                ["Participants 45", "Participants 46"],
                ["Participants 47", "Participants 48"]
            ],
            results: []
        },
        "#myBracket5": {
            // Data untuk bracket 3
            teams: [
                ["Participants 33", "Participants 34"],
                ["Participants 35", "Participants 36"],
                ["Participants 37", "Participants 38"],
                ["Participants 39", "Participants 40"],
                ["Participants 41", "Participants 42"],
                ["Participants 43", "Participants 44"],
                ["Participants 45", "Participants 46"],
                ["Participants 47", "Participants 48"]
            ],
            results: []
        },
        "#myBracket6": {
            // Data untuk bracket 3
            teams: [
                ["Participants 33", "Participants 34"],
                ["Participants 35", "Participants 36"],
                ["Participants 37", "Participants 38"],
                ["Participants 39", "Participants 40"],
                ["Participants 41", "Participants 42"],
                ["Participants 43", "Participants 44"],
                ["Participants 45", "Participants 46"],
                ["Participants 47", "Participants 48"]
            ],
            results: []
        },
    };

    // Inisialisasi bracket untuk setiap div dengan ID yang berbeda
    for (var bracketId in bracketData) {
        $(bracketId).bracket({
            init: bracketData[bracketId],
            save: function () {
                console.log('Bracket has been saved.');
            }
        });
    }

    $(document).ready(function () {
    // Mendapatkan URL halaman saat ini
    var currentUrl = window.location.href;

    // Cek jika URL mengandung '/tambah-data'
    if (currentUrl.includes("/tambah-data")) {
        // Hapus kelas 'active' dari menu Bagan jika ada
        $(".menu-item.active").removeClass("active");

        // Tambahkan kelas 'active' ke menu Tambah Data
        $(".menu-item a[href='/tambah-data']").parent().addClass("active");
    } else if (currentUrl.includes("/informasi")) {
        // Hapus kelas 'active' dari menu Bagan jika ada
        $(".menu-item.active").removeClass("active");

        // Tambahkan kelas 'active' ke menu Informasi
        $(".menu-item a[href='/informasi']").parent().addClass("active");
    }
});

    </script>

    <!-- Core JS -->
<!-- build:js assets/vendor/js/core.js -->
<script src="{{ asset('assets/vendor/libs/jquery/jquery.js') }}"></script>
<script src="{{ asset('assets/vendor/libs/popper/popper.js') }}"></script>
<script src="{{ asset('assets/vendor/js/bootstrap.js') }}"></script>
<script src="{{ asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>

<script src="{{ asset('assets/vendor/js/menu.js') }}"></script>
<!-- endbuild -->

<!-- Vendors JS -->
<script src="{{ asset('assets/vendor/libs/apex-charts/apexcharts.js') }}"></script>

<!-- Main JS -->
<script src="{{ asset('assets/js/main.js') }}"></script>

<!-- Page JS -->
<script src="{{ asset('assets/js/dashboards-analytics.js') }}"></script>

<!-- Place this tag in your head or just before your close body tag. -->
<script async defer src="https://buttons.github.io/buttons.js"></script>

{{-- Box Icon --}}
<script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
  </body>
</html>