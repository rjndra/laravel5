<?php

namespace App\Http\Controllers;


use App\Http\Requests;
use App\Http\Controllers\Controller;
use Request;
use Document;

class DocumentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */

    public function index()
    {
        
        $documents = \App\Document::all();

        return view('document.index', compact('documents'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */

    public function create()
    {
        return view('document.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */

    public function store()
    {
       
        $request = Request::all();

        // $this->validate($request);

        \App\Document::create($request);

        return redirect('document');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */

    public function show($id)
    {
        $document = \App\Document::FindOrFail($id);

        return view('document.show', compact('document'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */

    public function edit($id)
    {
        $document = \App\Document::FindOrFail($id);

        return view('document.edit', compact('document'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */

    public function update($id)
    {
        $request = Request::all();

        $document = \App\Document::FindOrFail($id);
        $document->update($request);

        return redirect('document');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $document = \App\Document::FindOrFail($id);
        $document->delete();

        return redirect('document');    
    }
}
