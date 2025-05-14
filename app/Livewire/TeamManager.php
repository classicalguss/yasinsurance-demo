<?php

namespace App\Livewire;

use App\Models\Team;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class TeamManager extends Component
{
	public $name = '';
	public $email = '';
	public $nationality_id = '';
	public $users = [];

	public function createTeam()
	{
		$this->validate([
			'name'=>'required|string|max:255',
			'email'=>'required|email|unique:users',
			'nationality_id' => 'required'
		]);

		$user = User::create([
			'email' => $this->email,
			'name' => $this->name,
			'nationality_id' => $this->nationality_id,
			'password' => Hash::make('password'),
			'current_team_id' => auth()->user()->current_team_id
		]);

		auth()->user()->currentTeam->users()->syncWithoutDetaching([
			$user->id => ['role'=>'member']
		]);
		session()->flash('success','Team created.');
	}

	public function render()
	{
		$this->users = User::whereCurrentTeamId(auth()->user()->currentTeam->id)->get();
		return view('livewire.team-manager', [
		]);
	}
}
