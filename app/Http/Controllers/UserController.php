<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

use App\User;

class UserController extends Controller
{
    //
    

    public function index()
    {
    	$users = User::where('id','>', '1' )->get();
    	return view('users', compact('users'), ['sn' => 1 ]);
    }

    public function approve($user_id)
    {
    	$user = User::findOrFail($user_id);
    	$user->update(['approved_at' => Carbon::now()]);

    	return redirect()->route('admin.users.index')->withMessage($user->name . ' approved Successfully!');

    }

     public function disapprove($user_id)
    {
        $user = User::findOrFail($user_id);
        $user->update(['approved_at' => Null]);

        return redirect()->route('admin.users.index')->withMessage($user->name . ' disapproved Successfully!');

    }

}
