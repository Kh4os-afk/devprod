<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('dvp_auditoria', function (Blueprint $table) {
            $table->varchar('ibs_anexo')->nullable()->after('ibs_reducaobc');
            $table->varchar('cbs_anexo')->nullable()->after('cbs_reducaobc');
        });
    }

    public function down(): void
    {
        Schema::table('dvp_auditoria', function (Blueprint $table) {
            $table->dropColumn('ibs_anexo');
            $table->dropColumn('cbs_anexo');
        });
    }
};
