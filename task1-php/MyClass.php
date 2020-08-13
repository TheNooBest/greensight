<?php
    namespace Greensight\Backend\Classes;

    class MyClass
    {
        private $firstName;
        private $secondName;

        function __construct($first, $second)
        {
            $this->firstName = $first;
            $this->secondName = $second;
        }

        public function concatNames()
        {
            return $this->firstName . ' ' . $this->secondName;
        }
    }
