<?php

function bonjour ($nom) {
    return 'Bonjour ' . $nom . "\n";
}

$salutation = bonjour('Jean');
echo $salutation;