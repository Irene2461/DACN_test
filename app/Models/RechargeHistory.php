<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

class RechargeHistory extends Model
{
    use HasFactory;
    
    protected $table = 'recharge_history';
    protected $guarded = [''];

    const STATUS_DEFAULT = 1;
    const STATUS_CANCEL = -1;
    const STATUS_SUCCESS = 2;
    const STATUS_ERROR = -2;

    protected $setStatus = [
        self::STATUS_DEFAULT => [
            'name' => 'Khởi tạo',
            'class' => 'badge text-bg-secondary'
        ],
        self::STATUS_SUCCESS => [
            'name' => 'Hoàn thành',
            'class' => 'badge text-bg-success'
        ],
        self::STATUS_CANCEL => [
            'name' => 'Đã huỷ',
            'class' => 'badge text-bg-danger'
        ],
        self::STATUS_ERROR => [
            'name' => 'Lỗi',
            'class' => 'badge text-bg-warning'
        ],
    ];

    public function getStatus(){
        return Arr::get($this->setStatus, $this->status, []);
    }

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }
}
