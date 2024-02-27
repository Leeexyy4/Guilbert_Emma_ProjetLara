<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use App\Models\Comment;
use Illuminate\Http\Resources\Json\JsonResource;

class CommentResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        /** @var Comment $comments */
        $comments = $this->resource;

        return [
            "id"=> $this->id,
            "article_id"=> $this->article_id,
            "author"=> $this->author,
            "content"=> $this->content
        ];
    }
}
