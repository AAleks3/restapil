<?php

namespace App\Http\Controllers\Note;

use App\Http\Controllers\Controller;
use App\Http\Resources\Note\NoteResource;
use App\Models\Note;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function __invoke(Note $id) {
        return new NoteResource($id);
    }
}
