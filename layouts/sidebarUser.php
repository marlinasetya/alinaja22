                        <!-- TOAST -->
                        <div class="toast-container position-fixed bottom-0 end-0 p-3" style="z-index: 11">
                            <?php
                            if (isset($_SESSION['pesan'])) {
                            ?>
                                <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                                    <div class="toast-header">
                                        <img src="../asset/image/logo.png" class="rounded me-2" alt="..." width="5%">
                                        <strong class="me-auto">Login</strong>
                                        <small>Just now</small>
                                        <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                                    </div>
                                    <div class="toast-body">
                                        <?php echo $_SESSION['pesan']  ?>
                                    </div>
                                </div>
                            <?php
                                unset($_SESSION['pesan']);
                            }
                            ?>
                        </div>
                        <?php
                        $nis = $_SESSION['id_user'];
                        $sql = "SELECT * FROM tb_siswa WHERE NIS = $nis";
                        $query = mysqli_query($db, $sql);
                        if ($query) {
                            $data = $query->fetch_assoc();
                        ?>

                            <div class="card-body p-4" style="text-align: center;">
                                <label for="" class="fs-5 m-1 fw-medium"><?php echo date("d - m - Y") ?></label><br>
                                <svg xmlns="http://www.w3.org/2000/svg" width="125" height="125" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                                    <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z" />
                                </svg><br>
                                <label for="" class="fs-2 text-center m-2 fw-bold text-capitalize"><?php echo $data['nama'] ?></label><br>
                                <button type="buttom" class="btn btn-danger m-2 text-center pb3" data-bs-toggle="modal" data-bs-target="#logout">
                                    Sing Out
                                </button><br>
                                <label for="" class="fs-5 fw-medium pb-3">
                                    <?php
                                    date_default_timezone_set('Asia/Jakarta');
                                    echo date('H : i : s A');
                                    ?>
                                </label>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item text-start m-1 rounded m-1 <?php echo (basename($_SERVER['PHP_SELF']) == 'dashboard.php') ? 'active' : ''; ?>">
                                        <a href="../user/dashboard.php" class="nav-link align-middle px-0">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-speedometer2" viewBox="0 0 16 16">
                                                <path d="M8 4a.5.5 0 0 1 .5.5V6a.5.5 0 0 1-1 0V4.5A.5.5 0 0 1 8 4M3.732 5.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707M2 10a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 10m9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5m.754-4.246a.39.39 0 0 0-.527-.02L7.547 9.31a.91.91 0 1 0 1.302 1.258l3.434-4.297a.39.39 0 0 0-.029-.518z" />
                                                <path fill-rule="evenodd" d="M0 10a8 8 0 1 1 15.547 2.661c-.442 1.253-1.845 1.602-2.932 1.25C11.309 13.488 9.475 13 8 13c-1.474 0-3.31.488-4.615.911-1.087.352-2.49.003-2.932-1.25A8 8 0 0 1 0 10m8-7a7 7 0 0 0-6.603 9.329c.203.575.923.876 1.68.63C4.397 12.533 6.358 12 8 12s3.604.532 4.923.96c.757.245 1.477-.056 1.68-.631A7 7 0 0 0 8 3" />
                                            </svg>
                                            <span class="ms-1 d-none d-sm-inline">DASHBOARD</span>
                                        </a>
                                    </li>
                                    <li class="list-group-item text-start m-1 rounded m-1 <?php echo (basename($_SERVER['PHP_SELF']) == 'dataTugas.php') ? 'active' : ''; ?>">
                                        <a href="../user/dataTugas.php" class="nav-link align-middle px-0">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-file-earmark-plus-fill" viewBox="0 0 16 16">
                                                <path d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0M9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1M8.5 7v1.5H10a.5.5 0 0 1 0 1H8.5V11a.5.5 0 0 1-1 0V9.5H6a.5.5 0 0 1 0-1h1.5V7a.5.5 0 0 1 1 0" />
                                            </svg>
                                            <span class="ms-1 d-none d-sm-inline">DATA TUGAS</span>
                                        </a>
                                    </li>
                                    <li class="list-group-item text-start m-1 rounded m-1 <?php echo (basename($_SERVER['PHP_SELF']) == 'dataLaporan.php') ? 'active' : ''; ?>">
                                        <a href="../user/dataLaporan.php" class="nav-link align-middle px-0">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-journal-bookmark" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd" d="M6 8V1h1v6.117L8.743 6.07a.5.5 0 0 1 .514 0L11 7.117V1h1v7a.5.5 0 0 1-.757.429L9 7.083 6.757 8.43A.5.5 0 0 1 6 8" />
                                                <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2" />
                                                <path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1z" />
                                            </svg>
                                            <span class="ms-1 d-none d-sm-inline">DATA LAPORAN</span>
                                        </a>
                                    </li>
                                    <li class="list-group-item text-start m-1 rounded m-1 <?php echo (basename($_SERVER['PHP_SELF']) == 'dataSertifikat.php') ? 'active' : ''; ?>">
                                        <a href="../user/dataSertifikat.php" class="nav-link align-middle px-0">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-book-half" viewBox="0 0 16 16">
                                                <path d="M8.5 2.687c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783" />
                                            </svg>
                                            <span class="ms-1 d-none d-sm-inline">DATA SERTIFIKAT</span>
                                        </a>
                                    </li>
                                </ul>

                            </div>

                        <?php } ?>

                        <div class="modal fade" id="logout" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-sm">
                                <div class="modal-content">
                                    <div class="modal-body text-center">
                                        <img src="../asset/image/leave.png" alt="" width="100%">
                                        <p class="fw-medium lh-1">Oh no! You're leaving...</p>
                                        <p class="fw-medium lh-1 pb-3">Are You sure</p>
                                        <form action="../logout.php" method="get">
                                            <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Keluar</button>
                                            <button class="btn btn-danger" type="submit">Logout</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>