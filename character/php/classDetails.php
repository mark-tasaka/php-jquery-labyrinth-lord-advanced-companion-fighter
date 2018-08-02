<?php

/*Fighter, Paladin, Ranger*/

function experienceNextLevel ($level)
{
    $xp = "0";

    switch($level)
    {
        case 1:
            $xp = "2,035";
            break;
            
        case 2:
            $xp = "4,065";
            break;
            
        case 3:
            $xp = "8,125";
            break;
            
        case 4:
            $xp = "16,251";
            break;
            
        case 5:
            $xp = "32,501";
            break;
            
        case 6:
            $xp = "65,001";
            break;
            
        case 7:
            $xp = "120,001";
            break;
            
        case 8:
            $xp = "240,001";
            break;
            
        case 9:
            $xp = "360,001";
            break;
            
        case 10:
            $xp = "480,001";
            break;
            
        case 11:
            $xp = "600,001";
            break;
            
        case 12:
            $xp = "720,001";
            break;
            
        case 13:
            $xp = "840,001";
            break;
            
        case 14:
            $xp = "960,001";
            break;
            
        case 15:
            $xp = "1,080,001";
            break;
            
        default:
            $xp = "___";
            
    }
    
    return $xp;
}


function thacoAdjust ($level)
{
    $minusThaco = 1;
    
    if($level == 3)
    {
        $minusThaco = 2;
    }
    else if($level == 4)
    {
        $minusThaco = 3;
    }
    else if($level == 5)
    {
        $minusThaco = 4;
    }
    else if($level == 6)
    {
        $minusThaco = 5;
    }
    else if($level >= 7 && $level <= 8)
    {
        $minusThaco = 6;
    }
    else if($level == 9)
    {
        $minusThaco = 7;
    }
    else if($level >= 10 && $level <= 11)
    {
        $minusThaco = 8;
    }
    else if($level == 12)
    {
        $minusThaco = 9;
    }
    else if($level == 13)
    {
        $minusThaco = 10;
    }
    else if($level == 14)
    {
        $minusThaco = 11;
    }
    else if($level == 15)
    {
        $minusThaco = 12;
    }
    
    return $minusThaco;
}

function saveBreathAttacks ($level)
{
    $save = 0;
    
    if($level >= 1 && $level <= 3)
    {
        $save = 15;
    }
    else if($level >= 4 && $level <= 6)
    {
        $save = 13;
    }
    else if($level >= 7 && $level <= 9)
    {
        $save = 9;
    }
    else if($level >= 10 && $level <= 12)
    {
        $save = 7;
    }
    else if($level >= 13 && $level <= 15)
    {
        $save = 5;
    }
    
    return $save;
}

function savePoisonDeath ($level)
{
    $save = 0;
    
    if($level >= 1 && $level <= 3)
    {
        $save = 12;
    }
    else if($level >= 4 && $level <= 6)
    {
        $save = 10;
    }
    else if($level >= 7 && $level <= 9)
    {
        $save = 8;
    }
    else if($level >= 10 && $level <= 12)
    {
        $save = 6;
    }
    else if($level >= 13 && $level <= 15)
    {
        $save = 4;
    }
    
    return $save;
}

function savePetrify ($level)
{
    $save = 0;
    
    if($level >= 1 && $level <= 3)
    {
        $save = 14;
    }
    else if($level >= 4 && $level <= 6)
    {
        $save = 12;
    }
    else if($level >= 7 && $level <= 9)
    {
        $save = 12;
    }
    else if($level >= 10 && $level <= 12)
    {
        $save = 8;
    }
    else if($level >= 13 && $level <= 15)
    {
        $save = 6;
    }
    
    return $save;
}


function saveWand ($level)
{
    $save = 0;
    
    if($level >= 1 && $level <= 3)
    {
        $save = 13;
    }
    else if($level >= 4 && $level <= 6)
    {
        $save = 11;
    }
    else if($level >= 7 && $level <= 9)
    {
        $save = 9;
    }
    else if($level >= 10 && $level <= 12)
    {
        $save = 7;
    }
    else if($level >= 13 && $level <= 15)
    {
        $save = 5;
    }
    
    return $save;
}


function saveSpell ($level)
{
    $save = 0;
    
    if($level >= 1 && $level <= 3)
    {
        $save = 16;
    }
    else if($level >= 4 && $level <= 6)
    {
        $save = 14;
    }
    else if($level >= 7 && $level <= 9)
    {
        $save = 12;
    }
    else if($level >= 10 && $level <= 12)
    {
        $save = 10;
    }
    else if($level >= 13 && $level <= 15)
    {
        $save = 8;
    }
    
    return $save;
}



?>