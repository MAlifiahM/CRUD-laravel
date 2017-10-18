<?php
namespace App\Services;

use App\User;
use Illuminate\Http\Request;

class UserService{

    public function getAllUsers(){
        $users = User::all()->toArray();
        return response()->json([$users]);
    }

    public function createNewUser(Request $request){
        $users = $request->all();
        User::create($users);
        return response()->json(['message'=>'user created'], 200);
    }

    public function updateUser($id, Request $request){
        $user = User::find($id);

        $data = $request->all();
        $user->name= $data['name'];
        $user->email= $data['email'];
        $user->password = $data['password'];
        $user->save();
        return response()->json(['message' => 'user edited'], 200);
    }

    public function deleteUser($id){
        $user = User::find($id);
        $user->delete();
        return response()->json(['message' => 'user deleted'], 200);
    }
}