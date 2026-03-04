<?php include '../nav/header.php';
$conn = mysqli_connect("localhost", "root", "", "carwashsystem_db");

if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}
?>

<link rel="stylesheet" href="../assets/dist/css/admin.css">


<center>
    <div class="col-md-10" style="width: 90%;">
        <div class="card shadow-sm">
            <div class="card-header">
                <?php
                //joint payments with appointments only
                $sql = "SELECT  p.*, 
                                    a.appointment_id,
                                    a.FullName, 
                                    a.package_type,
                                    a.washing_point, 
                                    a.scheduled_at, 
                                    a.appointment_date
                            FROM payments p
                            INNER JOIN appointments a ON p.appointment_id = a.appointment_id 
                            ORDER BY p.payment_date DESC";

                $result = mysqli_query($conn, $sql);

                if (!$result) {
                    die("Query failed: " . mysqli_error($conn));
                }

                if (mysqli_num_rows($result) > 0):
                    $counter = 1;

                ?>

                    <h5 class="mb-0">Students List</h5>
            </div>
            <div class="card-body table-container">
                <table class="table table-bordered table-hover">
                    <thead class="table-light">
                        <tr style="text-align: center;">
                            <th>Booking No.</th>
                            <th>Name</th>
                            <th>Package Type</th>
                            <th>Washing Point</th>
                            <th>Washing Date/Time</th>
                            <th>Posting Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <?php

                    $packages = [
                        1 => "BASIC CLEANING (₱600)",
                        2 => "PREMIUM CLEANING (₱1,200)",
                        3 => "COMPLEX CLEANING (₱1,700)"
                    ];

                    $washingPoints = [
                        1 => "Sparkling Suds Carwash (Pawing, Palo Leyte)",
                        2 => "Visayan Vehicle Spa (Pater St. Tacloban CIty)",
                        3 => "Central Shine Auto Detail (Brgy.Dapdap, Alangalang,Leyte)",
                        4 => "Leyte Auto Clean (Santa Fe, Real Street)",
                        5 => "Tanauan Breeze Carwash (Brgy.Sto. Niño, Tanauan Leyte)",
                        6 => "Philippine Pride Car Care (Brgy.Olotan, Jaro, Leyte)"
                    ];
                    while ($row = mysqli_fetch_assoc($result)) :  ?>

                        <tr>
                            <td><?= $counter++ ?></td>
                            <td><?= htmlspecialchars($row['FullName']) ?></td>
                            <td><?= $packages[$row['package_type']] ?? 'Unknown' ?></td>
                            <td><?= $washingPoints[$row['washing_point']] ?? 'Unknown' ?></td>
                            <td><?= $row['scheduled_at'] ?></td>
                            <td><?= $row['appointment_date'] ?></td>
                            <td>
                                <center><a href="../page/admins.php?function=viewPaid&appointment_id=<?= $row['appointment_id'] ?>" class="btn btn-sm btn-info text-white bg-dark">
                                        <i class="bi bi-eye"></i>
                                    </a></center>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                    </tbody>
                </table>
            <?php else: ?>
                <p class="text-muted">No Booking Found.</p>
            <?php endif; ?>
            </div>
        </div>

    </div>
</center>