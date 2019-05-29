<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use App\User;

class UserController extends Controller
{
    
    // Return all the users
    public function index()
    {
        $users = User::all();
        return response() -> json($users);
    }
    
    // creates new user and return newly created user as json response
    public function create(Request $request)
    {

        $user = new User;
        $user->name = $request->name;
        $user->address = $request->address;
        $user->mobile = $request->mobile;
        
        $user->save();
        
        return response()->json($user);
    }
    
    // return single user by it's id 
     public function show($id)
     {
        $user = User::find($id);
        return response()->json($user);
     }
    
    
    // update user by it's id 
      public function update(Request $request, $id)
     { 
        $user= User::find($id);
        
        $user->name = $request->input('name');
        $user->address = $request->input('address');
        $user->mobile = $request->input('mobile');
        $user->save();
        return response()->json($user);
     }
    
    //delete user by it's id and reeturn success meassage
    public function destory($id)
    {
        $user = User::find($id);
        $user ->delete();
        
        return response()->json('User Deleted successfully');
    }

    public function sendView(){
        return view('View');
    }
    
}

?>