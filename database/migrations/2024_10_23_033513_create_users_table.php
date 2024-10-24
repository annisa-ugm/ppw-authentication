<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');  // kolom name (string)
            $table->string('email')->unique();  // kolom email (unique)
            $table->timestamp('email_verified_at')->nullable();  // kolom email_verified_at (nullable timestamp)
            $table->string('password');  // kolom password (string)
            $table->rememberToken();  // kolom remember_token (string)
            $table->timestamps();  // kolom created_at dan updated_at (timestamps)
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
