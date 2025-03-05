<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PaginationResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            "current_page" => $this->currentPage(),
            "next_page_url" => $this->nextPageUrl(),
            "last_page" => $this->lastPage(),
            "total" => $this->total(),
        ];
    }
}
