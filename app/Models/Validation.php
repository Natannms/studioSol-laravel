<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Validation extends Model
{
    use HasFactory;

    protected $fillable = [
        'minSize',
        'minUpperCase',
        'minLowerCase',
        'minDigit',
        'minSpecialChars',
        'noRepeted'
    ];

    //constructor
    public function __construct()
    {
        $this->setDefaultValues();
    }

    public function setDefaultValues()
    {
        $this->setMinSize(4);
        $this->setMinUppercase(1);
        $this->setMinLowercase(1);
        $this->setMinDigit(1);
        $this->setMinSpecialChars(1);
        $this->setNoRepeted(0);
    }

    public function setValues(array $rules)
    {
        if (count($rules) > 0) {
            foreach ($rules as $key => $rule) {
                if ($rule['rule'] == "minSize") {
                    $this->setMinSize($rule['value']);
                }

                if ($rule['rule'] == "minUppercase") {
                    $this->setMinUppercase($rule['value']);
                }

                if ($rule['rule'] == "minLowercase") {
                    $this->setMinLowercase($rule['value']);
                }

                if ($rule['rule'] == "minDigit") {
                    $this->setMinDigit($rule['value']);
                }

                if ($rule['rule'] == "minSpecialChars") {
                    $this->setMinSpecialChars($rule['value']);
                }

                if ($rule['rule'] == "noRepeted") {
                    $this->setNoRepeted($rule['value']);
                }
            }
        }
    }

    public function getMinSize()
    {
        return $this->minSize;
    }

    public function getMinUppercase()
    {
        return $this->minUpperCase;
    }

    public function getMinLowercase()
    {
        return $this->minLowerCase;
    }

    public function getMinDigit()
    {
        return $this->minDigit;
    }

    public function getMinSpecialChars()
    {
        return $this->minSpecialChars;
    }

    public function getNoRepeted()
    {
        return $this->noRepeted;
    }

    public function setMinSize($minSize)
    {
        $this->minSize = $minSize;
    }

    public function setMinUppercase($minUpperCase)
    {
        $this->minUpperCase = $minUpperCase;
    }

    public function setMinLowercase($minLowerCase)
    {
        $this->minLowerCase = $minLowerCase;
    }

    public function setMinDigit($minDigit)
    {
        $this->minDigit = $minDigit;
    }

    public function setMinSpecialChars($minSpecialChars)
    {
        $this->minSpecialChars = $minSpecialChars;
    }

    public function setNoRepeted($noRepeted)
    {
        $this->noRepeted = $noRepeted;
    }
}
