<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blog_posts', function (Blueprint $table) {

/*Title - title of our blog post , body- body of our post and user_id - user_id of our blog post (author)
id and timestamp are prefilled where id Creates ID field that is also primary key in our table while timestamp Creates two TIMESTAMP fields (created_at & updated_at).
*/
            
            $table->id();
            $table->text('title'); 
            $table->text('body');
            $table->text('user_id'); 
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
        Schema::dropIfExists('blog_posts');
    }
}
