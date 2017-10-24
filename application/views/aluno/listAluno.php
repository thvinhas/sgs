<?php
$this->load->view('include/header.php');
?>

    <div id="wrapper">

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Lista de Alunos</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Matricula</th>
                                            <th>Nome</th>
                                            <th>RG</th>
                                            <th>Série</th>
                                            <th>Nome do pai</th>
                                            <th>Nome da mãe</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach ($alunos as $aluno):?>
                                        <tr>
                                            <td><?php echo $aluno->matricula?></td>
                                            <td><?php echo $aluno->nome?></td>
                                            <td><?php echo $aluno->rg_aluno?></td>
                                            <td><?php echo $aluno->serie_id?></td>
                                            <td><?php echo $aluno->nome_pai?></td>
                                            <td><?php echo $aluno->nome_mae?></td>
                                        </tr>
                                      <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

<?php
$this->load->view('include/footer.php');
?>