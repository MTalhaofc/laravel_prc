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
    Schema::create('Table2' , function(BluePrint $table ){
$table->id();
$table->string("bought")->default("False");
$table->integer("Price");
$table->string("nameNameProduct");
$table->timestamps();






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
