<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddReferencesLikesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('likes', function(Blueprint $table) {
            $table->foreign('review_id')
                ->references('id')
                ->on('reviews')
                ->onDelete('cascade');
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('likes', function(Blueprint $table)
        {
            $table->dropForeign('likes_user_id_foreign');
            $table->dropForeign('likes_review_id_foreign');
        });
    }
}
