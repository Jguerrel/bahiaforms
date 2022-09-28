<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use GuzzleHttp\Client;
use App\Models\vehicleform;

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
        $userData = $request->validate([
            'vin' => 'required|string|max:255',
            'company' => 'required|string|max:255',
        ]);
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
        //dd($request->company);
        
        
        $client = new Client(['base_uri' => 'https://eskemacloud.hondapanama.com']);
        $http   = $client->request('POST', '/wsservicestest/api/formautos/consultachasis', [
            'headers' => [
                'Authorization' => 'Bearer '.$response_token->level1->access_token,
                'Accept'        => 'application/json',
            ],
            
            'json' => [
                'ciacod' =>$request->company,
                'chasis' => $request->vin
            ]
        ]);
        $response = json_decode($http->getBody()->getContents());
        
        if( isset($response)){
            //dd($response);
            $data =  $response->sdtconsultaautos->item;
            $data->company = ($request->company=="01")?"Bahia Motors":"Bay Motors";

            $shows = vehicleform::where('chasis', '=', $request->vin)->get();
            return view('home',['data' => $data,'shows'=>$shows]);
        }
        //dd($data);
        return view('home');
        //return view('greetings', ['name' => 'Victoria']);

    }
}
