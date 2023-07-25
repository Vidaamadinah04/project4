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
       Schema::create('pengguna', function (Blueprint $table) {
           $table->id();
           $table->string('username');
           $table->string('nama_user');
           $table->string('hak_akses');
           $table->integer('status');
       });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
