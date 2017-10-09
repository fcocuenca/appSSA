<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */
use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Network\Exception\NotFoundException;

$this->layout = false;

$cakeDescription = 'Aplicación para generar informes para el centro norteamericano';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>
    </title>

    <?= $this->Html->meta('icon') ?>
    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('cake.css') ?>
    <?= $this->Html->css('home.css') ?>
    <link href="https://fonts.googleapis.com/css?family=Raleway:500i|Roboto:300,400,700|Roboto+Mono" rel="stylesheet">
</head>

<body>

	<header>
			<div>
				<img  class="imgHeader" 	src="/CAKESETUP/img/SSAlogo.jpg" width="200px" height="100px">
				<span class="titleHeader"> Aplicación para generar informes</span>
			</div>
			
	</header>

	<nav class="navegacion">
		&nbsp
	</nav>

	<aside  class="left-side">
    	<div class="menu" >
      		<ul class="menu__list">
	       		<li>
	          		<input id="group-1" type="checkbox" hidden/>
		          		
	          		<?= 
	          		$this->Html->link(
	   				 	'Profesor',
	    				'/profesor',
	    				array('class' => 'button', 'target' => '_blank')
    					); 
    				?>
	        	</li>

	        	<li>
		          <input id="group-2" type="checkbox" hidden />
		          <?= 
	          		$this->Html->link(
	   				 	'Alumno',
	    				'/alumno',
	    				array('class' => 'button', 'target' => '_blank')
    					); 
    				?>
	         	</li>
      		</ul>
   		</div>
	</aside>

	<section class="right-side">
		Aqui se va a mostrar el contenido de la aplicacion 
	</section>

</body>
</html>

