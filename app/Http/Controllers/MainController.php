<?php

namespace App\Http\Controllers;
use App\Models\Settings;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){
        return view('index');
    }

    public function store(Request $req)
    {

        $topics = new Settings();

        $imageName = time().'.'.$req->image->extension();
        $topics->image = $req->image->move('images', $imageName);

        if ($topics->save()) {

            return back()->with('success', 'Resim Başarıyla Eklendi 🙂');

        }

        return back()->withErrors('fail', 'Resim Eklenirken Hata Oluştu!');

    }
    public function data(){
       $veri= Settings::all();
       return view('image',compact('veri'));
    }
}
