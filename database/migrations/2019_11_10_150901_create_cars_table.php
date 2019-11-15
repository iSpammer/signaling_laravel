<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string("car_name");
            $table->string("car_year");
            $table->string("car_lat");
            $table->string("car_long");
            $table->text("car_img");
            $table->integer("car_fuel");
            $table->timestamps("");
        });
        DB::table('cars')->insert(
            ['id' => 1, 'car_name' => 'Opel Astra', "car_year" => '2019', "car_lat"=> "29.972", "car_long" => "31.0191", "car_img" => "opel_astra_image.PNG", "car_fuel" => 80 ,"created_at" =>  \Carbon\Carbon::now(),
            "updated_at" => \Carbon\Carbon::now()]
        );
        DB::table('cars')->insert(
            ['id' => 2, 'car_name' => 'Opel Astra', "car_year" => '2018', "car_lat"=> "30.0271556", "car_long" => "31.0133856", "car_img" => "opel_astra_image.PNG", "car_fuel" => 43 ,"created_at" =>  \Carbon\Carbon::now(),
            "updated_at" => \Carbon\Carbon::now()]
        );
        DB::table('cars')->insert(
            ['id' => 3, 'car_name' => 'Opel Astra', "car_year" => '2019', "car_lat"=> "30.0264451", "car_long" => "31.4956453", "car_img" => "opel_astra_image.PNG", "car_fuel" => 22,"created_at" =>  \Carbon\Carbon::now(),
            "updated_at" => \Carbon\Carbon::now()]
        );
        DB::table('cars')->insert(
            ['id' => 4, 'car_name' => 'Seat Toledo ', "car_year" => '2018', "car_lat"=> "30.0202437", "car_long" => "31.4949123", "car_img" => "seat_toledo_image.PNG", "car_fuel" => 59,"created_at" =>  \Carbon\Carbon::now(),
            "updated_at" => \Carbon\Carbon::now()]
        );
        DB::table('cars')->insert(
            ['id' => 5, 'car_name' => 'Seat Toledo ', "car_year" => '2017', "car_lat"=> "30.025788", "car_long" => "31.4631076", "car_img" => "seat_toledo_image.PNG", "car_fuel" => 13,"created_at" =>  \Carbon\Carbon::now(),
            "updated_at" => \Carbon\Carbon::now()]
        );
        DB::table('cars')->insert(
            ['id' => 6, 'car_name' => 'Seat Toledo ', "car_year" => '2017', "car_lat"=> "30.0298078", "car_long" => "31.4598867", "car_img" => "seat_toledo_image.PNG", "car_fuel" => 97,"created_at" =>  \Carbon\Carbon::now(),
            "updated_at" => \Carbon\Carbon::now()]
        );
        DB::table('cars')->insert(
            ['id' => 7, 'car_name' => 'Renault Logan', "car_year" => '2018', "car_lat"=> "30.0201178", "car_long" => "31.4945891", "car_img" => "renault_logan_image.PNG", "car_fuel" => 80,"created_at" =>  \Carbon\Carbon::now(),
            "updated_at" => \Carbon\Carbon::now()]
        );
        DB::table('cars')->insert(
            ['id' => 8, 'car_name' => 'Renault Logan', "car_year" => '2018', "car_lat"=> "30.035353", "car_long" => "31.3482261", "car_img" => "renault_logan_image.PNG", "car_fuel" => 43,"created_at" =>  \Carbon\Carbon::now(),
            "updated_at" => \Carbon\Carbon::now()]
        );
        DB::table('cars')->insert(
            ['id' => 9, 'car_name' => 'Renault Logan', "car_year" => '2018', "car_lat"=> "30.0424394", "car_long" => "31.2244312", "car_img" => "renault_logan_image.PNG", "car_fuel" => 22,"created_at" =>  \Carbon\Carbon::now(),
            "updated_at" => \Carbon\Carbon::now()]
        );
        DB::table('cars')->insert(
            ['id' => 10, 'car_name' => 'Mitsubishi Lancer', "car_year" => '2017', "car_lat"=> "30.0621971", "car_long" => "31.2162289", "car_img" => "mitsubishi_lancer_image.PNG", "car_fuel" => 59,"created_at" =>  \Carbon\Carbon::now(),
            "updated_at" => \Carbon\Carbon::now()]
        );
        DB::table('cars')->insert(
            ['id' => 11, 'car_name' => 'Mitsubishi Lancer', "car_year" => '2017', "car_lat"=> "30.0295799", "car_long" => "31.4967913", "car_img" => "mitsubishi_lancer_image.PNG", "car_fuel" => 44,"created_at" =>  \Carbon\Carbon::now(),
            "updated_at" => \Carbon\Carbon::now()]
        );
        DB::table('cars')->insert(
            ['id' => 12, 'car_name' => 'mercedes benz c180', "car_year" => '2019', "car_lat"=> "29.988036", "car_long" => "31.438249", "car_img" => "mercedes_benz_image.PNG", "car_fuel" => 95,"created_at" =>  \Carbon\Carbon::now(),
            "updated_at" => \Carbon\Carbon::now()]
        );
        DB::table('cars')->insert(
            ['id' => 13, 'car_name' => 'mercedes benz c180', "car_year" => '2019', "car_lat"=> "29.986732", "car_long" => "31.438055", "car_img" => "mercedes_benz_image.PNG", "car_fuel" => 83,"created_at" =>  \Carbon\Carbon::now(),
            "updated_at" => \Carbon\Carbon::now()]
        );
        DB::table('cars')->insert(
            ['id' => 14, 'car_name' => 'mercedes benz c180', "car_year" => '2019', "car_lat"=> "29.984799", "car_long" => "31.437969", "car_img" => "mercedes_benz_image.PNG", "car_fuel" => 56,"created_at" =>  \Carbon\Carbon::now(),
            "updated_at" => \Carbon\Carbon::now()]
        );


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cars');
    }
}
