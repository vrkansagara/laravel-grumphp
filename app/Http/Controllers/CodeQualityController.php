<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CodeQualityController extends Controller
{
    private $five = 5; // Unused
    private $six = 6;

    public function addOne()
    {
        $this->five++;
        $this->six++;
    }

    public function phpMdUnusedTest()
    {
        $testPhpMd = "testing phpmd";
        echo $testPhpMd;
    }
}
