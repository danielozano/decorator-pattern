<?php
// src/IceSkill.php

namespace Decorator;

class IceSkill extends PotionDecorator
{
	public function applySkill()
	{
		$this->potion->setSkill('Ice Shield');
		return $this->potion;
	}
}