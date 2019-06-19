<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('category_id')->comment('หมวดหมู่');
            $table->integer('user_id')->comment('คนแอ็ด');
            $table->string('title')->comment('หัวเรื่อง');
            $table->longtext('detail')->comment('เนื้อหาข่าว');
            $table->string('thumbnail')->comment('รูปภาพหัวเรื่อง');
            $table->string('description')->comment('คำโปรย');
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
        Schema::dropIfExists('articles');
    }
}
