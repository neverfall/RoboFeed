<?php     //start php tag
//include connect.php page for database connection
Include('connect.php');
//if submit is not blanked i.e. it is clicked.
if (isset($_REQUEST['Submit'])) //here give the name of your button on which you would like    //to perform action.
{
// here check the submitted text box for null value by giving there name.
    if($_REQUEST['email']=="" || $_REQUEST['password']=="")
    {
        echo " Field must be filled";
    }
    else
    {
        $sql1= "select * from members where email= '".$_REQUEST['email']."' &&  password ='".$_REQUEST['password']."'";
        $result=mysql_query($sql1)
        or exit("Sql Error".mysql_error());
        $num_rows=mysql_num_rows($result);
        if($num_rows>0)
        {
            session_start();
            $_SESSION["user"]=$_POST["email"];
            header("location:user.php");

        }
        else
        {
            echo "username or password incorrect";
        }
    }
}
?>