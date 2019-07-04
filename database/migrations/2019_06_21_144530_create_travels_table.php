<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTravelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('travels', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title')->comment('ชื่อแหล่งท่องเที่ยว');
            $table->longtext('detail')->comment('เนื้อหาแหล่งท่องเที่ยว');
            $table->string('thumbnail')->comment('รูปภาพหัวเรื่องแหล่งท่องเที่ยว');
            $table->string('description')->comment('คำโปรย');
            $table->string('phone')->comment('เบอร์ติดต่อ');

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
        Schema::dropIfExists('travels');
    }
}
