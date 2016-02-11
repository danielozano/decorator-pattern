<?php
// src/IronSkill.php

namespace Decorator;

class IronSkill extends PotionDecorator
{
	public function applySkill()
	{
		$this->potion->setSkill('Iron Strength');
		return $this->potion;
	}
}