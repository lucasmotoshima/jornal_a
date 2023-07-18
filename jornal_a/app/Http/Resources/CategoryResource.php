<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CategoryResource extends JsonResource
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
            'category_id' => $this->id,
            'category_parent_id' => $this->parent_id,
            'category_order' => $this->order,
            'category_name' => $this->name,
            'category_slug' => $this->slug,
            'category_created_at' => $this->created_at,
            'category_updated_at' => $this->updated_at,
        ];
    }

    public function with($request){
        return [
            'version' => "1.0.0",
            'author_url' => "https://mditech.net"
        ];
    }
}
