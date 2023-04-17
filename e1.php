<?php

$dia_ingles = date('D');

switch ($dia_ingles) {

    case 'Mon':
        echo 'El dia de la semana es: Lunes';
        break;

    case 'Tue':
        echo 'El dia de la semana es: Martes';
        break;

    case 'Wed':
        echo 'El dia de la semana es: Miercoles';
        break;

    case 'Thu':
        echo 'El dia de la semana es: Jueves';
        break;

    case 'Fri':
        echo 'El dia de la semana es: Viernes';
        break;

    case 'Sat':
        echo 'El dia de la semana es: Sabado';
        break;

    case 'Sun':
        echo 'El dia de la semana es: Domingo';
        break;

    default:
        echo 'Es un dia cualquiera';
        break;
}
