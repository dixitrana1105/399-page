<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SectionWiseData extends Model
{
    use HasFactory;

    protected $table = 'section_wise_data';

    protected $fillable = [
        'id',
        'description',
        'image',
        'title',
        'section',
        'currency',
        'button_link',
        'handing',
        'employee_ids',
        'branches',
        'button_details',
        'status',
        'created_at',
        'updated_at',
    ];
}
