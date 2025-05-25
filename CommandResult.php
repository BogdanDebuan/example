<?php
Class CommandResult
{
    public function getCommand($request)
    {
        $reg = Register::instance();
        $path = $request->getPath();
        $conf_obj = $reg->getConf();
        $conf = $conf_obj->get($path);
        $refclass = new \ReflectionClass($conf);
        $obj = $refclass->newInstance();
        return $obj;
    }
}