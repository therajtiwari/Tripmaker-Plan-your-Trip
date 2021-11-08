<?php
include("../config.php");

$token=$_POST['stripeToken'];
$stripe_card_type=$_POST['stripeTokentype'];
$amount=$_POST['amount']*100;
$description=$_POST['description'] ;

$charge = \Stripe\Charge::create([
    "amount" => $amount,
    "currency" => 'inr',
    "description"=>$description,
    "source"=> $token,
  ]);

  if($charge){
    header("Location: ../payment_success.php");
  }


?>