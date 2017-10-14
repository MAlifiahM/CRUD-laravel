<?php
namespace App\Services;

use App\Manga;
use Illuminate\Http\Request;

class MangaService {
    public function index(){
        $mangas = Manga::all()->toArray();
        return response()->json($mangas);        
    }
    
    public function store(Request $request){
        $mangas = $request->all();
        Manga::create($mangas);

        return response()->json(['message'=>'manga created'], 200);
    }

    public function update($id, Request $request){
        $manga = Manga::find($id);
        $data = $request->all();
        $manga->id_user= $data['id_user'];
        $manga->title= $data['title'];
        $manga->genre= $data['genre'];
        $manga->save();
        return response()->json(['message'=>'manga updated'], 200);        
    }

    public function destroy($id){
        $manga = Manga::find($id);
        $manga->delete();
        return response()->json(['message'=>'manga deleted'], 200);
    }
}
