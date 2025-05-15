<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Str;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

	protected static function booted(): void
	{
	}
    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
		'current_team_id',
        'name',
		'nationality_id',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    /**
     * Get the user's initials
     */
    public function initials(): string
    {
        return Str::of($this->name)
            ->explode(' ')
            ->map(fn (string $name) => Str::of($name)->substr(0, 1))
            ->implode('');
    }

	public function teams()
	{
		return $this->belongsToMany(Team::class)
			->withPivot('role')
			->withTimestamps();
	}

	public function ownedTeams()
	{
		return $this->hasMany(Team::class, 'owner_id');
	}

	public function currentTeam()
	{
		return $this->belongsTo(Team::class, 'current_team_id');
	}

	public function switchTeam(Team $team)
	{
		if ($this->teams->contains($team->id)) {
			$this->update(['current_team_id' => $team->id]);
		}
	}
}
