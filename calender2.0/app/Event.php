<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Event extends Model
{

    use SoftDeletes;
    protected $fillable = ['title','start','end','color','description'];
 
    public function getStartAtrribute($value)
    {
        $dataStart = Carbon::createFromFormat('Y-m-d H:i:s', $value)->format('Y-m-d');
        $timeStart = Carbon::createFromFormat('Y-m-d H:i:s', $value)->format('H:i:s');

        return $this->start = ($timeStart == '00:00:00' ? $dataStart : $value);
    }

    public function getEndAtrribute($value){
        $dataEnd = Carbon::createFromFormat('Y-m-d H:i:s',$value)->format('Y-m-d');
        $timeEnd = Carbon::createFromFormat('Y-m-d H:i:s',$value)->format('H:i:s');

        return $this->end = ($timeEnd == '00:00:00' ? $dataEnd : $value);
    }
}
