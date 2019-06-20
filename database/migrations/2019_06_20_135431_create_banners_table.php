<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBannersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('banners', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('thumbnail')->comment('ที่อยู่รูป');
            $table->string('title')->comment('หัวข้อ');
            $table->string('link')->comment('ลิงค์');
            $table->string('start')->comment('เริ่มเมื่อไหร่');
            $table->string('end')->comment('จบเมื่อไหร่');
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
        Schema::dropIfExists('banners');
    }
}
