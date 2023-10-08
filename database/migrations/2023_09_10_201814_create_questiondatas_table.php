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
        Schema::create('questiondatas', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->integer('phone');
            $table->integer('age');
            $table->string('address');

            $table->integer('total')->nullable();
            $table->integer('PanicDisorder')->nullable();
            $table->integer('Generalized')->nullable();
            $table->integer('Separation')->nullable();
            $table->integer('SocialPhobis')->nullable();
            $table->integer('total_score')->nullable();
            $table->integer('PanicDisorder_score')->nullable();
            $table->integer('Generalized_score')->nullable();
            $table->integer('SocialPhobis_score')->nullable();

            $table->integer('q1');
            $table->integer('q2');
            $table->integer('q3');
            $table->integer('q4');
            $table->integer('q5');
            $table->integer('q6');
            $table->integer('q7');
            $table->integer('q8');
            $table->integer('q9');
            $table->integer('q10');
            $table->integer('q11');
            $table->integer('q12');
            $table->integer('q13');
            $table->integer('q14');
            $table->integer('q15');
            $table->integer('q16');
            $table->integer('q17');
            $table->integer('q18');
            $table->integer('q19');
            $table->integer('q20');
            $table->integer('q21');
            $table->integer('q22');
            $table->integer('q23');
            $table->integer('q24');
            $table->integer('q25');
            $table->integer('q26');
            $table->integer('q27');
            $table->integer('q28');
            $table->integer('q29');
            $table->integer('q30');
            $table->integer('q31');
            $table->integer('q32');
            $table->integer('q33');
            $table->integer('q34');
            $table->integer('q35');
            $table->integer('q36');
            $table->integer('q37');
            $table->integer('q38');
            $table->integer('q39');
            $table->integer('q40');
            $table->integer('q41');
            $table->integer('q42');
            $table->integer('q43');
            $table->integer('q44');
            



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
        Schema::dropIfExists('questiondatas');
    }
};
