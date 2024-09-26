<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Donor;
use App\User;

class DonorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $donor=Donor::all();
        return view('admin_pages.donations')->with('donor', $donor);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function donate()
    {
        //
        

        $user_id = auth()->user()->id;
        $user = User::find($user_id);



        return view('pages.donate')->with('users',$user);
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $user_id = auth()->user()->id;

        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'amount' => 'required',
            'address' => 'required',
            'dob' => 'required',
            'nationality' => 'required',
            'mode_of_payment' => 'required'
            //'cover_image' => 'image|nullable|max:1999'
        ]);

        //input


        //for ($i=0; $i<$request->input('copies'); i++)
        $d = new Donor;
        $d->amount = $request->input('amount');
        $d->address = $request->input('address');
        $d->dob = $request->input('dob');
        $d->nationality = $request->input('nationality');
        $d->mode_of_payment = $request->input('mode_of_payment');
        $d->user_id=$user_id;

        $d->save();
       

        
        return view('inc.thank-you');


        //@endfor


        
        //$s->user_id = auth()->user()->id;
        //$s->cover_image = $fileNameToStore;
        //$s->save();

        //return redirect('/books')->with('success', 'Book details added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
