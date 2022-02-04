<?php

namespace OperasiMatematikaSimple;

class OperationMath
{
    public function __construct(private string $inputOperasi)
    {
    }

    public function getResult(int $num1 , int $num2)
    {
        $operasiMatematika = strtolower($this->inputOperasi);

        switch($operasiMatematika){
            case "tambah": 
                return $num1 + $num2;
                break;
            case "kurang":
                return $num1 - $num2;
                break;
            case "kali":
                return $num1 * $num2;
                break;
            case "bagi":
                return $num1 / $num2;
                break;
            default: 
                return "Periksa kembali tipe operasi matematika";
        }
    }
}