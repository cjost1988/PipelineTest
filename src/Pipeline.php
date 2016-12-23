<?php

namespace Pipeline;

/**
 * Class Pipeline
 *
 * @package Pipeline
 * @author  Christian Jost <christian.jost@mapudo.com>
 */
class Pipeline
{
    /** @var string */
    protected $title;

    /** @var array */
    protected $tasks;

    /**
     * @param $task
     * @return $this
     */
    public function addTask($task)
    {
        $this->tasks[] = $task;
        return $this;
    }

    /**
     * @return array
     */
    public function getTasks()
    {
        return $this->tasks;
    }

    /**
     * @param array $tasks
     * @return Pipeline
     */
    public function setTasks($tasks)
    {
        $this->tasks = $tasks;
        return $this;
    }

    /**
     * Pipeline constructor.
     */
    public function __construct()
    {
        $this->title = 'default-title';
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     * @return Pipeline
     */
    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }
}
