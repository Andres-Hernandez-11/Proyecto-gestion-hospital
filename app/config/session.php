<?php

session_start();

if (!isset($_SESSION['iniciada']))
{
    session_regenerate_id(true);
    $_SESSION['iniciada'] = true;
}