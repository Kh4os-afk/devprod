<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('dvp_auditoria', function (Blueprint $table) {
            $table->mediumText('erro_eauditoria')->after('data_eauditoria')->nullable();
            $table->mediumText('erro_svrs')->after('data_svrs')->nullable();
        });
    }

    public function down(): void
    {
        Schema::table('dvp_auditoria', function (Blueprint $table) {
            $table->dropColumn('erro_eauditoria');
            $table->dropColumn('erro_svrs');
        });
    }
};
