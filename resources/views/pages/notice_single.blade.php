@extends('layouts.app')

@section('content')


<!-- page title -->
<section class="page-title-section overlay" data-background="images/backgrounds/page-title.jpg">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <ul class="list-inline custom-breadcrumb">
          <li class="list-inline-item"><a class="h2 text-primary font-secondary" href="/notice">Notice</a></li>
          <li class="list-inline-item text-white h3 font-secondary nasted">Notice Details</li>
        </ul>
        <p class="text-lighten">Our courses offer a good future for our users everyday and hope for a better future together.</p>
      </div>
    </div>
  </div>
</section>
<!-- /page title -->

<!-- notice details -->
<section class="section">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="d-flex">
          <div class="text-center mr-4">
            <div class="p-4 bg-primary text-white">
                <span class="h2 d-block">30</span> APR,2019
            </div>
          </div>
          <!-- notice content -->
          <div>
            <h3 class="mb-4">Teaching Materials and Testing Methods</h3>
            <p></p>
            <p></p>
            <ul class="list-styled mb-5">
              <li>Digital Access to Scholarship at Smart</li>
              <li>institutes</li>
              <li>Smart-affiliated hospitals and research</li>
              <li>Smart Catalyst</li>
              <li>Smart Library Portal</li>
              <li>Smart research programs and departments</li>
            </ul>
            <a href="#" class="btn btn-primary">Download</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /notice details -->

@endsection


<!-- jQuery -->
<script src="plugins/jQuery/jquery.min.js"></script>
<!-- Bootstrap JS -->
<script src="plugins/bootstrap/bootstrap.min.js"></script>
<!-- slick slider -->
<script src="plugins/slick/slick.min.js"></script>
<!-- aos -->
<script src="plugins/aos/aos.js"></script>
<!-- venobox popup -->
<script src="plugins/venobox/venobox.min.js"></script>
<!-- mixitup filter -->
<script src="plugins/mixitup/mixitup.min.js"></script>
<!-- google map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU&libraries=places"></script>
<script src="plugins/google-map/gmap.js"></script>

<!-- Main Script -->
<script src="js/script.js"></script>

</body>
</html>