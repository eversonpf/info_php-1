<?php

    $frutas = [
        "maça",
        "uva",
        "banana",
        "maça",
        "uva",
        "banana",
    ];

    $newfrutas = [];
    for($i = 0; $i < count($frutas); $i++) {
        $frutaAtual = $frutas[$i];
        $estaNoArray = in_array($frutaAtual, $newfrutas);
        $naoEstaNoArray = !$estaNoArray;
        if ($naoEstaNoArray) {
            // adiciona no novo array
            array_push($newfrutas, $frutas[$i]);
        }
    }

    $frutas = [
        "maça",
        "uva",
        "banana",
        "maça",
        "uva",
        "banana",
    ];

    $newfrutas = [];
    for ($i = 0; $i < count($frutas); $i++) {

        $fruta = $frutas[$i];

        if (!isset($newfrutas[$fruta])) {
            $newfrutas[$fruta] = 1; // ["maca"] = 1
        } else {
            $newfrutas[$fruta] += 1; // ["maca"] += 1 (2)
        }
    }

    echo implode(".",$newfrutas);
