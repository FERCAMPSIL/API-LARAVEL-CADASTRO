<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ModeloResource extends JsonResource
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
            'marca_id' => $this->marca_id,
            'modelo' => $this->modelo,
            'created_at' => (string) $this->created_at,
            'updated_at' => (string) $this->updated_at,
            'marca' => $this->marca,
          ];
    
    }
}
