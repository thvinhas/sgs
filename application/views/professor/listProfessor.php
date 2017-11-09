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
                                            <th>CPF</th>
                                            <th>Email</th>
                      			            <th>Opções</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach ($professores as $professor):?>
                                        <tr>
                                            <td><?php echo $professor->matricula?></td>
                                            <td><?php echo $professor->nome?></td>
                                            <td><?php echo $professor->cpf_professor?></td>
                                            <td><?php echo $professor->email?></td>                                        
                                            <td><?php echo  form_open('professor/editar', ["style"=>"float: left;margin-right: 10px;"])  ?>
                                            		<input type="hidden" name="id" value="<?php echo $professor->matricula ?> ">
                                            		<button type="submit" class="btn btn-primary">Editar</button>
                                           		<?php echo form_close()?>
                                           		
                                           		<?php echo  form_open('professor/apagar')  ?>
                                            		<input type="hidden" name="id" value="<?php echo $professor->matricula ?> ">
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