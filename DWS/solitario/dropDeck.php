<?php

$redHeart = array("A", 2, 3, 4, 5, 6, 7, 8, 9, 10, "J", "Q", "K");
$redPicas = array("A", 2, 3, 4, 5, 6, 7, 8, 9, 10, "J", "Q", "K");
$blackHeart = array("R.png" => "BH1", "torannpu-illust2" => "BH2", "03.gif" => "BH3", "four-spadeC186x260.png" => "BH4", "5-pik-1.png" => "BH5", "6S.png" => "BH6", "seven-of-spades-playing-card-2NH694R.jpg" => "BH7", "400px-Playing_card_spade_8.svg.png" => "BH8", "R.jpg" => "BH9", "png-transparent-playing-card-ace-of-spades-card-game-standard-52-card-deck-ace-card-love-game-text.png" => "BH10", "J" => "BH11", "Q" => "BH12", "K" => "BH13");
$blackPicas = array("A" => "BP1", 2 => "BP2", 3 => "BP3", 4 => "BP4", 5 => "BP5", 6 => "BP6", 7 => "BP7", 8 => "BP8", 9 => "BP9", 10 => "BP10", "J" => "BP11", "Q" => "BP12", "K" => "BP13");

$deck = array_merge($redHeart, $redPicas, $blackHeart, $blackPicas);

$finalDeck = array();

function randoMixer(&$deck, &$finalDeck)
{
    shuffle($deck);

    $finalDeck = $deck;
}

function dropCard()
{
    global $finalDeck;
    static $index = 0; // Controlar el índice de la carta a devolver

    if ($index > count($finalDeck)) {
        $index = 0;
    } else {
        $card = $finalDeck[$index];
        $index++;
        return $card;
    }
}

// Mezclar el mazo
randoMixer($deck, $finalDeck);
