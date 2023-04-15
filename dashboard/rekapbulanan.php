<?php
session_start();
date_default_timezone_set('Asia/Jakarta');
$now = date('Y-m-d H:i:s');

$connect = new mysqli("localhost", "kaad7559_fahmi", "rahmadiani", "kaad7559_financi");

$uid_user = $_SESSION['uid'];
?>
<div class="card">
    <div class="card h-100">
        <div class="card-header d-flex align-items-center justify-content-between pb-3">
            <div class="card-title mb-0">
                <h5 class="m-0 me-2">Spend History of This Month</h5>
                <?php
                $bulan = date('Y-m', strtotime($now));
                $sql = mysqli_query($connect, "SELECT SUM(c_nominal) AS total_bulanan FROM outcome_history WHERE c_time LIKE '$bulan%' AND c_uid = '$uid_user'");
                $data = mysqli_fetch_array($sql);
                $nominal = $data['total_bulanan'];
                $nominal = number_format($nominal, 0, ',', '.');
                ?>

            </div>
        </div>
        <div class="card-body">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <div class="d-flex flex-column align-items-center gap-1">
                    <?php
                    $sql = mysqli_query($connect, "SELECT COUNT(c_uid) AS total_transaksi FROM outcome_history WHERE c_time LIKE '$bulan%' AND c_uid = '$uid_user'");
                    $data = mysqli_fetch_array($sql);
                    $transaksi = $data['total_transaksi'];
                    ?>
                    <h2 class="mb-1"><?= $transaksi ?></h2>
                    <span>Total Transaction</span>
                    <small class="text-muted">Rp <?= $nominal ?> Total Spend</small>
                </div>
            </div>

            <!-- list pengeluaran -->
            <?php
            $sql_list = mysqli_query($connect, "SELECT DISTINCT c_date FROM outcome_history WHERE c_uid = '$uid_user' AND c_date LIKE '$bulan%' ORDER BY c_date DESC");
            while ($data_list = mysqli_fetch_array($sql_list)) {
                // get day
                $today = date('Y-m-d', strtotime($now));
                if ($data_list['c_date'] == $today) {
                    $day = "Today";
                } else {
                    $day = date('l', strtotime($data_list['c_date']));
                }

                // date
                $date = date('d', strtotime($data_list['c_date']));

                // month year
                $month_year = date('F Y', strtotime($data_list['c_date']));

                // get total 
                $sql_list1 = mysqli_query($connect, "SELECT SUM(c_nominal) AS total_daily FROM outcome_history WHERE c_uid = '$uid_user' AND c_date = '$data_list[c_date]'");
                $data_list1 = mysqli_fetch_array($sql_list1);
                $total = $data_list1['total_daily'];
                $total = number_format($total, 0, ',', '.');

            ?>
                <hr>
                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2 mb-3">
                    <div class="me-2">
                        <?php
                        if ($day == 'Today') {
                        ?>
                            <h5 class="mb-0"><?= $date ?>, <?= $day ?></h5>
                            <small class="text-muted"><?= $month_year ?></small>
                        <?php
                        } else {
                        ?>
                            <h5 class="mb-0"><?= $date ?>, <?= $day ?></h5>
                            <small class="text-muted"><?= $month_year ?></small>
                        <?php
                        }
                        ?>

                    </div>
                    <div class="user-progress">
                        <reguler class="fw-bold">Rp <?= $total ?></reguler>
                    </div>
                </div>
                <ul class="p-0 m-0">
                    <?php
                    $sql_list2 = mysqli_query($connect, "SELECT oh.c_nominal, oh.c_note, ocl.c_name, ocl.c_icon, ocl.c_class FROM outcome_history oh JOIN outcome_category_list ocl ON oh.c_category = ocl.c_code WHERE oh.c_uid = '$uid_user' AND oh.c_date = '$data_list[c_date]' ORDER BY c_time DESC");
                    while ($data_list2 = mysqli_fetch_array($sql_list2)) {
                        $nominal_item = number_format($data_list2['c_nominal'], 0, ',', '.');
                    ?>
                        <li class="d-flex mb-4 pb-1">
                            <div class="avatar flex-shrink-0 me-3">
                                <span class="avatar-initial rounded bg-label-<?= $data_list2['c_class'] ?>"><i class='bx <?= $data_list2['c_icon'] ?>'></i></span>
                            </div>
                            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                <div class="me-2">
                                    <h6 class="mb-0"><?= $data_list2['c_name'] ?></h6>
                                    <small class="text-muted"><?= $data_list2['c_note'] ?></small>
                                </div>
                                <div class="user-progress">
                                    <small class="fw-semibold">Rp <?= $nominal_item ?></small>
                                </div>
                            </div>
                        </li>
                    <?php
                    }
                    ?>
                </ul>
            <?php
            }
            ?>
            <!-- list pengeluaran -->

        </div>
    </div>
</div>