<?php
   function seculoAno($ano){
       //Transforma o ano em uma string
       $ano = strval($ano);
      
       //Visto que os séculos que terminam em 00 ainda fazem parte do anterior, essa parte do código verifica se essa no termina ou não em 00. Terminando em 00 sabemos que o século de um determinado ano é a aquele ano dividido por 100
       if(substr($ano,2) == "00"){
         $seculo = intval($ano / 100);
       }
       else{
          //Se não termina em 00, o seculo já será o próximo, então acrescentamos 1 ao resultado de ano / 100 
          $seculo = intval($ano / 100)+1; 
       }
       //Retorna o resultado
       return "ano = ". $ano." século = ".$seculo;
   }
   //Chama a nossa função com o ano a ser verificado
   echo seculoAno(1801);
   
  
?>