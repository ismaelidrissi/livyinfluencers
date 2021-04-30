<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Influenceur;

use Livewire\WithPagination;

class Listing extends Component
{


 use WithPagination;


 public $query ;

 public $slider  ;


 public $selectedactive;

 public $selectednotactive;

 private $fillter ;


 	public function mount(){

 		
 		$this->slider = 0;

 	}

 	public function updatingQuery()
    {
        $this->resetPage();
    }

    public function updatingSlider()
    {
        $this->resetPage();
    }

 	
 	/*private function status(){

 		if($selectedactive != null && $selectednotactive !=null){

 			// on cherche tout
 		}else if($selectedactive == null && $selectednotactive ==null){

 			// on cherche tout
 		}else if($selectedactive != null){

 			// on retourne les selected active seulement
 		}else{

 			// on retourne les selected not active seulement
 		}

 	}
  */


 

    public function render()
    {
    	$this->fillter = Influenceur::select();
    	$this->fillter->where('name', 'like', '%'.$this->query.'%');
    	$this->fillter->where('score','>', $this->slider);
    	if($this->selectedactive != null && $this->selectednotactive ==null){
    	$this->fillter->where('status','=', $this->selectedactive);	
    	}
    	if($this->selectednotactive != null && $this->selectedactive ==null){
    	$this->fillter->where('status','=', 'not active');	
    	}

    	
        return view('livewire.listing',['influenceurs'=>$this->fillter->Paginate(10)]);
    }
}
