<?php
require "Command.php";
require "CommandResult.php";
require "Config.php";
require "HttRequest.php";
require "Register.php";
require "Helper.php";
require "Parsexml.php";
    Class Controller
    {
        private $reg;
        public function __construct()
        {
            $this->reg = Register::instance();
        }
        public function init()
        {
            $this->reg->getHelper()->init();
        }
        public static function run()
        {
            $instance = new self();
            $instance->init();
            $instance->handleRequest();
        }
        public function handleRequest()
        {
            $request = $this->reg->getRequest();
            $cmd = new CommandResult();
            $cmd = $cmd->getCommand($request);
        }
    }
