<?php

function randoMixer()
{

    $num = rand(0, 2);

    $res = "Error";

    if (isset($_POST['choice'])) {
        switch ($_POST['choice']) {
            case 'Harri':
                if ($num == 1)
                    $res = "YOU LOSE!";
                elseif ($num == 0)
                    $res = "DRAW";
                else
                    $res = "YOU WON!!";
                break;

            case 'Horri':
                if ($num == 1)
                    $res = "DRAW";
                elseif ($num == 0)
                    $res = "YOU WON!!";
                else
                    $res = "YOU LOSE!";
                break;

            case 'Har':
                if ($num == 1)
                    $res = "YOU WON!!";
                elseif ($num == 0)
                    $res = "YOU LOSE!";
                else
                    $res = "DRAW";
                break;

            default:
                $res = "Invalid choice!";
                break;
        }
    }

    return $res;
}
