<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Staff;


class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $staff=Staff::all();
        return view('admin_pages.staff-list')->with('staff', $staff);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin_pages.add-staff');
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
        $this->validate($request, [
            'name' => 'required',
            'contact' => 'required',
            'address' => 'required',
            'salary' => 'required',
            'books_issued' => 'required',
            'role' => 'required',
            'age' => 'required',
            'email' => 'required',
            'gender' => 'required'
            //'cover_image' => 'image|nullable|max:1999'
        ]);

        //input

        $s = new Staff;
        $s->name = $request->input('name');
        $s->contact = $request->input('contact');
        $s->address = $request->input('address');
        $s->salary = $request->input('salary');
        $s->books_issued = $request->input('books_issued');
        $s->role = $request->input('role');
        $s->age = $request->input('age');
        $s->aadhar_card = $request->input('aadhar_card');
        $s->email = $request->input('email');
        $s->password = $request->input('password');


        $s->gender = $request->input('gender');
        //$s->user_id = auth()->user()->id;
        //$s->cover_image = $fileNameToStore;
        $s->save();

        return redirect('/staff')->with('success', 'Staff details added');

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
        $s=Staff::find($id);
        

        
        return view ('admin_pages.staff-profile')->with('s', $s);
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
        $s=Staff::find($id);
        

        
        return view ('admin_pages.staff-profile')->with('s', $s);
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
        $s=Staff::find($id);

        $this->validate($request, [
            'name' => 'required',
            'contact' => 'required',
            'address' => 'required',
            'salary' => 'required',
            'books_issued' => 'required',
            'role' => 'required',
            'age' => 'required',
            'email' => 'required',
            'gender' => 'required'
            //'cover_image' => 'image|nullable|max:1999'
        ]);

        //input

        $s->name = $request->input('name');
        $s->contact = $request->input('contact');
        $s->address = $request->input('address');
        $s->salary = $request->input('salary');
        $s->books_issued = $request->input('books_issued');
        $s->role = $request->input('role');
        $s->age = $request->input('age');
        $s->aadhar_card = $request->input('aadhar_card');
        $s->email = $request->input('email');

        $s->gender = $request->input('gender');
        //$s->user_id = auth()->user()->id;
        //$s->cover_image = $fileNameToStore;
        $s->save();

        return redirect('/staff')->with('success', 'Staff details updated');
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
