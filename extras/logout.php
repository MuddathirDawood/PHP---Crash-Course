<?php

    session_start();

    session_destroy();
    header('Location: /PHP - Crash Course/13_sessions.php');