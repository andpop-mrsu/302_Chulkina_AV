<?php
class Vector {
    public $x, $y, $z;

    function __construct($x, $y, $z) 
    {
	if ($this->isValue($x) && $this->isValue($y) && $this->isValue($z)) {
	    $this->x = $x; 
	    $this->y = $y;
            $this->z = $z;
	} 
	else
	    echo 'error enter values';
    }

    private function isValue($Chars) 
    {
	$Chars .= ''; 
	for ($i = 0, $Char = $Chars[$i]; $i < strlen($Chars); $i++, $Char = $Chars[$i])
	    if (!($Char >= '0' and $Char <= '9')) 
		if ($i == 0) 
                    if (!($Char == '-')) return false; 
        return true;
    } 

    function getx() { return $this->x; }

    function gety() { return $this->y; }

    function getz() { return $this->z; }

    public function add($frac) 
    {
        $obj = new Vector(0,0,0);
        $obj ->x = (int)$this->x + (int)$frac->x;
        $obj ->y = (int)$this->y + (int)$frac->y;
	$obj ->z = (int)$this->z + (int)$frac->z;
        echo "Сумма векторов $this и $frac = ";
        return $obj;
    } 

    public function sub($frac) 
    {
        $obj = new Vector(0,0,0);
        $obj->x = (int)$this->x - (int)$frac->x;
        $obj->y = (int)$this->y - (int)$frac->y;
	$obj->z = (int)$this->z - (int)$frac->z;
        echo "Разность векторов $this и $frac = ";
        return $obj;
    } 

    public function product($number) 
    {
        $obj = new Vector(0,0,0);
        $obj->x = (int)$this->x * $number;
        $obj->y = (int)$this->y * $number;
	$obj->z = (int)$this->z * $number;
        echo "Произведение вектора $this на число $number = ";
        return $obj;
    }    
	
    public function scalarProduct($frac) 
    {
        $number = (int)$this->x * (int)$frac->x + (int)$this->y * (int)$frac->y + (int)$this->z * (int)$frac->z;
        echo "Скалярное произведение вектора $this на вектор $frac = ";
        return $number;
    }
	
    public function vectorProduct($frac)
    {
	$obj = new Vector(0,0,0);
	$obj->x = (int)$this->y * (int)$frac->z - (int)$this->z * (int)$frac->y;
        $obj->y = -((int)$this->x * (int)$frac->z - (int)$this->z * (int)$frac->x);
	$obj->z = (int)$this->x * (int)$frac->y - (int)$this->y * (int)$frac->x;
        echo "Векторное произведение $this на $frac = ";
        return $obj;
    }

    function __toString() 
    {
	return '('.$this->x.';'.$this->y.';'.$this->z.')';
    }
}
?>

