<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class QuestionResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'question' => $this->question,
            'answer' => $this->answer,
            'margin_top' => $this->margin_top,
            'margin_bottom' => $this->margin_bottom,
        ];
    }
}
