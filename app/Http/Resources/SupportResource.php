<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class SupportResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        // return parent::toArray($request);
        return [
            'id' => $this->id,
            'subject'=> $this->subject,
            'description'=> $this->description,
            'dt_created'=> Carbon::make($this->created_at)->format('Y-m-d H:i:s'),
            'dt_updated'=> Carbon::make($this->updated_at)->format('Y-m-d H:i:s'),
        ];
    }
}
