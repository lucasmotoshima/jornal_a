<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
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
            'author_id' => $this->id,
            'author_name' => $this->name,
            'author_email' => $this->email,
            'author_created_at' => $this->created_at,
            'author_updated_at' => $this->updated_at,
            'author_email_verified_at' => $this->email_verified_at,
            'author_avatar' => $this->avatar,
            'posts' => new PostResource($this->whenLoaded('post'))
        ];
    }
}
