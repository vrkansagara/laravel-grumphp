<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class CodeQualityController extends Controller
{
    /**
     * For Naming Rules
     */
    // ConstantNamingConventions
    const BASHACKATHON = "Team Codeengers";


    /**
     * For UnUsed Rule
     */

    // UnusedPrivateField
    private $five = 5;
    private $six = 6;

    public function unusedPrivateVariable()
    {
        $this->five++;
        $this->six++;
    }

    // UnusedLocalVariable
    public function unusedLocalVariable()
    {
        $testPhpMd = "testing phpmd";
        echo $testPhpMd;
        $this->unusedprivateMethod();
    }

    //UnusedPrivateMethod
    private function unusedprivateMethod() {}

    ##################################################################################

    /**
     * For CleanCode Rule
     */

    // DuplicatedArrayKey
    public function createArray() {
        return [
            'non-associative 0-element', // not applied
            0 => 'associative 0-element', // applied
            true => 'associative 0-element', // applied
            'foo' => 'bar', // not applied
            "codeengers" => 'Bas hackathon', // applied
        ];
    }

    // ElseExpression
    public function elseExpression($flag)
    {
        if ($flag) {
           return true;
        }
        return false;
    }

    // UndefinedVariable
    public function printCodeengers() {
        $codeengers = "BAS Hackathon Team for PHP Code Quality Tool";
        echo $codeengers;
    }

    // ErrorControlOperator
    /*public function errorController($filePath) {
        $file = fopen($filePath);
        fread($file);
    }*/

    ###################################################################################

    /**
     * For Code Size Rules
     */

    // ExcessiveMethodLength (minimum ==> 100)
     public function excessiveMethodLength() {
        print("Hello BasWorld!" . PHP_EOL);
        print("Hackathon by BAS" . PHP_EOL);
        print("Hello BasWorld!" . PHP_EOL);
        print("Hackathon by BAS" . PHP_EOL);
        print("Hello BasWorld!" . PHP_EOL);
        print("Hackathon by BAS" . PHP_EOL);
        print("Hello BasWorld!" . PHP_EOL);
        print("Hackathon by BAS" . PHP_EOL);
        print("Hello BasWorld!" . PHP_EOL);
        print("Hackathon by BAS" . PHP_EOL);
        print("Hello BasWorld!" . PHP_EOL);
        print("Hackathon by BAS" . PHP_EOL);
        print("Hello BasWorld!" . PHP_EOL);
        print("Hackathon by BAS" . PHP_EOL);
        print("Hello BasWorld!" . PHP_EOL);
        print("Hackathon by BAS" . PHP_EOL);
        print("Hello BasWorld!" . PHP_EOL);
        print("Hackathon by BAS" . PHP_EOL);
        print("Hello BasWorld!" . PHP_EOL);
        print("Hackathon by BAS" . PHP_EOL);
        print("Hello BasWorld!" . PHP_EOL);
        print("Hackathon by BAS" . PHP_EOL);
        print("Hello BasWorld!" . PHP_EOL);
        print("Hackathon by BAS" . PHP_EOL);
        print("Hello BasWorld!" . PHP_EOL);
        print("Hackathon by BAS" . PHP_EOL);
        print("Hello BasWorld!" . PHP_EOL);
        print("Hackathon by BAS" . PHP_EOL);
        print("Hello BasWorld!" . PHP_EOL);
        print("Hackathon by BAS" . PHP_EOL);
        print("Hello BasWorld!" . PHP_EOL);
        print("Hackathon by BAS" . PHP_EOL);
        print("Hello BasWorld!" . PHP_EOL);
        print("Hackathon by BAS" . PHP_EOL);
        print("Hello BasWorld!" . PHP_EOL);
        print("Hackathon by BAS" . PHP_EOL);
        print("Hello BasWorld!" . PHP_EOL);
        print("Hackathon by BAS" . PHP_EOL);
        print("Hello BasWorld!" . PHP_EOL);
        print("Hackathon by BAS" . PHP_EOL);
        print("Hello BasWorld!" . PHP_EOL);
        print("Hackathon by BAS" . PHP_EOL);
        print("Hello BasWorld!" . PHP_EOL);
        print("Hackathon by BAS" . PHP_EOL);
        print("Hello BasWorld!" . PHP_EOL);
        print("Hackathon by BAS" . PHP_EOL);
        print("Hello BasWorld!" . PHP_EOL);
        print("Hackathon by BAS" . PHP_EOL);
        print("Hello BasWorld!" . PHP_EOL);
        print("Hackathon by BAS" . PHP_EOL);
        print("Hello BasWorld!" . PHP_EOL);
        print("Hackathon by BAS" . PHP_EOL);
        print("Hello BasWorld!" . PHP_EOL);
        print("Hackathon by BAS" . PHP_EOL);
        print("Hello BasWorld!" . PHP_EOL);
        print("Hackathon by BAS" . PHP_EOL);
        print("Hello BasWorld!" . PHP_EOL);
        print("Hackathon by BAS" . PHP_EOL);
        print("Hello BasWorld!" . PHP_EOL);
        print("Hackathon by BAS" . PHP_EOL);
        print("Hello BasWorld!" . PHP_EOL);
        print("Hackathon by BAS" . PHP_EOL);
        print("Hello BasWorld!" . PHP_EOL);
        print("Hackathon by BAS" . PHP_EOL);
        print("Hello BasWorld!" . PHP_EOL);
        print("Hackathon by BAS" . PHP_EOL);
        print("Hello BasWorld!" . PHP_EOL);
        print("Hackathon by BAS" . PHP_EOL);
        print("Hello BasWorld!" . PHP_EOL);
        print("Hackathon by BAS" . PHP_EOL);
        print("Hello BasWorld!" . PHP_EOL);
        print("Hackathon by BAS" . PHP_EOL);
        print("Hello BasWorld!" . PHP_EOL);
        print("Hackathon by BAS" . PHP_EOL);
        print("Hello BasWorld!" . PHP_EOL);
        print("Hackathon by BAS" . PHP_EOL);
        print("Hello BasWorld!" . PHP_EOL);
        print("Hackathon by BAS" . PHP_EOL);
        print("Hello BasWorld!" . PHP_EOL);
        print("Hackathon by BAS" . PHP_EOL);
        print("Hello BasWorld!" . PHP_EOL);
        print("Hackathon by BAS" . PHP_EOL);
        print("Hello BasWorld!" . PHP_EOL);
        print("Hackathon by BAS" . PHP_EOL);
        print("Hello BasWorld!" . PHP_EOL);
        print("Hackathon by BAS" . PHP_EOL);
        print("Hello BasWorld!" . PHP_EOL);
        print("Hackathon by BAS" . PHP_EOL);
        print("Hello BasWorld!" . PHP_EOL);
        print("Hackathon by BAS" . PHP_EOL);
        print("Hello BasWorld!" . PHP_EOL);
        print("Hackathon by BAS" . PHP_EOL);
        print("Hello BasWorld!" . PHP_EOL);
        print("Hackathon by BAS" . PHP_EOL);
        print("Hello BasWorld!" . PHP_EOL);
        print("Hackathon by BAS" . PHP_EOL);
        print("Hello BasWorld!" . PHP_EOL);
    }

    // ExcessiveParameterList (minimum:10)
    public function excessiveParameterList(
        $par1, $par2, $par3, $par4, $par5,
        $par6, $par7, $par8, $par9) {
         $par1 = $par2 = $par3 = $par4 = $par5 = $par6 = $par7 = $par8 = $par9 = "Hackathon by BASWorld";
         echo $par1 ,$par2 ,$par3 ,$par4 ,$par5 ,$par6 ,$par7 ,$par8 ,$par9;


    }

    ########################################################################

    /**
     * For Design Rules
     */

    // ExitExpression
    public function exitExpression($param)  {
        if ($param === 42) {
        }
    }

    // EvalExpression
    public function evalExpression($param)  {
        if ($param === 42) {
        }
    }

    // EmptyCatchBlock
    protected function emptyCatchBlock()
    {
        try {
//           echo $this->callFuncSV();
        } catch (\Exception $e) {
            echo $e->getCode();
        } // empty catch block
    }

    ########################################################################

    /**
     * For Naming Rules
     */

    // ShortVariable (minimum	3)
    protected function callFuncSV() {
        $info = array(11,12,13);
        $this->shortVariable($info);
    }

    public static function shortVariable( array $arr ) { // VIOLATION - Formal
        $qwer = 1;
        $countIs = count($arr);
        for ($i = 0; $i < $countIs; $i++) { // Not a Violation (inside FOR)
            $qwer += 15 + $qwer;
        }
        echo $qwer;
    }

}
