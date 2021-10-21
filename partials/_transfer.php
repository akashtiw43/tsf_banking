<?php
include 'connect.php';
$id=$_GET['id'];
$sql = "SELECT * from customers where id=$id";
    $query = mysqli_query($conn,$sql);
    $item = mysqli_fetch_array($query);
?>
<?php
require 'connect.php';

if(isset($_POST['submit']))
{
    $from = $_GET['id'];
    $to = $_POST['reciever'];
    $amount = $_POST['amount'];

    $sql = "SELECT * from customers where id=$from";
    $query = mysqli_query($conn,$sql);
    $sql1 = mysqli_fetch_array($query);

    $sql = "SELECT * from customers where id=$to";
    $query = mysqli_query($conn,$sql);
    $sql2 = mysqli_fetch_array($query);

  

    //Conditions
    //For negative value
    if (($amount)<0)
   {
        echo '<script type="text/javascript">';
        echo ' alert("Negative value cannot be transferred !")';
        echo '</script>';
    }
    //Insufficient balance
    else if($amount > $sql1['balance']) 
    {
        
        echo '<script type="text/javascript">';
        echo ' alert("Sorry! you have insufficient balance !")';
        echo '</script>';
    }
    //For 0 (zero) value
    else if($amount == 0){

         echo "<script type='text/javascript'>";
         echo "alert('Zero value cannot be transferred !')";
         echo "</script>";
     }


    else {
                $newbalance = $sql1['balance'] - $amount;
                $sql = "UPDATE customers set balance=$newbalance where id=$from";
                mysqli_query($conn,$sql);
             
                $newbalance = $sql2['balance'] + $amount;
                $sql = "UPDATE customers set balance=$newbalance where id=$to";
                mysqli_query($conn,$sql);
                
                $sender = $sql1['name'];
                $receiver = $sql2['name'];
                $sql = "INSERT INTO history(sender,receiver, amount) VALUES ('$sender','$receiver','$amount')";
                $query=mysqli_query($conn,$sql);
                if($query){
                     echo "<script> alert('WooHoo!! Transaction Successfull ');
                                     window.location='./history.php';
                           </script>";
                    
                }else{
                  echo "<script> alert('Transaction Successfull, but unable to update history');
                 
                   </script>";
                }

                $newbalance= 0;
                $amount =0;
        }
    
}
?>
<main>
        <section id="transfer">
            <h2 class="text-center sub-heading midnight fw-bold abril mt-5">Sender Info.</h2>
            <div class="container my-5 d-flex justify-content-center align-items-center">
                <table class="table table-bordered w-75">
                    <thead class="font-20">
                      <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">A/C no.</th>
                        <th scope="col">A/C Balance</th>
                      </tr>
                    </thead>
                    <tbody class="font-18">
                      <tr>
                        <th scope="row"><?php echo $item["id"]?></th>
                        <td><?php echo $item["name"]?></td>
                        <td><?php echo $item["email"]?></td>
                        <td><?php echo $item["account_no"]?></td>
                        <td><?php echo $item["balance"]?></td>
                      </tr>
                     
                    </tbody>
                </table>

            </div>
         
            <div class="container my-4 d-flex justify-content-center align-items-center">
            <button class="btn transfer-btn pri-bg px-5 fw-bold py-2 anton text-light font-20 rounded-pill
             effect btn-log"onclick="benShow()"> Transfer Money</button>
            </div>
            <div class="container ps-5 hide my-5 beneficiary">
              <form method="post">
                <h5 class="midnight font-18 fw-bold">Select Beneficiary Account</h5>
                <select class="form-select form-select-lg mb-5 w-75"name="reciever"aria-label=".form-select-lg example" required>
                <option calss="text-muted" value="" disabled selected>Choose</option>
                    <?php
                    include 'connect.php';
                    $sid=$_GET['id'];
                    $sql = "SELECT * FROM customers where id!=$id";
                    $result=mysqli_query($conn,$sql);
                    if(!$result)
                    {
                        echo "Error ".$sql."<br>".mysqli_error($conn);
                    }
                    while($item = mysqli_fetch_assoc($result)) {
                      ?>
                    <option value="<?php echo $item['id']?>"><?php echo $item['name']?>[Balance:<?php echo $item['balance']?>]</option>
                    <?php
                    }
                  ?>
                </select>
                <label for="quantity"class="form-label midnight font-18 fw-bold">Amount in Rs. (between 1 and 50,000):</label>
                <input type="number"class="form-control w-75" id="quantity" name="amount" min="1" max="50000"required> 
                <button class="btn transfer-btn mt-3 bg-dark px-3 fw-bold py-1 anton text-light font-20
              "type="submit"name="submit"> Transfer Money</button>
                </form>
              </div>
        </section>
    </main>
  