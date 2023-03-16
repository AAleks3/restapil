<?php

namespace App\Http\Controllers\Note;

use App\Http\Controllers\Controller;
use App\Http\Resources\Note\NoteResource;
use App\Models\Note;
use Illuminate\Http\Request;

class NotesController extends Controller
{
    public function __invoke() {

        $notes = Note::all();

        // Пагинация
        $per_page = $_GET['pp'] ?? 10;
        if (isset($_GET['page'])) {
            $notes = Note::paginate($per_page);
        }

        return NoteResource::collection($notes);
    }
}
