<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use App\Character;

class CharacterTest extends TestCase
{
    public function test_Health_starting_at_1() 
    {
        $fighter = new Character();
        $result = $fighter->getHealth();
        $this->assertEquals(1000, $result);
        
        
    }
    public function test_Level_starting_at_1() 
    {
        $fighter = new Character();
        $result = $fighter->getLevel();
        $this->assertEquals(1, $result);
    }

    public function test_starting_alive() 
    {
        $fighter = new Character();
       $result = $fighter->isAlive();
       $this->assertTrue($result);
      
    }
       
    public function test_character_can_damage_and_substract_from_health() {

        $attaker = new Character();
        $damaged = new Character();

        $attaker->hit(100, $damaged);

        $this-> assertEquals(900, $damaged->getHealth());
    }

    public function test_damage_exceeds_Health_it_becomes_0_and_character_dies() {

        //given
        $damaged = new Character();
        $attaker = new Character();

        //then
        $attaker->hit(1100,$damaged);
        //damage > health = health = 0 
        //health = 0 = character is alive = false
        $this -> assertEquals(0, $damaged->getHealth());
        $this -> assertFalse($damaged->isAlive());
    }

}
