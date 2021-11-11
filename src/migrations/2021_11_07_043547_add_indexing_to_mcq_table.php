<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class addIndexingToMcqTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable('fmt_mcq_ques')) {
            Schema::table('fmt_mcq_ques', function (Blueprint $table) {
                $table->index('active');
            });
        }
        
        if (Schema::hasTable('fmt_mcq_ans')) {
            Schema::table('fmt_mcq_ans', function (Blueprint $table) {
                $table->index('question_id');
                $table->index('active');
                $table->index('arrange');
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Schema::dropIfExists('fmt_mcq_ans');
    }
}
