<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Hash;

class AdminUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();

        return view('admin/user/index', ['users' => $users]);   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/user/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $this->validate($request, [
                'name'                  => 'required|min:3|max:35',
                'email'                 => 'required|email|unique:users,email',
                'password'              => 'required|confirmed'
                ]
            );
            
            User::create([
                'name' => ucwords(strtolower($request->name)),
                'email' => strtolower($request->email),
                'password' =>  Hash::make($request->password)
            ]);
        
            return redirect('/admin/user')->with(array(
                'message' => 'Create admin successfully!'
            ));

        } catch(\Exception $e) {
            
            return redirect('/admin/user/create')->with(array(
                'error' => 'Create admin failed!'
            ));
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::where('id', $id)->first();

        return view('admin/user/edit', ['user' => $user]);
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
        try {
            $this->validate($request, [
                'name'                  => 'required|min:3|max:35',
                'email'                 => 'required|email',
                'password'              => 'confirmed'
                ]
            );
    
            if ($request->has('password')){
                
                User::where('id',$id)->update([
                    'name' => ucwords(strtolower($request->name)),
                    'email' => strtolower($request->email),
                    'password' =>  Hash::make($request->password)
                ]);

            } else {

                User::where('id',$id)->update([
                    'name' => ucwords(strtolower($request->name)),
                    'email' => strtolower($request->email)
                ]);
            }
    
            return redirect('/admin/user')->with(array(
                'message' => 'Edit user successfully!'
            ));

        } catch(\Exception $e) {

            return redirect('/admin/user/edit/' . $id)->with(array(
                'error' => 'Edit user failed!'
            ));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $delete = User::where('id',$request->userId)->delete();
        if ($delete) {
            return redirect('/admin/user')->with(array(
                'message' => 'Delete user successfully!'
            ));
        }
    	return redirect('/admin/user')->with(array(
            'error' => 'Delete user failed!'
        ));
    }
}
