<!DOCTYPE html>
<html lang="en">
      @include('includes.head')
  
  <body>
    <div class="wrapper">
      <!-- Sidebar -->
      @include('includes.sidebar')
      <!-- End Sidebar -->

      <div class="main-panel">
        @include('includes.header')

        <div class="container">
          <div class="page-inner">
            @yield('content')
          </div>
        </div>

        @include('includes.footer')
      </div>
    </div>
    @include('includes.script')
  </body>
</html>
