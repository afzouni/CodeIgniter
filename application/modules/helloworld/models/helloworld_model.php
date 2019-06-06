<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 *
 * @author	Seyed Mustafa Afzouni
 */
class Helloworld_model extends CI_Model
{
	
	function sum_array($number_arrays)
	{
		$sum = 0;
		foreach($number_arrays as $number){
			$sum = $sum + $number;
		}

		return $sum;
	}
	
}
