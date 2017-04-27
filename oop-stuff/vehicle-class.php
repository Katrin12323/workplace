<?php
 class Vehicle {

     protected $pricePerKilometer;

     protected $maximumKilometer;

     protected $maximumLoad;

     protected $vehicleName;

     /**
      * Vehicle constructor.
      * @param $pricePerKilometer
      * @param $maximumKilometer
      * @param $maximumLoad
      * @param $vehicleName
      */
     public function __construct($pricePerKilometer, $maximumKilometer, $maximumLoad, $vehicleName)
     {
         $this->pricePerKilometer = $pricePerKilometer;
         $this->maximumKilometer = $maximumKilometer;
         $this->maximumLoad = $maximumLoad;
         $this->vehicleName = $vehicleName;
     }


     /**
      * @return mixed
      */
     public function getPricePerKilometer()
     {
         return $this->pricePerKilometer;
     }

     /**
      * @return mixed
      */
     public function getMaximumKilometer()
     {
         return $this->maximumKilometer;
     }

     /**
      * @return mixed
      */
     public function getMaximumLoad()
     {
         return $this->maximumLoad;
     }

     /**
      * @return mixed
      */
     public function getVehicleName()
     {
         return $this->vehicleName;
     }

     public function transport($distanceWhichTheVehicleNeedsToTravel, $kilogramsWhichTheVehicleNeedsToCarry) {

         if ($this->maximumLoad < $kilogramsWhichTheVehicleNeedsToCarry) {
             echo "Vehicle overloaded.";

         } elseif ($this->maximumKilometer >= $distanceWhichTheVehicleNeedsToTravel) {
             echo " It'll be cost you: ";
             echo $this->pricePerKilometer*$distanceWhichTheVehicleNeedsToTravel . "$" ;

         } else {
             echo "Transportation not possible";
         }

     }

 }

 $Car=new Vehicle(10, 4000,500, "car");
 $Car->transport(500, 600);