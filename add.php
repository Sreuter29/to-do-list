<?php

// --------------------------------------------------------------------------------------
// DEPENDANCES
// --------------------------------------------------------------------------------------

include 'utilities.php';



// --------------------------------------------------------------------------------------
// FONCTIONS
// --------------------------------------------------------------------------------------

function addTask($title, $description, $date, $priority)
{
    if(empty($description) == true)
    {
        $description = 'Tâche sans description';
    }

	// Création du tableau contenant la tâche.
	$taskData =
	[
		$title,
		$description,
		$date,
		$priority
	];

	// Enregistrement du tableau contenant la tâche.
	saveTask($taskData);
}



// --------------------------------------------------------------------------------------
// CODE PRINCIPAL
// --------------------------------------------------------------------------------------

// Si l'utilisateur n'a pas saisi de titre à la tâche alors on ne l'ajoute pas.
if(empty($_POST['title']) == false)
{
    // Récupération des données de formulaire.
    $description = $_POST['description'];
    $date        = $_POST['year'].'-'.$_POST['month'].'-'.$_POST['day'];
    $priority    = $_POST['priority'];
    $title       = $_POST['title'];

    // Ajout de la tâche aux tâches existantes.
    addTask($title, $description, $date, $priority);
}

header('Location: index.php');
exit();
