<?php

namespace App;

class Character
{
    private int $health = 1000;
    private int $level = 1;
    private bool $alive = true;
    
    public function hit($damaged, Character $victim) {
        $victimLifePoints = $victim->getHealth(); 
        $victimLifePoints -= $damaged;
        $victim-> setHealth($victimLifePoints);
    }

    public function setHealth(int $lifePoints) {
        $this->health = $lifePoints;
    }
    
    public function getHealth()
    {
       return $this->health;
    }

   public function getLevel()
   {
       return $this->level;
    }

   public function isAlive()
   {
       return $this->alive;
    }

}
