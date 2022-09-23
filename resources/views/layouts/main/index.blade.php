
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cinema App | haidarijl.</title>

    <link rel="stylesheet" href="{{ asset('assets/css/main/app.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/main/app-dark.css') }}" />
    <link rel="shortcut icon" href="{{ asset('assets/images/logo/favicon.svg') }}" type="image/x-icon"/>
    <link rel="shortcut icon" href="{{ asset('assets/images/logo/favicon.png') }}" type="image/png"/>
    <link rel="stylesheet" href="{{ asset('assets/css/shared/iconly.css') }}" />
  </head>

  <body class="theme-dark">
    <div id="app">
      <div id="main" class="layout-horizontal">
        <header class="mb-5">
         @include('partials.header')
         {{-- @include('partials.navbar') --}}
        </header>

        <div class="content-wrapper container">
          {{-- <div class="page-heading">
            <h3>@yield('title')</h3>
          </div> --}}
          <div class="page-content">
            <section class="row">
              @yield('content')
            </section>
          </div>
        </div>

        @include('partials.footer')
      </div>
    </div>
    <script src="{{ asset('assets/js/bootstrap.js') }}"></script>
    <script src="{{ asset('assets/js/app.js') }}"></script>
    <script src="{{ asset('assets/js/pages/horizontal-layout.js') }}"></script>

    <script src="{{ asset('assets/extensions/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('assets/js/pages/dashboard.js') }}"></script>
  </body>
</html>
