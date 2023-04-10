<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function event() {
        return $this->belongsTo(ProfitEvent::class, 'profit_event_id');
    }

    public function scopeFilters($query, $request) {
        if($request->has('event_id') && $request->event_id !== 'all') {
            $query->where('profit_event_id',$request->event_id);
        }

        return $query;
    }
}
