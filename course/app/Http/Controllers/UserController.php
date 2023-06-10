<?php

namespace App\Http\Controllers;

use App\Models\User;
//use Exception;
//use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
class UserController extends Controller
{
    public function index()
    {
        //
        $users = User::all();
        return view('user.index', compact('users'));
    }

    public function create(){
        return view('user.create');
    }
    public function store(Request $request)
    {
       
        $validate = $request->validate([
            'name' => ['required'],
            'email' => ['required'],
            'password' => ['required']
        ]);

       
        User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => $request->password
            ]);
            return to_route('users.index');
       
    }
    public function edit(string $id)
    {
        //
        $user = User::find($id)->first();
        return view('user.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $validate = $request->validate([
            'new_name' => ['required'],
            'new_email' => ['required'],
            'new_password' => ['required']
        ]);


        User::find($id)->update([
            'name' => $request->new_name,
            'email' => $request->new_email,
            'password' => $request->new_password
        ]);
        return to_route('users.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $user = User::findOrFail($id);
        $user->delete();
        return to_route('users.index');
    }

}
