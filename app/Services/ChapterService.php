<?php
namespace App\Services;

use App\Chapter;
use Illuminate\Http\Request;

class ChapterService {
    public function getAllChapters(){
        $chapters = Chapter::all()->toArray();
        return response()->json($chapters);
    }

    public function createNewChapter(Request $request){
        $chapters = $request->all();
        Chapter::create($chapters);
        return response()->json(['message' => 'chapter created'], 200);
    }

    public function updateChapter($id, Request $request){
        $chapter = Chapter::find($id);
        $data = $request->all();
        $chapter->id_manga = $data['id_manga'];
        $chapter->title = $data['title'];
        $chapter->pages = $data['pages'];
        $chapter->save();
        return response()->json(['message'=>'chapter updated'], 200);
    }

    public function deleteChapter($id){
        $chapter = Chapter::find($id);
        $chapter->delete();
        return response()->json(['message'=>'chapter deleted'], 200);
    }
}
