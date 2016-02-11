<?php
// src/Potion.php

namespace Decorator;

class Potion implements PotionInterface
{
	private $skills = array();

	public function applySkill()
	{
		return $this->skills;
	}

	public function setSkill($skill)
	{
		$this->skills[] = $skill;
	}
	public function getSkills()
	{
		return $this->skills;
	}
}