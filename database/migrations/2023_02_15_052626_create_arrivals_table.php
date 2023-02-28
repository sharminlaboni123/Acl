<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArrivalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('arrivals', function (Blueprint $table) {
            $table->id();
            $table->string('l_primary')->nullable(true);
            $table->string('l_sell')->nullable(true);
            $table->string('p_image')->nullable(true);
            $table->string('p_wishlist')->nullable(true);
            $table->string('p_gender')->nullable(true);
            $table->string('p_item')->nullable(true);
            $table->string('p_title')->nullable(true);
            $table->string('p_price')->nullable(true);
            $table->string('p_n_price')->nullable(true);
            $table->string('p_o_price')->nullable(true);
            $table->string('p_rating_val')->nullable(true);
            $table->string('p_rating_number')->nullable(true);
            $table->string('p_color_f')->nullable(true);
            $table->string('p_color_s')->nullable(true);
            $table->string('p_cart')->nullable(true);
            $table->string('p_view')->nullable(true);
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
        Schema::dropIfExists('arrivals');
    }
}
