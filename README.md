# gpsdistance
Use for check distance between gps latitude , longtitude. 

Installation
Use the package manager [composer](https://getcomposer.org/) to install Simple Line Alert.
```sh
composer i noxil/gpsdistance
```

How to use
```sh
<?php
....
use noxil\gpsdistance;
....
# returns 'resulut from Line Notify'
$gpsdistance = new GpsDistance();

//From GPS Point data
$lat1 = 18.775445029895085;
$lng1 = 99.04841364382438;

//To GPS Point data
$lat2 = 18.756997228217532;
$lng2 = 99.02579725845277;

$gpsdistance->setGpsPoint1($lat1, $lng1); // Set From GPS Point
$gpsdistance->setGpsPoint2($lat2, $lng2); // Set To GPS Point

$result_km = $gpsdistance->distancePoint(); // Distance (Km)
$result_mi = $gpsdistance->distancePoint('mi'); // Distance (Mile)

....
```
