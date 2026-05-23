<?php

function limpiar($dato)
{
    return htmlspecialchars(
        trim($dato),
        ENT_QUOTES,
        'UTF-8'
    );
}