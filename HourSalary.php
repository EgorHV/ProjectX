<?php
require_once('Salary.php');
class HourSalary extends Salary
{
	private $hour;
	function __construct( $money,  $hour)
	{
		parent::__construct($money);
		$this->hour = $hour;
	}
	public function calcSalary()
	{
		return $this->money*$this->hour;
	}
}