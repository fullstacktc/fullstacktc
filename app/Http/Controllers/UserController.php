<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\TalkSubmissions;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, $username)
    {
        $user = User::where('username', $username)->with('talk_submissions')->get()->first();
        return view('user.profile')->with('user', $user);
    }

    public function all_presenters() {
        $users = User::all();
        return view('user.list')->with('users', $users);
    }

}
