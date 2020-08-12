<?php

class CalculadoraDeImpostos {

  public function calcula(Orcamento $orcamento, $imposto) {
    if($imposto == "ICMS") {
      return $orcamento->getValor() * 0.05;
    } else if($imposto == "ISS") {
      return $orcamento->getValor() * 0.1;
    } else if($imposto == "IPI") {
      return $orcamento->getValor() * 0.07;
    } else if($imposto == "PIS") {
      return $orcamento->getValor() * 0.06;
    } else if($imposto == "COFINS") {
      return $orcamento->getValor() * 0.2;
    } else if($imposto == "IRPJ") {
      return $orcamento->getValor() * 0.4;
    }
  }
}