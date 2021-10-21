<?php
    include 'connect.php';
    $sql = "SELECT * FROM customers";
    $result = mysqli_query($conn, $sql);
    ?>
<main>
        <section id="customers">
            <h2 class="text-center sub-heading midnight fw-bold abril mt-5">Customer Details</h2>
            <div class="container my-4 d-flex justify-content-center align-items-center">
                <table class="table table-hover table-striped">
                    <thead>
                      <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">A/C no.</th>
                        <th scope="col">A/C Balance</th>
                        <th scope="col">Select</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                       while ($item = mysqli_fetch_assoc($result)) {
                      ?>
                      <tr>
                        <th scope="row"><?php echo $item["id"]?></th>
                        <td><?php echo $item["name"]?></td>
                        <td><?php echo $item["email"]?></td>
                        <td><?php echo $item["account_no"]?></td>
                        <td><?php echo $item["balance"]?></td>
                        <td><a href="<?php printf('%s?id=%s','transfer.php',$item['id'])?>"class="pri anton fw-bold">View</a></td>
                      </tr>
                      <?php } ?>
                    </tbody>
                  </table>
            </div>
        </section>
    </main>