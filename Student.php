<?php


class Student
{
    public static $CurrentStudentCode;

    protected $name;
    protected $gender;
    protected $birth;
    protected $subject;
    protected $from;
    protected $code;

    /**
     * Student constructor.
     * @param $name
     * @param $gender
     * @param $birth
     * @param $subject
     * @param $from
     */
    public function __construct($name, $gender, $birth, $subject, $from)
    {
        $this->name = $name;
        $this->gender = $gender;
        $this->birth = $birth;
        $this->subject = $subject;
        $this->from = $from;
        $this->code = "S" . str_pad(Student::$CurrentStudentCode + 1, 5, '0', STR_PAD_LEFT) . "A";
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * @param mixed $gender
     */
    public function setGender($gender)
    {
        $this->gender = $gender;
    }

    /**
     * @return mixed
     */
    public function getBirth()
    {
        return $this->birth;
    }

    /**
     * @param mixed $birth
     */
    public function setBirth($birth)
    {
        $this->birth = $birth;
    }

    /**
     * @return mixed
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * @param mixed $subject
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;
    }

    /**
     * @return mixed
     */
    public function getFrom()
    {
        return $this->from;
    }

    /**
     * @param mixed $from
     */
    public function setFrom($from)
    {
        $this->from = $from;
    }

    /**
     * @return int
     */
    public function getCode()
    {
        return $this->code;
    }

    public function toArray()
    {
        return [$this->name, $this->gender, $this->birth, $this->code, $this->subject, $this->from];
    }
}