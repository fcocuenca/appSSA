<?php
    $cakeDescription = 'Aplicación para generar informes';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('cake.css') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
    <header>
            <div>
                <img  class="imgHeader"     src="/CAKESETUP/img/SSAlogo.jpg" width="200px" height="100px">
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
                        array('controller'=>'Profesor', 'class' => 'button', 'target' => '_self')
                        ); 
                    ?>
                </li>

                <li>
                  <input id="group-2" type="checkbox" hidden />
                  <?= 
                    $this->Html->link(
                        'Alumno',
                        '/alumno',
                        array('controller'=>'Alumno', 'class' => 'button', 'target' => '_self')
                        ); 
                    ?>
                </li>
            </ul>
        </div>
    </aside>

    <section class="right-side">
         <?= $this->Flash->render() ?>
        <div class="container clearfix">
            <?= $this->fetch('content') ?>
        </div>
    </section>
    <footer>
    </footer>
</body>
</html>
