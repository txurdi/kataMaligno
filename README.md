KataCodeBreaker, AKA KataMaligno
===============================
16 de Junio de 2013.

## ¿Qué es esto?
Dentro del grupo "[katayunos.com](http://www.katayunos.com)" se ha organizado un evento el día 16 de Junio de 2013 en Bilbao.

## Kata elegida: KataCodeBreaker, AKA KataMaligno
Algoritmo para descifrar un código jugando a heridos y muertos.

[Kata en solveet.com](http://www.solveet.com/exercises/Kata-CodeBreaker/14)

[Mi kata] (https://github.com/txurdi/kataMaligno)

## Planteamiento:
- Primera Iteración:

- Segunda Iteración:

- Tercera Iteración:

- Cuarta Iteración:
 

## Conclusiones:
- 


## Autores
- Igor Ormaetxebarria [@txurdi](http://twitter.com/txurdi)
- Resto de asistentes al katayuno


## Texto de Solveet
El doctor Maligno se encuentra a salvo en su super laboratorio secreto a 500 metros bajo tierra. Para atraparlo, sólo tienes que acertar el código de seguridad de la puerta acorazada de la entrada. Este código cambia cada día, así que deberás darte prisa en acertarlo.

El código de seguridad consiste en una secuencia de cuatro colores. Los colores posibles con su letra asociada son:
rojo	R
azul	A
amarillo	M
verde	V
naranja	N
violeta	I

Al introducir la secuencia de cuatro colores, el sistema responderá indicando el número de colores correctos pero fuera de su orden correcto (una X por cada acierto) y el número de colores correctos y en su posición correcta (un * por cada acierto). En la salida, primero se listan todas las 'X' y luego todos los '*', sin importar el orden en el que se hayan detectado.
En el código de seguridad se pueden repetir colores.

Algunos ejemplos de entrada y salida:
código de seguridad	entrada	salida	Descripción
RANI	YNYI	X*	'X' indica el acierto en posición de 'I' y '*' indica el acierto del color 'N'
RANI	RMVI	XX	'XX' indica el acierto en posición de 'R' y 'I'
NRRI	RRVN	X**	'X' por acierto en posición de la primera 'R', '*' por acierto del color de la segunda 'R' y '*' por la 'N'

El juego te irá pidiendo un nuevo código hasta que aciertes el código de seguridad o hasta que el malvado científico te descubra y... se ocupe de ti :)

¿Te apetece probar a jugar antes? Puedes jugar online aquí.

¿Quieres complicar el juego? Para ello puedes añadirle más posibles colores a la combinación o un límite máximo de intentos.
Resumen de las normas

Al comenzar el juego, se genera una clave de colores.
En cada intento hay que introducir 4 letras correspondientes a los colores posibles.
Después de cada intento, el juego informará de los aciertos encontrados (según la reglas explicadas).
El juego termina cuando el código de seguridad ha sido acertado.
No hay un límite máximo de intentos.




TEXTO DE Gonzalo123 sobre como instalar el eskeleto:
====================================================
URL: https://github.com/gonzalo123/kataphp

http://katayunos.com/
¿Quiere venir al katayuno y tener configurado tu ordenador para trabajar con PHP y no sabes como?

Sigue estos sencillos pasos y lo tendrás todo listo en unos segundos:

+ Instalar PHP (si no lo tienes instalado ya)

A tu cuenta. Te recomiendo usar la rama 5.4 aunque no tendrías que tener problemas con la rama 5.3
Ejecuta php -v desde la consola para asegurarte que tienes php instalado

+ Instalar composer (si no lo tienes instalado ya)

```
curl -sS https://getcomposer.org/installer | php
sudo mv composer /usr/local/bin/composer 
```

+ clonar el proyecto desde composer

ejecutar el comando:

```
composer create-project -s dev gonzalo123/kataphp
```

Esto creará un directorio 
* 'kataphp' en la ubicación en la que estés y con phpunit instalado como componente
* una carpeta tests donde irán nuestros test unitarios
* una carpeta lib donde irán nuestras implementaciones
* un archivo de configuración phpunit.xml con el autoloader configurado de manera que no tendremos que hacer includes de nuestras clases simpre y cuando usemos las carpetas tests para los tests y lib para la implementación (y usemos PSR-0)

Para ejecutar nuestros tests unitarios ejecuaremos en nuestra carpeta kataphp:

```
./bin/phpunit
```
