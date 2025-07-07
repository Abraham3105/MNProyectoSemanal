<?php
    include_once $_SERVER["DOCUMENT_ROOT"] . '/ProyectoAmbiente/MNProyectoSemanal/Views/layoutInterno.php';
?>

<!DOCTYPE html>
<html>
    <?php
       AddCss();
    ?>
<body>

    <div id="main-wrapper">
       
        <?php
            ShowHeader();
            ShowMenu();
        ?>

        <div class="page-wrapper">
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-5 align-self-center">
                        <h4 class="page-title">Starter Page</h4>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                       
                    </div>
                </div>
            </div>
            
            <?php
                ShowFooter();
            ?>

        </div>

    </div>

    <?php
        AddJs();
    ?>    
    
</body>

</html>