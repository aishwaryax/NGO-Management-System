@extends('layouts.admin')

@section('content')



<div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card strpied-tabled-with-hover">
                                <div class="card-header ">
                                    <h4 class="card-title">Donations by Members</h4>
                                    <p class="card-category">. .  . . . . . . . . . . . . . . .</p>
                                </div>
                                <div class="card-body table-full-width table-responsive">
                                @if (count($donor)>0)
                                        
                                    <table class="table table-hover table-striped">
                                        <thead>
                                            <th>Sr. No.</th>
                                            <th>Member Name</th>
                                            <th>Donation Amount</th>
                                            <th>Mode of Payment</th>
                                            <th>Date/Time</th>
                                            <th>Email ID</th>
                                            <th>Nationality</th>


                                            
                                            

                                        </thead>
                                        <tbody>
                                        @foreach($donor as $s)
                                            <tr> 
                                            <td>{{$s->id}}</td>
                                            <td>{{$s->user->name}}</td>
                                            <td>{{$s->amount}}</td>
                                            <td>{{$s->mode_of_payment}}</td>
                                            <td>{{$s->created_at}}</td>
                                            <td>{{$s->user->email}}</td>
                                            <td>{{$s->nationality}}</td>
                                         @endforeach

                                            
                                        </tbody>
                                    </table>
                                
                                    @else
                                        <p>No donations present!
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                          @endsection
