<?php

namespace Deogw\OperatorIndonesia\Tests;

use PHPUnit\Framework\TestCase;
use Deogw\OperatorIndonesia\OperatorIndonesia;

class OperatorIndonesiaTest extends TestCase
{
    /** @test Test Operator Telkomsel with*/
    public function check_operator_telkomsel_test()
    {
        $this->assertEquals('Telkomsel', OperatorIndonesia::check('0822123456'));
        $this->assertEquals('Telkomsel', OperatorIndonesia::check('62822123456'));
        $this->assertEquals('Telkomsel', OperatorIndonesia::check('+62822123456'));

    }

    /** @test Test Operator XL */
    public function check_operator_xl_test()
    {
        $this->assertEquals('XL', OperatorIndonesia::check('08781213456'));
        $this->assertEquals('XL', OperatorIndonesia::check('628781213456'));
        $this->assertEquals('XL', OperatorIndonesia::check('+628781213456'));

    }

    /** @test Test Operator Axis */
    public function check_operator_axis_test()
    {
        $this->assertEquals('Axis', OperatorIndonesia::check('0832123456'));
        $this->assertEquals('Axis', OperatorIndonesia::check('62832123456'));
        $this->assertEquals('Axis', OperatorIndonesia::check('+62832123456'));

    }

    /** @test Test Operator Indosat */
    public function check_operator_indosat_test()
    {
        $this->assertEquals('Indosat', OperatorIndonesia::check('0858123456'));
        $this->assertEquals('Indosat', OperatorIndonesia::check('62858123456'));
        $this->assertEquals('Indosat', OperatorIndonesia::check('+62858123456'));

    }

    /** @test Test Operator Three */
    public function check_operator_three_test()
    {
        $this->assertEquals('Three', OperatorIndonesia::check('08985621212'));
        $this->assertEquals('Three', OperatorIndonesia::check('628985621212'));
        $this->assertEquals('Three', OperatorIndonesia::check('+628985621212'));

    }

    /** @test Test Operator Smartfren */
    public function check_operator_smartfren_test()
    {
        $this->assertEquals('Three', OperatorIndonesia::check('08992123456'));
        $this->assertEquals('Three', OperatorIndonesia::check('628992123456'));
        $this->assertEquals('Three', OperatorIndonesia::check('+628992123456'));

    }

    /** @test Test Operator Unknown */
    public function check_operator_unknown_test()
    {
        $this->assertEquals('Unknown', OperatorIndonesia::check('0'));

    }
}
