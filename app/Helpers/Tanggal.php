<?php
namespace App\Helpers;
use Carbon\Carbon;
class Tanggal
{
	public static function keIndonesia($tgl)
	{
		$dt = new Carbon($tgl);
		setlocale(LC_TIME, 'IND');
		
		return $dt->formatLocalized('%d %B %Y %H:%M:%S');
	} 
}