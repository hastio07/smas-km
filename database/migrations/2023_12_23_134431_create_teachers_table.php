<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('teachers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('role_id')->constrained('roles')->restrictOnUpdate()->restrictOnDelete();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });

        DB::unprepared("
            CREATE TRIGGER cek_role_id_teachers
            BEFORE INSERT ON teachers
            FOR EACH ROW
            BEGIN
                IF NEW.role_id <> 2 THEN
                     SET NEW.role_id = 2;
                END IF;
            END;
        ");

    }

    public function down()
    {
        Schema::dropIfExists('teachers');
        DB::unprepared('DROP TRIGGER IF EXISTS cek_role_id_teachers');
    }
};
