<?php
return [
    'secret_key' => env('STRIPE_SECRET_KEY'),
    'public_key' => env('STRIPE_PUBLIC_KEY'),
    'webhook_secret' => env('STRIPE_WEBHOOK_SECRET'),
];