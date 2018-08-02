<?php
/*Fighter Class*/

function levelLimit ($race, $level)
{
    $characterLevel = 0;
    
    if($race === "Dwarf")
    {
        if($level <= 9)
        {
            $characterLevel = $level;
        }
        else
        {
            $characterLevel = 9;
        }
    }
    else if($race === "Elf")
    {
        if($level <= 10)
        {
            $characterLevel = $level;
        }
        else
        {
            $characterLevel = 10;
        }
    }
    else if($race === "Gnome")
    {
        if($level <= 6)
        {
            $characterLevel = $level;
        }
        else
        {
            $characterLevel = 6;
        }
    }
    else if($race === "Halfling")
    {
        if($level <= 6)
        {
            $characterLevel = $level;
        }
        else
        {
            $characterLevel = 6;
        }
    }
    else if($race === "Half-Elf")
    {
        if($level <= 12)
        {
            $characterLevel = $level;
        }
        else
        {
            $characterLevel = 12;
        }
    }
    else if($race === "Half-Orc")
    {
        if($level <= 12)
        {
            $characterLevel = $level;
        }
        else
        {
            $characterLevel = 12;
        }
    }
    else
    {
        $characterLevel = $level;
    }
    
    
    return $characterLevel;
}




?>