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
        Schema::create('part_options', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('required_part_id');
            $table->unsignedBigInteger('replacement_part_id');
            $table->text('details')->nullable();
            $table->boolean('choosen');
            $table->time('warranty_time')->nullable();

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
        Schema::dropIfExists('part_options');
    }
};
