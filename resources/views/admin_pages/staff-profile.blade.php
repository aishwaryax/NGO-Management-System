@extends('layouts.admin')
@section('content')

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <!-- CSS Files -->
    <link href="../../css/bootstrap.min.css" rel="stylesheet" />
    <link href="../../css/light-bootstrap-dashboard.css" rel="stylesheet" />

            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Add Details</h4>
                                </div>
                                <div class="card-body">
    {!! Form::open(['action' => [ 'StaffController@update', $s->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}

                                        <div class="row">
                                            <div class="col-md-5 pr-1">
                                                <div class="form-group">
                                                    {{Form::label('name','Name')}}
                                                    {{Form::text('name', $s->name,['class'=>'form-control','placeholder'=>'Name'])}}
                                                </div>
                                            </div>
                                            <div class="col-md-3 px-1">
                                                <div class="form-group">
                                                    {{Form::label('contact_text','Contact No.')}}
                                                    {{Form::text('contact', $s->contact,['class'=>'form-control','placeholder'=>'Phone Number'])}}
                                                </div>
                                            </div>
                                            
                                        </div>
                                        <div class="row">
                                            <div class="col-md-5 pr-1">
                                                <div class="form-group">
                                                    {{Form::label('email','Email ID')}}
                                                    {{Form::text('email', $s->email,['class'=>'form-control','placeholder'=>'Email ID'])}}
                                                </div>
                                            </div>
                                            
                                            <div class="col-md-3 px-1">
                                                <div class="form-group">
                                                    {{Form::label('salary_text','Salary')}}
                                                    {{Form::text('salary', $s->salary,[' readonly' ,'class'=>'form-control','placeholder'=>'Enter salary . . .'])}}
                                                </div>
                                            </div>
                                            </div>

                                            <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    {{Form::label('address','Address')}}
                                                    {{Form::text('address', $s->address,['class'=>'form-control','placeholder'=>'Address . . .'])}}
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-8 pr-1">
                                                <div class="form-group">
                                                    {{Form::label('password_text','Password')}}
                                                    {{Form::input('password', 'pass', $s->password,['class'=>'form-control'])}}
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-5 pr-1">
                                                <div class="form-group">
                                                    {{Form::label('aadhar_text','Aadhar')}}
                                                    {{Form::text('aadhar_card', $s->aadhar_card,['class'=>'form-control','placeholder'=>'Aadhar Card Number . . .'])}}
                                                </div>
                                            </div>
                                            
                                            <div class="col-md-3 px-1">
                                                <div class="form-group">
                                                    {{Form::label('age_text','Age')}}
                                                    {{Form::text('age', $s->age,['class'=>'form-control','placeholder'=>'Age . . .'])}}
                                                </div>
                                            </div>
                                            </div>


                                             <div class="row">
                                            <div class="col-md-8 pr-1">
                                                <div class="form-group">
                                                    {{Form::label('books_issued_text','Books issued')}}
                                                    {{Form::textarea('books_issued', $s->books_issued,['rows'=>'4', 'cols'=>'60','class'=>'form-control','placeholder'=>'Books issued . . .'])}}
                                                </div>
                                            </div>
                                        </div>

                                            
                                        

                                        

                                        <div class="row">
                                        <div class="col-md-6 px-4">
                                                <div class="form-group">
                                                    <label>Gen</label>
                                                    {{Form::label('male','M',['class'=>'form-check-label'])}}
                                                    {{Form::radio('gender', 'female',[ 'class'=>'form-check-input'])}}
                                                    {{Form::label('female','F',['class'=>'form-check-label'])}}
                                                    {{Form::radio('gender', 'others', ['class'=>'form-check-input'])}}
                                                    {{Form::label('others','Others',['class'=>'form-check-label'])}}
                                                    {{Form::radio('gender', 'others', ['class'=>'form-check-input'])}}                                                     
                                                </div>
                                        </div>

                                            <div class="col-md-4 mr-1">
                                            
                                                    <div class="form-group">
                                                    {{Form::label('role_text','Role')}}
                                                    {{Form::select('role', ['Developer' => 'Developer', 'Admin' => 'Admin', 'Library Staff' => 'Library Staff','class'=>'form-control'])}}
                                                    </div>


                                        </div>
                                        </div>

                                        

                                           
                                        <div class="row">
                                            <div class="col-md-12 px-5">

                                                                                    {{Form::hidden('_method','PUT')}}

                                        {{Form::submit('Submit',['class'=>"btn btn-info btn-fill pull-right"])}}
                                        </div>
                                        </div>
    
                                    {!! Form::close() !!}
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card card-user">
                                <div class="card-image">
                                    <img src="https://ununsplash.imgix.net/photo-1431578500526-4d9613015464?fit=crop&fm=jpg&h=300&q=75&w=400" alt="...">
                                </div>
                                <div class="card-body">
                                    <div class="author">
                                        <a href="#">
                                            <img class="avatar border-gray" src="../../admin_images/user.png" alt="...">
                                        </a>
                                        
                                    </div>
                                    
                                </div>
                                <hr>
                                <div class="button-container mr-auto ml-auto">
                                    <button href="#" class="btn btn-simple btn-link btn-icon">
                                        <i class="fa fa-facebook-square"></i>
                                    </button>
                                    <button href="#" class="btn btn-simple btn-link btn-icon">
                                        <i class="fa fa-twitter"></i>
                                    </button>
                                    <button href="#" class="btn btn-simple btn-link btn-icon">
                                        <i class="fa fa-google-plus-square"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            @endsection