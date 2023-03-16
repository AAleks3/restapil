<?php

namespace App\Http\Controllers\Note;

use App\Http\Controllers\Controller;
use App\Http\Requests\Note\UpdateRequest;
use App\Http\Resources\Note\NoteResource;
use App\Models\Note;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Note $id) {
        $data = $request->validated();
        if( isset($data['photo']) ) {
            $data['photo'] = Storage::disk('public')->put('/images', $data['photo']);
        }
        $id->update($data);
        return new NoteResource($id);
    }
}
