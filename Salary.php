<?php
abstract class Salary
{
	protected $money;
	public function __construct( $money)
	{
		$this->money = $money;
	}
}