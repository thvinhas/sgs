<?php
$this->load->view('include/header.php');
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
                                   		<?php if(isset($matricula)):?>
                                    		<input type="hidden" name="id" value="<?php echo $matricula?>">
                                   		<?php endif;?>
                                    
                                        <div class="form-group">
                                            <label>Nome:</label>
                                            <input class="form-control" name="nome" placeholder="Digite nome..." value="<?php echo $nome?>">
                                            <p class="help-block"></p>
                                        </div>
                                        <div class="form-group">
                                            <label>RG:</label>
                                            <input class="form-control" name="nome" placeholder="" value="<?php echo $rg_aluno?>">
                                            <p class="help-block"></p>
                                        </div>
                                        <div class="form-group">
                                            <label>Data de Nascimento:</label>
                                            <input class="form-control" type="date" name="data_nasc_aluno" value="<?php echo $data_nascimento?>">
                                        </div>
                                    <div class="form-group">
                                        <label>Turma</label>
                                        <select class="form-control" name="turma">
                                            <?php foreach ($resultado as $result): ?>
                                            	<?php if($result['id'] == (integer)$serie_id):?>
                                                	<option value="<?php echo $result['id'] ?>" selected><?php echo  $result['nome']?></option>
                                                <?php else :?>
                                                	<option value="<?php echo $result['id'] ?>"><?php echo  $result['nome']?></option>
                                                <?php endif;?>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>

                                        <button type="submit" class="btn btn-default">Cadastrar</button>
                                        <button type="reset" class="btn btn-default">Limpar</button>


                                </div>
                                <!-- /.col-lg-6 (nested) -->
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Nome da Mãe:</label>
                                        <input class="form-control" name="mae_aluno" value="<?php echo $nome_mae?>">
                                    </div>
                                    <div class="form-group">
                                        <label>CPF da Mãe:</label>
                                        <input class="form-control" name="CPF_mae_aluno" value="<?php echo $cpf_mae?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Nome do Pai:</label>
                                        <input class="form-control" name="pai_aluno" value="<?php echo $nome_pai?>">
                                    </div>
                                    <div class="form-group">
                                        <label>CPF do Pai:</label>
                                        <input class="form-control" name="CPF_pai_aluno" value="<?php echo $cpf_pai?>">
                                    </div>
                                </div>
                                <?php echo form_close(); ?>
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