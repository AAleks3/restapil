<?php

namespace Tests\Feature;

use App\Models\Note;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class NoteTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testNotesController()
    {
        $response = $this->get('api/v1/notebook/');
        $response->assertStatus(200);
    }

    public function testCreateController()
    {
        $article = Note::factory()->create();
        $response = $this->get("api/v1/notebook/$article->id/");
        $response->assertStatus(200);
    }

    public function testShowController()
    {
        $response = $this->get('api/v1/notebook/20/');
        $response->assertStatus(200);
    }

    public function testUpdateController()
    {
        Note::find(21)->update(['name' => 'updated']);
        $response = $this->get('api/v1/notebook/21/');
        $response->assertStatus(200)->assertJsonPath('data.name', 'updated');
    }

    public function testDeleteController()
    {
        Note::find(27)->delete();
        $response = $this->get('api/v1/notebook/27/');
        $response->assertStatus(404);
    }
}
