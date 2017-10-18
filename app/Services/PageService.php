<?php
namespace App\Services;

use App\Page;
use Illuminate\Http\Request;

class PageService
{
    public function getAllPages(){
        $pages = Page::all()->toArray();
        return response()->json([$pages]);
    }

    public function createNewPage(Request $request)
    {
       if($request->hasFile('image')){
            $file = $request->file('image')->store('image');
            $chapter = $request['id_chapter'];
            $page = Page::create([
                'id_chapter' => $chapter,
                'image' => $file
            ]);
            $page->save();
        }
        return response()->json(['message'=>'pages created'], 200);
    }

    public function updatePage($id, Request $request)
    {
        if($request->hasFile('image')){
            $file = $request->file('image')->store('image');
            $chapter = $request['id_chapter'];
            $page = Page::find($id);
            $page->image = $file;
            $page->id_chapter = $chapter;
            $page->save();
        }
        return response()->json(['message'=>'page updated'], 200);
    }

    public function deletePage($id)
    {
        $page = Page::find($id);
        $page->delete();
        return response()->json(['message'=>'page deleted'], 200);
    }
}