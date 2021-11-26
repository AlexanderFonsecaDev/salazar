<?php

namespace Tests\Feature\Livewire;

use App\Http\Livewire\Articles;
use App\Models\Article;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class ArticlesTest extends TestCase
{
    /** @test */
    public function articles_component_renders_properly()
    {

        $user = User::factory()->create();

        Livewire::actingAs($user)->test(Articles::class)
            ->assertStatus(200);
    }


}
