<?php

class Battery
{          
    public function supply12v()
    {
        return 12;
    }
}

class BadCar
{
    /**
     *
     * @var Battery
     */    
    protected $battery;
    
    function __construct()
    {
        $this->battery = new Battery();
    }

    
    public function drive()
    {
        $this->battery->supply12v();
    }
}

class BetterCar
{
    /**
     *
     * @var Battery
     */    
    protected $battery;
    
    function __construct(Battery $battery)
    {
        $this->battery = $battery;
    }

        
    public function drive()
    {
        $this->battery->supply12v();
    }    
}

interface BatteryInterface
{          
    public function supply12v();
}

class BestCar
{
    /**
     *
     * @var BatteryInterface
     */    
    protected $battery;
    
    function __construct(BatteryInterface $battery)
    {
        $this->battery = $battery;
    }

        
    public function drive()
    {
        $this->battery->supply12v();
    }    
}