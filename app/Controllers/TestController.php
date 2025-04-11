<?php
class TestController
{
    public function show()
    {
        include view('formExample.php');
    }

    public function remove()
    {
        echo 'DU HAR NU NÅTT remove()';
    }
}
