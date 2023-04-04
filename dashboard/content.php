<?php
if ($_GET['page'] == 'dashboard') {
    $_SESSION['page'] = 'dashboard';
    include "dashboard.php";
} elseif ($_GET['page'] == 'budget') {
    include "budget/index.php";
} elseif ($_GET['page'] == 'customize') {
    include "customize/index.php";
} else {
    include "tes.php";
}
