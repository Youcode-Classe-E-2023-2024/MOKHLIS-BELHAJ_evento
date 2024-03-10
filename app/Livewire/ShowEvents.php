<?php

namespace App\Livewire;

use App\Models\lieu;
use App\Models\event;
use Livewire\Component;
use App\Models\Categorie;
use Livewire\WithPagination;

class ShowEvents extends Component
{
    use WithPagination ;

    public $categories;
    public $lieux;
    public $search;
    public $filterLieux;
    public $filtercategories;
    public $filterdate;


    public function mount()
    {
        $this->categories = Categorie::all();
        $this->lieux = lieu::all();
     
    }
    public function updater(){
        $this->resetPage();
    }

    public function render()
        {   $events = event::orderBy('date', 'asc')
            ->when($this->search,function($query){
                return $query->where(
                    function ($query) {
                        $query->where('titre', 'ilike','%'. $this->search . '%');
                    }
                );
            })
            ->where('validation',true)
            ->when($this->filtercategories,function($query){
                return $query->where(
                    function ($query) {
                        $query->where('categorie_id', $this->filtercategories );
                    }
                );
            })
            ->when($this->filterLieux,function($query){
                return $query->where(
                    function ($query) {
                        $query->where('lieu_id', $this->filterLieux );
                    }
                );
            })
            ->when($this->filterdate,function($query){
                return $query->where(
                    function ($query) {
                        $query->where('date', $this->filterdate );
                    }
                );
            })
            ->where('date', '>=', now()->format('Y-m-d'))

            ->paginate(8);
        return view('livewire.show-events', [
            'events' => $events
        ]);
    }
}
 
 
