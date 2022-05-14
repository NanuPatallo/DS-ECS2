<?php
/*Evaluación conceptual de situación N2

En un archivo index y respetando la arquitectura propuesta.
Esperar mediante POST los datos de 4 personas (todos obligatorios)
Nombre
Edad
CantidadHijos.
Y devolver lo siguiente
*Las personas con hijos son:
Nombre de las personas y la cantidad de hijos de las personas con hijos. 
Si ninguna persona tiene hijos, el texto ‘Ninguna persona tiene hijos’ok

*Las personas mayores de 18 años son:
Nombre de las personas y la edad de las personas mayores a 18 años. 
Si ninguna persona es mayor de 18 años, el texto ‘Ninguna persona es mayor de 18 años’ok

*Las personas que tengan entre 30 y 40 años son:
Nombre de las personas y la edad de las personas que tengan entre 30 y 40 años de edad. 
Si ninguna cumple la regla, el texto ‘Ninguna persona tiene entre 30 y 40 años de edad’ok

En caso de faltar algún dato, indicar únicamente el mensaje. ‘Ingresar todos los datos’.*/

$canth = [];
$mayor = [];
$entre3040 = [];

if (
    isset($_POST['n1']) == false
    or isset($_POST['e1']) == false
    or isset($_POST['c1']) == false
    or isset($_POST['n2']) == false
    or isset($_POST['e2']) == false
    or isset($_POST['c2']) == false
    or isset($_POST['n3']) == false
    or isset($_POST['e3']) == false
    or isset($_POST['c3']) == false
    or isset($_POST['n4']) == false
    or isset($_POST['e4']) == false
    or isset($_POST['c4']) == false
) {
    echo 'Ingrese todos los datos!!';
} else {

    if (
        $_POST['c1'] == 0
        && $_POST['c2'] == 0
        && $_POST['c3'] == 0
        && $_POST['c4'] == 0
    ) {
        echo 'Ninguna Persona tiene hijos';
    } else {

        if ($_POST['c1'] > 0) {
            $canth[] = $_POST['n1'] . ' ' . $_POST['c1'] . 'hijo/s' . '<hr>';
        }
        if ($_POST['c2'] > 0) {
            $canth[] = $_POST['n2'] . ' ' . $_POST['c2'] . 'hijo/s'  . '<hr>';
        }
        if ($_POST['c3'] > 0) {
            $canth[] = $_POST['n3'] . ' ' . $_POST['c3'] . 'hijo/s'  . '<hr>';
        }
        if ($_POST['c4'] > 0) {
            $canth[] = $_POST['n4'] . ' ' . $_POST['c4'] . 'hijo/s'  . '<hr>';
        }

        echo 'Las personas con hijos son: ';
        echo '<hr>';
        foreach ($canth as $cant) {
            echo $cant;
        }
    }

    echo '<hr>';

    if (
        $_POST['e1'] < 18
        && $_POST['e2'] < 18
        && $_POST['e3'] < 18
        && $_POST['e4'] < 18
    ) {
        echo 'Ninguna Persona es mayor de edad';
    } else {

        if ($_POST['e1'] > 17) {
            $mayor[] = $_POST['n1'] . ' ' . $_POST['e1'] . 'años' . '<hr>';
        }

        if ($_POST['e2'] > 17) {
            $mayor[] = $_POST['n2'] . ' ' . $_POST['e2'] . 'años' . '<hr>';
        }

        if ($_POST['e3'] > 17) {
            $mayor[] = $_POST['n3'] . ' ' . $_POST['e3'] . 'años' . '<hr>';
        }

        if ($_POST['e4'] > 17) {
            $mayor[] = $_POST['n4'] . ' ' . $_POST['e4'] . 'años' . '<hr>';
        }

        echo 'Las personas mayores de 18 son: ';
        echo '<hr>';
        foreach ($mayor as $m) {
            echo $m;
        }
    }
    echo '<hr>';

    if (
        ($_POST['e1'] < 30
            or $_POST['e1'] > 40)

        && ($_POST['e2'] < 30
            or $_POST['e2'] > 40)

        && ($_POST['e3'] < 30
            or $_POST['e3'] > 40)

        && ($_POST['e4'] < 30
            or $_POST['e4'] > 40)

    ) {
        echo 'Ninguna Persona tiene entre 30 y 40 años';
    } else {

        if ($_POST['e1'] > 29 && $_POST['e1'] < 41) {
            $entre3040[] = $_POST['n1'] . ' ' . $_POST['e1'] . 'años' . '<hr>';
        }

        if ($_POST['e2'] > 29 && $_POST['e2'] < 41) {
            $entre3040[] = $_POST['n2'] . ' ' . $_POST['e2'] . 'años' . '<hr>';
        }

        if ($_POST['e3'] > 29 && $_POST['e3'] < 41) {
            $entre3040[] = $_POST['n3'] . ' ' . $_POST['e3'] . 'años' . '<hr>';
        }

        if ($_POST['e4'] > 29 && $_POST['e4'] < 41) {
            $entre3040[] = $_POST['n4'] . ' ' . $_POST['e4'] . 'años' . '<hr>';
        }

        echo 'Las personas entre 30 y 40 años son: ';
        echo '<hr>';
        foreach ($entre3040 as $entre) {
            echo $entre;
        }
    }
}
