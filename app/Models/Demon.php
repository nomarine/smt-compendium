<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Demon extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'lore'
    ];

    public function rules() {
        return [
            'name' => 'required',
            'lore' => 'required'
        ];
    }

    public function feedback() {
        return [
            'required' => ':attribute is required.',
        ];
    }
}
