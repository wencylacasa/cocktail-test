<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class PageController extends Controller
{
    public function index()
    {
        $client = new Client();
        $response = $client->get('https://www.thecocktaildb.com/api/json/v1/1/search.php?s=margarita');
        $cocktails = json_decode($response->getBody(), true)['drinks'];

        return view('cocktails.index', compact('cocktails'));
    }

    public function show($id)
    {
        $client = new Client();
        $response = $client->get("https://www.thecocktaildb.com/api/json/v1/1/lookup.php?i=$id");
        $cocktail = json_decode($response->getBody(), true)['drinks'][0];

        return view('cocktails.show', compact('cocktail'));
    }
}