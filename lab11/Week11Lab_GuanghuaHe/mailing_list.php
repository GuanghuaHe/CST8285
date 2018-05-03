<?php
include ('./header.php');
require_once('./dao/customerDao.php');

/*
 *  @author:Guanghua He
 */

 
$customerDao = new customerDao;
$customers=$customerDao->getCustomers();


if ($customers){

    echo '<h3>'.'<span style=\'color:red\'>'.'You signned up successfully! Thank you!'.'</span>'.'</h3>';
    
    echo '<table width="100%" height="100%" border="2">';
                echo '<tr><th>Customer</th> <th>Phone</th> <th>EamilAddress</th> <th>referral</th></tr>';
                $ID = $customerDao->getID();               
                $i=0;
                foreach($customers as $customer){
                    echo '<tr>';
                   // echo '<td>' . $ID[$i] . '</td>';
                  //  echo '<td><a href=\'edit_employee.php?employeeId='. $ID . '\'>' . $ID . '</a></td>';
                    echo '<td>' . $customer->getName() . '</td>';
                    echo '<td>' . $customer->getPhone() . '</td>';
                    echo '<td>' . $customer->getEmail() . '</td>';
                    echo '<td>' . $customer->getReferrer() . '</td>';
                    echo '</tr>';
                    $i++;
                }
                echo '</table>';

}else{
    echo '<h3>'.'No mailing exist now'.'</h3>';

}


?>

<?php include './footer.php' ?>