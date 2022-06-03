<?php

namespace App\Repositories\Interfaces;

use App\Models\Cooperator;

	interface TestRepositoryInterface
	{
		public function getPosition(Cooperator $cooperator);
		
		public function getSalary(Cooperator $cooperator);
		
		public function getCreated(Cooperator $cooperator);
		
		public function getUpdated(Cooperator $cooperator);
		
	}