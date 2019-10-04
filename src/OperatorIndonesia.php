<?php

namespace Deogw\OperatorIndonesia;

class OperatorIndonesia
{

    /**
     * @var array prefix operator
     */
    protected static $prefix = array(
        'Telkomsel' => ['0811', '0812', '0813', '0821', '0822', '0823', '0851', '0852', '0853'],
        'XL' => ['0817', '0818', '0819', '0859', '0877', '0878', '0879'],
        'Axis' => ['0831', '0832', '0833', '0837', '0838'],
        'Indosat' => ['0814', '0815', '0815', '0816', '0855', '0856', '0857', '0858'],
        'Three' => ['0894', '0895', '0896', '0897', '0898', '0899'],
        'Smartfren' => ['0881', '0882', '0883', '0884', '0885', '0886', '0887', '0888', '0888'],
    );


    /**
     * Check Operator/Provider berdasarkan prefix dari 4 angka pertama.
     * @param  string $phoneNumber
     * @return string Operator
     */
    public static function check($phoneNumber)
    {
        $operator = 'Unknown';

        $normalize = preg_replace('/^\+?62/', '0', $phoneNumber);

        $prefixFromNumber = substr($normalize, 0, 4);

        foreach (self::$prefix as $key => $provider) {
            if (in_array($prefixFromNumber, $provider)) {
                $operator = $key;
                break;
            }
        }

        return  $operator;
    }
}
