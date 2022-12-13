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
        Schema::create('qrtbls', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->string('qr_type');
            $table->text('qrcode');
            $table->string('file_id')->nullable();
            $table->string('label')->nullable();
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
        Schema::dropIfExists('qrtbls');
    }
};
