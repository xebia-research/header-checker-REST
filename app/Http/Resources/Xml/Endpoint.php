<?php

namespace App\Http\Resources\Xml;

use App\Http\Resources\Types\Xml\Resource;

class Endpoint extends Resource
{
    /**
     * The "data" wrapper that should be applied.
     *
     * PHP arrays can't have same-named keys, but XML can.
     * This wrapper renames your single resource nicely.
     *
     * <data>
     *   <resource>
     *     <id>123</id>
     *   </resource>
     * </data>
     *
     * @var string
     */
    public static $wrap = 'endpoint';

    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'url' => $this->url,
            'method' => $this->method,
        ];
    }
}
