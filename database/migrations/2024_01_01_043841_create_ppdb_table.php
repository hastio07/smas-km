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
        Schema::create('ppdb', function (Blueprint $table) {
            $table->id();
            $table->string('pendaftaran_id')->unique();
            $table->stirng('nama');
            $table->enum('jenis_kelamin', ['laki-laki', 'perempuan']);
            $table->stirng('tmpt_lahir');
            $table->date('tgl_lahir');
            $table->enum('agama', ['islam', 'kristen-protestan', 'kristen-katolik', 'hindu', 'buddha', 'khonghucu']);
            $table->stirng('brkthn_khusus');
            $table->string('alamat');
            $table->stirng('desa_kelurahan');
            $table->stirng('kecamatan');
            $table->stirng('kode_pos', 6)->unique();
            $table->stirng('nhp_ortu');
            $table->string('nhp_siswa');
            $table->stirng('email');
            $table->stirng('asl_sekolah');
            $table->stirng('nma_ayah');
            $table->stirng('pend_terakhir');
            $table->stirng('pekerjaan');
            $table->stirng('penghasilan');
            $table->stirng('nma_ibu');
            $table->stirng('pend_terkahir');
            $table->decimal('penghasilan', 8, 0, true);
            $table->stirng('pekerjaan');
            $table->stirng('filefc_akte');
            $table->stirng('filefc_skhu');
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
