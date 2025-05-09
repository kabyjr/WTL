<?php
    class demo{
        public  $name="Adam";
        function __construt($name){
            $this->name=$name;
        }
    }

    $obj=new demo("Sam");
    echo $obj->name;
?>

