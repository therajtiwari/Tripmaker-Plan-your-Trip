<?php
include("stripe-php-master/init.php");
$publishable_key = 'pk_test_51JtYKqSEwXJXrr8JMduWP5TgFWps1ackPZRzQOpf3jizRedAaNwRkKfiu0L93qF1rcwyzzNh7MFxmkxT87do8NjV00kjR8bJ9m';
$secret_key = 'sk_test_51JtYKqSEwXJXrr8JRoH5H5Fa1lFzYV2rAw7oQZGN9M3Qs0E3uCN1ssDbZYB5wj0Z2Fn0X5XkIrlah235rUEanrPL00vXp6zOL6';



\Stripe\Stripe::setApiKey($secret_key);
?>