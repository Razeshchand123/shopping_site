<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('m')->nullable();
            $table->string('l')->nullable();
            $table->string('xl')->nullable();
            $table->string('xxl')->nullable();
            $table->string('k')->nullable();
           

            $table->string('r')->nullable();
            $table->string('g')->nullable();
            $table->string('b')->nullable();
            $table->string('gry')->nullable();
            $table->string('w')->nullable();
            $table->string('o')->nullable();

            $table->string('cata')->nullable();
            $table->string('twoth')->nullable();
            $table->string('third')->nullable();
            $table->string('catagory')->nullable();


            $table->string('pn');
            $table->string('pi');
            $table->string('pp');
            $table->string('pd');
 
            
            $table->string('psln');
            $table->string('psla');
            $table->string('pslo');
            $table->string('pslno');
            $table->string('psle');











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
