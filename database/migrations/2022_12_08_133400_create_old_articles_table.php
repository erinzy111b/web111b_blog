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
        Schema::create('old_articles', function (Blueprint $table) {
            $table->id();
            $table->string('subject', 100);
            $table->text('content');
            $table->integer('cgy_id');
            $table->boolean('enable')->default(true);
            $table->integer('sort')->default(0);
            $table->timestamp('enable_at');
            $table->string('tags', 200);
            $table->string('pic', 255);
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
        Schema::dropIfExists('old_articles');
    }
};
