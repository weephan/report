<?php

// namespace App\Http\Controllers;

// use Illuminate\Http\Request;

// class ReportController extends Controller
// {
//     //
// }

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReportController extends Controller
{
    // public function showMonthlyReport()
    // {
    //     $months = ['Jan', 'Feb', 'Mar', 'Apr', 'May'];
    //     $sales = [500, 750, 620, 880, 430];

    //     return view('report', compact('months', 'sales'));
    // }

    public function showReports()
{
    // Dummy Data - Monthly Sales
    $months = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'];
    $sales = [1500, 2300, 1800, 2000, 2700, 3000];

    // Dummy Data - Best Selling Items
    $topItems = ['Latte', 'Cappuccino', 'Mocha', 'Americano', 'Espresso'];
    $topSales = [120, 95, 80, 60, 40]; // quantities sold

    // Dummy Data - Slow Movers
    $slowItems = ['Herbal Tea', 'Matcha', 'Iced Chocolate'];
    $slowSales = [10, 8, 5]; // very low sales

    return view('report', compact('months', 'sales', 'topItems', 'topSales', 'slowItems', 'slowSales'));
}

}

