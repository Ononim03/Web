<?php

class Group
{
    private string $title;
    private array $students;

    /**
     * @param string $title
     * @param array|Student[] $students
     */
    public function __construct(string $title, array $students = [])
    {
        $this->title = $title;
        $this->students = $students;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    /**
     * @return array
     */
    public function getStudents(): array
    {
        return $this->students;
    }

    /**
     * @param array $students
     */
    public function setStudents(array $students): void
    {
        $this->students = $students;
    }
    /**
     * @param array|Student[]|Student $students
     */
    public function addStudents($students): void
    {
        if (is_array($students)){
            $this->students = array_merge($this->students, $students);
        }else{
            $this->students[] = $students;
        }
    }

}