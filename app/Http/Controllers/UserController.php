<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class UserController extends Controller
{
    public function index(): View
    {
        $users = [
            ['id' => 1, 'username' => 'admin', 'full_name' => 'System Administrator', 'role' => 'Administrator'],
            ['id' => 2, 'username' => 'jdoe', 'full_name' => 'John Doe', 'role' => 'Cashier'],
            ['id' => 3, 'username' => 'msmith', 'full_name' => 'Maria Smith', 'role' => 'Cashier'],
            ['id' => 4, 'username' => 'rcruz', 'full_name' => 'Ryan Cruz', 'role' => 'Supervisor'],
            ['id' => 5, 'username' => 'afernandez', 'full_name' => 'Anna Fernandez', 'role' => 'Inventory Clerk'],
        ];

        return view('users', compact('users'));
    }
}
