<?php

namespace App\Helpers;

class CPFHelper
{
	public static function somenteNumeros($cpf)
	{
        $regex = '~(\d+)\.(\d+).(\d+)\-(\d+)~';
        $novoCpf = '$1$2$3$4';
        $cpf = preg_replace($regex, $novoCpf, $cpf);
        return $cpf;
	}
}