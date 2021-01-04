<?php


class Manager
{
    public static $students = [];

    public function add($student)
    {
        self::$students[] = $student;
    }
}