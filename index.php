<!DOCTYPE html>
<?php
// includes
require_once 'inc/utilities.inc.php';
require_once 'inc/formconfig.inc.php';

// Initialisierung
$isSent = false;
$isValid = false;
$hasErrros = false;
$formErrors = [];

// Form validieren
$isSent = isFormPosted();

if ($isSent) {
	$isValid = validateForm($formConfig, $formErrors);
	// dumpPre($formErrors);
}
?>
<html lang="de">
<head>
	<meta charset="UTF-8">
	<title>Registrierung</title>
	<link rel="stylesheet" href="css/pure-min.css">
	<link rel="stylesheet" href="css/layout.css">
</head>
<body>
<?php
if ($isValid) {
?>
<div class="wrapper">
	<header class="main-header">
		<h1>Registrierung erfolgreich</h1>
	</header>
	<main>
	<h2>Gratulation</h2>
	<p>Ihre Eingaben haben alle Validierungen bestanden und sie haben sich erfolgreich für nichts angemeldet.</p>
<?php
} else {
?>
<div class="wrapper">
	<header class="main-header">
		<h1>Kunden Registrierung</h1>
	</header>
	<main>
<?php
	// Formularfelder einfügen
	$formFields = makeFormFields($formConfig,$formErrors);
	echo $formFields;
?>

<?php
}
?>
</main>
	<footer>
	<a href="html/index.html">Projektdokumentation per Doxygen</a>
	</footer>
</div>
</body>
</html>