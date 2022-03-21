# Curso de aprendizaje con PHP

## Tipos de datos
Los mas conocidos son
<ul>
    <li>Numericos</li>
    <ol>
        <li>Integer</li>
        <li>Double</li>
        <li>Float</li>
    </ol>
</ul>
<ul>
    <li>Cadenas de caracteres</li>
    <ol>
        <li>Char</li>
        <li>String</li>
    </ol>
</ul>
<ul>
    <li>Booleanos</li>
    <ol>
        <li>Bool</li>
    </ol>
</ul>
<ul>
    <li>Sin Valor</li>
    <ol>
        <li>Null</li>
        <li>Undefined</li>
    </ol>
</ul>

PHP posee un tipado debil, pero no es que no use tipos de datos por lo que no es necesario especificar el tipo de dato

Ejemplo:
[Codigo](/tipos_php.php)

---
### Casting
Es cuando forzamos que un tipo de dato se convierta en otro tipo de dato ejemplo de `String` a `Int`

```php
$numero_string = "20";
$numero_int = (int) $numero_string;
```
---
### Constante

Es un valor que `Nunca cambia`, es decir una vez que ha sido asignado un valor a ello ya no es posible modificarlo ni sustituirlo; `SIEMPRE MANTENDRA SU VALOR`

Ejemplo:

```php
    $nombre = "Jesus";
    define("Nombre_variable", Value;
```
El signo de `$` indica que es una variable, el elemento o caracter que este despues de ese signo indica el nombre de la variable, despues del signo `=` es la asignacion de valor a dicha variable.

### Reto #1
Analisis de tipado en PHP

Nivel basico
```php
$_name = "Jesus"; ==> String
$_lastName = "Gonzalez"; ==> String
$_age = 22; ==> int
$_approved = true; ==> bool

```
Nivel intermedio
```php
$_average = (8+9.5+9+10+8) / 5; ==> float
$_fullName = $_name . " "; ==> String
$_lastName; ==> Null
$_Exam = (bool) 1; ==> true
```
Nivel Avanzado
```php
$_numQuestions = 5 + "5"; ==> int
$_numAnswers = "5" + 5; ==> int
$_maxAverage = $_numAnswers / 1.0; ==> float
$_cats = 3 + "5 cats"; ==> Waring pero es un int
```
### Operadores logicos
Los `Operadores` son aquellos que nos ayudan a combinar dos o mas afirmaciones para definir si una oracion es cierta o falsa basado en ===> `(Tablas de verdad)`

(AND) ==> &&

(OR) ==> ||

(XOR) ==> =>

---
### Operadores aritmeticos

Son los que realizan operaciones matematicas

- Adicion/Suma `+`
- Sustraccion/Resta `-`
- Multiplicacion `*`
- Division `/`
- Modulo `%`
- Potenciacion `**`
- Identidad `+`
- Negacion `-`

### Operador nave espacial

                              <=>
```php
2 <=> 1 //1
1 <=> 1 //0
-50 <=> 1 //-1
```
Fusion de null
```php
$edad_pepito = 23;
echo $edad_juanito ?? $edad_pepito;
```
Lo que permite es que si una variable no esta definida use el valor de la que si se encuentra definida

### Precedencia de operadores
Esto depende de la `Asociatividad` que es la preferencia hacia un sentido a trabajar
[Asociatividad](https://www.php.net/manual/es/language.operators.precedence.php)