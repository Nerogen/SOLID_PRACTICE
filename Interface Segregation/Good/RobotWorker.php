<?php

namespace Good;

class RobotWorker implements Workable
{
    public function work(): void
    {
        echo "Robot worked!\n";
    }
}