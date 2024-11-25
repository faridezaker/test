<?php

namespace App\Http\Resources\Api\V1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;
use Morilog\Jalali\Jalalian;

class CourseCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @return array<int|string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'data'=>$this->collection->map(function ($item){
                return[
                    'title'=>$item->title,
                    'created_at'=>$item->created_at
                ];
            })
        ];

    }
}
