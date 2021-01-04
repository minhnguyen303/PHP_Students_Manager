<?php


class Manager
{
    public static $students = [];

    public function add($student)
    {
        self::$students[] = $student;
    }

    public function update($index, $student)
    {
        self::$students[$index] = $student;
    }

    public function get($index)
    {
        
    }

    public function delete($index)
    {
        
    }

    public function search($index)
    {
        
    }

    public function sortAZ()
    {
        
    }

    public function sortZA()
    {
        
    }

    public function save()
    {
        
    }

    public function load()
    {
        
    }
}