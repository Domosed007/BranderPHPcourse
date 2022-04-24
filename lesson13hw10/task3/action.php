<?php
include_once 'calculator.php';

switch($_GET['action']){
    case '+':
        echo Calculator::getSum($_GET['number1'],$_GET['number2']).'<br>';
        break;
    case '-':
        echo Calculator::getDif($_GET['number1'],$_GET['number2']).'<br>';
        break;
    case '*':
        echo Calculator::getMult($_GET['number1'],$_GET['number2']).'<br>';
        break;
    case '/':
        echo Calculator::getDiv($_GET['number1'],$_GET['number2']).'<br>';
        break;
    case '| |':
        echo Calculator::getMod($_GET['number1']);
        break;
    case '%':
        echo Calculator::remainderDiv($_GET['number1'],$_GET['number2']).'<br>';
        break;
    default:
    break;
}




