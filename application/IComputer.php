<?php

namespace application;

interface IComputer
{
    public function start();

    public function shutdown();

    public function printParameters();

    public function identifyUser();

    public function restart();
}