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
            $table->foreignId('role_id')->constrained('roles')->restrictOnUpdate()->restrictOnDelete();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });

        // Untuk membuat trigger di tabel admin ketika input role id != admin
        DB::unprepared("
            CREATE TRIGGER cek_role_id_admins
            BEFORE INSERT ON admins
            FOR EACH ROW
            BEGIN
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
