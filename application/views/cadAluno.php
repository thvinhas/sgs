<?php
include('include/header.php');
?>

    <div id="wrapper">

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Cadastro de Aluno</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Informe os dados do aluno
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <?php echo  form_open('aluno/store')  ?>
                                        <div class="form-group">
                                            <label>Nome:</label>
                                            <input class="form-control" name="nome" placeholder="Digite nome...">
                                            <p class="help-block"></p>
                                        </div>
                                        <div class="form-group">
                                            <label>Data de Nascimento:</label>
                                            <input class="form-control" type="date" name="data_nasc_aluno">
                                        </div>
                                        <div class="form-group">
                                            <label>Nome da Mãe:</label>
                                            <input class="form-control" name="mae_aluno">
                                        </div>
                                        <div class="form-group">
                                            <label>CPF da Mãe:</label>
                                            <input class="form-control" name="CPF_mae_aluno">
                                        </div>
                                        <div class="form-group">
                                            <label>Nome do Pai:</label>
                                            <input class="form-control" name="pai_aluno">
                                        </div>
                                        <div class="form-group">
                                            <label>CPF do Pai:</label>
                                            <input class="form-control" name="CPF_pai_aluno">
                                        </div>
                                        <div class="form-group">
                                            <label>Turma</label>
                                            <select class="form-control" name="turma">
                                                <option value="2    ">1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                            </select>
                                        </div>

                                        <button type="submit" class="btn btn-default">Submit Button</button>
                                        <button type="reset" class="btn btn-default">Reset Button</button>

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
include('include/footer.php');
?>