<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
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
        Schema::create('tugas', function (Blueprint $table) {
            $table->id();

            $table->string('owner');
            $table->string('email');
            $table->string('photo')->nullable();
            $table->string('whatsapp')->nullable();
            $table->string('instagram')->nullable();
            $table->string('kelas');
            $table->string('kategori');
            $table->string('deskripsi', 255);
            $table->string('deadline');
            $table->integer('harga');
            $table->timestamps();
        });

        // DB::table('tugas')->insert(
        //     array(
        //         ['owner' => 'Adhi Utomo Jusman',
        //         'email' => 'AdhiUtomoJusman@gmail.com',
        //         'fakultas' => 'Keguruan dan Ilmu Pendidikan',
        //         'jurusan' => 'Pendidikan Masyarakat',
        //         'kategori' => 'PPT',
        //         'deskripsi' => 'Membuat sebuah PPT tentang pentingnya rasa sosialisasi dalam masyarakat.',
        //         'deadline' => '23 Januari 2023',
        //         'harga' => '50000'], 
        //     )
        // );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tugas');
    }
};
