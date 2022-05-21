<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStafPengajarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staf_pengajar', function (Blueprint $table) {
            $table->id();
            $table->text('photo')->nullable();
            $table->string('nama');
            $table->string('nidn');
            $table->string('jabatan');
            $table->string('email');
            $table->string('sintaid')->nullable();
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
        Schema::dropIfExists('staf_pengajar');
    }
}
