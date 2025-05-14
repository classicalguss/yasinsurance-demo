<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
	public function store(Request $request)
	{
		$data = $request->validate(['name'=>'required|string|max:255']);
		$team = Team::create([
			'name'     => $data['name'],
			'owner_id' => auth()->id(),
		]);

		auth()->user()
			->teams()
			->attach($team->id, ['role'=>'owner']);

		auth()->user()->update(['current_team_id' => $team->id]);

		return back()->with('success','Team created.');
	}

	public function destroy(Team $team)
	{
		$team->delete();
		return back()->with('success','Team deleted.');
	}

	public function switch(Team $team)
	{
		auth()->user()->switchTeam($team);
		return back();
	}
}
