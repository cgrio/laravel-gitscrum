<?php

namespace GitScrum\Models;

use GitScrum\Presenters\GlobalPresenter;
use Illuminate\Database\Eloquent\Model;

class Activities extends Model
{

    use GlobalPresenter;

    protected $fillable = [
        'user_id',
        'note_id',
        'issues_id',
        'workload',
        'description',
    ];

    public function issues()
    {
        return $this->belongsTo(Issue::class, 'issues_id', 'id');
    }

    public function users()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function notes()
    {
        return $this->belongsTo(Note::class, 'note_id', 'id');
    }
}
