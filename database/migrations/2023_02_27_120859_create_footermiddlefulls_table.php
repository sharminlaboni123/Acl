<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFootermiddlefullsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('footermiddlefulls', function (Blueprint $table) {
            $table->id();
            $table->string('titlelogo')->nullable();
            $table->string('titletext')->nullable();
            $table->string('usefullink')->nullable();
            $table->string('about')->nullable();
            $table->string('howtoshop')->nullable();
            $table->string('FAQ')->nullable();
            $table->string('contactus')->nullable();
            $table->string('login')->nullable();
            $table->string('customerservice')->nullable();
            $table->string('paymentmethod')->nullable();
            $table->string('moneyback')->nullable();
            $table->string('returns')->nullable();
            $table->string('shipping')->nullable();
            $table->string('termcondition')->nullable();
            $table->string('privacypolicy')->nullable();
            $table->string('myaccount')->nullable();
            $table->string('signin')->nullable();
            $table->string('viewcart')->nullable();
            $table->string('wishlist')->nullable();
            $table->string('takeorder')->nullable();
            $table->string('help')->nullable();
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
        Schema::dropIfExists('footermiddlefulls');
    }
}
