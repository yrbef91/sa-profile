<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
            Schema::create('posts', function(Blueprint $table) {
                $table->increments('id');
                $table->string('post_author');
$table->string('post_title');
$table->longText('post_content');
$table->string('post_excerpt');
$table->string('guid');
$table->string('post_type');
$table->string('post_status');

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
        Schema::drop('posts');
    }

}
