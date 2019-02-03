<?php
	/**
	 * Created by PhpStorm.
	 * User: PabloAntonio
	 * Date: 02/02/2019
	 * Time: 6:28 PM
	 */

	session_start();
	if(!isset($_SESSION['usuario'])) {
		header('Location: index.php');
	}
	require_once 'cabecera.php';
	require_once 'menu.php';
	?>
<section>
<h1>Main</h1>
</section>

<?php
	require_once 'pie.php';
