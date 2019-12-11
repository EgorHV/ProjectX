<?php
require_once('Salary.php');
class MonthSalary extends Salary
{
    private $mounth;
	function __construct( $money, $mounth)
	{
		parent::__construct($money);
        $this->mounth = $mounth;
	}
	public function calcSalary()
	{
        return $this->money*$this->mounth;
	}
}