<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use App\Models\Article;
use Illuminate\Http\Resources\Json\JsonResource;

class ArticleResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        /** @var Article $articles */
        $articles = $this->resource;

        return [
            "id"=> $this->id,
            "title"=> $this->title,
            "image_url"=> $this->image_url,
            "content"=> $this->content
        ];
    }
}
