<!DOCTYPE html>
<html lang="pt-BR">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>APROFEM</title>
        <link rel="stylesheet"
            href="{{ asset('assets/bootstrap-5.3.2/css/bootstrap-grid.css')}}">
        <link rel="stylesheet"
            href="{{ asset('assets/bootstrap-5.3.2/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}">
    </head>

   

    <body>
        <div class="container-fluid p-0  ">
            <!-- inicio header -->
            <header class="justify-content-center d-flex">
                <img class="img-logo"
                    src="{{ asset('assets/img/logo-white-text.png') }}"
                    alt="Logo APROFEM">
                <img class="img-logo-mobile my-3"
                    src="{{ asset('assets/img/logo-white-text.png') }}"
                    alt="Logo APROFEM ">
            </header>
            <!-- fim header -->
            <div class="row d-flex flex-column align-items-center box m-1">
                <div
                    class="conteudo_text col-12 col-md-8 col-lg-7  d-flex  flex-row p-0 m-0 mt-person ">
                    <div class="d-flex align-items-center">

                        <div>
                            <img class="img-logo-formacao"
                                src="{{ asset('assets/img/logo_formacao.png') }}"
                                alt="Letramento Ético e Pensamento Crítico Educação na Era Digital">

                        </div>

                    </div>
                </div>
                <div class="col-12 col-md-8 col-lg-5">
                    <div class="d-flex justify-content-center flex-column">
                        <div
                            class="row d-flex justify-content-center align-items-center gap-2">

                            <form class="text-center col-12 mt-3"
                                action="{{ route('continuar-curso', $uuid)}}"
                                method="get">
                                @csrf
                                <div class="box-verificacao p-3">
                                    <h2
                                        class="m-2 mb-0 pb-0 mb-1  fw-bold ml-3 text-black">
                                        Verificação de Identidade</h2>
                                    <p class="text-black"><b>Continue somente se
                                            o RF e o nome estiverem
                                            corretos.</b> </p>
                                    <h3 class="text-black"><b>R.F: {{
                                            $identificador }}</b></h3>
                                    <h3 class="text-black"><b>Nome: {{
                                            $nomeMascarado }}</b></h3>
                                    <div class="alert-person-3 p-2">
                                        <p class=" m-0 ">Caso apenas a
                                            grafia
                                            do nome esteja incorreta, por favor,
                                            dê
                                            seguimento à atividade e,
                                            posteriormente, acesse o <b>Portal
                                                APROFEM</b>
                                            para atualizar seus dados.</p>

                                    </div>

                                    <div
                                        class="row d-flex justify-content-center align-items-center gap-2">

                                        <a
                                            class="btn_verifica btn btn-danger btn_person m-2"
                                            href="{{ route('inicio')}}">Não sou
                                            eu
                                        </a>
                                        <button type="submit"
                                            class="btn btn_verifica btn-success btn_person m-2">Confirmar
                                            e continuar <svg
                                                xmlns="https://www.w3.org/2000/svg"
                                                width="28" height="28"
                                                fill="currentColor"
                                                class="bi bi-arrow-right-short"
                                                viewBox="0 0 16 16">
                                                <path fill-rule="evenodd"
                                                    d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8" />
                                            </svg>
                                        </button>

                                    </div>
                                    <p
                                        class="txt_info mt-2 text-center text-black ">A
                                        atividade estará disponível até às
                                        <b>23h59min do
                                            dia 18 de fevereiro de 2026</b>
                                        e poderá ser
                                        acessada no
                                        horário de preferência do
                                        interessado.</p>
                                    <a
                                        href="https://www.aprofem.com.br/formacao-em-rede-2026-4-feira-de-cinzas"
                                        class="text-center text text-black "
                                        target="_blank">
                                        Mais informações sobre a atividade
                                        Formação em Rede
                                    </a>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
            <!-- inicio footer -->
            <footer style="position: fixed; right: 0px; "
                class=" text-center d-flex justify-content-center  align-items-center ">
                <a class="text-uppercase bg-white"
                    href="https://portal.aprofem.com.br/" target="_blank">
                    Acesse o Portal
                    Aprofem</a>
            </footer>
        </div>
        <script type="text/javascript">
        document.addEventListener("input", function(evt) {
            if (evt.target.classList.contains("number")) {
                evt.target.value = evt.target.value.replace(/[^0-9\-.,]/g, '');
                if (evt.target.maxLength && evt.target.maxLength < evt.target.value.length) {
                    evt.target.value = evt.target.value.slice(0, -1);
                }
            }
        });
    </script>
    </body>

</html>