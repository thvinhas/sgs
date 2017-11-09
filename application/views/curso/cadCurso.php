<?php
$this->load->view('include/header.php');
?>

    <div id="wrapper">

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Cadastro de Cursos</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Informe os dados do curso
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <?php echo  form_open('curso/store')  ?>
                                    <input type="hidden" value="<?php echo $id?>" name="id">
                                        <div class="form-group">
                                            <label>Nome do curso:</label>
                                            <input class="form-control" name="nome_curso" placeholder="Digite nome..." value="<?php echo $nome_curso?>">
                                            <p class="help-block"></p>
                                        </div>
                                        
                                        <label>Valor do curso:</label>
                                        <div class="form-group input-group">
                                            <span class="input-group-addon">R$</span>
                                            <input type="text" name="valor_curso" class="form-control" value="<?php echo $valor_curso?>">
                                            <span class="input-group-addon">,00</span>
                                        </div>

                                        <button type="submit" class="btn btn-default">Cadastrar Curso</button>
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