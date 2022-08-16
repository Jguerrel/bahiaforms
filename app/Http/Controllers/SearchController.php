<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use GuzzleHttp\Client;

class SearchController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function search_vin(Request $request)
    {
        //dd($request);
        $client_token = new Client(['base_uri' => 'https://eskemacloud.hondapanama.com']);
        $http_token   = $client_token->request('GET', '/wsservicestest/authv2/access_token', [
            'headers' => [
                
                'client_id' =>  '4cc16ff5a6924dc7a7b8af5d5bb87fb7',
                'clientsecret' => '2a195db7afe042fb8f301b264bfb766749808777511f6acf2d64ddd89899573302554ed',
                'user' => 'formdigi',
                'password' => 'A%h4g7#jK'
            ]
        ]);
        
        $response_token = json_decode($http_token->getBody()->getContents());
        //dd($response_token);
        
        
        $client = new Client(['base_uri' => 'https://eskemacloud.hondapanama.com']);
        $http   = $client->request('POST', '/wsservicestest/api/formautos/consultachasis', [
            'headers' => [
                'Authorization' => 'Bearer '.$response_token->level1->access_token,
                'Accept'        => 'application/json',
            ],
            
            'json' => [
                'ciacod' =>'01',
                'chasis' => $request->vin
            ]
        ]);
        $response = json_decode($http->getBody()->getContents());
        //dd($response);
        $data =  $response->sdtconsultaautos->item;
        //dd($data);
        return view('home',['data' => $data]);
        //return view('greetings', ['name' => 'Victoria']);

    }
}
