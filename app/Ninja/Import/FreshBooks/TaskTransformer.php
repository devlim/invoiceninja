<?php namespace App\Ninja\Import\FreshBooks;

use League\Fractal\TransformerAbstract;
use Illuminate\Support\Facades\Auth;

/*
class TaskTransformer extends TransformerAbstract
{

    public function transform($data)
    {
        // start by converting to seconds
        $seconds = ($data->hours * 3600);
        $timeLogFinish =  strtotime($data->date);
        $timeLogStart = intval($timeLogFinish - $seconds);
        $timeLog[] = [];
        $timelog[] = $timeLogStart;
        $timelog[] = $timeLogFinish;
        $timeLog = json_encode(array($timelog));

        return [
            'action' => 'stop',
            'time_log' => $timeLog,
            'description' => $data->task,
        ];
    }

}
*/