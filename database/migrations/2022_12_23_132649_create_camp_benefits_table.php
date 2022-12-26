<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('camp_benefits', function (Blueprint $table) {
            $table->id();
            // $table->unsignedBigInteger('camp_id');
            $table->string('name');
            $table->timestamps();

            // Make a Foreign key (nama field),(tujuan),(nama table tujuan)
            // $table->foreign('camp_id')->references('id')->on('camps')->onDelete('cascade');
            //2nd method dengan syarat (nama table_namafield)
            $table->foreignId('camp_id')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('camp_benefits');
    }
};
