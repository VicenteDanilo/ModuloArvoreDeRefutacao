<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Logic Live - Árvore de refutação</title>
        <link rel="shortcut icon"  href="imagens/logo.png">

        <!-- CSS BOOTSTRAP -->
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-grid.css">
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-reboot.css">

        <!-- CSS Customizado -->
        <link rel="stylesheet" type="text/css" href="bootstrap/css/custom.css">
        <link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">

    </head>
    <body>
        <!-- Navbar Principal -->
        <div class="navbar shadow-sm bg-white rounded-bottom-50">
            <div class="container d-flex justify-content-center mt-2">
                <div class="row ">
                    <!-- Logo -->
                    <div class="col-auto d-flex justify-content-center p-0">
                        <img src="imagens/icone-pequeno.png" height="50"></img>
                    </div>
                </div>
            </div>
            <!-- Badge -->
            <div class="container d-flex justify-content-center mt-2">
               
                <div class="row">
                    <ul class="nav justify-content-end">
                        <li class="nav-item mr-2">
                            @if (request()->is("/") or request()->is("Arvore") or request()->is("submit"))
                                <button type="submit" class="btn btn-block  bg-purple rounded-05rem" onclick="window.location.href='.'">
                                    <span class="text-white ml-2"><i class="fas fa-tree text-18"></i></span>
                                    <span class="text-white ml-2 mr-2">Árvore Otimizada</span>
                                </button>
                            @else 
                                <button type="submit" class="btn btn-block  btn btn-light rounded-05rem" onclick="window.location.href='.'">
                                    <span class=" ml-2"><i class="fas fa-tree text-18"></i></span>
                                    <span class=" ml-2 mr-2">Árvore Otimizada</span>
                                </button>
                            @endif
                        </li>
                        <li class="nav-item">
                            @if ( request()->is("porEtapa") or request()->is("Inicializado") or request()->is("Gerando"))
                                <button type="submit" class="btn btn-block  bg-purple rounded-05rem" onclick="window.location.href='porEtapa'">
                                    <span class="text-white ml-2"><i class="fas fa-stream text-18"></i></span>
                                    <span class="text-white ml-2 mr-2">Por Etapa</span>
                                </button>
                            @else 
                                <button type="submit" class="btn btn-block  btn-light rounded-05rem" onclick="window.location.href='porEtapa'">
                                    <span class="ml-2"><i class="fas fa-stream text-18"></i></span>
                                    <span class="ml-2 mr-2">Por Etapa</span>
                                </button>
                            @endif                          
                        </li>
                    </ul>
                </div>
            </div>
        </div>




        <div>
            @yield('content')
        </div>
        <div class="footer mt-4 mb-4">
            <div class="container-fluid">
                <div class="col d-flex justify-content-center">
                    <div class="row">
                        <span data-toggle="tooltip" data-placement="top">Feito por @DaniloSaraiva</span>
                    </div>
                </div>
            </div>
        </div>
        <!-- JQUERY 3.4.1 -->
        <script type="text/javascript" src="bootstrap/js/jquery.min-3.4.1.js"></script>
        <!-- JS BOOTSTRAP -->
        <script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.bundle.js"></script>
        <!-- BS-Custom-File Plugin -->
        <script type="text/javascript" src="bootstrap/js/bs-custom-file.js"></script>
        <script type="text/javascript" src="perfect-scrollbar/js/perfect-scrollbar.min.js"></script>
        <!-- Scripts de inicialização -->
        <script>
            bsCustomFileInput.init()
            $(function () {
                $('[data-toggle="tooltip"]').tooltip()
            })
            
            const container =
                document.querySelector('#container');
                const ps = new PerfectScrollbar(container);
        </script>
    </body>
</html>
