<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function event() {
        return $this->belongsTo(NonProfitEvent::class, 'non_profit_event_id');
    }

    public function scopeFilters($query, $request) {
        if($request->has('event_id') && $request->event_id !== 'all') {
            $query->where('non_profit_event_id',$request->event_id);
        }

        return $query;
    }
}
