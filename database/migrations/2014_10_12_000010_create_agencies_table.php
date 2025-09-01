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
        Schema::create('agencies', function (Blueprint $table) {
            $table->id();
            
            $table->text("number");
            $table->string("name");
            $table->string("ifu");
            $table->string("ifu_file")->nullable();
            $table->string("rccm");
            $table->string("rccm_file")->nullable();
            $table->string("country");
            $table->string("city");
            $table->string("phone");
            $table->string("email");

            $table->string("delete_at")->nullable();
            $table->boolean("visible")->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('agencies');
    }
};
