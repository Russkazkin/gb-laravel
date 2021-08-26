<?php

use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRolesToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->boolean('is_admin')->default(false)->after('email')->comment('Админ');
            $table->boolean('is_super')->default(false)->after('is_admin')->comment('Супер-админ');
        });

        if (!User::whereName('super')->first()) {
            $super = User::create([
                'name' => 'super',
                'email' => 'super@super.super',
                'password' => '$2y$10$Hv7RJYtTrhrSTcgFVKcz0.aUfVWkQIBB13BpTbHTrknSkwgpQzvim',
            ]);
            $super->is_admin = true;
            $super->is_super = true;
            $super->save();
        }

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        if ($super = User::whereName('super')->first()) {
            $super->delete();
        }
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('is_god');
            $table->dropColumn('is_super');
        });
    }
}
