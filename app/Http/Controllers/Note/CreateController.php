<?php

namespace App\Http\Controllers\Note;

use App\Http\Controllers\Controller;
use App\Http\Requests\Note\StoreRequest;
use App\Http\Resources\Note\NoteResource;
use App\Models\Note;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CreateController extends Controller
{
    public function __invoke(StoreRequest $request) {
        $data = $request->validated();
        if( isset($data['photo']) ) {
            $data['photo'] = Storage::disk('public')->put('/images', $data['photo']);
        }
        $note = Note::create($data);
        return new NoteResource($note);
    }
}
