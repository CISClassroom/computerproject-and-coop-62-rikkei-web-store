<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePromotioncodeProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('promotioncode_products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('promotioncode_id')->index()->unsigned();
            $table->unsignedBigInteger('product_id')->index()->unsigned();
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
        Schema::dropIfExists('promotioncode_products');
    }
}
