<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        //
        schema :: table ('client', function (Blueprint $table) {
            $table->dropColumn('observation');
            $table->dropColumn('credit_balance');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        schema :: table ('client', function (Blueprint $table) {
            $table->string('observation', 255)->nullable(); //  VARCHAR,  NULLABLE
            $table->decimal('credit_balance', 8, 2)->unsigned(); //  DECIMAL,  UNSIGNED
        });
    }
};
