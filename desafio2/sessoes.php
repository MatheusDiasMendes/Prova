<?php 

session_start();

if( isset($_POST["Q1"]) && !empty($_POST["Q1"]))
{

    $_SESSION["Q1"] = $_POST["Q1"];
    header("location: questao2.php");

} else if(isset($_POST["Q2"]) && !empty($_POST["Q2"])){

    $_SESSION["Q2"] = $_POST["Q2"];
    header("location: questao3.php");
 
}else if(isset($_POST["Q3"]) && !empty($_POST["Q3"])){

    $_SESSION["Q3"] = $_POST["Q3"];
    header("location: questao4.php");

}else if(isset($_POST["Q4"]) && !empty($_POST["Q4"])){

    $_SESSION["Q4"] = $_POST["Q4"];
    header("location: questao5.php");

}else if(isset($_POST["Q5"]) && !empty($_POST["Q5"])){

    $_SESSION["Q5"] = $_POST["Q5"];
    header("location: questao6.php");

}else if(isset($_POST["Q6"]) && !empty($_POST["Q6"])){

    $_SESSION["Q6"] = $_POST["Q6"];
    header("location: questao7.php");

}else if(isset($_POST["Q7"]) && !empty($_POST["Q7"])){

    $_SESSION["Q7"] = $_POST["Q7"];
    header("location: questao8.php");

}else if(isset($_POST["Q8"]) && !empty($_POST["Q8"])){

    $_SESSION["Q8"] = $_POST["Q8"];
    header("location: questao9.php");

}else if(isset($_POST["Q9"]) && !empty($_POST["Q9"])){

    $_SESSION["Q9"] = $_POST["Q9"];
    header("location: questao10.php");

}else if(isset($_POST["Q10"]) && !empty($_POST["Q10"])){

    $_SESSION["Q10"] = $_POST["Q10"];
    header("location: questao11.php");

}else if(isset($_POST["Q11"]) && !empty($_POST["Q11"])){

    $_SESSION["Q11"] = $_POST["Q11"];
    header("location: questao12.php");

}else if(isset($_POST["Q12"]) && !empty($_POST["Q12"])){

    $_SESSION["Q12"] = $_POST["Q12"];
    header("location: questao13.php");

}else if(isset($_POST["Q13"]) && !empty($_POST["Q13"])){

    $_SESSION["Q13"] = $_POST["Q13"];
    header("location: questao14.php");

}else if(isset($_POST["Q14"]) && !empty($_POST["Q14"])){

    $_SESSION["Q14"] = $_POST["Q14"];
    header("location: resultado.php");

} else{

}

?>