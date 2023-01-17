<?php

session_start();

session_destroy();

header("Location: ../View/pediatrician/pediatrician-loginView.php");
exit;