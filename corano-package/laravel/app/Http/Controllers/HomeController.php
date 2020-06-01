<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DataKasus;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    // public function index()
    // {
    //     return view('home');
    // }

    public function index(){

        $odp = DataKasus::where('id_data', 1)->count();
        $pdp = DataKasus::where('id_data', 2)->count();
        $positif = DataKasus::where('id_data', 3)->count();
        $sembuh = DataKasus::where('id_data', 4)->count();
        $meninggal = DataKasus::where('id_data', 5)->count();
        return view('index', ['odp'=>$odp, 'pdp'=>$pdp, 'positif'=>$positif, 'sembuh'=>$sembuh, 'meninggal'=>$meninggal]);
    }

    public function about(){
        return view('about');
    }

    public function Tips(){
        return view('tips');
    }

    public function DataTerkini(){
        $response = Http::get('https://api.kawalcorona.com/indonesia');
        $data = $response->json();
        return view('DataTerkini' , compact('data'));

    }

    public function home(){
        return view('index');
    }

    public function register(){
        return view('register');
    }

    public function news(){
        $response2 = Http::get('http://newsapi.org/v2/top-headlines?country=id&category=health&apiKey=4e5a2895ab4e4d72a888becae8ce37a8');
        $data2 = $response2->json();

        return view('DataTerkini', compact('data2'));
    }
}
