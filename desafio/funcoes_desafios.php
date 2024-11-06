<?php
// Função para verificar aceitação do desafio 1
function verificarAceitacao($nome, $sexo, $idade) {
   if ($sexo == "feminino" && $idade < 25) {
      return "$nome , aceita!";
   }
   else {      
      return "$nome , não aceita!";
   }
}


// Função para ordenar números do desafio 2
function ordenarNumeros($num1, $num2, $num3) {
   $numeros = array ($num1, $num2, $num3);
   rsort($numeros);
   return implode(", ", $numeros);
}


// Função para calcular média do desafio 3
function calcularMediaAluno($nota1, $nota2, $nota3) {
   $media = ($nota1 + $nota2 + $nota3) / 3;
   if ($media >= 7) {
      return "Aprovado!";}
   else {
      return "Reprovado";
   }
}
?>