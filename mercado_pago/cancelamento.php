<?php
 

//MercadoPago\SDK::setAccessToken("YOUR_ACCESS_TOKEN");
//$pagamento_id = 000000000;Pagamento::find_by_id($pagamento_id);

MercadoPago\SDK::setAccessToken("YOUR_ACCESS_TOKEN");
$id_pagamento = 000000000;Pagamento::find_by_id($id_pagamento);
$pagamento->status = "cancelado";
$pagamento->update();
 
?>