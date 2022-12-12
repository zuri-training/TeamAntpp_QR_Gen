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
        Schema::create('qr_codes', function (Blueprint $table) {
            $table->uuid('id')->unique();           
            $table->string('image_url');
            $table->string('action');
            $table->string('label');
            $table->string('status')->nullable();
            $table->string('user_id');
            $table->string('type_id');
            $table->string('file_id');
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
        Schema::dropIfExists('qr_codes');
    }
};
