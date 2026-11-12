<?php

use Illuminate\Support\Facades\Artisan;

Artisan::command('inspire', function () {
    $this->comment('Build simple, test carefully, and submit confidently.');
})->purpose('Display an inspiring message');
