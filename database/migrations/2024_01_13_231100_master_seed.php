<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    private array $usersSeedValue = [];

    public function __construct(){
        $this->usersSeedValue =[
            [
               "name"=>"CyberLord",
               "email"=>"powerofelectron616@gmail.com",
               "password"=>bcrypt("password"),
               "created_at"=>now(),
            ]
           ];
    }

    /**
     * Run the migrations.
     */
    public function up(): void
    {
        DB::table("users")->insert($this->usersSeedValue);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::table("users")->whereIn(
            "email",
            array_map(
                function($row){
                    return $row["email"];
                },
            $this->usersSeedValue
            )
        )->delete();
    }
};
