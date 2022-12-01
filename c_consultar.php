<!DOCTYPE html>
<html>
    <head>
        <?php
        include_once '_head.php';
        ?>

    </head>
    <body>
                <?php
                include_once '_topo.php';
                include_once '_menu.php';
                ?>

        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Consultar Dados do Aluno</h2>   
                        <h5>Consulte todas os dados do aluno, caso necessario altere ou realize a exclusão.</h5>
                       
                    </div>
                </div>
                 <!-- /. Coluna  -->
                 <hr />
               
            <div class="row">
                <div class="col-md-12">
                    <!-- Avança tabelas -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Dados do Aluno
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Aluno</th>
                                            <th>Informações</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="odd gradeX">
                                            <td>(Nome)</td>
                                            <td><a href="c_alterar.php.php" class="btn btn-warning btn-xs">Alterar</a>
                                            <a href="#" class="btn btn-danger btn-xs">Excluir</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                    <!--Final e inicio de outras colunas -->
                </div>
            </div>
                <!-- /. Coluna  -->
            
                <!-- /. Coluna  -->
            
                <!-- /. Coluna  -->
           
                <!-- /. Coluna  -->
        </div>
               
    </div>
             <!-- /. Página Interna  -->
            </div>
                        
                    </div>
                    <!-- /. Página Interna  -->
                </div>
                <!-- /. Página Externa  -->
        </div>

    </body>
</html>

