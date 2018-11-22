<?php

namespace App\Http\Resources\Product;

use Illuminate\Http\Resources\Json\Resource;

class ProductCollection extends Resource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'name' => $this->name,
            'stock' => $this->stock,
            'salePrice' => round((1 - ($this->discount/100)) * $this->price, 2),
            'discount' => $this->discount,
            'href' => [
                'detail' => route('products.show', $this->id)
            ]
        ];
    }
}
