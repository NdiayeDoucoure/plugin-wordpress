<?php
/*
Nom du plugin: Extensions Utilisées
Description: Affiche toutes les extensions utilisées sur un site.
Version 1.0
Auteur: Ndiaye DOUCOURE
*/

// Recupérer tous les plugins
$plugins = get_option( 'active_plugins' );

// Iniatialiser un tableau vide pour y mettre les extensions
$extensions = array();

// Boucler sur les extensions
foreach ( $plugins as $plugin ) {
  // Recupérer le nom du plugin
  $filename = basename( $plugin );

  // Extraire l'extension du nom de fichier
  $extension = pathinfo( $filename, PATHINFO_EXTENSION );

  // Les ajouter dans le tableau
  $extensions[] = $extension;
}

// Enlever les doublons
$extensions = array_unique( $extensions );

// Affichage
echo '<h1>Extensions utilisées sur le site</h1>';
echo '<ul>';
foreach ( $extensions as $extension ) {
  echo '<li>' . $extension . '</li>';
}
echo '</ul>';
?>
