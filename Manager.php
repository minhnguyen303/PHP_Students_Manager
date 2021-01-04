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
        return self::$students[$index];
    }

    public function delete($index)
    {
        unset(self::$students[$index]);
    }

    public function getIndexByName($name)
    {
        /*foreach (self::$students as $key=>$student){
            $studentName = strtolower($student->getName());
            $arrayName = explode(' ', strtolower($fullName));
            $name = $arrayName[count($arrayName) - 1];
            if ($studentName == $name[count($name)]){
                return $key;
            }
        }*/
        foreach (self::$students as $key=>$student){
            $studentName = strtolower($student->getName());
            $name = strtolower($name);
            if ($studentName == $name){
                return $key;
            }
        }
        return -1;
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