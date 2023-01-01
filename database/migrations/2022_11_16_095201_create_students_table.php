<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Clist;
use App\Models\Section;
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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Clist::class)->cascadeOnDelete()->cascadeOnUpdate();;
            $table->foreignIdFor(Section::class)->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignIdFor(Department::class)->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('roll');
            $table->string('registration');
            $table->string('dapartment');
            $table->string('phone');
            $table->string('email');
            $table->string('father_name');
            $table->string('mother_name');
            $table->string('gender');
            $table->string('profile_pic');
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
        Schema::dropIfExists('students');
    }
};
