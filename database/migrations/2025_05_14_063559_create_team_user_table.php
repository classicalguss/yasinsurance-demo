<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
		Schema::create('team_user', function (Blueprint $table) {
			$table->foreignId('team_id')->constrained()->cascadeOnDelete();
			$table->foreignId('user_id')->constrained()->cascadeOnDelete();
			$table->string('role')->default('member');  // optional: owner, admin, member…
			$table->timestamps();
			$table->primary(['team_id','user_id']);
		});
		Schema::table('users', function (Blueprint $table) {
			$table->foreignId('current_team_id')
				->nullable()
				->after('remember_token')
				->constrained('teams')
				->nullOnDelete();
		});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('team_user');
    }
};
