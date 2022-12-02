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
        Schema::create('cgies', function (Blueprint $table) {
            $table->id();
            $table->string('subject', 100);
            $table->string('pic', 255);
            $table->text('desc');
            $table->boolean('enable')->default(true);
            $table->integer('sort')->default(0)->unsigned();
            // ->unsigned()只能用在數值格, 不然會報錯

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cgies');
    }
};
