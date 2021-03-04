<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuarioTable extends Migration
{
    
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id();
            $table->string('username')->unique();
            $table->string('password');
            $table->integer('tipo');
            $table->foreignId('funcionario_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('tipo_status_id')->constrained('tipo_status')->onDelete('cascade')->onUpdate('cascade');
            $table->string('remember_token')->nullable();
            $table->timestamps();
            
        });
    }

    public function down()
    {
        Schema::dropIfExists('usuario');
    }
}
