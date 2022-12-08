<?php

namespace App\Http\Controllers;

use App\Services\VerifyValidations;
use App\Models\Password;
use App\Models\Validation;
use Illuminate\Http\Request;

class VerifyController extends Controller
{
    public function check(Request $request)
    {
        $password = new Password();
        $password->setValue($request->password);
        $validations = new Validation();

        if($request->rules){
            $validations->setValues($request->rules);
        }

        $VerifyValidations = new VerifyValidations($password, $validations);

        $noMatch = [];

        if ($VerifyValidations->minSize() == "minSize"){
            $noMatch[] = "minSize";
        }

        if ($VerifyValidations->minUppercase() == "minUppercase"){
            $noMatch[] = "minUpperCase";
        }

        if ($VerifyValidations->minLowercase() == "minLowercase"){
            $noMatch[] = "minLowercase";
        }

        if ($VerifyValidations->minDigit() == "minDigit"){
            $noMatch[] = "minDigit";
        }

        if ($VerifyValidations->minSpecialChars() == "minSpecialChars"){
            $noMatch[] = "minSpecialChars";
        }

        if ($VerifyValidations->noRepeted() == "noRepeted"){
            $noMatch[] = "noRepeted";
        }

        return response()->json([
            "verify"=> count($noMatch) > 0 ? false : true,
            "noMatch"=> $noMatch
        ]);
    }
}
