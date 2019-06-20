<?php

namespace application;

use \helpers\Helper;

abstract class Computer
{
    protected $CPU;
    protected $RAM;
    protected $video;
    protected $memory;
    private $isWork = false;

    protected $computerName = 'Computer';

    /**
     * Computer constructor.
     * @param $CPU
     * @param $RAM
     * @param $video
     * @param $memory
     * @param string $computerName
     */
    public function __construct($CPU, $RAM, $video, $memory, $computerName)
    {
        $this->CPU = $CPU;
        $this->RAM = $RAM;
        $this->video = $video;
        $this->memory = $memory;
        $this->computerName = $computerName;
    }

    /**
     * @throws \Exception
     */
    public function printParameters()
    {
        if ($this->isWork) {
            $message = "cpu: {$this->CPU},
            ram: {$this->RAM},
            video: {$this->video},
            memory: {$this->memory},
            computerNema: {$this->computerName}";
            echo Helper::printLine($message, Helper::$note);

        } else {
            throw new \Exception('Exeption!!!');
//            Helper::printLine("Not work", Helper::$failure);

        }
    }

    abstract public function identifyUser();


    public function start()
    {
        $this->isWork = true;
    }

    public function shutdown()
    {
        $this->isWork = false;
    }

    /**
     * @throws \Exception
     */
    public function restart()
    {
        if ($this->isWork) {
            $this->shutdown();
            $this->start();
        } else {
            throw new \Exception('Not work');
//            Helper::printLine("Not work", Helper::$failure);

        }
    }

    /**
     * @return mixed
     */
    public function getCPU()
    {
        return $this->CPU;
    }

    /**
     * @param mixed $CPU
     */
    public function setCPU($CPU)
    {
        $this->CPU = $CPU;
    }

    /**
     * @return mixed
     */
    public function getRAM()
    {
        return $this->RAM;
    }

    /**
     * @param mixed $RAM
     */
    public function setRAM($RAM)
    {
        $this->RAM = $RAM;
    }

    /**
     * @return mixed
     */
    public function getVideo()
    {
        return $this->video;
    }

    /**
     * @param mixed $video
     */
    public function setVideo($video)
    {
        $this->video = $video;
    }

    /**
     * @return mixed
     */
    public function getMemory()
    {
        return $this->memory;
    }

    /**
     * @param mixed $memory
     */
    public function setMemory($memory)
    {
        $this->memory = $memory;
    }

    /**
     * @return bool
     */
    public function isWork()
    {
        return $this->isWork;
    }

    /**
     * @param bool $isWork
     */
    public function setIsWork($isWork)
    {
        $this->isWork = $isWork;
    }
}

