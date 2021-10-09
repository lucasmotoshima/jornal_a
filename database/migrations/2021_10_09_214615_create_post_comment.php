<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostComment extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post_comment', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('post_id');
            $table->bigInteger('parent_id');
            $table->string('title');
            $table->enum('published', ['1', '0']);
            $table->timestamps('published_at');
            $table->string('content');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('post_comment');
    }
}
