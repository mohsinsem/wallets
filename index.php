<?php 
    
    require_once ("walletus_php.php");
    $walletus_portal = new WalletUS_Portal();

    // Api Settings
    $email      = '7859995@gmail.com';
    $apiKey     = 'tinnxH5wU0EyHhpW5kFnzLHZVGm8tIgi'; //66232b6be2c3766232b6

    // Customer Details
    $userEmail  = 'developer@gmail.com'; // Logged In Customer Email
    $amount     = '20.00';  //AMOUNT IN FORMAT, 50.20
    $invoiceId  = rand();
    
    $walletus_portal->set_access($email, $apiKey);

    $walletus_portal->set_order($userEmail, $userName,  $amount, $invoiceId, "PAYMENT_SUCCESS_REDIRECT_URL", "PAYMENT_CANCELED_REDIRECT_URL");


    $new_payment = $walletus_portal->generate_link();

    echo "<pre>";
    print_r($new_payment);
    exit;

?>