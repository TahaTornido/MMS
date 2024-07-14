<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('malfunctions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('malfunction_class_id');
            $table->unsignedBigInteger('diagnosis_id');
            $table->text('details')->nullable();
            $table->date('date');
            $table->decimal('wages');
            $table->unsignedBigInteger('prodecure_id');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('malfunctions');
    }
};
