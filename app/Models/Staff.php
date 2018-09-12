<?php
/**
 * Created by PhpStorm.
 * User: Lenh Ho Xung
 * Date: 7/10/2018
 * Time: 5:19 PM
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    const STATUS_STAFF_REGISTER = 1;
    const STATUS_STAFF_UPDATED_INFO = 2;
    const STATUS_STAFF_EXPIRED = 3;

    public static $status = [
        self::STATUS_STAFF_REGISTER => "Dang ky tam",
        self::STATUS_STAFF_UPDATED_INFO => "Da update info",
        self::STATUS_STAFF_REGISTER => "Het han",
    ];

    protected $table = 'staffs';
    protected $primaryKey = 'id';
    protected $fillable = ['username', 'first_name', 'last_name', 'status'];

}