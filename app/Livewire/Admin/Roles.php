<?php

namespace App\Livewire\Admin;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;
use Spatie\Permission\Models\Role;


class Roles extends Component
{
    use WithPagination;
    public $roles;
    public $usersWithRole;

    public function mount()
    {
        $this->roles = Role::all();

    
    }
    public function block($id){
        $user = User::findOrFail($id);
        $user->banned = !$user->banned;
        $user->save();
    }
    public function updater(){
        $this->resetPage();
    }
   
    
    public function render()
    {
        $users = User::with('roles:name')
        ->orderBy('id', 'asc')
        ->paginate(6);
        return view('livewire.admin.roles',['users'=>$users]);
    }
}
