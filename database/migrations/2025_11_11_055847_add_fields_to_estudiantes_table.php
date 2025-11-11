<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('estudiantes', function (Blueprint $table) {
            if (!Schema::hasColumn('estudiantes', 'nombre')) {
                $table->string('nombre', 100)->after('id');
            }
            if (!Schema::hasColumn('estudiantes', 'correo')) {
                $table->string('correo', 120)->after('nombre');
            }
            if (!Schema::hasColumn('estudiantes', 'carrera')) {
                $table->string('carrera', 100)->after('correo');
            }
            if (!Schema::hasColumn('estudiantes', 'semestre')) {
                $table->unsignedTinyInteger('semestre')->after('carrera'); // 1..12
            }
        });
    }

    public function down(): void
    {
        Schema::table('estudiantes', function (Blueprint $table) {
            $table->dropColumn(['nombre','correo','carrera','semestre']);
        });
    }
};
