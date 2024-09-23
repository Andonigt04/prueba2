<?php

class Ikaslea
{
    private string $name;
    private int $adina;
    private array $notak;

    function __construct(string $name, int $adina, array $notak = null)
    {
        $this->name = $name;
        $this->adina = $adina;
        $this->notak = $notak;
    }

    function get()
    {
        return "<br>Ikaslearen izena: $this->name, <br> ikaslearen adina: $this->adina,<br> ikaslearen notak: " . Var_dump($this->notak);
    }

    function getName()
    {
        return $this->name;
    }

    function getAdina()
    {
        return $this->adina;
    }

    function getNotak()
    {
        return $this->notak;
    }

    function setIzena(string $name)
    {
        $this->name = $name;
    }

    function setAdina(int $adina)
    {
        $this->adina = $adina;
    }

    function setNotak(array $notak)
    {
        $this->notak = $notak;
    }

    function batazbetesko()
    {
        static $bataz = 0;
        foreach ($this->notak as $v) {
            $bataz += $v;
        };

        return $bataz / count($this->notak) . ".";
    }
}

$ikaslea = new Ikaslea("Andoni", 12, [5, 5, 7, 5]);


echo $ikaslea->get();

echo $ikaslea->batazbetesko();
?>