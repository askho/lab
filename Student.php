<?php
/**
 * @author Leon
 */
class Student {
    /**
     * Constructor initializes the fields. 
     */
    function __construct() {
        $this->surname = '';
        $this->first_name = '';
        $this->emails = array();
        $this->grades = array();
    }
    /**
     * Function to add email to a student. 
     * @param string $witch "The email address that this is related to ex: work"
     * @param string $address "The actual email address"
     */
    function add_email($witch, $address) {
        $this->emails[$witch] = $address;
    }
    /**
     * Adds a grade to the student. 
     * @param type $grade
     */
    function add_grade($grade) {
        $this->grades[] = $grade;
    }
    /**
     * Averages the grades
     * @return int
     */
    function average() {
        $total = 0;
        foreach ($this->grades as $value) {
            $total += $value;
        }
        return $total / count($this->grades);
    }
    /**
     * Formats the students nicely and returns it as a string. 
     * @return string
     */
    function toString() {
        $result = $this->first_name . ' ' . $this->surname;
        $result .=  ' (' . $this->average() . ")\n";
        foreach ($this->emails as $which => $what) {
            $result .= $which . ": " . $what . "\n";
        }
        $result .= "\n";
        return "<pre>" . $result . "</pre>";
    }
}