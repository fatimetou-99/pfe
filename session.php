<?php

class vers{
    static function isloggedV(){
        if(isset($_SESSION['vers']) && isset($_SESSION['vers']['email']) && isset($_SESSION['vers']['pass']) ){
           extract($_SESSION['vers']);


            return true;
            }

    else{
        return false;
    }

}
}

class ret{
    static function isloggedR(){
        if(isset($_SESSION['ret']) && isset($_SESSION['ret']['email']) && isset($_SESSION['ret']['pass']) ){
           extract($_SESSION['ret']);


            return true;
            }

    else{
        return false;
    }

}
}

class admin{
    static function isloggedA(){
        if(isset($_SESSION['admin']) && isset($_SESSION['admin']['login']) && isset($_SESSION['admin']['pwd']) ){
           extract($_SESSION['admin']);


            return true;
            }

    else{
        return false;
    }

}
}
?>