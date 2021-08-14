<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Source
 *
 * @property int $id
 * @property string $url Source URL
 * @property string $description Source description
 * @property int $user_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\SourceFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Source newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Source newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Source query()
 * @method static \Illuminate\Database\Eloquent\Builder|Source whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Source whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Source whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Source whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Source whereUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Source whereUserId($value)
 * @mixin \Eloquent
 */
class Source extends Model
{
    use HasFactory;
}
