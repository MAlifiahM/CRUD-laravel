<?php

namespace App\Http\Controllers;

use App\Manga;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\MangaService;

class MangaController extends Controller
{
    protected $mangaServices;

    public function __construct(MangaService $mangaService)
    {
        $this->mangaService = $mangaService;
    }

    public function manga()
    {
        return $this->mangaService->manga();
    }

    public function index()
    {
        return $this->mangaService->getAllMangas();      
    }
    
    public function store(Request $request)
    {
      return $this->mangaService->createNewManga($request);
    }

    public function update($id, Request $request)
    {
        return $this->mangaService->updateManga($id, $request);
    }

    public function destroy($id)
    {
       return $this->mangaService->deleteManga($id);
    }
}
