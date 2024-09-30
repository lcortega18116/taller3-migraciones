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
        Schema::create('client', function (Blueprint $table) {
            $table->increments('client_id'); //  INT,  AUTOINCREMENTABLE
            $table->string('client_name', 150); //  VARCHAR
            $table->string('client_last_name', 150); //  VARCHAR
            $table->string('email', 255)->unique(); //  VARCHAR,  UNIQUE
            $table->string('phone', 15)->nullable(); //  VARCHAR,  NULLABLE
            $table->text('address')->nullable(); //  TEXT,  NULLABLE
            $table->date('registration_date')->default(DB::raw('CURRENT_DATE')); //  DATE,  DEFAULT
            $table->boolean('is_active')->default(true); //  BOOLEAN,  DEFAULT
            $table->decimal('credit_balance', 8, 2)->unsigned(); //  DECIMAL,  UNSIGNED
            $table->integer('age')->unsigned()->default(0); //  INT,  UNSIGNED y DEFAULT
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('client');
    }
};
