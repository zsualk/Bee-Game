<?php
if (isset($_POST['action'])) {
    switch ($_POST['action']) {
        case 'slap':
            insert();
            break;
        case 'Reset':
            select();
            break;
    }
}

function select() {
    echo "The select function is called.";
    exit;
}

function insert() {
    echo "The insert function is called.";
    exit;
}
?>