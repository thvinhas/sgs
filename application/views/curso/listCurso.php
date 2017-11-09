<?php
$this->load->view('include/header.php');
?>

    <div id="wrapper">

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Lista de Cursos</h1>
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
                                            <th>Valor</th>
                      			            <th>Opções</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach ($cursos as $curso):?>
                                        <tr>
                                            <td><?php echo $curso->nome_curso?></td>
                                            <td>R$ <?php echo $curso->valor_curso?></td>                                          
                                            <td><?php echo  form_open('curso/editar', ["style"=>"float: left;margin-right: 10px;"])  ?>
                                            		<input type="hidden" name="id" value="<?php echo $curso->id ?> ">
                                            		<button type="submit" class="btn btn-primary">Editar</button>
                                           		<?php echo form_close()?>
                                           		
                                           		<?php echo  form_open('curso/apagar')  ?>
                                            		<input type="hidden" name="id" value="<?php echo $curso->id ?> ">
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