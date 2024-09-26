@extends('layouts.app')

@section('content')


<!-- page title -->
<section class="page-title-section overlay" data-background="images/backgrounds/page-title.jpg">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <ul class="list-inline custom-breadcrumb">
          <li class="list-inline-item"><a class="h2 text-primary font-secondary" href="@@page-link">Notice</a></li>
          <li class="list-inline-item text-white h3 font-secondary @@nasted"></li>
        </ul>
        <p class="text-lighten">Our courses offer a good future for our users everyday and hope for a better future together.</p>
      </div>
    </div>
  </div>
</section>
<!-- /page title -->

<!-- notice -->
<section class="section">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <ul class="list-unstyled">
          <!-- notice item -->
          <li class="d-md-table mb-4 w-100 border-bottom hover-shadow">
            <div class="d-md-table-cell text-center p-4 bg-primary text-white mb-4 mb-md-0"><span class="h2 d-block">30</span> SEPT,2019</div>
            <div class="d-md-table-cell px-4 vertical-align-middle mb-4 mb-md-0">
              <a href="notice-single.html" class="h4 mb-3 d-block">Teaching Materials</a>
              <p class="mb-0"></p>
            </div>
          </li>
          <!-- notice item -->
          <li class="d-md-table mb-4 w-100 border-bottom hover-shadow">
            <div class="d-md-table-cell text-center p-4 bg-primary text-white mb-4 mb-md-0"><span class="h2 d-block">27</span> SEPT,2019</div>
            <div class="d-md-table-cell px-4 vertical-align-middle mb-4 mb-md-0">
              <a href="notice-single.html" class="h4 mb-3 d-block">Our Mentors and their Work</a>
              <p class="mb-0"></p>
            </div>
          </li>
          <!-- notice item -->
          <li class="d-md-table mb-4 w-100 border-bottom hover-shadow">
            <div class="d-md-table-cell text-center p-4 bg-primary text-white mb-4 mb-md-0"><span class="h2 d-block">25</span> SEPT,2019</div>
            <div class="d-md-table-cell px-4 vertical-align-middle mb-4 mb-md-0">
              <a href="notice-single.html" class="h4 mb-3 d-block">Testing Methods</a>
              <p class="mb-0"></p>
            </div>
          </li>
          <!-- notice item -->
          <li class="d-md-table mb-4 w-100 border-bottom hover-shadow">
            <div class="d-md-table-cell text-center p-4 bg-primary text-white mb-4 mb-md-0"><span class="h2 d-block">23</span> SEPT,2019</div>
            <div class="d-md-table-cell px-4 vertical-align-middle mb-4 mb-md-0">
              <a href="notice-single.html" class="h4 mb-3 d-block">Students and their Experience</a>
              <p class="mb-0"></p>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
</section>
<!-- /notice -->


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