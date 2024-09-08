<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Job> $jobs
 * @property-read int|null $jobs_count
 * @method static \Database\Factories\EmployerFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Employer newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Employer newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Employer query()
 * @method static \Illuminate\Database\Eloquent\Builder|Employer whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employer whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employer whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employer whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Employer extends Model
{
    use HasFactory;

    public function jobs()
    {
        return $this->hasMany(Job::class);
    }
}
