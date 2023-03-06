<?php
$host = 'mysql:host=localhost;dbname=MonProjet'; // host + bdd
$login = 'root'; // login
$password = 'root'; // mdp (pour les utilisateurs de mamp il faut écrire root, sinon rien)
$options = array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, // gestion des erreurs
    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8' // on force l'utf8 sur les données provenants de la bdd
);

// Création de l'objet :
$pdo = new PDO($host, $login, $password, $options);

session_start();

