<?php

use Illuminate\Database\Seeder;
use App\Hexagon;

class HexagonTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     public function run()
     {
       $L = 50;
       $position = ["lat" => -13.929307, "lng" => -78.074548,];
       $position2 = \GeometryLibrary\SphericalUtil::computeOffset($position, $L*3, 90);
       $position3 = \GeometryLibrary\SphericalUtil::computeOffset($position, $L*sqrt(3), 120);

       //for ($i=0; $i < 2000; $i++) {
       for ($i=0; $i < 2000; $i++) {
         $this->rawHexagon($position2, $L, 4000);
         $this->rawHexagon($position3, $L, 4000);
         echo("Step :".$i."\n");
         $position = $position2;
         $position2 = \GeometryLibrary\SphericalUtil::computeOffset($position, $L*3, 90);
         $position3 = \GeometryLibrary\SphericalUtil::computeOffset($position, $L*sqrt(3), 120);
       }


     }

     public function rawHexagon($position, $radius, $size){
       for ($j=0; $j < $size; $j++) {
         echo($j.".");
         $position_auz = \GeometryLibrary\SphericalUtil::computeOffset($position, $radius*sqrt(3), 0);
         Hexagon::create(["latitude"=>$position_auz['lat'],"longitude"=>$position_auz['lng']]);
         $position = $position_auz;
       }
     }
}
