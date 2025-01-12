<?php

class Robot implements Worker
{
  public function work(): void {
      echo "Robot worked!\n";
  }

  public function eat(): void {
      throw new Exception("Robots don't eat!");
  }
}