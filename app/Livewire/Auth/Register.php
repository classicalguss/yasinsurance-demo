<?php

namespace App\Livewire\Auth;

use App\Models\Team;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('components.layouts.auth')]
class Register extends Component
{
    public string $name = '';

    public string $email = '';

    public string $password = '';

    public string $password_confirmation = '';

    /**
     * Handle an incoming registration request.
     */
    public function register(): void
    {
        $validated = $this->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'string', 'confirmed', Rules\Password::defaults()],
        ]);

        $validated['password'] = Hash::make($validated['password']);

        event(new Registered(($user = User::create($validated))));

		$team = Team::create([
			'name'     => 'My team',
			'owner_id' => $user->id,
		]);
		$user->teams()
			->attach($team->id, ['role'=>'owner']);

		$user->update(['current_team_id' => $team->id]);
		$user->save();
		$user->switchTeam($team);

        Auth::login($user);

        $this->redirect(route('dashboard', absolute: false), navigate: true);
    }
}
