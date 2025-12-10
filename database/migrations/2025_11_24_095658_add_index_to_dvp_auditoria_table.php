<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('dvp_auditoria', function (Blueprint $table) {
            $table->index('codbarras', 'dvp_base_codbarras');
        });
    }

    public function down(): void
    {
        Schema::table('dvp_auditoria', function (Blueprint $table) {
            $table->dropIndex('dvp_base_codbarras');
        });
    }
};
