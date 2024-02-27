<?php

namespace App\Http\Controllers;

use App\Http\Resources\CommentResource;
use Illuminate\Database\Eloquent\Collection;
use App\Models\Comment;
use App\Http\Requests\CommentRequest;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        /** @var Collection<Comment> $comments */

        $comments = Comment::all();
        return CommentResource::collection($comments);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CommentRequest $request)
    {
        $validatedData = $request->validated();

        // Assurez-vous que l'article avec l'ID spécifié existe
        $articleExists = Comment::query()->where('id', $validatedData['article_id'])->exists();

        if (!$articleExists) {
            return response()->json(['message' => 'L\'article spécifié n\'existe pas.'], 404);
        }

        // Créez le commentaire
        $comment = Comment::create($validatedData);

        return CommentResource::make($comment);

    }


    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        /** @var Comment $comments */

        $comments = Comment::query()->findOrFail($id);

        return CommentResource::make($comments);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CommentRequest $request, int $id)
    {
        /** @var Comment $comment */

        $comment = Comment::query()->findOrFail($id);
        $comment->update($request->validated());

        return CommentResource::make($comment);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        /** @var Comment $comment */

        $comment = Comment::query()->findOrFail($id);

        // Supprimer le commentaire
        $comment->delete();

        return response()->json(['message' => 'Comment deleted successfully']);
    }


    /**
     * Search for comments based on a given query.
     */
    public function search(string $search)
    {
        /** @var Collection<Comment> $comments */

        $comments = Comment::query()
            ->where('author', 'ILIKE', '%' . $search . '%')
            ->orWhere('content', 'ILIKE', '%' . $search . '%')
            ->get();

        if ($comments->isEmpty()) {
            // Aucun résultat trouvé, retournez une réponse appropriée
            return response()->json(['message' => 'Aucun commentaire trouvé pour la recherche.'], 200);
        }

        return CommentResource::collection($comments);
    }


    public function afficherComment()
    {
        return view('commentaire');
    }



}

