<?php

namespace App\Http\Controllers;

use App\Http\Requests\ComicRequest;
use App\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all_comics = Comic::all();

        return view('home', compact('all_comics'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ComicRequest $request)
    {
        $form_data = $request->all();

        $new_comic = new Comic();

        //$new_comic->title = $form_data['title'];
        //$new_comic->slug = Comic::generateSlug($new_comic->title);
        //$new_comic->price = $form_data['price'];
        //$new_comic->type = $form_data['type'];

        $form_data['slug'] = Comic::generateSlug(($form_data['title']));
        $new_comic->fill($form_data);
        $new_comic->save();

        return redirect(route('comics.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        return view('detail', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        return view('update', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function update(ComicRequest $request, Comic $comic)
    {
        $form_data = $request->all();

        // Controllo se ho cambiato il titolo, dovr?? rigenerare di nuovo lo slug, altrimenti mi tengo quello di prima.
        if($form_data['title'] != $comic->title){
            $form_data['slug'] = Comic::generateSlug($form_data['title']);
        }else {
            $form_data['slug'] = $comic->slug;
        }

        $comic->update($form_data);

        return redirect()->route('comics.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();

        return redirect()
        ->route('comics.index')
        ->with('deleted', "Il comic $comic->title ?? stato cancellato correttamente");
    }
}
