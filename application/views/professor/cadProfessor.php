<?php
$this->load->view('include/header.php');
?>

    <div id="wrapper">

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Cadastro de Professores</h1>
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
                                    <?php echo  form_open('professor/store')  ?>
                                    <input type="hidden" value="<?php echo $matricula?>" name="id">
                                        <div class="form-group">
                                            <label>Matricula:</label>
                                            <input class="form-control" name="matricula" placeholder="Digite a matricula..." value="<?php echo $matricula?>">
                                            <p class="help-block"></p>
                                        </div>
                                        <div class="form-group">
                                            <label>Nome:</label>
                                            <input class="form-control" name="nome" placeholder="Digite nome..." value="<?php echo $nome?>">
                                            <p class="help-block"></p>
                                        </div>
                                        <div class="form-group">
                                            <label>CPF:</label>
                                            <input class="form-control" name="cpf" placeholder="" value="<?php echo $cpf_professor?>">
                                            <p class="help-block"></p>
                                        </div>
                                        <div class="form-group">
                                            <label>Email:</label>
                                            <input class="form-control" name="email" placeholder="Digite o email..." value="<?php echo $email?>">
                                            <p class="help-block"></p>
                                        </div>

                                        <button type="submit" class="btn btn-default">Cadastrar Professor</button>
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