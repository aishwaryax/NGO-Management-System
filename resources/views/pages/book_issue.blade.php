@extends('layouts.app')

                @auth


@section('content')
<!-- page title -->
<section class="page-title-section overlay" data-background="images/backgrounds/page-title.jpg">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <ul class="list-inline custom-breadcrumb">
          <li class="list-inline-item"><a class="h2 text-primary font-secondary" href="@@page-link">Book issue</a></li>
          <li class="list-inline-item text-white h3 font-secondary @@nasted"></li>
        </ul>
        <p class="text-lighten">Come visit the bank for wonderful books wher you can rent or issue the books.</p>
      </div>
    </div>
  </div>
</section>
<!-- /page title -->
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Issue form') }}</div>


                <div class="card-body">

                    {!! Form::open(['action' => 'IssuesController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}

                        @csrf

 <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Genre') }}</label>

                            <div class="col-md-6">
                                {{Form::select('genre', ['Fantasy' => 'Fantasy', 'Science fiction' => 'Science fiction', 'Western' => 'Western','Romance'=>'Romance','Thriller'=>'Thriller','Mystery'=>'Mystery','Detective story'=>'Detective story','Dystopia'=>'Dystopia'],['class'=>'dropdown'])}}                                                


                                @error('genre')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Title') }}</label>

                            <div class="col-md-6">
                                <input id="title" value="" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}" required autocomplete="title" autofocus>

                                @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" value={{$users->email}} class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                       


                   
                                        <div class="row">
                                        <div class="col-md-6 pr-1">
                                                <div class="form-group">
                                                    <label>books</label>
                                                    {{Form::label('issue_text','Issue',['class'=>'form-check-label'])}}
                                                    {{Form::radio('type', 'issue',[ 'class'=>'form-check-input'])}}
                                                    {{Form::label('issue_','Rent',['class'=>'form-check-label'])}}
                                                    {{Form::radio('type', 'rent', ['class'=>'form-check-input'])}}                                               
                                                </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12 px-5">


                                        {{Form::submit('Submit',['class'=>"btn btn-info btn-fill pull-right"])}}
                                        </div>
                                        </div>

                    
                                    {!! Form::close() !!}
                </div>

                @endauth

                @guest
@section('content')
<!-- page title -->
<section class="page-title-section overlay" data-background="images/backgrounds/page-title.jpg">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <ul class="list-inline custom-breadcrumb">
          <li class="list-inline-item"><a class="h2 text-primary font-secondary" href="/login">Please Login First</a></li>
          <li class="list-inline-item text-white h3 font-secondary @@nasted"></li>
        </ul>
      </div>
    </div>
  </div>
</section>                @endguest
            </div>
        </div>
    </div>
</div>
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