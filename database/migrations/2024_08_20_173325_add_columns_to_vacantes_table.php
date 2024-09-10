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
        Schema::table('vacantes', function (Blueprint $table) {
            $table->string('titulo')->after('id');
            $table->foreignId('user_id')->after('titulo')->constrained()->onDelete('cascade');
            $table->foreignId('salario_id')->after('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('categoria_id')->after('salario_id')->constrained()->onDelete('cascade');
            $table->string('empresa')->after('categoria_id');
            $table->date('ultimo_dia')->after('empresa');
            $table->text('descripcion')->after('ultimo_dia');
            $table->string('imagen')->after('descripcion');
            $table->integer('publicado')->after('imagen')->default(1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('vacantes', function (Blueprint $table) {
            $table->dropForeign('vacantes_user_id_foreign');
            $table->dropForeign('vacantes_salario_id_foreign');
            $table->dropForeign('vacantes_categoria_id_foreign');
            $table->dropColumn(['titulo', 'user_id', 'salario_id', 'categoria_id', 'empresa', 'ultimo_dia', 'descripcion', 'imagen', 'publicado']);
        });
    }
};
