<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ppdb', function (Blueprint $table) {
            $table->id();
            $table->string('pendaftaran_id')->unique();
            $table->string('nama');
            $table->enum('jenis_kelamin', ['laki-laki', 'perempuan']);
            $table->string('tmpt_lahir');
            $table->date('tgl_lahir');
            $table->enum('agama', ['islam', 'kristen-protestan', 'kristen-katolik', 'hindu', 'buddha', 'khonghucu']);
            $table->string('brkthn_khusus');
            $table->string('alamat');
            $table->string('desa_kelurahan');
            $table->string('kecamatan');
            $table->string('kode_pos', 6)->unique();
            $table->string('nhp_ortu');
            $table->string('nhp_siswa');
            $table->string('email');
            $table->string('asl_sekolah');
            $table->string('nma_ayah');
            $table->string('pend_terakhir');
            $table->string('pekerjaan_ayah');
            $table->decimal('penghasilan_ayah', 8, 0, true);
            $table->string('nma_ibu');
            $table->string('pend_terkahir');
            $table->decimal('penghasilan_ibu', 8, 0, true);
            $table->string('pekerjaan_ibu');
            $table->string('filefc_akte');
            $table->string('filefc_skhu');
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
        Schema::dropIfExists('p_p_d_b_s');
    }
};
