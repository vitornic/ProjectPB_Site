<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>Show</title>
    <link rel="stylesheet" type="text/css" href="../css/stylesheet.css">
</head>
<body>
<div class="container">
    <h1 class="page-header text-center">Visualizar BD</h1>
    <div class="row">
        <div class="col-sm-8 col-sm-offset-2">
            <a href="#adicionar" class="btn btn-primary" data-toggle="modal"><span class="glyphicon glyphicon-plus"></span> Adicionar</a>
            <?php 
                session_start();
                if(isset($_SESSION['message'])){
                    ?>
                    <div class="alert alert-info text-center" style="margin-top:20px;">
                        <?php echo $_SESSION['message']; ?>
                    </div>
                    <?php

                    unset($_SESSION['message']);
                }
            ?>
            <table class="table table-bordered table-striped" style="margin-top:20px;">
                <thead>
                    <th>edit1</th>
                    <th>edit2</th>
                    <th>edit3</th>
                    <th>edit4</th>
                    <th>edit5</th>
                    <th>edit6</th>
                    <th>edit7</th>
                </thead>
            </table>
        </div>
    </div>
</div>
<script src="../jquery/jquery.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
</body>
</html>