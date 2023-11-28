<?php

namespace App\Http\Controllers;

use App\Submodules\Calculator;
use Illuminate\Http\Request;

class PracticeController extends Controller
{
    /**
     * @var Calculator $calc
     */
    private $calc;

    public function __construct(Calculator $subModule)
    {
        $this->calc = $subModule;
    }

    public function gcd()
    {
        $a = 12;
        $b = 18;
        return $a . ' と ' . $b . ' の最大公約数は ' . $this->calc->gcd($a, $b) . ' です。';
    }

    public function lcm()
    {
        $a = 12;
        $b = 18;
        return $a . ' と ' . $b . ' の最小公倍数は ' . $this->calc->lcm($a, $b) . ' です。';
    }
}
