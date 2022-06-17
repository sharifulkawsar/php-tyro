<?php 
class StrValTest
{
    public function __toString()
    {
        return __CLASS__;
    }
}
echo strval(new StrValTest);
?>