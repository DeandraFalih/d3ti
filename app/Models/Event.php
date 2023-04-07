<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    protected $table = 'd3ti_event';
    protected $primaryKey = 'event_id';

    protected $fillable = [
        'event_title', 'event_featured_image', 'event_content', 'event_excerpt', 'event_date_of_event', 'event_status', 'event_date', 'event_author', 'event_link', 'event_meta', 'event_tags'
    ];
}
