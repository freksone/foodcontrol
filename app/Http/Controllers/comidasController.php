<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\comida;
use Illuminate\Http\Request;

class comidasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $comidas = comida::where('Comida', 'LIKE', "%$keyword%")
                ->orWhere('Horario', 'LIKE', "%$keyword%")
                ->orWhere('Area', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $comidas = comida::latest()->paginate($perPage);
        }

        return view('comidas.index', compact('comidas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('comidas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {

        $requestData = $request->all();

        comida::create($requestData);

        return redirect('/Comidas')->with('flash_message', 'comida added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $comida = comida::findOrFail($id);

        return view('comidas.show', compact('comida'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $comida = comida::findOrFail($id);

        return view('comidas.edit', compact('comida'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {

        $requestData = $request->all();

        $comida = comida::findOrFail($id);
        $comida->update($requestData);

        return redirect('comidas')->with('flash_message', 'comida updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        comida::destroy($id);

        return redirect('comidas')->with('flash_message', 'comida deleted!');
    }
}
