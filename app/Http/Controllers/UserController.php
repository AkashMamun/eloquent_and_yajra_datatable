<?php

namespace App\Http\Controllers;

use App\User;
use App\Phone;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function insertRecord(){
        $phone = new Phone();
        $phone->phone = "01521308512";
        $user = new User();
        $user->name = "Mamun";
        $user->email = "mamun@gmail.com";
        $user->password = encrypt('secret');
        $user->save();

        $user->phone()->save($phone);

        return "Record Inserted successfully";
    }
    public function fetchPhoneByUser(){
        $phone = User::find(3)->phone;
        return $phone;
    }

    public function fetchUserByPhone(){
        $user = Phone::find(1)->user;
        return $user;
    }
}
