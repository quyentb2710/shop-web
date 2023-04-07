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
        Schema::create('users', function (Blueprint $table) {
            $table->id()
                ->autoIncrement()
                ->comment('UserID');
            // $table->string('name');
            
            $table->string('email')
                ->unique()
                ->comment('Email');

            $table->string('first_name')
                ->comment('First Name');

            $table->string('last_name')
                ->comment('Last Name');

            // $table->timestamp('email_verified_at')->nullable();
            $table->string('password')
                ->comment('Password');

            $table->tinyInteger('is_admin')
                ->comment('Admin')
                ->default(0);

            $table->rememberToken()
                ->comment('Login Token');

            $table->timestamp('created', $precision = 0)
                ->comment('Created')
                ->useCurrent();

            $table->timestamp('modified')
                ->comment('Modified')
                ->useCurrent();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
