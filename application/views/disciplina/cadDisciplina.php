<?php
$this->load->view('include/header.php');
?>

    <div id="wrapper">

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Cadastro de Disciplinas</h1>
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
                                    <?php echo  form_open('disciplina/store')  ?>
                                    <input type="hidden" value="<?php echo $id?>" name="id">
                                    <form role="form">
                                        <div class="form-group">
                                            <label>Nome:</label>
                                            <input class="form-control" name="nome" placeholder="" value="<?php echo $nm_disciplina?>">
                                            <p class="help-block"></p>
                                        </div>
                                        <div class="form-group">
                                            <label>Carga Horária:</label>
                                            <input class="form-control" name="c_h" placeholder="" value="<?php echo $carga_horaria?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Curso</label>
                                            <select name="id_curso" class="form-control">
                                                <?php foreach ($cursos as $curso): ?>
                                                <?php if($curso['id'] == (integer)$id_curso):?>
                                                  	<option value="<?php echo $curso['id'] ?>" selected><?php echo $curso['nome_curso'] ?></option>
                                                <?php else:?>
                                                	<option value="<?php echo $curso['id'] ?>"><?php echo $curso['nome_curso'] ?></option>
                                                <?php endif;?>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>


                                        <button type="submit" class="btn btn-default">Cadastrar</button>
                                        <button type="reset" class="btn btn-default">Limpar</button>
                                    </form>
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