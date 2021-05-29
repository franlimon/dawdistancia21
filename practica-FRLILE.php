<?php

/**
* Esta función devuelve un cadena concatenada a la cadena introducida por el usuario
*
* @author Francisco Limón León
* @version 1.1
* @param string $param1 Introducimos cualquier cadena
* @return string $param2 Devolveremos una cadena con un añadido
*/
function concatenaCosas($param1)
{
 $param2 = "Se ha pasado por parámetro la cadena: ".($param1);
 return $param2;
}

/**
* Esta función devuelve el número entero siguiente al introducido
*
* @author Francisco Limón León
* @version 1.3
 *{@internal Para conocer el uso del resto de etiquetas:
 *           (Vea {@link https://docs.phpdoc.org/3.0/guide/references/phpdoc/tags/index.html}).}
* @param integer $param1 Introducimos cualquier entero
* @return integer $param2  Devolvemos el entero siguiente
*/
function suma1($param1)
{
 $param2 = $param1 + 1;
 return $param2;
}

/**
* Aquí empezamos a invocar funciones
*/
echo concatenaCosas('Hoy es viernes');
echo '<br>';
echo 'El entero siguiente al introducido por parámetro es: '.suma1(10);

?>
