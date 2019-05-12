<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecordShopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('record_shops', function (Blueprint $table) {
            $table->increments('id');          
            $table->integer('recPrice')->default(0); 
            $table->string('recClientBenefit');
            $table->date('recDateCreate')->default(date('Y-m-d H:i:s'));
            $table->integer('persona_id')->unsigned();
            $table->foreign('persona_id')->references('id')->on('persons') ->onDelete('cascade');            
            $table->integer('product_id')->unsigned();
            $table->foreign('product_id')->references('id')->on('products') ->onDelete('cascade');
            $table->rememberToken();
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
        Schema::dropIfExists('record_shops');
    }
}
