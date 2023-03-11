<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $users = User::all();
        return view('user', compact('users'));
    }
    public function recovery(){
        $users = User::onlyTrashed()->get();
        return view("restore",compact("users"));
    }
  
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function delete($id)
    {
        User::find($id)->delete();
  
        return back();
    }
  
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function restore($id)
    {
        User::withTrashed()->find($id)->restore();
  
        return back();
    }  
  
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function restoreAll()
    {
        User::onlyTrashed()->restore();
  
        return back();
    }
}
