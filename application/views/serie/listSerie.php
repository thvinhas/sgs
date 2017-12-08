<?php
$this->load->view('include/header.php');
?>

    <div id="wrapper">

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Lista de séries</h1>
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
                                            <th>Periodo Letivo</th>
                                            <th>Curso</th>
                      			            <th>Opções</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach ($series as $serie):?>
                                        <tr>
                                            <td><?php echo $serie->nome?></td>
                                            <td><?php echo $serie->periodo_letivo?></td>
                                            <td><?php echo $serie->curso_id?></td>                                        
                                            <td><?php echo  form_open('serie/editar', ["style"=>"float: left;margin-right: 10px;"])  ?>
                                            		<input type="hidden" name="id" value="<?php echo $serie->id ?> ">
                                            		<button type="submit" class="btn btn-primary">Editar</button>
                                           		<?php echo form_close()?>
                                           		
                                           		<?php echo  form_open('serie/apagar')  ?>
                                            		<input type="hidden" name="id" value="<?php echo $serie->id ?> ">
                                            		<button type="submit" class="btn btn-danger" style="float: left; mar">Apagar</button>
                                           		<?php echo form_close()?>
                                            
                                            </td>                                              
                                        </tr>
                                      <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                            <?php echo  form_open('serie/cadastrar')  ?>
                            <button type="submit" class="btn btn-success">Cadastrar</button>
                            <?php echo form_close()?>
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