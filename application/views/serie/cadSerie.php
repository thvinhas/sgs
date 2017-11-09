<?php
$this->load->view('include/header.php');
?>

    <div id="wrapper">

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Cadastro de Séries</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Cadastro
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <?php echo  form_open('serie/store')  ?>
                                    <input name="id" value="<?php echo $id?>" type="hidden">
                                        <div class="form-group">
                                            <label>Descrição:</label>
                                            <input class="form-control" name="nome" placeholder="" value="<?php echo $nome?>">
                                            <p class="help-block"></p>
                                        </div>

                                        <div class="form-group">
                                            <label>Curso</label>
                                            <select name="id_curso" class="form-control">
                                                <?php foreach ($resultado as $result): ?>
                                                	<?php if($result['id'] == $curso_id): ?>
                                                   		<option value="<?php echo $result['id'] ?>" selected><?php echo $result['nome_curso']?></option>
                                                    <?php else :?>
                                                    	<option value="<?php echo $result['id'] ?>"><?php echo $result['nome_curso']?></option>
                                                	<?php endif;?>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label>Período Letivo:</label>
                                            <input class="form-control" name="periodo" placeholder="" value="<?php echo $periodo_letivo?>">
                                            <p class="help-block"></p>
                                        </div>

                                        <button type="submit" class="btn btn-default">Cadastrar Série</button>
                                        <button type="reset" class="btn btn-default">Limpar</button>
                                    <?php echo form_close(); ?>
                                </div>
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

<?php
$this->load->view('include/footer.php');
?>