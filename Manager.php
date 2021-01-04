<?php
include_once 'Student.php';

class Manager
{
    const FILE_DATA_NAME = 'data.json';
    public static $students;

    public function __construct()
    {
        self::$students = $this->loadData();
    }

    public function add($student)
    {
        self::$students[] = $student;
        $this->saveData();
    }

    public function update($index, $student)
    {
        self::$students[$index] = $student;
        $this->saveData();
    }

    public function get($index)
    {
        return self::$students[$index];
    }

    public function delete($index)
    {
        unset(self::$students[$index]);
        $this->saveData();
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
        sort(self::$students);
    }

    public function sortZA()
    {
        rsort(self::$students);
    }

    public function saveData()
    {
        $data = [];
        foreach (self::$students as $student) {
            $data[] = $student->toArray();
        }
        $dataJson = json_encode($data);
        file_put_contents(self::FILE_DATA_NAME, $dataJson);
    }

    public function loadData()
    {
        $dataJson = file_get_contents(self::FILE_DATA_NAME);
        $data = json_decode($dataJson);
        $list = [];
        foreach ($data as $value) {
            $list[] = $this->arrayToStudent($value);
        }
        return $list;
    }

    public function arrayToStudent($array)
    {
        return new Student($array[0], $array[1], $array[2], $array[3], $array[4], $array[5]);
    }
}