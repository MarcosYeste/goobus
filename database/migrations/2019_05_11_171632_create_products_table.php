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
            $table->increments('id');
            $table->string('pName');
            $table->string('pDesc')->nullable();            
            $table->integer('pPrice')->default(0); 
            $table->string('pClientBenefit');
            $table->string('pUrl')->nullable();
            $table->string('pType');
            $table->string('pStars')->nullable();
            $table->integer('pTimesBought')->default(0);
            $table->date('pLastUpdate')->default(date('Y-m-d H:i:s'));
            $table->integer('persona_id')->unsigned();
            $table->foreign('persona_id')->references('id')->on('persons') ->onDelete('cascade');
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
        Schema::dropIfExists('products');
    }
}
