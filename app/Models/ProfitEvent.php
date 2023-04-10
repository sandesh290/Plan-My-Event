<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class ProfitEvent extends Model implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;
    protected $guarded = ['id'];

    public function details() {
        return url('/event-card/buyTicket/'.$this->getKey());
    }

    public function scopeFilter($query, $request) {
        if($request->has('search')) {
            return $query->where('event_name','like','%'.$request->search.'%')
                        ->orWhere('event_location','like','%'.$request->search.'%');
        }
    }
}