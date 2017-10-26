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
                      			            <th>Opções</th>
                                            
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
                                            <td><?php echo  form_open('aluno/editar', ["style"=>"float: left;margin-right: 10px;"])  ?>
                                            		<input type="hidden" name="id" value="<?php echo $aluno->matricula ?> ">
                                            		<button type="submit" class="btn btn-primary">Editar</button>
                                           		<?php echo form_close()?>
                                           		
                                           		<?php echo  form_open('aluno/apagar')  ?>
                                            		<input type="hidden" name="id" value="<?php echo $aluno->matricula ?> ">
                                            		<button type="submit" class="btn btn-danger" style="float: left; mar">Apagar</button>
                                           		<?php echo form_close()?>
                                            
                                            </td>                                              
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