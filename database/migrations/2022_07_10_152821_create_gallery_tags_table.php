<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gallery_tags', function (Blueprint $table) {
            $table->unsignedBigInteger('id_gallery');
            $table->unsignedBigInteger('id_tag');
            $table->timestamps();

            $table->primary(array('id_gallery', 'id_tag'));
            $table->foreign('id_gallery')->references('id')->on('galleries');
            $table->foreign('id_tag')->references('id')->on('tags');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gallery_tags');
    }
};
