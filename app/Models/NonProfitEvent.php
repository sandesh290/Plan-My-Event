<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class NonProfitEvent extends Model implements HasMedia
{
    use InteractsWithMedia;
    use HasFactory;
    protected $guarded = ['id'];

    public function details() {
        return url('/event-card/register/'.$this->getKey());
    }

    public function scopeFilter($query, $request) {
        if($request->has('search')) {
            $query->where('event_name','like','%'.$request->search.'%')
                        ->orWhere('event_location','like','%'.$request->search.'%');
        }

        return $query;
    }
}