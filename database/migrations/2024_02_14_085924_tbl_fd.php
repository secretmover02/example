<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('tbl_fd', function (Blueprint $table) {
            $table->id("division_id");
            $table->string('division_name');
            $table->string('division_short_name');
            $table->string('division_code');
            $table->string('division_email');
            $table->string('office_level_id');
            $table->string('fd_chief')->nullable();
            $table->string('chief_designation')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_fd');
    }
};
