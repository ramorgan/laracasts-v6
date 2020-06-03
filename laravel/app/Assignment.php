<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Assignment
 *
 * @property int $id
 * @property string $body
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int $completed
 * @property string|null $due_date
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Assignment newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Assignment newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Assignment query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Assignment whereBody($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Assignment whereCompleted($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Assignment whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Assignment whereDueDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Assignment whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Assignment whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Assignment extends Model
{
    public function complete()
    {
        $this->completed = true;
        $this->save();
    }
}
