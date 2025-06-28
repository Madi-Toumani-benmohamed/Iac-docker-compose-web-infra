<?php
$mysqli = new mysqli("db-service", getenv("MYSQL_USER"), getenv("MYSQL_PASSWORD"), getenv("MYSQL_DATABASE"));

if ($mysqli->connect_error) {
    echo "Échec connexion BDD: " . $mysqli->connect_error;
} else {
    echo "Connexion réussie à la base de données !";
}