<?php
class DefaultCommand
{
    public function execute()
    {
        echo  "1.php";
    }
}
class AppCommand
{
    public function execute($request)
    {
        echo "Hello";
    }
}