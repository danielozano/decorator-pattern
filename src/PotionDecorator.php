<?php
// src/PotionDecorator.php

namespace Decorator;

abstract class PotionDecorator implements PotionInterface
{
	protected $potion;

	public function __construct(PotionInterface $potion)
	{
		$this->potion = $potion;
	}
}