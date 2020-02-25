<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePromotioncodeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('promotioncode', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->decimal('discount');
            $table->decimal('product_min_value')->default(0);
            $table->decimal('product_max_value')->default(99999999999);
            $table->decimal('code_min_discount_value');
            $table->decimal('code_max_discount_value');
            $table->date('start_at');
            $table->date('end_at');
            $table->timestamps();
            $table->unsignedBigInteger('event_id')->index()->unsigned()->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('promotioncode');
    }
}
