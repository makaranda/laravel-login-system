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
        Schema::create('cels', function (Blueprint $table) {
            $table->id();
            $table->string('eventtype', 30);
            $table->dateTime('eventtime');
            $table->string('cid_name', 80);
            $table->string('cid_num', 80);
            $table->string('cid_ani', 80);
            $table->string('cid_rdnis', 80);
            $table->string('cid_dnid', 80);
            $table->string('exten', 80);
            $table->string('context', 80);
            $table->string('channame', 80);
            $table->string('appname', 80);
            $table->string('appdata', 255);
            $table->integer('amaflags');
            $table->string('accountcode', 20);
            $table->string('uniqueid', 32);
            $table->string('linkedid', 32);
            $table->string('peer', 80);
            $table->string('userdeftype', 255);
            $table->string('extra', 512);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cels');
    }
};
