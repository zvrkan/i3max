<?php

class Student
{
    protected $ime;
    protected $prezime;
    protected $datum_rodj;

    protected function setIme($i)
    {
        $this->ime = $i;
    }
    protected function setPrezime($p)
    {
        $this->prezime = $p;
    }
    protected function setDatum($d)
    {
        $this->datum_rodj = $d;
    }
    public function getIme()
    {
        return $this->ime;
    }
    public function getPrezime()
    {
        return $this->prezime;
    }
    public function getDatum()
    {
        return $this->datum_rodj;
    }
    abstarct function DatumRodj($datum);

}



?>