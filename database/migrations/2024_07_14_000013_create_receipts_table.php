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
        Schema::create('receipts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('maintenance_request_id');
            $table->string('device_company');
            $table->string('device_mark');
            $table->string('device_model');
            $table->text('details')->nullable();
            $table->boolean('is_boxed');
            $table->boolean('broken');
            $table->string('imei1')->nullable();
            $table->string('imei2')->nullable();
            $table->date('receipt_date');
            $table->enum('type_receipt', ['new', 'warranty'])->default('new');

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
        Schema::dropIfExists('receipts');
    }
};
