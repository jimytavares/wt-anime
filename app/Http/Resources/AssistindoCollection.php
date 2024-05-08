<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

class AssistindoCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @return array<int|string, mixed>
     */
    public function toArray(Request $request): array
    {
        
        return $this->collection->map(function ($item) {
            return [
                'id' => $item->id,
                'id_anime' => $item->id_anime,
                'id_user' => $item->id_user,
                'episodio' => $item->episodio,
                'dia_semana' => $item->dia_semana,
                'nota' => $item->nota,
                'link' => $item->link,
                'created_at' => $item->created_at,
                'updated_at' => $item->updated_at,
            ];
        })->toArray();
        
    }
}
