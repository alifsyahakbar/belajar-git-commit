<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProduksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produks', function (Blueprint $table) {
            $table->id();
            $table->string('nama_produk');
            $table->string('slug');
            $table->string('deskripsi');
            $table->string('gambar');
            $table->text('link_shopee')->nullable();
            $table->text('link_tiktok')->nullable();
            $table->text('link_ig')->nullable();
            $table->text('link_tokopedia')->nullable();
            $table->text('link_lazada')->nullable();
            $table->text('link_blibli')->nullable();
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
        Schema::dropIfExists('produks');
    }
}
