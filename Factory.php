<?php
/*
 * this code was written by Mohamed Moustafa
 * As a preview of his knowledge in Design Patterns
 * 
 */

class Factory{
    public function build()
    {
        $classc = $this->buildC();
        $classb = $this->buildB();
        return $this->buildA($classb, $classc);

    }

    public function buildA($classb, $classc)
    {
        return new ClassA($classb, $classc);
    }

    public function buildB()
    {
        return new ClassB;
    }

    public function buildC()
    {
        return new ClassC;
    }
}

?>