<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
Use Illuminate\Support\Facades\DB;
use App\Http\Reqests;
use App\Http\Controllers\Controller;


class Usercontroller extends Controller
{
    public function index()
    {
        $users = DB::select('SELECT * FROM users');
        return view('user', ['users'=>$users]);
    }
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('admin.customers')->withSuccess(__('User delete successfully'));
    }
}
