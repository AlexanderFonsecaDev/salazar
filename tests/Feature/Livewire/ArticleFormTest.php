<?php

namespace Tests\Feature\Livewire;

use App\Http\Livewire\ArticleForm;
use App\Models\Article;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Livewire\Livewire;
use Tests\TestCase;

class ArticleFormTest extends TestCase
{

    use RefreshDatabase;

    /** @test */
    public function article_form_render_properly()
    {
        $this->get(route('articles.create'))
            ->assertSeeLivewire(ArticleForm::class);


        $article = Article::factory()->create();

        $this->get(route('articles.edit',$article))
            ->assertSeeLivewire(ArticleForm::class);

    }

    /** @test */
    public function can_create_new_articles()
    {
        Livewire::test(ArticleForm::class)
            ->set('article.title', 'New article')
            ->set('article.slug', 'new-article')
            ->set('article.content', 'Content article')
            ->call('save')
            ->assertSessionHas('status')
            ->assertRedirect(route('articles.index'));

        $this->assertDatabaseHas('articles', [
            'title' => 'New article',
            'slug' => 'new-article',
            'content' => 'Content article'
        ]);
    }


    /** @test */
    public function can_update_articles()
    {

        $article = Article::factory()->create();

        Livewire::test(ArticleForm::class,['article' => $article])
            ->assertSet('article.title',$article->title)
            ->assertSet('article.slug',$article->slug)
            ->assertSet('article.content',$article->content)
            ->set('article.title','Title updated')
            ->set('article.slug','title-updated')
            ->set('article.content','Content updated')
            ->call("save")
            ->assertSessionHas('status')
            ->assertRedirect(route('articles.index'));

        $this->assertDatabaseCount('articles',1);

        $this->assertDatabaseHas('articles', [
            'title'   => "Title updated",
            'slug'    => "title-updated",
            'content' => "Content updated"
        ]);
    }

    /** @test */
    public function title_is_required()
    {
        Livewire::test(ArticleForm::class)
            ->set('article.content', "Content for the article")
            ->call("save")
            ->assertHasErrors(['article.title' =>'required'])
            ;
    }

    /** @test */
    public function slug_is_required()
    {
        Livewire::test(ArticleForm::class)
            ->set('article.title',"Title for article")
            ->set('article.content', "Content for the article")
            ->call("save")
            ->assertHasErrors(['article.slug' =>'required'])
        ;
    }

    /** @test */
    public function slug_is_unique()
    {

        $article = Article::factory()->create();

        Livewire::test(ArticleForm::class)
            ->set('article.title',"Title for article")
            ->set('article.slug',$article->slug)
            ->set('article.content', "Content for the article")
            ->call("save")
            ->assertHasErrors(['article.slug' =>'unique'])
        ;
    }

    /** @test */
    public function unique_rule_should_be_ignored_when_updating_the_same_slug()
    {

        $article = Article::factory()->create();

        Livewire::test(ArticleForm::class)
            ->set('article.title',"Title for article")
            ->set('article.slug',$article->slug)
            ->set('article.content', "Content for the article")
            ->call("save")
            ->assertHasErrors(['article.slug' =>'unique'])
        ;
    }

    /** @test */
    public function title_must_be_4_characters_min()
    {
        Livewire::test(ArticleForm::class)
            ->set("article.title","AR")
            ->set('article.content', "Content for the article")
            ->call("save")
            ->assertHasErrors(['article.title' =>'min'])
        ;
    }

    /** @test */
    public function content_is_required()
    {
        Livewire::test(ArticleForm::class)
            ->set("article.title","Title for new article")
            ->call("save")
            ->assertHasErrors(['article.content' =>'required'])
        ;
    }

    /** @test */
    public function real_time_validations_works_for_title()
    {
        Livewire::test(ArticleForm::class)
            ->set("article.title","")
            ->assertHasErrors(['article.title' =>'required'])
            ->set("article.title","AR")
            ->assertHasErrors(['article.title' =>'min'])
            ->set("article.title","Title for the new article")
            ->assertHasNoErrors(['article.title' =>'required'])
        ;
    }

    /** @test */
    public function real_time_validations_works_for_content()
    {
        Livewire::test(ArticleForm::class)
            ->set("article.content","")
            ->assertHasErrors(['article.content' =>'required'])
            ->set("article.content","Body for the new article")
            ->assertHasNoErrors(['article.content' =>'required'])
        ;
    }


}
