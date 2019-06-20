<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TblProduct extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {Schema::create('tbl_product', function (Blueprint $table) {
       
        $table->bigIncrements('product_id');
        $table->string('product_category');
        $table->string('product_subcategory');
        $table->string('product_name');
        $table->float('product_price');
        $table->integer('product_stock');
        $table->string('product_description');
        $table->string('product_image');
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
        //
    }
}
