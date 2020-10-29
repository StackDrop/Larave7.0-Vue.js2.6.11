<?php

namespace App\Http\Controllers;

use App\Helpers\PackageManager;
use App\Models\Game;
use App\Services\OAuthService;
use App\Services\UserService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

class TestController extends Controller
{
    public function index()
    {
        return view('test');
    }
}
