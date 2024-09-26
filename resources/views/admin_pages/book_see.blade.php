




@extends('layouts.admin')

@section('content')
<div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card strpied-tabled-with-hover">
                                <div class="card-header ">
                                    <h4 class="card-title">Library Data</h4>
                                    <p class="card-category">. .  . . . . . . . . . . . . . . .</p>
                                </div>
                                <div class="card-body table-full-width table-responsive">

                                @if (count($req)>0)
                                        
                                    <table class="table table-hover table-striped">
                                        <thead>
                                            <th>User ID</th>
                                            <th>Name of Issuee</th>
                                            <th>Book ID</th>
                                            <th>Book Title</th>
                                            
                                            

                                        </thead>
                                        <tbody>
                                        @foreach($req as $user) 

                                            <tr>
                                            <td>{{$user->user_id}}</a></td>
                                            <td>{{$user->name}}</a></td>
                                            <td>{{$user->book_id}}</a></td>
                                            <td>{{$user->title}}</a></td>
                                            @endforeach

                                            
                                        </tbody>
                                    </table>
                                
                                    @else
                                        <p>Library is empty!
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                          @endsection

