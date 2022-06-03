<?php

namespace App\Http\Controllers;

use App\Repositories\Interfaces\TestRepositoryInterface;
use App\Repositories\TestRepository;

use App\Models\Cooperator;

class TestController extends Controller
{
	protected $testRepository;
	
	public function __construct(TestRepository $testRepository)
	{
		$this->testRepository=$testRepository;
	}
	public function position($id)
	{
		$cooperator=Cooperator::find($id);
		
		$positions=$this->testRepository->getPosition($cooperator);
		
		//dump($positions);
		
		foreach($positions as $position)
		{
			echo $position.'</br>';
		}
	}
	public function salary($id)
	{
		$cooperator=Cooperator::find($id);
		
		$positions=$this->testRepository->getSalary($cooperator);
		
		//dump($positions);
		
		foreach($positions as $position)
		{
			echo $position.'</br>';
		}
	}
	public function created($id)
	{
		$cooperator=Cooperator::find($id);
		
		$positions=$this->testRepository->getCreated($cooperator);
		
		//dump($positions);
		
		foreach($positions as $position)
		{
			echo $position.'</br>';
		}
	}
	public function updated($id)
	{
		$cooperator=Cooperator::find($id);
		
		$positions=$this->testRepository->getUpdated($cooperator);
		
		//dump($positions);
		
		foreach($positions as $position)
		{
			echo $position.'</br>';
		}
	}
}