<?php 

class Roof{
    private int $count;

    public function __construct(int $count){
        $this->count = $count;
    }

    public function getSheets(){
        return $this->count + 2;
    }
}


class Houses {
    const MAX_HEIGHT = 12; //constant

    public static int $maxWidth = 23; //static property

    /**
     * Sum of house dimensions
     * 
     * @return int
     */
    public static function dimensions(Roof $rf):int
    {
        $dim = 2*(self::MAX_HEIGHT + Houses::$maxWidth);
        return $dim + $rf->getSheets();
    }

}

$house = new Houses();
//echo $house->maxWidth;
echo Houses::$maxWidth.'<br>';
echo Houses::dimensions(new Roof(2)).'<br>';