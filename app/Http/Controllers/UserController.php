<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      $usersData=User::all();
      return response(["data"=>$usersData]);   
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data=new User();
        $data->name=$request->name;
        $data->email=$request->email;
        $data->password='';
        if($data->save()){
            return response(["message"=>"user Added Successfully",'data'=>$data]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data=User::where('id',$id)->update([
            "name"=>$request->name,
            "email"=>$request->email,
            'password'=>''
        ]);
        if($data){
           return response(["message"=>"Data updated successfully"]);
        }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $userData=User::where('id',$id)->first();
        if($userData->delete()){
            return response(["message"=>"Data Deleted successfully"]);
        }
    }
}
