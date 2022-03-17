//Constantes
const pokemonContainerC = document.querySelector(".pokemon-container-cap");
const nombrePokeCapt = document.getElementById("nombrePokemon");

//Variables para el tiempo y id del pokemon
let tiempo;
let pokemon = 1;

//funcion para mostrar datos del pokemon
function datosPokemon(id) {

    fetch(`https://pokeapi.co/api/v2/pokemon/${id}/`)
        .then((res) => res.json())
        .then((data) => {

            crearPokemon(data);
            let nombrePokemon = data.name;
            nombrePokeCapt.innerHTML = "Pokemon Capturado: <b>" + nombrePokemon.toUpperCase() + "</b>";
        });
}

//funcion para crear al pokemon
function crearPokemon(pokemon) {

    const flipCardC = document.createElement('div');
    flipCardC.classList.add('flip-card');

    const cardContainerC = document.createElement('div');
    cardContainerC.classList.add('card-container');

    flipCardC.appendChild(cardContainerC);

    const cardC = document.createElement('div');
    cardC.classList.add('pokemon-block');

    const spriteContainerC = document.createElement('div');
    spriteContainerC.classList.add('img-container');

    const spriteC = document.createElement('img');
    spriteC.src = pokemon.sprites.front_default;

    spriteContainerC.appendChild(spriteC);

    const numberC = document.createElement('p');
    numberC.textContent = `Numero #${pokemon.id.toString()}`;

    const nameC = document.createElement('p');
    nameC.classList.add('name');
    nameC.textContent = `Nombre: ${pokemon.name}`;

    const altC = document.createElement('p');
    altC.classList.add('height');
    altC.textContent= `Altura: ${pokemon.height} ft`;

    cardC.appendChild(spriteContainerC);
    cardC.appendChild(numberC);
    cardC.appendChild(nameC);
    cardC.appendChild(altC);

    const cardBackC = document.createElement('div');
    cardBackC.classList.add('pokemon-block-back');

    cardContainerC.appendChild(cardC);
    cardContainerC.appendChild(cardBackC);

    pokemonContainerC.appendChild(flipCardC);
}


function tiempoCaptura() {
    tiempo = 0;

    setInterval(function () {

        document.getElementById("temporizador").innerHTML =tiempo++;

        if (tiempo % 30 == 0) {

            datosPokemon(pokemon);
            tiempo = 0;
            pokemon++;
        }


    }, 1000, "JavaScript");
}



//evento del boton para crear pokemon

document.getElementById("btnCapturar").onclick = function () { capturarPokemon() };

//funcion para capturar los pokemon
function capturarPokemon() {
    datosPokemon(pokemon);
    pokemon++;
}

//llamada al metodo de tiempo

tiempoCaptura();