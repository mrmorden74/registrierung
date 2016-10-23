<?php
/*
	Konfiguration der einzelnen Felder des Formulars.
	Die Variable wird an validateForm übergeben.

	Eigenschaften eines Feldes (o ist optional):
	- fieldType 			text, checkbox, radio, select, ... könnte HTML damit erzeugen
	- label 				angezeigter Feldname(, Placeholder)
	- dataType 				bestimmt wie validiert wird z.b bool, int, float, email, regex ...
	- required 				Pflichtfeld oder nicht, true oder false
	- placeholder (o)			Placeholder oder nicht, true oder false(!)
	- minLength (o)			minimale Anzahl der Zeichen
	- maxLength (o)			maximale Anzahl der Zeichen
	- minVal 	(o)			Mindesthöhe bei Zahlenwerten
	- maxVal 	(o)			Maximale Höhe bei Zahlenwerten
	...
*/
$formConfig = [
	"vorname" => [
		"fieldType" => "text",
		"label" => "Vorname",
		"dataType" => "name",
		"required" => true,
		"placeholder" => true,
		"minLength" => "2",
	],
	"nachname" => [
		"fieldType" => "text",
		"label" => "Nachname",
		"dataType" => "name",
		"required" => true,
		"placeholder" => true,
		"minLength" => "2",
	],
	"email" => [
		"fieldType" => "email",
		"label" => "E-Mail",
		"dataType" => "email",
		"placeholder" => true,
		"required" => true,
	],
	"adresse" => [
		"fieldType" => "text",
		"label" => "Adresse",
		"dataType" => "text",
		"required" => false,
		"placeholder" => true,
	],
	"plz" => [
		"fieldType" => "text",
		"label" => "PLZ",
		"dataType" => "int",
		"required" => false,
		"placeholder" => true,
		"minVal" => "1000",
		"maxVal" => "9999",
	],
	"telefon" => [
		"fieldType" => "text",
		"label" => "Telefonnummer",
		"dataType" => "phone",
		"required" => false,
		"placeholder" => true,
	],
	"password" => [
		"fieldType" => "password",
		"label" => "Passwort",
		"dataType" => "pw",
		"required" => true,
		"placeholder" => false,
		"minLength" => "8",
	],
	"pwkon" => [
		"fieldType" => "text",
		"label" => "Passwort wiederholen",
		"dataType" => "text",
		"required" => true,
		"placeholder" => false,
	],
];