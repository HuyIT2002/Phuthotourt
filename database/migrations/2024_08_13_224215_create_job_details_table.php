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
        Schema::create('job_details', function (Blueprint $table) {
            $table->increments('job_details_id');
            $table->unsignedInteger('job_id')->nullable();
            $table->string('vi_tri');
            $table->int('total');
            $table->string('workplace');
            $table->string('work_address');
            $table->string('job_description');
            $table->dateTime('workday')->change();
            $table->string('business_hours');
            $table->text('interest');
            $table->text('request');
            $table->string('age');
            $table->string('level');
            $table->string('profile_included');
            $table->timestamps(); // Tạo cột created_at và updated_at

            // Thiết lập khóa ngoại
            $table->foreign('job_id')->references('job_id')->on('jobs')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('job_details');
    }
};