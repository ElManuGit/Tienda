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
            $table->string('barCode');
            $table->decimal('weight')->nullable();
            $table->string('size')->nullable();
            $table->boolean('available')->default(true);
            $table->string('ingredients',1000)->nullable();
            $table->string('nutritionalInformation',1000)->nullable();
            $table->string('description',1000)->nullable();

            $table->unsignedBigInteger('brand_product_id')->nullable();
            $table->foreign('brand_product_id')->references('id')->on('brand_products');

            $table->unsignedBigInteger('country_id')->nullable();
            $table->foreign('country_id')->references('id')->on('countries');

            $table->unsignedBigInteger('provider_id')->nullable();
            $table->foreign('provider_id')->references('id')->on('providers');

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
