<?php 

include_once("includes/config.php");

$function = $_REQUEST['q'];

function isDuplicate_CashbackCard(): bool {
    $parameters = [
        'invoice_number' => $_POST['invoice_number']
    ];
    return curlRequest("/CashbackCard/checkDuplicate/", true, $parameters)->result;
}

switch ($function) {
    case 'checkDuplicacy':
        echo isDuplicate_CashbackCard();
        break;
    default:
        break;
}

?>