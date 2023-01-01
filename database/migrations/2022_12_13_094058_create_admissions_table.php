<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Clist;
use App\Models\Department;
return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admissions', function (Blueprint $table) {
            $table->id();
            $table->string('student_name');
            $table->string('father_name');
            $table->string('mother_name');
            $table->string('mobaile_number');
            $table->string('email');
            $table->foreignIdFor(Clist::class)->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignIdFor(Department::class)->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('image');
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
        Schema::dropIfExists('admissions');
    }
};
