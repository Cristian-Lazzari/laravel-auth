<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('projects', function (Blueprint $table) {
            $table->id();

            $table->string('name', 100)->unique();;
            $table->text('description');
            $table->url('link');
            $table->url('link_github');
            $table->url('url_image')->nullable();
            $table->url('url_gifs')->nullable();
   

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
        Schema::dropIfExists('projects');
    }
};
