<!DOCTYPE html>

<html lang="es">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Pokedex Aldo</title>

    <!--Link de bootstrap-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <!--Estilos de CSS-->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

</head>

<body>


    <div class="container-md">

        <div class="row">

            <div class="col-md-12">

                <div>
                    <header class="header">
                        <a href="/pokedex">
                            <img class="header__logo" src="img/pokemonImg.png" alt="LogoPokemon">
                        </a>
                    </header>

                    <div class="tab-content">

                        <div class="informacion">
                            <p>Se requiere tener una app web, que permita recuperar y traer un nuevo Pokémon, se
                                mostrar foto, nombre y altura del mismo.

                                La consulta deberá ser cada 30 segundos o presionando un botón, el botón deberá decir
                                "Mostrar Pokemón", al presionarlo, deberá recupere  un pokemón al azar
                                sin importar si han pasado o no los 30 segundos</p>
                        </div>

                        <!--Div de pokemons-->
                        <div class="tab-pane active">

                            <br>

                            <div class="row mb-2 justify-content-center navCap">
                                <div class="btn btn-danger m-auto col-lg-2 col-md-2 col-sm-2 col-xs-2" id="temporizador">
                                </div>
                                <div class="btn btn-danger m-auto col-lg-7 col-md-7 col-sm-7 col-xs-7" id="nombrePokemon">
                                    Pokemon
                                    Capturado:
                                </div>
                                <div class="partCapturar">

                                    <button id="btnCapturar" class="btn btn-warning"> Mostrar Pokemon </button>

                                </div>

                                <!--Muestra pokemones capturados-->
                                <div class="pokemon-container-cap">

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

        <!--JS-->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
            crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns"
            crossorigin="anonymous"></script>


        <script type="text/javascript" src="{{ asset('js/capturados.js') }}" ></script>


</body>

</html>

