<?php
require_once('Salary.php');
class MonthSalary extends Salary
{
	function __construct( $money)
	{
		parent::__construct($money);
	}
	public function calcSalary()
	{
		return $this->money;
	}
}

