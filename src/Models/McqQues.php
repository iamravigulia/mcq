<?php
namespace Edgewizz\Mcq\Models;

use Illuminate\Database\Eloquent\Model;

class McqQues extends Model{
    public function answers(){
        return $this->hasOne('Edgewizz\Mcq\Models\McqAns', 'question_id');
    }
    protected $table = 'fmt_mcq_ques';
}