<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;
    protected $table = 'transaction';
    protected $fillable = [
        'itemnumber',
        'controlnumber',
        'partyrepresented',
        'gender',
        'casetitle',
        'court',
        'casetype',
        'casenumber',
        'lastactiontaken',
        'casestatus',
        'startdate',
        'casedate',
        'causeofaction',
        'causeoftermination',
    ];
}
