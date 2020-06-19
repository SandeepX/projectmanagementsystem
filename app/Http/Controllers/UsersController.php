<?php

namespace App\Http\Controllers;

use App\Project;
use App\User;

use App\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;






class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $users = User::all();

       // return view('companies.index',['companies'=>$companies]);

        return view('users.index',compact('users'));
    }
   


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        {
        //$company = Company::where('id', $company->id)->first();
        //or we can do as
         

        $company = User::find($user->id);

        return view('users.show',(['user'=>$user]));

        

    }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
       $finduser = User::find($user->id);
       if($finduser->delete()){

        //redirect
        return redirect()->route('users.index')
        ->with('success','user deleted successfully');
       }

       return back()->withInput()->with('errors','user could not be deleted');


    }
}
