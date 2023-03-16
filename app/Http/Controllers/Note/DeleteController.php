<?php

namespace App\Http\Controllers\Note;

use App\Http\Controllers\Controller;
use App\Models\Note;
use Illuminate\Http\Request;

class DeleteController extends Controller
{
    public function __invoke(Note $id) {
        $success = $id->delete();
        if ($success) {
            return 'Запись удалена';
        }
        return 'Удаление прошло неудачно';
    }
}
