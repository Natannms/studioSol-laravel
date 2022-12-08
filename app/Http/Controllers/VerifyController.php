<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VerifyController extends Controller
{
    public function check(Request $request)
    {
        $password = $request->password;
        $validations = [
            'minSize'=> 0,
            'minUpperCase'=> 0,
            'minLowerCase'=> 0,
            'minDigit'=> 0,
            'minSpecialChars'=> 0,
            'noRepeted'=>0
        ];

        if($request->validations){
            $validations = $request->validations;
        }

        return response()->json([
            'password'=> $password,
            'validations'=> $validations
        ]);
    }
}
