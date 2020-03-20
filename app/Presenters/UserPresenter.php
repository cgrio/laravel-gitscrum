<?php

namespace GitScrum\Presenters;

trait UserPresenter
{
    public function setNameAttribute($value)
    {
        $this->attributes['name'] = $value;

        if (empty($value)) {
            $this->attributes['name'] = $this->attributes['username'];
        }
    }

    public function getProviderAttribute()
    {
        return isset($this->attributes['provider'])?ucfirst($this->attributes['provider']):"Local";
    }
}
