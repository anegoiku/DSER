<?php
include_once('mario.php');
include_once('luigi.php');
include_once('goomba.php');
include_once('koopa.php');

$mario= new Mario();
$luigi= new Luigi();
$goomba= new Goomba();
$koopa= new Koopa();

$mario->mugitu();
echo "<br>";

$goomba->mugitu();
echo "<br>";

$mario->saltoEgin();
echo "<br>";

$mario->eraso();
echo "<br>";

$goomba->eraso();
echo "<br>";

$luigi->mugitu();
echo "<br>";

$koopa->mugitu();
echo "<br>";

$luigi->saltoEgin();
echo "<br>";

$luigi->eraso();
echo "<br>";

$koopa->eraso();




?>