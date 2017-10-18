<?php

namespace App\Http\Controllers;

use App\Page;
use Illuminate\Http\Request;
use App\Services\PageService;

class PageController extends Controller
{
    protected $pageService;

    public function __construct(PageService $pageService)
    {
        $this->pageService = $pageService;
    }

    public function page()
    {
        return $this->pageService->page();
    }

    public function index($manga, $chapter_id)
    {
        return $this->pageService->getAllPages();
    }

    public function store(Request $request)
    {
        return $this->pageService->createNewPage($request);
    }

    public function update($manga, $chapter_id, $id, Request $request)
    {
        return $this->pageService->updatePage($id, $request);
    }

    public function destroy($manga, $chapter_id, $id)
    {
        return $this->pageService->deletePage($id);
    }
}
