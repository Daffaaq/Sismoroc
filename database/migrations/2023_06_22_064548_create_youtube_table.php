<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateYoutubeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('youtube', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->float('Bersifat_Mendidik', 12, 10);
            $table->float('Menghibur', 12, 10);
            $table->float('Bersifat_Kreatif', 12, 10);
            $table->float('Mengandung_Kekerasan', 12, 10);
            $table->float('Mengandung_Kata-kata_Kasar', 12, 10);
            $table->float('Mengandung_Unsur_Pornografi', 12, 10);
            $table->float('Kualitas_Tayangan', 12, 10);
            $table->float('Ketersediaan_Opsi_Bahasa', 12, 10);
            $table->float('Durasi_Tayang', 12, 10);
            $table->float('Menambah_wawasan', 12, 10);
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
        Schema::dropIfExists('youtube');
    }
}
