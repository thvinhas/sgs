<?php
$this->load->view('include/header.php');
?>

    <div id="wrapper">

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Cadastro de Notas</h1>
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
                                    <?php echo  form_open('notas/store')  ?>
                                        <div class="form-group">
                                            <label>Disciplina</label>
                                            <select name="id_disciplina" class="form-control">
                                                <?php foreach ($disciplinas as $disciplina):    ?>
                                                    <option value="<?php echo $disciplina['id']?>"><?php echo $disciplina['nm_disciplina']?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label>Turma</label>
                                            <select name="id_turma" class="form-control">
                                                <?php foreach ($turmas as $turma):    ?>
                                                    <option value="<?php echo $turma['id']?>"><?php echo $turma['serie'] ."º". $turma['nome']?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label>Unidade</label>
                                            <select name="unidade" class="form-control">
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label>Nota:</label>
                                            <input class="form-control" name="nota" placeholder="">
                                            <p class="help-block"></p>
                                        </div>

                                        <button type="submit" class="btn btn-default">Cadastrar Nota</button>
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