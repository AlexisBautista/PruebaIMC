<?php

class Persona
{

  public $nombre;
  public $peso;
  public $estatura;

  public function calcularIMC($nombre, $peso, $estatura)
  {
    $IMC = $peso / ($estatura * $estatura);

    if ($IMC < 18.5) {
      echo ('Su nombre es: ' . $nombre . '<br>' . 'su peso es: ' . $peso . '<br>' . 'su estatura es: ' . $estatura . '<br>' . 'usted se encuentra delgadez o bajo  peso');
    } elseif ($IMC >= 18.5 && $IMC <= 24.9) {
      echo ('Su nombre es: ' . $nombre . '<br>' . 'su peso es: ' . $peso . '<br>' . 'su estatura es: ' . $estatura . '<br>' . 'usted se encuentra normales');;
    } elseif ($IMC >= 25.0 && $IMC <= 29.9) {
      echo ('Su nombre es: ' . $nombre . '<br>' . 'su peso es: ' . $peso . '<br>' . 'su estatura es: ' . $estatura . '<br>' . 'usted se encuentra con sobrepeso');;
    } elseif ($IMC > 30.0) {
      echo ('Su nombre es: ' . $nombre . '<br>' . 'su peso es: ' . $peso . '<br>' . 'su estatura es: ' . $estatura . '<br>' . 'usted se encuentra con obesidad');;
    }
  }
}
