<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('picture')->default('no_picture.png');
            $table->integer('barCode');
            $table->decimal('weight')->nullable();
            $table->string('size')->nullable();
            $table->boolean('available');
            $table->string('ingredients')->nullable();
            $table->string('nutritionalInformation')->nullable();
            $table->string('description')->nullable();

            $table->unsignedBigInteger('brand_product_id');
            $table->foreign('brand_product_id')->references('id')->on('brand_products');

            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')->references('id')->on('categories');

            $table->unsignedBigInteger('country_id');
            $table->foreign('country_id')->references('id')->on('countries');

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
        Schema::dropIfExists('products');
    }
}
