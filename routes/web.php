<?php
// routes/web.php

use App\Http\Controllers\CustomerController;

Route::resource('customers', CustomerController::class);