<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMkBidangminatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mk_bidangminat', function (Blueprint $table) {
            $table->id();
            $table->string('kode_mk');
            $table->string('nama_mk');
            $table->string('bidangminat');
            $table->string('kelompok_mk')->nullable();
            $table->string('semester');
            $table->integer('sks');
            $table->string('stream');
            $table->text('document')->nullable();
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
        Schema::dropIfExists('mk_bidangminat');
    }
}
