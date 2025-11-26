<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ApiController extends Controller
{
    public function getRandomUser()
    {
        // Call Random User API
        $response = Http::get('https://randomuser.me/api/');

        // Convert to array
        $data = $response->json();

        // Send to view
        return view('random-user', ['user' => $data['results'][0]]);
    }
}
