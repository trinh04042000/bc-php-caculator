<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Exception;
class CalculatorController extends Controller
{
    public function calculator()
    {
        try {
            $number1 = $_POST['number1'];
            $number2 = $_POST['number2'];
            $operator = $_POST['operator'];
            switch ($operator) {
                case ('+') :
                    $result = $number1 + $number2;
                    break;
                case ('-') :
                    $result = $number1 - $number2;
                    break;
                case ('*') :
                    $result = $number1 * $number2;
                    break;
                case ('/') :
                    if ($number2 == 0) {
                        throw new Exception('loi khong xac dinh, vui long nhap lai');
                    }
                    $result = $number1 / $number2;
                    break;
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }
        return view('index', compact('result'));
    }
}