<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('dvp_auditoria', function (Blueprint $table) {
            $table->text('ibs_descrclasstrib')->nullable()->change();
            $table->text('cbs_descrclasstrib')->nullable()->change();
        });
    }
};
