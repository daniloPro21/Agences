<?php

namespace App\Http\Controllers;

use App\Properties;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Symfony\Component\Console\Helper\Table;

class PropertiesController extends Controller
{

    public function __construct ()
    {
        $this->middleware('auth');

    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $properties = Properties::all();
        return view('welcome', compact('properties'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return void
     */
    public function create()
    {
        return view('pages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return void
     */
    public function store(Request $request)
    {

        $titre = $request->get('title');
        $equipe = $request->file('image');
        $a = \request()->file('affiche');
        $filenames = uniqid().'-'.$a->getClientOriginalName();

        $a->move(public_path().'/uploads/',$filenames);
        $fa = array();
        foreach ($equipe as $c){
            $filename = uniqid().'-'.$c->getClientOriginalName();
            array_push($fa, $filename);
            $c->move(public_path()."/uploads/$titre", $filename);

        }
        auth()->user()->properties()->create([
            'title' => $request->get('title'),
            'surface' => $request->get('surface'),
            'place' => $request->get('place'),
            'city' => $request->get('city'),
            'chambre' =>$request->get('chambre'),
            'garage' => $request->get('garage'),
            'price' => $request->get('price'),
            'douche' =>$request->get('douche'),
            'user_id' => $request->get('user_id'),
            'affiche'=>$filenames,
            'image' =>serialize($fa)

        ]);

        return redirect ('categories')->with ('message', 'client Ajouter avec success');
    }


    /**
     * Display the specified resource.
     *
     * @param Properties $property
     * @return Response
     */
    public function show(Properties $property)
    {
        $order= Properties::find([21,22,23,24]);
        return view('pages.show', [
            'property' => $property,
            'order' => $order
        ]);
    }

    public function sendemail()
    {

        $data = request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'place' => 'required',
            'city' => 'required',
            'subject' => 'required',
            'message' => 'required'
        ]);

        Mail::to('home@test.com')->send(new ContactMail($data));

        return back()->with('message', 'Votre demande a ete bien prise en compte');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }

    public function depot(){

        $properties = Properties::all()->where('user_id', '=', auth()->user()->id);
        return view('pages.categories', compact('properties'));
    }
}
