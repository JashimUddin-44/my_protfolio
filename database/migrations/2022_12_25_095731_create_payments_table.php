<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Student;
use App\Models\Feetype;
use App\Models\Paymentmethod;
return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Student::class)->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignIdFor(Feetype::class)->cascadeOnDelete()->cascadeOnUpdate();
            $table->integer('amount');
            $table->integer('paid_amount');
            $table->foreignIdFor(Paymentmethod::class)->cascadeOnDelete()->cascadeOnUpdate();
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
        Schema::dropIfExists('payments');
    }
};
