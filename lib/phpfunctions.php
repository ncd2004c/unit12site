<?php

function echoPost($name)
{
        if (isset($_POST[$name]))
                echo htmlspecialchars($_POST[$name]);
}

?>
