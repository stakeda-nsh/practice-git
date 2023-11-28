<?php

namespace App\Submodules;

class Calculator
{
    /**
     * 和を求める関数
     *
     * @param int $a
     * @param int $b
     * @return int
     */
    public function add(int $a, int $b): int
    {
        return $a + $b;
    }

    /**
     * 差を求める関数
     *
     * @param int $a
     * @param int $b
     * @return int
     */
    public function sub(int $a, int $b): int
    {
        return $a - $b;
    }

    /**
     * 積を求める関数
     *
     * @param int $a
     * @param int $b
     * @return int
     */
    public function mul(int $a, int $b): int
    {
        return $a * $b;
    }

    /**
     * 商を求める関数
     *
     * @param int $a
     * @param int $b
     * @return int
     */
    public function div(int $a, int $b): int
    {
        return $a / $b;
    }

    /**
     * 剰余を求める関数
     *
     * @param int $a
     * @param int $b
     * @return int
     */
    public function mod(int $a, int $b): int
    {
        return $a % $b;
    }

    /**
     * 累乗を求める関数
     *
     * @param int $a
     * @param int $b
     * @return int
     */
    public function pow(int $a, int $b): int
    {
        return $a ** $b;
    }

    /**
     * 最小公倍数を求める関数
     *
     * @param int $a
     * @param int $b
     * @return int
     */
    public function lcm(int $a, int $b): int
    {
        $gcd = $this->gcd($a, $b);
        return $a * $b / $gcd;
    }

    /**
     * 最大公約数を求める関数
     *
     * @param int $a
     * @param int $b
     * @return int
     */
    public function gcd(int $a, int $b): int
    {
        if ($b == 0) {
            return $a;
        }
        return $this->gcd($b, $a % $b);
    }

    /**
     * 階乗を求める関数
     *
     * @param int $a
     * @return int
     */
    public function fact(int $a): int
    {
        if ($a == 0) {
            return 1;
        }
        return $a * $this->fact($a - 1);
    }
}
