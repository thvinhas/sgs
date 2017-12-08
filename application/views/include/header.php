
<!DOCTYPE html>

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html" charset="utf-8">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('vendor/bootstrap/css/bootstrap.min.css'); ?>">
        <link rel="stylesheet" href="<?php echo base_url('vendor/metisMenu/metisMenu.min.css'); ?>">
        <link rel="stylesheet" href="<?php echo base_url('dist/css/sb-admin-2.css'); ?>">
        <link rel="stylesheet" href="<?php echo base_url('vendor/font-awesome/css/font-awesome.min.css'); ?>">
        
        <script rel="text/javascript" src="<?php echo base_url('vendor/jquery/jquery.min.js') ?>"></script>
        <script rel="text/javascript" src="<?php echo base_url('vendor/bootstrap/js/bootstrap.min.js') ?>"></script>
        <script rel="text/javascript" src="<?php echo base_url('vendor/metisMenu/metisMenu.min.js') ?>"></script>
        <script rel="text/javascript" src="<?php echo base_url('dist/js/sb-admin-2.js') ?>"></script>
        <script rel="text/javascript" src="<?php echo base_url('data/morris-data.js') ?>"></script>
        <script rel="text/javascript" src="<?php echo base_url('vendor/morrisjs/morris.min.js') ?>"></script>
        <script rel="text/javascript" src="<?php echo base_url('vendor/raphael/raphael.min.js') ?>"></script>
    
        
    </head>

    <body>

        <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Acompanhamento Escolar</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                    <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href=<?php echo site_url('Welcome/index')?>><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">

                        <!-- <li>
                            <a href="index.html"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Charts<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="flot.html">Flot Charts</a>
                                </li>
                                <li>
                                    <a href="morris.html">Morris.js Charts</a>
                                </li>
                            </ul>
                            
                        </li>
                        <li>
                            <a href="tables.html"><i class="fa fa-table fa-fw"></i> Tables</a>
                        </li> -->
                        <li>
                            <a href="#"><i class="fa fa-edit fa-fw"></i> Cadastro<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <?php if($tipo == 'M') :?>
<!--                                    --><?php //var_dump($tipo);exit();?>
                                <li>
                                    <a href="<?php echo base_url('aluno/index');?>">Cadastrar Aluno</a>
                                </li>

                                <li>
                                    <a href="<?php echo base_url('aula/index');?>">Cadastrar Aulas</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('curso/index');?>">Cadastrar Cursos</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('disciplina/index');?>">Cadastrar Disciplinas</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('professor/index');?>">Cadastrar Professores</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('serie/index');?>">Cadastrar Series</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('turma/index');?>">Cadastrar Turma</a>
                                </li>
                                <?php endif; ?>
                                <?php if($tipo == 'M' || $tipo == 'P') :?>
                                <li>
                                    <a href="<?php echo base_url('notas/index');?>">Cadastrar Notas</a>
                                </li>
                                <?php endif;?>
                            </ul>
                            
                        </li>
                        <!-- <li>
                            <a href="#"><i class="fa fa-wrench fa-fw"></i> UI Elements<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="panels-wells.html">Panels and Wells</a>
                                </li>
                                <li>
                                    <a href="buttons.html">Buttons</a>
                                </li>
                                <li>
                                    <a href="notifications.html">Notifications</a>
                                </li>
                                <li>
                                    <a href="typography.html">Typography</a>
                                </li>
                                <li>
                                    <a href="icons.html"> Icons</a>
                                </li>
                                <li>
                                    <a href="grid.html">Grid</a>
                                </li>
                            </ul>
                            
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-sitemap fa-fw"></i> Multi-Level Dropdown<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#">Second Level Item</a>
                                </li>
                                <li>
                                    <a href="#">Second Level Item</a>
                                </li>
                                <li>
                                    <a href="#">Third Level <span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                    </ul>
                                    
                                </li>
                            </ul>
                            
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-files-o fa-fw"></i> Sample Pages<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="blank.html">Blank Page</a>
                                </li>
                                <li>
                                    <a href="login.html">Login Page</a>
                                </li>
                            </ul>
                            
                        </li> -->
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>


                
    </div>