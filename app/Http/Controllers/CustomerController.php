<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class CustomerController extends Controller
{
    public function index(): View
    {
        $customers = [
            ['id' => 1, 'full_name' => 'Juan Dela Cruz', 'email' => 'juan@example.com', 'phone' => '0917-123-4567'],
            ['id' => 2, 'full_name' => 'Maria Santos', 'email' => 'maria@example.com', 'phone' => '0918-234-5678'],
            ['id' => 3, 'full_name' => 'Carlo Reyes', 'email' => 'carlo@example.com', 'phone' => '0919-345-6789'],
            ['id' => 4, 'full_name' => 'Angela Garcia', 'email' => 'angela@example.com', 'phone' => '0920-456-7890'],
            ['id' => 5, 'full_name' => 'Paolo Mendoza', 'email' => 'paolo@example.com', 'phone' => '0921-567-8901'],
        ];

        return view('customers', compact('customers'));
    }
}
