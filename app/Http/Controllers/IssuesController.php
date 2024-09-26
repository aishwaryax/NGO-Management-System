<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use App\User;
use App\Issue;

use Illuminate\Support\Facades\DB;

class IssuesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $req = DB::select('select issues.book_id,issues.user_id,users.name,books.title from (issues join users) join books where issues.user_id=users.id and issues.book_id=books.id');
        return view('admin_pages.book_see',compact('req'));
        //return $req;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function issue()
    {
    

        $user_id = auth()->user()->id;
        $user = User::find($user_id);
        

        return view('pages.book_issue')->with('users',$user);
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
        $user = User::find($user_id);

        $r = new Issue;
        $r->user_id = $user_id;
        
        
        $req = DB::select('select books.id from books where books.title= ?', [$request->input('title')]);

        $r->book_id=$req[0]->id;


        $r->save();
        return view ('inc.book-issue-msg');



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
