<?php

        /* --------------- COOKIES --------------- */ 

        /*
            Cookies are a mechanism for storing data in the remote browser and thus tracking or identifying return users. You can set specific data to be stored in the browser, and then retrieve it when the user visits the site again.
        */

        // SET COOKIE
        setcookie('name', 'Muddathir', time() + 864000 * 30);

        if (isset($_COOKIE['name'])) {
            echo $_COOKIE['name'];
        }

        setcookie('name', '', time() - 86400);