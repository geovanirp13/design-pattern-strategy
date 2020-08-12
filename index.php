<?php

require "Orcamento.php";
require "CalculadoraDeImpostos.php";

$reforma = new Orcamento(500);

$calculadora = new CalculadoraDeImpostos();

echo $calculadora->calcula($reforma, "ICMS");

echo "<br/>";

echo $calculadora->calcula($reforma, "ISS");

echo "<br/>";

echo $calculadora->calcula($reforma, "IPI");

echo "<br/>";

echo $calculadora->calcula($reforma, "PIS");

echo "<br/>";

echo $calculadora->calcula($reforma, "COFINS");

echo "<br/>";

echo $calculadora->calcula($reforma, "IRPJ");