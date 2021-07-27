<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Entities\User;
class AdminPanelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function CreateUser(Request $request)
    {
        $hashedPassword = Hash::make($request->input("password"));

        $user = User::create([
            "username" => $request->input("username"),
            "email" => $request->input("email"),
            "password" => $hashedPassword,
            "role" => $request->input("role"),
            "avatar_name" => "default.png"
        ]);

        return redirect('adminpanel');
        
    }
    public function ModifyUser(Request $request)
    {
        $hashedPassword = Hash::make($request->input("password"));
        $id = $request->input("admin_id");
        $admin= User::find($id);
        

        if($request->input('username')!=null){
            $admin->update(['username' => $request->input('username')]);
        }
        if($request->input('email')!=null){
            $admin->update(['email' => $request->input('email')]);
        }
        if($request->input('password')!=null){
            $admin->update(['password' => $hashedPassword]);
        }
        if($request->input('role')!=null){
            $admin->update(['role' => $request->input('role')]);
        }

        

        return redirect('adminpanel');
        
    }

    public function DeleteUser()
    {
        $admin_id=$_GET['admin_id'];
        
        $admin=User::find($admin_id);
      
        $admin->delete();
     

        return redirect('adminpanel');
        
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
