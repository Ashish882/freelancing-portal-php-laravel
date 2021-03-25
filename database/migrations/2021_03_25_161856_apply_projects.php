<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ApplyProjects extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('apply_projects', function (Blueprint $table) {
            $table->id('apply_id');
            $table->string('free_id');
            $table->string('project_id');
            $table->string('resume_path');
            $table->string('ctext');
            $table->string('price');
            $table->string('status');
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
        Schema::drop('apply_projects');
    }
}
