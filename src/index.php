<?php

$endpoint = "https://pokeapi.co/api/v2";
$pokemonRoute = "/pokemon";

$data = json_decode(stream_get_contents(fopen($endpoint . $pokemonRoute, 'r')));
$pokemon = $data->results;
?>

<ul>
    <?php foreach ($pokemon as $singlePokemon) : ?>
        <li><?=$singlePokemon->name?></li>
    <? endforeach ?>
</ul>