<?php

namespace App\Services;

use App\Models\Password;
use App\Models\Validation;

class VerifyValidations {
    private Password $password;
    private Validation $validations;

    public function __construct(Password $password, Validation $validations)
    {
        $this->password = $password;
        $this->validations = $validations;
        return  $this;
    }

    public function minSize()
    {
       //verify if the password have the minimum size characters
         if (strlen($this->password->getValue()) < $this->validations->getMinSize()) {
            return "minSize";
        }
    }

    public function minUppercase()
    {
         //verify if the password have the minimum uppercase characters
        if (preg_match_all('/[A-Z]/', $this->password->getValue()) < $this->validations->getMinUppercase()) {
            return "minUppercase";
        }
    }

    public function minLowercase()
    {
            //verify if the password have the minimum lowercase characters
            if (preg_match_all('/[a-z]/',  $this->password->getValue()) < $this->validations->getMinLowercase()) {
                return  "minLowercase";
            }
        }

    public function minDigit()
    {
            //verify if the password have the minimum digit characters
            if (preg_match_all('/[0-9]/',  $this->password->getValue()) < $this->validations->getMinDigit()) {
                return "minDigit";
            }
    }


    public function minSpecialChars()
    {
       //verify if exist especial char
        if (preg_match_all('/[^a-zA-Z0-9]/',  $this->password->getValue()) < $this->validations->getMinSpecialChars()) {
          return "minSpecialChars";
        }
    }

    public function noRepeted()
    {
        //verify if the password have repeated characters in sequence
        $password = $this->password->getValue();
        $password = str_split($password);
        $count = count($password);
        $repeated = 0;

        for ($i = 0; $i < $count; $i++) {
            if($i != $count - 1){
                if ($password[$i] == $password[$i + 1]) {
                    $repeated++;
                }
            }
        }

        if ($repeated < $this->validations->getNoRepeted()) {
            return "noRepeted";
        }
    }
}
