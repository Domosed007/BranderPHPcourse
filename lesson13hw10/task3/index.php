<?php
include_once 'calculator.php';

$c=new Calculator(5,7);

echo $c->getSum().'<br>';
echo $c->getDif().'<br>';
echo $c->getMult().'<br>';
echo $c->getDiv().'<br>';