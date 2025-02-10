<?php

use App\Models\quiz;
use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('score_boards', function (Blueprint $table) {
          
            $table->foreignIdFor(User::class,"user_id")->constrained();
            $table->foreignIdFor(quiz::class,"quiz_id")->constrained();
            $table->primary(["user_id","quiz_id"]);
            $table->float("score");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('score_boards');
    }
};
