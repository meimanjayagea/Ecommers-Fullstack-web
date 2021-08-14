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
            $table->string('kode')->unique();
            $table->string('name');
            $table->string('gambar_product');
            $table->string('gambar_satu');
            $table->string('gambar_dua');
            $table->string('gambar_tiga');
            $table->string('gambar_empat');
            $table->integer('harga');
            $table->integer('stock');
            $table->enum('size',[32,34,36,38,40,42]);
            $table->text('varian');
            $table->text('keterangan');
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