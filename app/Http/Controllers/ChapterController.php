<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Chapter;
use App\Services\ChapterService;

class ChapterController extends Controller
{
    protected $chapterService;

    public function __construct(ChapterService $chapterService)
    {
        $this->chapterService = $chapterService;
    }

    public function chapter()
    {
        return $this->chapterService->chapter();
    }

    public function index(){
        return $this->chapterService->getAllChapters();
    }

    public function store(Request $request){
        return $this->chapterService->createNewChapter($request);
    }

    public function update($id, Request $request){
        return $this->chapterService->updateChapter($id, $request);
    }

    public function destroy($id){
        return $this->chapterService->deleteChapter($id);
    }
}
