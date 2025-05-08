<?php
    $pw_hash = password_hash("1234", PASSWORD_DEFAULT);

    echo $pw_hash;
?>