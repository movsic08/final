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
        //add a new column in the categories table
        Schema::table('categories',function(Blueprint $table){
            $table->enum('showHome',['Yes','No'])->after('status')->default('No');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //drop column if it exists alredy
        Schema::table('categories',function(Blueprint $table){
            $table->dropColumn('showHome');
        });
    }
};
