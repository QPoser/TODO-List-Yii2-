<?php
namespace app\models\App;
use yii\db\ActiveRecord;

/**
 * Created by PhpStorm.
 * User: Andrey
 * Date: 18.03.2018
 * Time: 11:47
 */
/*
 * @var string name
 * @var created_at
 * @var priority
 * @var complete
 * @var end_date
 * @var task_id
 */
class Deal extends ActiveRecord
{

    public static function create($name, $priority, $promptly, $end_date, $task_id = 0): self
    {
        $deal = new static();
        $deal->name = $name;
        $deal->created_at = time();
        $deal->promptly = $promptly;
        $deal->priority = $priority;
        $deal->end_date = $end_date;
        $deal->task_id = $task_id;
        return $deal;
    }

    public function edit($name, $priority, $promptly, $end_date, $task_id = 0): void
    {
        $this->name = $name;
        $this->priority = $priority;
        $this->promptly = $promptly;
        $this->end_date = $end_date;
        $this->task_id = $task_id;
    }

    public function setComplete(): void
    {
        $this->complete = 1;
    }

    public function setUncomplete(): void
    {
        $this->complete = 0;
    }

}