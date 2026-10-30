<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\View\View;

class CustomerController extends Controller
{
    public function index(): View
    {
        $customers = Customer::orderBy('id')->get();

        return view('customers.index', [
            'title' => 'POS Lab | Customer Accounts',
            'heading' => 'Customer Accounts',
            'customers' => $customers,
        ]);
    }
}
