<?php
include("stripe-php-master/init.php");
$publishable_key = 'pk_test_51JtYKqSEwXJXrr8Jo9kupvKvDZx3X27Hr7Gc8vMKCHWrniHbiiDadg1D4JOy6iPwoE5cAgllV2tqNTRcnktO2LQT00SetbSRkV';
$secret_key = 'sk_test_51JtYKqSEwXJXrr8J1PLVMhNWnV7mM2HONiMzvJGAkw0EPrtyfovFSlC2tIDqJIxQ7oti31K1hcp8nQsVwcGy5pLp009xxMNsZg';



\Stripe\Stripe::setApiKey($secret_key);
?>