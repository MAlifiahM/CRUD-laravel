<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Chapter;

class ChapterController extends Controller
{
    public function index(){
        $chapters = Chapter::all()->toArray();
        return response()->json($chapters);
    }

    public function store(Request $request){
        $chapters = $request->all();
        Chapter::create($chapters);
        return response()->json(['message' => 'chapter created'], 200);
    }

    public function update($id, Request $request){
        $chapter = Chapter::find($id);
        $data = $request->all();
        $chapter->id_manga = $data['id_manga'];
        $chapter->title = $data['title'];
        $chapter->pages = $data['pages'];
        $chapter->save();
        return response()->json(['message'=>'chapter updated'], 200);
    }

    public function destroy($id){
        $chapter = Chapter::find($id);
        $chapter->delete();
        return response()->json(['message'=>'chapter deleted'], 200);
    }
}
