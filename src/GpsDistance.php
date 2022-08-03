<?php

namespace noxil\gpsdistance;

class GpsDistance
{

    public $lat1;
    public $lng1;
    public $lat2;
    public $lng2;
    public $earthRadius = 6371000;
    public $milerate = 0.62137;

    public function setLat1($value)
    {
        $this->lat1 = $value;
    }

    public function setLng1($value)
    {
        $this->lng1 = $value;
    }

    public function setLat2($value)
    {
        $this->lat2 = $value;
    }

    public function setLg2($value)
    {
        $this->lng2 = $value;
    }

    public function getLat1()
    {
        return $this->lat1;
    }

    public function getLng1()
    {
        return $this->lng1;
    }

    public function getLat2()
    {
        return $this->lat2;
    }

    public function getLng2()
    {
        return $this->lng2;
    }

    public function setGpsPoint1($lat, $lng)
    {
        $this->lat1 = $lat;
        $this->lng1 = $lng;
    }

    public function setGpsPoint2($lat, $lng)
    {
        $this->lat2 = $lat;
        $this->lng2 = $lng;
    }

    public function distancePoint($unit = 'km')
    {
        // convert from degrees to radians
        if(empty($this->lat1) || empty($this->lng1) || empty($this->lat2) || empty($this->lng2)){
            return -1;
        }

        $latFrom = deg2rad($this->lat1);
        $lonFrom = deg2rad($this->lng1);
        $latTo = deg2rad($this->lat2);
        $lonTo = deg2rad($this->lng2);

        $latDelta = $latTo - $latFrom;
        $lonDelta = $lonTo - $lonFrom;

        $angle = 2 * asin(sqrt(pow(sin($latDelta / 2), 2) +
            cos($latFrom) * cos($latTo) * pow(sin($lonDelta / 2), 2)));
        if ($unit == 'km'){
            return $angle * $this->earthRadius;
        }elseif($unit == 'mi'){
            return $angle * $this->earthRadius * $this->milerate;
        }else{
            return -2;
        }
        
    }
}
