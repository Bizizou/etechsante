<?php

namespace App\Http\Controllers;

use App\Models\Entities\User;
use Illuminate\Support\Facades\DB;

class UsersController extends Controller
{
    /**
     * Show a user page
     *
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($id)
    {
        $user = User::where("id", $id)->firstOrFail();
        $files = $user->files;
        $fileCount = $files->count();

        return view("users.show", ["user" => $user, "files" => $files, "fileCount" => $fileCount]);
    }

    public function index()
    {
        return view('adminpanel', [
            'admins' => DB::table('users')->where('role','=','admin')->orderBy('id', 'DESC')->paginate(5),
            'cliniques' => DB::table('users')->where('role','=','clinique')->orderBy('id', 'DESC')->paginate(5),
            'radiologues' => DB::table('users')->where('role','=','radiologue')->orderBy('id', 'DESC')->paginate(5),
            
            
        ],
    );
    }

}
