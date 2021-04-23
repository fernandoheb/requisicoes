<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta http-equiv="x-ua-compatible" content="ie=edge" />
        <title>Requisições</title>
        <!-- MDB icon -->
        <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon" />
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" />
        <!-- Google Fonts Roboto -->
        <link
            rel="stylesheet"
            href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap"
            />
        <!-- MDB -->
        <link rel="stylesheet" href="css/mdb.min.css" />
    </head>
    <body class="bg-light">
        <!-- Start your project here-->
        <div class="container ">

            <?php if (!empty($_GET)) { ?>
                <div class="card mt-5">
                    <div class="card-header">
                        <h1> Get </h1>
                        <h1 class="display-6"> <?php print_r($_GET); ?> </h1>
                    </div>

                    <div class="card-body mt-5">                
                        <?php foreach ($_GET as $chave => $val) { ?>
                            <h2 class="d-inline">  <span class="badge rounded-pill bg-primary">   <?php echo $chave; ?>    </span> </h2>
                            <h2 class="d-inline">  <span class="badge rounded-pill bg-secondary"> <?php echo $val; ?>    </span></h2>
                        <?php } ?>   
                    </div>
                </div>
            <?php } ?>   
            
            <?php if (!empty($_POST)) { ?>
                <div class="card mt-5">
                    <div class="card-header">
                        <h1> Post </h1>
                        <h1 class="display-6"> <?php print_r($_POST); ?> </h1>
                    </div>
                    <div class="card-body mt-5">                
                        <?php foreach ($_POST as $chave => $val) { ?>
                            <h2 class="d-inline">  <span class="badge rounded-pill bg-warning text-dark">   <?php echo $chave; ?>    </span> </h2>
                            <h2 class="d-inline">   <span class="badge rounded-pill bg-secondary text-dark"> <?php echo $val; ?>    </span> </h2>
                        <?php } ?>   
                    </div>
                </div>
            <?php } ?>   
        </div>
        <!-- End your project here-->

        <!-- MDB -->
        <script type="text/javascript" src="js/mdb.min.js"></script>
        <!-- Custom scripts -->
        <script type="text/javascript"></script>
    </body>
</html>
