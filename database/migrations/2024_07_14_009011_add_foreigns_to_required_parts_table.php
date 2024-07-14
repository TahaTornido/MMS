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
        Schema::table('required_parts', function (Blueprint $table) {
            $table
                ->foreign('part_category_id')
                ->references('id')
                ->on('part_categories')
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');

            $table
                ->foreign('malfunction_id')
                ->references('id')
                ->on('malfunctions')
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
        Schema::table('required_parts', function (Blueprint $table) {
            $table->dropForeign(['part_category_id']);
            $table->dropForeign(['malfunction_id']);
        });
    }
};
