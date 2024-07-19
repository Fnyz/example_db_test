<?php

// Load Laravel's autoload file
require __DIR__ . '/../vendor/autoload.php';

// Bootstrap Laravel application
$app = require_once __DIR__ . '/../bootstrap/app.php';

// Create an instance of the HTTP kernel
$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);

// Create a request object
$request = Illuminate\Http\Request::capture();

// Handle the request through the kernel
$response = $kernel->handle($request);

// Send the response back to the client
$response->send();

// Terminate the application
$kernel->terminate($request, $response);
