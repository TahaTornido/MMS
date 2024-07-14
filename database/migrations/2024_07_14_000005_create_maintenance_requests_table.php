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
        Schema::create('maintenance_requests', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('customer_id');
            $table->string('reason')->nullable();
            $table->string('device_company')->nullable();
            $table->string('device_mark')->nullable();
            $table->string('device_model')->nullable();
            $table
                ->enum('status', [
                    'submission',
                    'delivery',
                    'under_diagnosis',
                    'done_diagnosis',
                    'accept',
                    'in_maintenance',
                    'done_maintenance',
                    'ready',
                ])
                ->default('submission');

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
        Schema::dropIfExists('maintenance_requests');
    }
};
