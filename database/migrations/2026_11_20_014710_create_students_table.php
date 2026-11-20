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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('Name',128);
            $table->string('Surname',128);
            $table->string('Patronymic',128) -> nullable();
            $table->string('Email',128) ->unique();
            $table->string('Phone',128);
            $table->date('Birthday');
            $table->foreignId('group_id')->constrained('groups');
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
