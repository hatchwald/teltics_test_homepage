<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    public function index()
    {
        $base_url_api = env("URL_API");
        $data_product = Http::get($base_url_api . "/all-product");
        $response = $data_product->json();
        $status_product = $data_product->status();
        $data = [];
        $data['product'] = ["product_item" => $response, "status_prod" => $status_product];

        $data_service = Http::get($base_url_api . "/all-service");
        $response_service = $data_service->json();
        $status_service = $data_service->status();
        $data['servis'] = ["service_item" => $response_service, "status_service" => $status_service];
        return view('welcome', $data);
    }
}
