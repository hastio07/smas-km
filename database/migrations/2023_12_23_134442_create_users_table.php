<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->foreignId('role_id')->constrained('roles')->restrictOnUpdate()->restrictOnDelete();
            $table->string('name');
            $table->string('nisn')->unique();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });

        DB::unprepared("
            CREATE TRIGGER cek_role_id_users
            BEFORE INSERT ON users
            FOR EACH ROW
            BEGIN
                IF NEW.role_id <> 4 THEN
                     SET NEW.role_id = 4;
                END IF;
            END;
        ");
    }

    public function down()
    {
        Schema::dropIfExists('users');
        DB::unprepared('DROP TRIGGER IF EXISTS cek_role_id_users');
    }
};
