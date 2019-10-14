<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKlinikTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('klinik', function (Blueprint $table) {
         $table->increments('id', 11);
         $table->string('code', 5);
         $table->string('name', 100);
         $table->string('address', 150);
         $table->string('city', 50);
         $table->string('province', 50);
         $table->string('postal_code', 20);
         $table->string('email', 50);
         $table->string('phone', 15);
         $table->string('contact_person', 50);
         $table->string('cp_phone', 15);
         $table->enum('visible', ['yes', 'no']);
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
        Schema::dropIfExists('klinik');
    }
}
