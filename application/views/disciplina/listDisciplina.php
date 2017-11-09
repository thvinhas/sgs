<?php
$this->load->view('include/header.php');
?>

    <div id="wrapper">

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Lista de Disciplinas</h1>
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
                                            <th>Nome</th>
                                            <th>Carga Horária</th>
                                            <th>Curso</th>
                      			            <th>Opções</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach ($disciplinas as $disciplina):?>
                                        <tr>
                                            <td><?php echo $disciplina->nm_disciplina?></td>
                                            <td><?php echo $disciplina->carga_horaria?></td>
                                            <td><?php echo $disciplina->id_curso?></td>                                         
                                            <td><?php echo  form_open('Disciplina/editar', ["style"=>"float: left;margin-right: 10px;"])  ?>
                                            		<input type="hidden" name="id" value="<?php echo $disciplina->id ?> ">
                                            		<button type="submit" class="btn btn-primary">Editar</button>
                                           		<?php echo form_close()?>
                                           		
                                           		<?php echo  form_open('Disciplina/apagar')  ?>
                                            		<input type="hidden" name="id" value="<?php echo $disciplina->id ?> ">
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