@extends('layouts.app')

@section('content')


<!-- page title -->
<section class="page-title-section overlay" data-background="images/backgrounds/page-title.jpg">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <ul class="list-inline custom-breadcrumb">
          <li class="list-inline-item"><a class="h2 text-primary font-secondary" href="@@page-link">Upcoming Events</a></li>
          <li class="list-inline-item text-white h3 font-secondary @@nasted"></li>
        </ul>
        <p class="text-lighten">Tree plantation drive: join us to make the society greener and pollution free.</p>
      </div>
    </div>
  </div>
</section>

<!-- courses -->
<section class="section">
  <div class="container">
    <div class="row">
      <!-- event -->
      <div class="col-lg-4 col-sm-6 mb-5">
        <div class="card border-0 rounded-0 hover-shadow">
          <div class="card-img position-relative">
            <img class="card-img-top rounded-0" src="images/w3.jpg" alt="event thumb">
            <div class="card-date"><span>18</span><br>September</div>
          </div>
          <div class="card-body">
            <!-- location -->
            <p><i class="ti-location-pin text-primary mr-2"></i>Ulhasnagar</p>
            <a href="event-single.html">
              <h4 class="card-title">Counselling by the best mentors.</h4>
            </a>
          </div>
        </div>
      </div>
      <!-- event -->
      <div class="col-lg-4 col-sm-6 mb-5">
        <div class="card border-0 rounded-0 hover-shadow">
          <div class="card-img position-relative">
            <img class="card-img-top rounded-0" src="images/w4.jpg" alt="event thumb">
            <div class="card-date"><span>21</span><br>September</div>
          </div>
          <div class="card-body">
            <!-- location -->
            <p><i class="ti-location-pin text-primary mr-2"></i>Ulhasnagar</p>
            <a href="event-single.html">
              <h4 class="card-title">Research seminar on the working of the enviroment.</h4>
            </a>
          </div>
        </div>
      </div>
      <!-- event -->
      <div class="col-lg-4 col-sm-6 mb-5">
        <div class="card border-0 rounded-0 hover-shadow">
          <div class="card-img position-relative">
            <img class="card-img-top rounded-0" src="images/w7.jpg" alt="event thumb">
            <div class="card-date"><span>23</span><br>September</div>
          </div>
          <div class="card-body">
            <!-- location -->
            <p><i class="ti-location-pin text-primary mr-2"></i>Ulhasnagar</p>
            <a href="event-single.html">
              <h4 class="card-title">Help age india project.</h4>
            </a>
          </div>
        </div>
      </div>
      <!-- event -->
      <div class="col-lg-4 col-sm-6 mb-5">
        <div class="card border-0 rounded-0 hover-shadow">
          <div class="card-img position-relative">
            <img class="card-img-top rounded-0" src="images/w8.jpg" alt="event thumb">
            <div class="card-date"><span>18</span><br>September</div>
          </div>
          <div class="card-body">
            <!-- location -->
            <p><i class="ti-location-pin text-primary mr-2"></i>Ulhasnagar</p>
            <a href="event-single.html">
              <h4 class="card-title">Rural health care seminar.</h4>
            </a>
          </div>
        </div>
      </div>
      <!-- event -->
      <div class="col-lg-4 col-sm-6 mb-5">
        <div class="card border-0 rounded-0 hover-shadow">
          <div class="card-img position-relative">
            <img class="card-img-top rounded-0" src="images/w5.jpg" alt="event thumb">
            <div class="card-date"><span>21</span><br>September</div>
          </div>
          <div class="card-body">
            <!-- location -->
            <p><i class="ti-location-pin text-primary mr-2"></i>Ulhasnagar</p>
            <a href="event-single.html">
              <h4 class="card-title">Inequality seminar for the elders.</h4>
            </a>
          </div>
        </div>
      </div>
      <!-- event -->
      <div class="col-lg-4 col-sm-6 mb-5">
        <div class="card border-0 rounded-0 hover-shadow">
          <div class="card-img position-relative">
            <img class="card-img-top rounded-0" src="images/w6.jpg" alt="event thumb">
            <div class="card-date"><span>23</span><br>September</div>
          </div>
          <div class="card-body">
            <!-- location -->
            <p><i class="ti-location-pin text-primary mr-2"></i>Ulhasnagar</p>
            <a href="event-single.html">
              <h4 class="card-title">Social media and behavior economics conference</h4>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section><!-- /courses -->

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