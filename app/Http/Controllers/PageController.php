<?php

namespace App\Http\Controllers;

use App\Http\Requests\InfoRequest;
use App\Mail\InfoMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;

class PageController extends Controller
{
    private $url = 'https://fakestoreapi.com/products/';

    public function index()
    {

        $response = Http::get($this->url)->object();

        $data = [$response[0], $response[1], $response[2]];
        return view('index', ['data' => $data]);
    }
    public function list()
    {
        $response = Http::get($this->url)->object();

        return view('list', ['data' => $response]);
    }
    public function show($id)
    {
        $item = Http::get($this->url . $id)->object();
        return view('show', ['item' => $item]);
    }
    public function store(InfoRequest $request)
    {

        $data = [
            "product_id" => $request->product_id,
            // "product_name" => $request->product_name,
            // "product_price" => $request->product_price,
            "surname" => $request->surname,
            "name" => $request->name,
            "email" => $request->email,
        ];

        Mail::to($request->email)->send(new AdminMail($data));
        Mail::to($request->email)->send(new UserMail($data));
        return redirect()->route('thank');
    }

    public function thank()
    {
        return view('thank');
    }
}
