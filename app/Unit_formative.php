<?php
/**
 * Created by PhpStorm.
 * User: Emmanuel-Inv.Borma
 * Date: 16/07/2018
 * Time: 10:05
 */

namespace CHT;

use Illuminate\Database\Eloquent\Model;

class Unit_formative extends Model
{

    protected $table = 'unit_formative';
    protected $primaryKey = 'code';
    public $incrementing = false;
    public $timestamps = false;

    protected $fillable = [
        'code', 'name', 'hours'
    ];

}