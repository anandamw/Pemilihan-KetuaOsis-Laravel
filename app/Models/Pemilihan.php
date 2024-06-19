<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pemilihan extends Model
{
    use HasFactory;

    protected $table = 'pemilihans';
    protected $guarded = ['id', 'created_at', 'updated_at'];

    public static function getAllPemilihan()
    {
        $query = DB::table('pemilihans')->join('users', 'pemilihans.users_id', '=', 'users.id')->join('kandidats', 'pemilihans.kandidats_id', '=', 'kandidats.id')->get();

        return $query;
    }
}
