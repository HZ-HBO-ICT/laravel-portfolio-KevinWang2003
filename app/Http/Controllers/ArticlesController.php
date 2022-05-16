<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{

    /**
     * The Index of the article page
     */
    public function index()
    {
        return view('blog');
    }

    /**
     *Shows a specific Article Page
     */
    public function show(Article $article)
    {
        return view('articles.show', ['article' => $article]);
    }

    /**
     * Function to create new articles
     */
    public function create()
    {
        return view('articles.create');
    }

    /**
     * Function to store new data to the database
     */
    public function store(Request $request)
    {
        Article::create($this->validateArticle($request));
        return redirect(route('articles.index'));
    }

    /**
     * Function to show specific article to edit
     */
    public function edit(Article $article)
    {
        return view('articles.edit', compact('article'));
    }

    /**
     * Function to update specific Article
     */
    public function update(Request $request, Article $article)
    {
        $article->update($this->validateArticle($request));
        return redirect(route('articles.index'));
    }

    /**
     * Deletes Article
     */
    public function destroy(Article $article)
    {
        $article->delete();
        return redirect(route('articles.index'));
    }

    /**
     * @param Request $request
     * @return array
     */
    public function validateArticle(Request $request): array
    {
        return $request->validate([
            'title' => 'required',
            'excerpt' => 'required',
            'body' => 'required'
        ]);
    }
}
