<?php

namespace App\Http\Resources;

use App\Category;
use Illuminate\Http\Resources\Json\JsonResource;

class Quiz extends JsonResource
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
          'category'=>Category::find($this->category_id)->name,
          'topic'=>$this->topic,
          'image_url'=>$this->image_url,
        ];
    }
}
