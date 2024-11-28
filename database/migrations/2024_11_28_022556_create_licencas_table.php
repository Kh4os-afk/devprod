<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('licencas', function (Blueprint $table) {
            $table->uuid('id');
            $table->string('empresa');
            $table->string('cnpj');
            $table->string('contato');
            $table->date('dtinicio');
            $table->date('dtfinal');
            $table->integer('qtfilial');
            $table->decimal('vlmensal');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('licencas');
    }
};
