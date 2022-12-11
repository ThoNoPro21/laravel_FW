<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Donhang extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('donhang', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tenkhachhang');
            $table->string('diachi');
            $table->integer('sdt');
            $table->string('ghichu');
            $table->integer('kieuthanhtoan');
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
