<?php

Class Output
{
    //Add red background to input which gived error
    public static function checkError($name, $output)
    {
        echo "<script>$('*').removeClass('checkError');$('.".$name."').addClass('checkError').focus();</script>".Lang::getLang($output);
    }
   
    //Clean red from all inputs and textarea
    public static function cleanRed()
    {
        echo "<script>$('*').removeClass('checkError');</script>";
    }
   
    //Clean inputs and textarea
    public static function cleanAllInputs()
    {
        echo "<script>$('input').val('');$('textarea').val('');</script>";
    }
   
   
    //Clean special inputs and textarea
    public static function cleanSpecialInputs($class)
    {
        echo "<script>$('".$class."').val('');</script>";
    }
   
    //Refresh posted div
    public static function refreshDiv($id)
    {
        echo "<script>$('".$id."').load(location.href + ' ".$id."');</script>";
    }
    
   
    //Refresh posted div
    public static function sessionDestroy()
    {
        session_destroy();;
    }
    
}

?>