<?php

namespace App\Http\Controllers\Admin;

use App\User;
use App\Http\Controllers\Controller;
use App\Http\Requests\userRequest;

//use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function addMember()
    {
        return view('admin.addMember');
    }

    public function insertMember(UserRequest $req)
    {
        try
        {
            //return $req;
            User::create([
                'username'  => $req->username,
                'fullname'  => $req->fullname,
                'password'  => $req->password,
                'email'     => $req->email,
                'activate'    => 1,
                'avatar'    => 'xxx'
            ]);
            return 'oui';

        }catch(\Exception $ex)
        {
            //return 'non';
        }
    }
}