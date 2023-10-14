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
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->integer('post_id');
            $table->string('name', 100);
            $table->string('text', 1000);
            $table->timestamps();
        });

        //добавление столбца в таблицу
//        Schema::table('comments',function (Blueprint $table) {
//            $table->integer('post_id');
//        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comments');
    }
};
