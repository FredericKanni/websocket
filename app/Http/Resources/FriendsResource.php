<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class FriendsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        if (isset($this->token)) {
            
          
            return [
                'id' => $this->id,
                // 'name' => $this->name,
                'email' => $this->email,
               
                   
            ];
        } else {
            
            return parent::toArray($request);
           
        }
    }
}
