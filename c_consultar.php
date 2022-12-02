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
                                        <?php
                                        include("conexao.php");
                                         try {
                                            $stmt = $pdo->prepare("select * from aluno");

                                            $stmt->execute();

                                            while ($row = $stmt->fetch(PDO::FETCH_BOTH)) {
                                             echo "<tr>";
                                            echo "<th scope=\"row\"> $row[0] </th>";
                                            echo "<td> " . $row[1] . " </td>";
                                            echo "<td>" . $row[2] . " </td>";
                                            echo "<td>" . $row[3] . " </td>";
                                            echo "<td>" . $row[4] . "</td>";
                                            echo "<td>" . $row[5] . "</td>"; 
                                            echo "<td><a href='excluir-aluno.php?id=$row[0]'> Excluir </a></td>";
                                        }
                                        }
                                        catch (PDOException $e) {
                                        echo "Erro: " . $e->getmessage();
                                        }
                                        ?>

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

