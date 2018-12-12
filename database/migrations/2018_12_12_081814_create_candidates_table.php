<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCandidatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidates', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',400);
            $table->string('email',400);
            $table->string('address',400);
            $table->string('mobileNumber',400);
            $table->date('birthday');
            $table->string('nicNumber',400);
            $table->string('cv_path',400);
            $table->string('positionApply',400);
            $table->string('lastcompany',400);
            $table->string('lasttitle',400);
            $table->double('lastsalary',10,2);
            $table->string('experience',400);
            $table->text('notes');
            $table->string('accNumber',400);
            $table->string('accName',400);
            $table->string('bankName',400);
            $table->string('branch',400);
            $table->rememberToken();
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
        Schema::dropIfExists('candidates');
    }
}
