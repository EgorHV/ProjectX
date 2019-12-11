<?php
require_once('Worker.php');
class Calculate
{

	public static function calc(array $team)
	{
		$allSalary = null;
		if (isset($team)){
			foreach ($team as $worker){
				$allSalary += $worker->calcSalary();
			}
		}
		return $allSalary;
	}
}