<?php

namespace App\Repositories;

use App\Models\Cooperator;
use App\Repositories\Interfaces\TestRepositoryInterface;

class TestRepository implements TestRepositoryInterface
{
	public function getPosition(Cooperator $cooperator)
		{
			$positions=$cooperator->positions()->orderBy('position')->get();
			
			$arr=[];
			foreach($positions as $position){
			
		$arr[]=$position->position.' | '.$position->salary.' | '.$position->pivot->created_at.' | '.$position->pivot->updated_at;
	
				}
			return $arr;
		}
		public function getSalary(Cooperator $cooperator)
		{
			$positions=$cooperator->positions()->orderBy('salary')->get();
			
			$arr=[];
			foreach($positions as $position){
			
		$arr[]=$position->position.' | '.$position->salary.' | '.$position->pivot->created_at.' | '.$position->pivot->updated_at;
	
				}
			return $arr;
		}
		public function getCreated(Cooperator $cooperator)
		{
			$positions=$cooperator->positions()->orderBy('pivot_created_at')->get();
			
			$arr=[];
			foreach($positions as $position){
			
		$arr[]=$position->position.' | '.$position->salary.' | '.$position->pivot->created_at.' | '.$position->pivot->updated_at;
	
				}
			return $arr;
		}
		public function getUpdated(Cooperator $cooperator)
		{
			$positions=$cooperator->positions()->orderBy('pivot_updated_at')->get();
			
			$arr=[];
			foreach($positions as $position){
			
		$arr[]=$position->position.' | '.$position->salary.' | '.$position->pivot->created_at.' | '.$position->pivot->updated_at;
	
				}
			return $arr;
		}
}