<?php

namespace App\Http\Resources;
use App\Quiz;
use Illuminate\Http\Resources\Json\JsonResource;

class Category extends JsonResource
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
          'name'=>$this->name,
          'id'=>$this->id,
          'count'=>Quiz::where('category_id', $this->id)->count(),
          'quizzes'=>Quiz::where('category_id', $this->id)->get(),
        ];
    }
}
