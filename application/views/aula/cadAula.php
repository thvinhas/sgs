<?php
$this->load->view('include/header.php');
?>

    <div id="wrapper">

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Cadastro de Aulas</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Informe os dados da aula
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <?php echo  form_open('aula/store')  ?>
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
                                            <label>Data da Aula:</label>

                                            <select name="data_aula" class="form-control">
                                                <option value="Segunda">Segunda</option>
                                                <option value="Terça">Terça</option>
                                                <option value="Quarta">Quarta</option>
                                                <option value="Quinta">Quinta</option>
                                                <option value="Sexta">Sexta</option>
                                                <option value="Sabado">Sabado</option>
                                                <option value="Domingo">Domingo</option>
                                            </select>
                                        </div>
                                        
                                        <button type="submit" class="btn btn-default">Cadastrar</button>
                                        <button type="reset" class="btn btn-default">Limpar</button>

                                    <?php echo form_close(); ?>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
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