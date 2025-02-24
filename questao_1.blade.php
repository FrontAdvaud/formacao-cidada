<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>APROFEM</title>


    <link rel="stylesheet" href="./assets/bootstrap-5.3.2/css/bootstrap-grid.css">
    <link rel="stylesheet" href="./assets/bootstrap-5.3.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/style.css">

    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body class="body_pg_questao">
    <div class="container-fluid p-0  ">
        <header class="justify-content-center d-flex">
            <!-- <img class="img-logo " src="{{ asset('assets/img/logo-white-text.png')}} " alt=""> -->
            <img class="img-logo " src="../assets/img/logo-white-text.png" alt="">
        </header>
        <div class="row d-flex flex-column align-items-center box m-1">
            <div class=" col-12 col-md-11 col-lg-5  d-flex  flex-row p-0 m-0  ">
                <div class="d-flex flex-column ">
                    <div class="box_questao d-flex  align-items-center mb-2  ">
                        <p class="text-uppercase mb-0 mr-1 text-white fw-bold offset-1  ">Questão</p>
                    </div>
                    <form action="" method="post">

                        <p class="  txt_questao  text-uppercase mb-3 p-3  ">
                        </p>
                        <div>

                            <div class=" d-flex mb-2 box_alt bg">
                                <div class="m-2 ">
                                    <input class="form-check-input pr-2s" type="radio" name="resposta" value=""
                                        disabled>
                                </div>
                                <p class="m-2"> teste</p>
                            </div>

                            <div class=" d-flex justify-content-center">
                                <a href="{{route('ver-capitulo', [$uuid, 32])}}" type="button"
                                    class="btn btn-primary m-2 d-flex justify-content-center align-items-center"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor"
                                        class="bi bi-arrow-left-short" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5" />
                                    </svg> Voltar ao Conteúdo
                                </a>
                                <button type="submit" type="button"
                                    class="btn btn-primary m-2 d-flex justify-content-center align-items-center">Enviar<svg
                                        xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor"
                                        class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8" />
                                    </svg></button>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer-questao  text-center d-flex justify-content-center  align-items-center">
        <a class="text-uppercase text-white  " href="https://portal.aprofem.com.br/" target="_blank"> Acesse o Portal
            Aprofem</a>
    </footer>
</body>

</html>