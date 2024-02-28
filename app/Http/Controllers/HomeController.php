<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Task;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $tasks = Task::with('user')->get();

        return Inertia::render('Home', compact('tasks'));
    }
}
