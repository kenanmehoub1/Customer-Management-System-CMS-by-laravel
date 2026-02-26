<!doctype html>
<html lang="ar" dir="rtl">
  @include('admin.layouts.header')
  <body class="layout-fixed sidebar-expand-lg bg-body-tertiary">
    <!--begin::App Wrapper-->
    <div class="app-wrapper">
      @include('admin.layouts.navbar')
      @include('admin.layouts.menu')

      <!--begin::App Main-->
      <main class="app-main">
        @include('admin.layouts.messages')
        @yield('content')
      </main>
      <!--end::App Main-->

      @include('admin.layouts.footer')
    </div>
    <!--end::App Wrapper-->

    @include('admin.layouts.scripts')
  </body>
</html>
