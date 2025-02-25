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
        Schema::table('part_purchases', function (Blueprint $table) {
            $table
                ->foreign('replacement_part_id')
                ->references('id')
                ->on('replacement_parts')
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('part_purchases', function (Blueprint $table) {
            $table->dropForeign(['replacement_part_id']);
        });
    }
};
