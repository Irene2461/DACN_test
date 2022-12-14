<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Room;

class Image extends Model
{
    use HasFactory;

    protected $fillable=[
        'type',
        'image',
        'room_id',
    ];

    public function rooms(){
        return $this->belongsTo(Room::class);
    }

    
    protected $table = 'images';
    protected $guarded = [''];
    
}
