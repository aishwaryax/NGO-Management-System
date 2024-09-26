<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <!-- CSS Files -->
    <link href="../css/bootstrap.min.css" rel="stylesheet" />
    <link href="../css/light-bootstrap-dashboard.css" rel="stylesheet" />
        <link href="../css/demo.css" rel="stylesheet" />

@extends(' layouts.admin')
@section('content')

            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Add Book Details</h4>
                                </div>
                                <div class="card-body">
    {!! Form::open(['action' => 'BooksController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}

                                        <div class="row">
                                            <div class="col-md-5 pr-1">
                                                <div class="form-group">
                                                    {{Form::label('book_id_text','Book ID')}}
                                                    {{Form::text('book_id', '',['class'=>'form-control','placeholder'=>'Enter Book ID'])}}
                                                </div>
                                            </div>
                                            <div class="col-md-3 px-1">
                                                <div class="form-group">
                                                    {{Form::label('name_text','Name')}}
                                                    {{Form::text('name', '',['class'=>'form-control','placeholder'=>'Name . . .'])}}
                                                </div>
                                            </div>
                                            
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4 pl-3">
                                                <div class="form-group">
                                                    {{Form::label('ap_text','Author')}}
                                                    {{Form::text('author', '',['class'=>'form-control','placeholder'=>'Author name'])}}
                                                </div>
                                            </div>

                                            <div class="col-md-4 pl-1">
                                                <div class="form-group">
                                                    {{Form::label('lang_text','Language')}}
                                                    {{Form::text('lang', '',['class'=>'form-control','placeholder'=>'Language'])}}
                                                </div>
                                            </div>
                                            
                                            
                                            </div>

                                        

                                            

                                        

                                        

                                        <div class="row">
                                        <div class="col-md-6 pr-1">
                                                <div class="form-group">
                                                    <label>Availabiblity</label>
                                                    {{Form::label('yes_text','Yes',['class'=>'form-check-label'])}}
                                                    {{Form::radio('avail', 'yes',[ 'class'=>'form-check-input'])}}
                                                    {{Form::label('no_text','No',['class'=>'form-check-label'])}}
                                                    {{Form::radio('avail', 'no', ['class'=>'form-check-input'])}}                                               
                                                </div>
                                        </div>

                                        <div class="col-md-6 px-0">
                                            
                                                    <div class="form-group">
                                                    {{Form::label('genre_text','Genre')}}
                                                    {{Form::select('genre', ['Fantasy' => 'Fantasy', 'Science fiction' => 'Science fiction', 'Western' => 'Western','Romance'=>'Romance','Thriller'=>'Thriller','Mystery'=>'Mystery','Detective story'=>'Detective story','Dystopia'=>'Dystopia'],['class'=>'dropdown'])}}                                                
                                            </div>

                                            </div>

                                            


                                        </div>

                                        <div class="row">
                                            <div class="col-md-4 px-3">
                                                <div class="form-group">
                                                    {{Form::label('shelf_no_text','Shelf No')}}
                                                    {{Form::Number('shelf_no', "",['class'=>'form-control','placeholder'=>'Enter shelf no . . .'])}}
                                                </div>
                                            </div>
                                            
                                            <div class="col-md-6 px-3">
                                                <div class="form-group">
                                                    {{Form::label('copies_text','No. of Copies')}}
                                                    {{Form::Number('copies', "",['class'=>'form-control','placeholder'=>'Enter copies . . .'])}}
                                                </div>
                                            </div>
                                            </div>
                                            <div class=row>
                                            <div class="col-md-6 px-3">
                                                <div class="form-group">
                                                    {{Form::label('price_text','Price')}}
                                                    {{Form::Number('price', "",['class'=>'form-control','placeholder'=>'Enter price . . .'])}}
                                                </div>
                                            </div>
                                            </div>
                                        <div class="row">
                                            <div class="col-md-12 px-5">
                                        {{Form::submit('Submit',['class'=>"btn btn-info btn-fill "])}}
                                        </div>
                                        </div>

    
                                    {!! Form::close() !!}
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>

            @endsection

            
