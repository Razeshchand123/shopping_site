<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePasaldartasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pasaldartas', function (Blueprint $table) {
            $table->id();
            $table->string('sname');
            $table->string('saddress');
            $table->string('slogo');
            $table->string('oname');
            $table->string('omobile');
            $table->string('oemail');
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
        Schema::dropIfExists('pasaldartas');
    }
}
