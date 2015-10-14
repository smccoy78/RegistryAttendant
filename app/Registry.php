<?php namespace RegistryAttendant;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Registry extends Model {

	protected $fillable = [
        'attendee',
        'attendee_email',
        'event_id'
    ];

    public function scopeTodayEvents($query)
    {
        $query->join('events', 'events.id', '=', 'registries.event_id');
        $query->where('events.event_date', '=', Carbon::today());
    }

    public function event()
    {
        return $this->belongsTo('RegistryAttendant\Events');
    }
}
