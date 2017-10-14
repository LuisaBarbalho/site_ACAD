<?php
	require_once('../classes/Texto.php');
	$_id = $_POST['_id'];
    $connectorTxt = new Texto ('../database/data.txt', '///');
    $connectorTxt->removerLinha($_id);
    header("Location: http://localhost/site_ACAD/view/cursos.php");