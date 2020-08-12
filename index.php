<?php

require "Orcamento.php";
require "CalculadoraDeImpostos.php";
require "Interface/Imposto.php";
require "Impostos/ICMS.php";
require "Impostos/ISS.php";
require "Impostos/IPI.php";
require "Impostos/PIS.php";
require "Impostos/COFINS.php";
require "Impostos/IRPJ.php";

$reforma = new Orcamento(500);

$calculadora = new CalculadoraDeImpostos();

echo $calculadora->calcula($reforma, new ICMS());

echo "<br/>";

echo $calculadora->calcula($reforma, new ISS());

echo "<br/>";

echo $calculadora->calcula($reforma, new IPI());

echo "<br/>";

echo $calculadora->calcula($reforma, new PIS());

echo "<br/>";

echo $calculadora->calcula($reforma, new COFINS());

echo "<br/>";

echo $calculadora->calcula($reforma, new IRPJ());