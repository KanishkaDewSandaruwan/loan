<?php
require_once 'connection.php';

if(isset($_REQUEST['saving_id']))
{
          $id = $_REQUEST['saving_id'];

          $querygetcode="SELECT  * FROM saving where saving_id='".$id."'";
          $catresult=mysqli_query($con,$querygetcode);
          $result_row=mysqli_fetch_assoc($catresult);
          $a=$result_row['saving_id'];


          $query1="DELETE FROM deposit_saving WHERE saving_id='$a'";
          mysqli_query($con,$query1);

          $query1="DELETE FROM saving WHERE saving_id='$a '";
          mysqli_query($con,$query1);
          header('location:saving.php');

}else if(isset($_REQUEST['loan_id']))
{
          $id = $_REQUEST['loan_id'];

          $querygetcode="SELECT  * FROM loan where loan_id='".$id."'";
          $catresult=mysqli_query($con,$querygetcode);
          $result_row=mysqli_fetch_assoc($catresult);
          $a=$result_row['loan_id'];


          $query1="DELETE FROM loan_payment WHERE loan_id='$a'";
          mysqli_query($con,$query1);

          $query1="DELETE FROM loan WHERE loan_id='$a '";
          mysqli_query($con,$query1);
          header('location:loan.php');

}
else if(isset($_REQUEST['saving_deposit_id']))
{
          $id = $_REQUEST['saving_deposit_id'];
          $saving_id = $_REQUEST['sid'];

          $querygetcode="SELECT  * FROM deposit_saving where saving_deposit_id='".$id."'";
          $catresult=mysqli_query($con,$querygetcode);
          $result_row=mysqli_fetch_assoc($catresult);
          $a=$result_row['saving_deposit_id'];

          $viewquery = " SELECT * FROM saving where saving_id = '$saving_id'";
          $viewresult = mysqli_query($con,$viewquery);
          $row = mysqli_fetch_assoc($viewresult);
          $new_balance = $row['balance'] - $result_row['amount'];

          $query3="UPDATE saving SET balance='$new_balance' WHERE saving_id='".$saving_id."'";
          $sql3=mysqli_query($con,$query3);


          $query1="DELETE FROM deposit_saving WHERE saving_deposit_id='$a '";
          mysqli_query($con,$query1);

          header('location:saving_payments_details.php?saving_id='.$saving_id.'');

}else if(isset($_REQUEST['loan_pay_id']))
{
          $id = $_REQUEST['loan_pay_id'];
          $loan_id = $_REQUEST['lid'];

          $querygetcode="SELECT  * FROM loan_payment where loan_pay_id='".$id."'";
          $catresult=mysqli_query($con,$querygetcode);
          $result_row=mysqli_fetch_assoc($catresult);
          $a=$result_row['loan_pay_id'];

          $viewquery = " SELECT * FROM loan where loan_id = '$loan_id'";
          $viewresult = mysqli_query($con,$viewquery);
          $row = mysqli_fetch_assoc($viewresult);

          $new_balance = $row['current_balance'] + $result_row['amount'];
          $months = $row['number_of_paid'] - 1;

          $query3="UPDATE loan  SET current_balance='$new_balance', number_of_paid = '$months' WHERE loan_id='".$loan_id."'";
          $sql3=mysqli_query($con,$query3);



          $query1="DELETE FROM loan_payment WHERE loan_pay_id='$a '";
          mysqli_query($con,$query1);
          
          header('location:payments_details.php?loan_id='.$loan_id.'');

}else if(isset($_REQUEST['m_id']))
{
          $id = $_REQUEST['m_id'];

          $querygetcode="SELECT  * FROM message where m_id='".$id."'";
          $catresult=mysqli_query($con,$querygetcode);
          $result_row=mysqli_fetch_assoc($catresult);
          $a=$result_row['m_id'];

          $query1="DELETE FROM message WHERE m_id='$a '";
          mysqli_query($con,$query1);
          header('location:messege.php');

}else if(isset($_REQUEST['member_id'])){
          $id = $_REQUEST['member_id'];

          $querygetcode="SELECT  * FROM member where member_id='".$id."'";
          $catresult=mysqli_query($con,$querygetcode);
          $result_row=mysqli_fetch_assoc($catresult);
          $a=$result_row['member_id'];

          $querygetcode1="SELECT  * FROM loan where member_id='".$a."'";
          $catresult1=mysqli_query($con,$querygetcode1);

          while($row=mysqli_fetch_assoc($catresult1)){

            $loan_id = $row['loan_id'];

                  $query2="DELETE FROM loan_payment WHERE loan_id='$loan_id'";
                  mysqli_query($con,$query2);

                  $query1="DELETE FROM loan WHERE loan_id='$loan_id'";
                  mysqli_query($con,$query1);
          }

          $querygetcode2="SELECT  * FROM saving where member_id='".$a."'";
          $catresult2=mysqli_query($con,$querygetcode2);

          while($row=mysqli_fetch_assoc($catresult2)){

            $saving_id = $row['saving_id'];

                  $query2="DELETE FROM deposit_saving WHERE saving_id='$saving_id'";
                  mysqli_query($con,$query2);

                  $query1="DELETE FROM saving WHERE saving_id='$saving_id'";
                  mysqli_query($con,$query1);
          }

          $query5="DELETE FROM holder WHERE member_id='$a '";
          mysqli_query($con,$query5);

          $query3="DELETE FROM member WHERE member_id='$a '";
          mysqli_query($con,$query3);
          header('location:member.php');
}
else{
  header('location:index.php'); 
}
?>