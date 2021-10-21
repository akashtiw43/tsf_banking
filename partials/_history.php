<main>
        <section id="customers">
            <h2 class="text-center sub-heading midnight fw-bold abril mt-5">Transaction History</h2>
            <div class="container my-4 d-flex justify-content-center align-items-center">
                <table class="table table-hover table-striped">
                    <thead>
                      <tr>
                        <th scope="col">Tr. no</th>
                        <th scope="col">Sender</th>
                        <th scope="col">Beneficiary</th>
                        <th scope="col">Transaction Time</th>
                        <th scope="col">Amount</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php

                        include 'connect.php';

                        $sql ="SELECT * FROM history ORDER BY id DESC";

                        $query =mysqli_query($conn, $sql);

                        while($rows = mysqli_fetch_assoc($query))
                        {
                    ?>
                      <tr>
                        <th scope="row"><?php echo $rows['id']; ?></th>
                        <td><?php echo $rows['sender']; ?></td>
                        <td><?php echo $rows['receiver']; ?></td>
                        <td><?php echo $rows['time']; ?></td>
                        <td><?php echo $rows['amount']; ?></td>
                      </tr>
                    <?php
                        };
                    ?>
                    </tbody>
                  </table>
            </div>
        </section>
    </main>