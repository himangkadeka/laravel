<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function test2(){
        $data['posts'] = DB::table('posts')->get();
       
        return view('employee',$data);
    }


    public function emp(Request $request)
    {
        $request->validate([
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'designation' => 'required|string|max:255',
            'basicpay' => 'required',
            'password' => 'required|string|min:8',
        ]);
        Post::create(['firstname'=>$request->firstname,
        'lastname'=>$request->lastname,
        'designation'=>$request->designation,
        'basicpay'=>$request->basicpay,
        'password'=>$request->password
        ]);
//getting the data
       return redirect()->back()->with('message', 'Employee Data has been saved');;
        // return view('employee',$data);
     }

    
    
}
