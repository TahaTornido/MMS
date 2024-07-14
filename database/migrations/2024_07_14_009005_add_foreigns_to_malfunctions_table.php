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
        Schema::table('malfunctions', function (Blueprint $table) {
            $table
                ->foreign('malfunction_class_id')
                ->references('id')
                ->on('malfunction_classes')
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');

            $table
                ->foreign('diagnosis_id')
                ->references('id')
                ->on('diagnoses')
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');

            $table
                ->foreign('prodecure_id')
                ->references('id')
                ->on('prodecures')
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
        Schema::table('malfunctions', function (Blueprint $table) {
            $table->dropForeign(['malfunction_class_id']);
            $table->dropForeign(['diagnosis_id']);
            $table->dropForeign(['prodecure_id']);
        });
    }
};
