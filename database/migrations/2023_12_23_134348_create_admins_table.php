<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->id();
            $table->foreignId('role_id')->constrained('roles');
            $table->string('name');
            $table->string('username')->unique();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });

        // Untuk membuat trigger di tabel admins ketika insert role id != admin dan tolak jika sudah ada admin
        DB::unprepared("
           CREATE TRIGGER cek_role_id_admins
            BEFORE INSERT ON admins
            FOR EACH ROW
            BEGIN
                -- Batasi insert jika tabel sudah memiliki setidaknya satu baris
                IF (SELECT COUNT(*) FROM admins) > 0 THEN
                    SIGNAL SQLSTATE '45000'
                    SET MESSAGE_TEXT = 'Can not insert. Out of range value';
                END IF;
                -- Set role_id ke 1 jika nilai yang dimasukkan bukan 1
                IF NEW.role_id <> 1 THEN
                    SET NEW.role_id = 1;
                END IF;
            END;
        ");

    }

    public function down()
    {
        Schema::dropIfExists('admins');
        DB::unprepared('DROP TRIGGER IF EXISTS cek_role_id_admins');
    }
};
