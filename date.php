<?php
    date_default_timezone_set('America/Sao_Paulo');

    $data = array();

    if (isset($_POST['action'])&& $_POST['action'] == 'changeDate') {
        $data['date'] = date('d/m/Y H:i:s');
    }

    die(json_encode($data));
?>