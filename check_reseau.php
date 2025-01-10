<?php

include "./moyen_flag.php";

$flag_reseau = isset($_POST['inputflag_reseau']) ? $_POST['inputflag_reseau'] : '';
if ($flag_reseau === FLAG_RESEAU) {
    echo "Bravoo!";
} else {
    echo "Try harder!";
}