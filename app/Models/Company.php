<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $table = 'companies';
    protected $primaryKey = 'company_id';

    protected $fillable = [
        'company_name',
        'company_contact',
        'company_email',
        'company_address',
        'company_logo',
        'company_type',
        'additional_details',
        'status',
        'c_date',
        'm_date',
    ];

    public $timestamps = true;

    const CREATED_AT = 'c_date';
    const UPDATED_AT = 'm_date';
}
