
<!DOCTYPE html>
<html lang="en">
  <head>
      @include('backend.admin.pertials.css-link')
  </head>
  <body>
    <div class="container-scroller">
        <!-- partial:partials/_sidebar.html -->
        @include('backend.admin.pertials.sidebar')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
        @include('backend.admin.pertials.header')
        <!-- partial -->
        <div class="main-panel">
        @include('backend.admin.pertials.body')
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        @include('backend.admin.pertials.footer')
        <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>

      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
   @include('backend.admin.pertials.script')
  </body>
</html>