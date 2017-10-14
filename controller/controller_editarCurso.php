	<?php
	require_once('../classes/Texto.php');
    $connectorTxt = new Texto ('../database/data.txt', '///');
    $_ementa = explode(';', $_POST['_ementa']);
    $_strEmenta = "";
    for ($i = 0; $i < count($_ementa) - 1; $i++) {
    	$_strEmenta = $_strEmenta.trim($_ementa[$i]).';';
    }
    $_strEmenta = $_strEmenta.trim($_ementa[count($_ementa) - 1]);
	$dadosCurso = array(
		$_POST['_id'],
		$_POST['_nomeDoCurso'],
		$_POST['_nomeDeApresentacao'],
		"",
		$_strEmenta,
		$_POST['_ministrante'],
		$_POST['_cargaHoraria'],
		$_POST['_periodo'],
		$_POST['_horario'],
		$_POST['_local'],
		""
		);
	$connectorTxt->alterarLinha($dadosCurso);
	header("Location: http://localhost/site_ACAD/view/cursos.php");