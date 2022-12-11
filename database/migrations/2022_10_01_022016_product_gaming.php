<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ProductGaming extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_gaming', function (Blueprint $table) {
            $table->increments('idLT_gaming');
            $table->string('nameLT_gaming');
            $table->string('tmp');
            $table->integer('price');
            $table->integer('price_sale');
            $table->integer('soluong');
            $table->integer('hang_id');
            $table->integer('theloai_id');
            $table->integer('danhmuc_id');
            $table->integer('chitietsanpham_id');
            $table->integer('noibat');
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
