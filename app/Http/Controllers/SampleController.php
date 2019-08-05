<?php
declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SampleController extends Controller
{
    public function index(): \stdClass
    {
        $a = 1;
        $b = 2;

        // NG
        // if($a < $b) {
        // OK
        if ($a < $b) {

            // NG
            // $result = new \stdClass;
            // OK
            $result = new \stdClass();

            $result->message = '$b is larger than $a.';
            return $result;
        }
    }
}
