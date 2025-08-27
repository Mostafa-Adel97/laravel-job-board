<?php

namespace App\Models;



class Job 
{
    public static function all(){
        return [
            [ 'title'=>'Software Engineer','Salary'=>'$1000'],
            [ 'title'=>'Graphic Deisgner','Salary'=>'$2000']
        ];
    }
}
