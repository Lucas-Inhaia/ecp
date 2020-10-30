<!DOCTYPE html>
<html lang="pt-br">

<?php
include_once './includes/connect.php'; // Conecta com o banco
?>

<head>

    <title>Econtre Cuidados Paliativos</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Busque profissionais de cuidados paliativos">
    <meta name="author" content="Lucas Inhaia">

    <script defer src="assets/fontawesome/js/all.js"></script>


    <link rel="shortcut icon" href="favicon.ico">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link id="theme-style" rel="stylesheet" href="assets/css/styles.css">

</head>

<body>

    <div class="page-wrapper">

        <!-- Header -->
        <header class="header text-center">

            <div class="container">

                <!-- Logo no Header -->
                <div class="logo">
                    <h1>
                        <a class="btnlink" href="index.php"><span class="text-highlight">Encontre </span><span class="text-bold">Cuidados Paliativos</span></a>
                    </h1>
                    <h6>
                        <a href=""><span class="text-highlight">Utilize a busca abaixo para encontrar um profissional de cuidados paliativos.</span></a>
                    </h6>

                </div>

                <!-- Formulário de Busca -->
                <div class="header-searth">

                    <form action="list.php" method="POST" autocomplete="off">
                        <div class="input-group mt-4">
                            <div class="input-group-prepend  col-sm-12 col-md-12 col-lg-3  p-0     border-radius-0">
                                <label class="sr-only" for="states">Escolha um Estado</label>
                                <select class="custom-select" name="states" id="states">

                                    <option value="">Estado</option>
                                    <?php
                                    $result = "SELECT * FROM states ORDER BY name";
                                    $result_state = mysqli_query($conn, $result);
                                    while ($row_state = mysqli_fetch_assoc($result_state)) {
                                        echo '<option value="' . $row_state['id'] . '">' . $row_state['name'] . '</option>';
                                    }
                                    ?>
                                </select>
                            </div>

                            <div class="custom-select js_load ">
                                <div class="loader m-auto"></div>
                            </div>

                            <div id="cities" class="input-group-prepend  col-sm-12 col-md-12 col-lg-3  p-0     border-radius-0">
                                <label class="sr-only" for="cities">Escolha uma Cidade</label>
                                <select class="custom-select " name="cities" id="cities">

                                    <option value="">Cidade</option>

                                </select>
                            </div>

                            <div class="input-group-prepend  col-sm-12 col-md-12 col-lg-3  p-0     border-radius-0">
                                <label class="sr-only" for="formations">Escolha uma formação proficional</label>
                                <select class="custom-select" name="formations" id="formations">

                                    <option value="">Formação Profissional</option>

                                    <?php
                                    $result = "SELECT * FROM formations ORDER BY name";
                                    $result_formation = mysqli_query($conn, $result);
                                    while ($row_formation = mysqli_fetch_assoc($result_formation)) {
                                        echo '<option value="' . $row_formation['id'] . '">' . $row_formation['name'] . '</option>';
                                    }
                                    ?>

                                </select>
                            </div>

                            <div class="input-group-prepend  col-sm-12 col-md-12 col-lg-3  p-0     border-radius-0">
                                <button class="btn btn-primary btn-block px-4" type="submit">Encontrar</button>
                            </div>

                        </div>

                    </form>

                </div>

            </div>

        </header>

        <!-- Conteudo da index -->
        <section class="content">

            <div class="container">

                <!-- Título da pagina -->
                <div class="text-center my-5">
                    <h2 class="title mb-2 text-center">Seja Muito Bem Vindo!</h2>
                    <h6>Se cadastre em nosso site ou tire suas dúvidas aqui mesmo</h6>
                </div>

                <div class="row">

                    <!-- Card de cadastro-->
                    <div class="col-sm-12 col-md-6 col-lg-4 mb-4">
                        <div class="card p-2">
                            <div class="card-body text-center">
                                <div class="item-inner">

                                    <div class="big-icon">
                                        <i class="icon fa fa-user-md "></i>
                                    </div>

                                    <h3 class="title">Cadatro</h3>
                                    <p class="intro">Formulário no Surveymonkey, para profissionais de cuidados paliativos.</p>
                                    <a class="link" href="https://pt.surveymonkey.com/r/Y7KWGDH"></a>

                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card de contato -->
                    <div class="col-sm-12 col-md-6 col-lg-4 mb-4">
                        <div class="card p-2">
                            <div class="card-body text-center">
                                <div class="item-inner">

                                    <div class="big-icon">
                                        <i class="icon fab fa-telegram-plane "></i>
                                    </div>

                                    <h3 class="title">Contato</h3>
                                    <p class="intro">Envie uma mensagem para nossa equipe, com dúvidas e sugestões</p>
                                    <address> <a class="link" href="mailto:lucasinhaia@gmail.com?subject=Encontre%20Cuidados%20Paliativos"></a></address>

                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card do administrativo-->
                    <div class=" col-sm-12 col-md-12 col-lg-4 mb-4">
                        <div class="card p-2">
                            <div class="card-body text-center">
                                <div class="item-inner">

                                    <div class="big-icon">
                                        <i class="icon fa fa-clipboard-list"></i>
                                    </div>

                                    <h3 class="title">Administrativo</h3>
                                    <p class="intro">Area administrativa, disponível apenas para os responsáveis do site.</p>
                                    <a class="link" href="login.php"></a>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

    </div>

    <!-- Footer -->
    <footer class="footer text-center">

        <div class="container">
            <small>Desenvolvido por <a href="mailto:lucasinhaia@gmail.com?subject=Encontre%20Cuidados%20Paliativos" target="_blank">Lucas Inhaia</a> Developer</small>
        </div>

    </footer>

    <!-- Scrits -->
    <script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type="text/javascript" src="assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery.mask.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/js/main.js"></script>

</body>

</html>