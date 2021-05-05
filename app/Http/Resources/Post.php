<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Resources\Json\JsonResource;

class Post extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
      Carbon::setLocale('pt_BR');
      return [
          'id' => $this->id,
          'title' => $this->title,
          'content' => $this->content,
          'url_photo' => $this->filename,
          'updated_at' => $this->updated_at->diffForHumans(),
      ];
    }
}
