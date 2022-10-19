<?php
require_once 'Group.php';

class Student
{
    public static $handscount = 2;
    /**
     * @var string
     */
    private string $name;
    /**
     * @var int
     */
    private int $age;
    /**
     * @var Group
     */
    private Group $group;

    /**
     * @param string $name
     * @param int $age
     * @param Group $class
     */
    public function __construct(string $name, int $age, Group $group)
    {
        $this->name = $name;
        $this->group = $group;
        $this->age = $age;
        $this->group->addStudents($this);
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return int
     */
    public function getAge(): int
    {
        return $this->age;
    }

    /**
     * @param int $age
     */
    public function setAge(int $age): void
    {
        $this->age = $age;
    }

    /**
     * @return Group
     */
    public function getGroup(): Group
    {
        return $this->group;
    }

    /**
     * @param Group $group
     */
    public function setGroup(Group $group): void
    {
        $this->group = $group;
    }

    public function __toString(): string
    {
        return $this->name;
    }

    private $db_fields = ['id' => 1,
        'phone' => '2131212312',
        'email' => 'ewewaeaea@awfaw'];
    public function __get(string $name)
    {
        $v = &$this->db_fields[$name];
        if (is_null($v)) {
            $func = 'get' . strtoupper(substr($name, 0, 1) . substr($name, 1));
            if (method_exists($this, $func)) {
                $v = $this->$func;
            }
        }

        return $v ? $v : 'not_found';
    }
}