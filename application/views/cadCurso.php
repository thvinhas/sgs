<?php
include('include/header.php');
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
                                    <form role="form">
                                        <div class="form-group">
                                            <label>Nome do curso:</label>
                                            <input class="form-control" name="nome_curso" placeholder="Digite nome...">
                                            <p class="help-block"></p>
                                        </div>
                                        
                                        <label>Valor do curso:</label>
                                        <div class="form-group input-group">
                                            <span class="input-group-addon">R$</span>
                                            <input type="text" name="valor_curso" class="form-control">
                                            <span class="input-group-addon">,00</span>
                                        </div>
                                    
                                        <div class="form-group">
                                            <label>Turma</label>
                                            <select name="id_turma" class="form-control">
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                            </select>
                                        </div>

                                        <button type="submit" class="btn btn-default">Submit Button</button>
                                        <button type="reset" class="btn btn-default">Reset Button</button>
                                   
                                   </form>
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