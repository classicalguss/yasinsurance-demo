<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Str;

class TeamMemberController extends Controller
{
    //
	public function store(Request $request, Team $team)
	{
		logger("getting here");
		$request->validate([
			'email'=>'required|email|exists:users,email',
			'name'=>'required',
		]);

		$user = User::create([
			'email' => $request->email,
			'name' => $request->name,
			'password' => Hash::make('password'),
			'current_team_id' => $team->id
		]);
		logger("Created!");

		$team->users()->syncWithoutDetaching([
			$user->id => ['role'=>'member']
		]);

		return back()->with('success','Member invited.');
	}

	public function destroy(Team $team, User $user)
	{
		$team->users()->detach($user->id);
		return back()->with('success','Member removed.');
	}
}
