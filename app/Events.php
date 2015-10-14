<?php namespace RegistryAttendant;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Events extends Model {

	protected $fillable = [
        'user_id',
        'event_name',
        'event_description',
        'event_date'
    ];

    protected $dates = ['event_date'];

    public function setEventAttribute($date)
    {
        $this->attributes['event_date'] = Carbon::parse($date);
    }

    public function scopeTodayEvents($query)
    {
        $query->where('event_date', '=', Carbon::today());
    }

    public function scopePastEvents($query)
    {
        $query->where('event_date', '<', Carbon::now());
    }

    public function scopeFutureEvents($query)
    {
        $query->where('event_date', '>', Carbon::now());
    }

    public function user()
    {
        return $this->belongsTo('RegistryAttendant\User');
    }

    public function registry()
    {
        return $this->hasMany('RegistryAttendant\Registry');
    }
}
