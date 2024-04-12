<?php

namespace App\Http\Controllers;

use App\Http\Resources\ArticleResource;
use App\Http\Resources\CommentResource;
use App\Models\Article;
use Illuminate\Database\Eloquent\Collection;
use App\Http\Requests\ArticleRequest;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        /** @var Collection<Article> $articles */

        $articles = Article::all();
        return ArticleResource::collection($articles);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ArticleRequest $request)
    {
        /** @var Article $articles */

        $articles = Article::query()->create($request->validated());
        return ArticleResource::make($articles);

    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        /** @var Article $article */

        $article = Article::query()->findOrFail($id);

        return ArticleResource::make($article);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ArticleRequest $request, int $id)
    {
        /** @var Article $article */

        $article = Article::query()->findOrFail($id);
        $article->update($request->validated());

        return ArticleResource::make($article);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        /** @var Article $article */

        $article = Article::query()->findOrFail($id);

        // Supprimer les commentaires associés à cet article
        $article->comments()->delete();

        // Supprimer l'article
        $article->delete();

        return response()->json(['message' => 'Article deleted successfully']);
    }

    /**
     * Search for articles based on a given query.
     */

     public function search(string $search)
     {
         /** @var Collection<Article> $articles */

         $articles = Article::query()
             ->where('title', 'like', '%' . $search . '%')
             ->orWhere('content', 'like', '%' . $search . '%')
             ->get();

         return ArticleResource::collection($articles);
     }

    /**
     * Get comments for a specific article.
     */
    public function comments(int $id)
    {
        /** @var Article $article */

        $article = Article::query()->findOrFail($id);

        return response()
            ->json([
                'comments' => CommentResource::collection($article->comments)
            ]);
    }

    public function afficherArticle()
    {
        return view('article');
    }

    public function createarticle()
    {
        return view('createarticle');
    }

    public function updatearticle()
    {
        return view('updatearticle');
    }

    public function deletearticle()
    {
        return view('deletearticle');
    }

    public function searcharticle()
    {
        return view('searcharticle');
    }

}


