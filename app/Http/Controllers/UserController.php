<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Services\UserService;

class UserController extends Controller
{
    
    protected $userService;
    
    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    public function user()
    {
        return $this->userService->user();
    }

    public function index(){
       return $this->userService->getAllUsers();
    }
    
    public function store(Request $request){
        return $this->userService->createNewUser($request);
    }


    public function update(Request $request, $id){
        return $this->userService->updateUser($id, $request);
    }

    public function destroy($id){
        return $this->userService->deleteUser($id);
    }
}
