<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Product extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('Product', function (Blueprint $table){
            $table->increments('id');            //Tự tăng, khóa chính
            $table->text('TenSanPham');  //Kiểu chuỗi
            $table->integer('Gia');                 //Kiểu int
            $table->timestamps(); //created_at, updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('Product');

    }
}
