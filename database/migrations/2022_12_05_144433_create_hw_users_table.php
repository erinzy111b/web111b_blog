<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hw_users', function (Blueprint $table) {
            $table->id();
            $table->string('lastname', 10);
            $table->string('firstname', 10);
            $table->string('username', 10);
            $table->string('password', 15);
            $table->string('sexual', 5);
            $table->date('birthday');
            $table->string('phone', 13);
            $table->string('email', 25)->unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hw_users');
    }
};