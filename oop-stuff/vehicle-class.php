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
         $this->pricePerKilometer = "10$";
         $this->maximumKilometer = "300km";
         $this->maximumLoad = "1000";
         $this->vehicleName = "car";
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
         echo " It'll be cost you: ";
         echo $this->pricePerKilometer*$distanceWhichTheVehicleNeedsToTravel ;

     }

 }

 $Car=new Vehicle();
 $Car->transport(200, 300);
