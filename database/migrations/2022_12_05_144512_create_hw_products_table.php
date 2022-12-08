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
        Schema::create('hw_products', function (Blueprint $table) {
            $table->id();
            $table->string('product_no');
            $table->string('image_no', 10);
            $table->string('product_name', 10);
            $table->string('product_url', 100);
            $table->string('type_no');
            $table->string('type_name', 10);
            $table->string('sale_price');
            $table->timestamp('sale_at');
            $table->boolean('enabled');
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
        Schema::dropIfExists('hw_products');
    }
};