<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Resources\Json\JsonResource;

class PostResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'post_id' => $this->id,
            'post_title' => $this->title,
            'post_seo_title' => $this->seo_title,
            'post_excerpt' => $this->post_excerpt,
            'post_body' => $this->body,
            'post_type' => $this->post_type,
            'post_image' => $this->image,
            'post_slug' => $this->slug,
            'meta_description' => $this->meta_description,
            'meta_keywords' => $this->meta_keywords,
            'post_status' => $this->status,
            'post_featured' => $this->featured,
            'crated_at' => Carbon::parse($this->created_at)->format('d/m/Y'),
            'updated_at' => Carbon::parse($this->updated_at)->format('d/m/Y'),
            'author' => new UserResource($this->whenLoaded('author')),
            'category' => new CategoryResource($this->whenLoaded('category')),
        ];
    }
}
