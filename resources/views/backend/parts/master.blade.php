<!DOCTYPE html>
<html lang="en">

<head>
  @include('backend.parts.head')
</head>

<body>

  <!-- ======= Header ======= -->
    @include('backend.parts.header')
  </header><!-- End Header -->
     
  <!-- ======= Sidebar ======= -->
      @include('backend.parts.sidevar')
  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="content">
        @yield('main_content')
    </div>   
		
  </main><!-- End #main -->
      
  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
      @include('backend.parts.footer')
  </footer><!-- End Footer -->

  @include('backend.parts.jslink')

</body>

</html>