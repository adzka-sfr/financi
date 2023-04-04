<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <div class="col-md-12 col-lg-12 order-1 mb-4">
            <div class="card h-100">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <div class="card-title mb-0">
                        <h5 class="m-0 me-2">Budget</h5>
                        <small class="text-muted">February, 2023</small>
                    </div>
                    <div class="dropdown">
                        <button class="btn p-0" type="button" id="transactionID" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="bx bx-dots-vertical-rounded"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="transactionID">
                            <a class="dropdown-item" href="javascript:void(0);">Add budget</a>
                            <a class="dropdown-item" href="javascript:void(0);">Edit Budget</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <ul class="p-0 m-0">
                        <li class="d-flex mb-4 pb-1">
                            <div class="avatar flex-shrink-0 me-3">
                                <img src="../assets/img/icons/unicons/paypal.png" alt="User" class="rounded" />
                            </div>
                            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                <div class="me-2">
                                    <small class="text-muted d-block mb-1">Food&Beverage</small>
                                    <h6 class="mb-0">Rp 3.000.000</h6>
                                </div>
                                <div class="user-progress d-flex align-items-center gap-1">
                                    <h6 class="mb-0">+2.700.000</h6>
                                    <span class="text-muted">IDR</span>
                                </div>
                            </div>
                        </li>
                        <li class="d-flex mb-4 pb-1">
                            <div class="avatar flex-shrink-0 me-3">
                                <img src="../assets/img/icons/unicons/wallet.png" alt="User" class="rounded" />
                            </div>
                            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                <div class="me-2">
                                    <small class="text-muted d-block mb-1">Grocery</small>
                                    <h6 class="mb-0">Rp 500.000</h6>
                                </div>
                                <div class="user-progress d-flex align-items-center gap-1">
                                    <h6 class="mb-0">+500.000</h6>
                                    <span class="text-muted">IDR</span>
                                </div>
                            </div>
                        </li>
                        <li class="d-flex mb-4 pb-1">
                            <div class="avatar flex-shrink-0 me-3">
                                <img src="../assets/img/icons/unicons/chart.png" alt="User" class="rounded" />
                            </div>
                            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                <div class="me-2">
                                    <small class="text-muted d-block mb-1">Kost</small>
                                    <h6 class="mb-0">Rp 1.500.000</h6>
                                </div>
                                <div class="user-progress d-flex align-items-center gap-1">
                                    <h6 class="mb-0">+0</h6>
                                    <span class="text-muted">IDR</span>
                                </div>
                            </div>
                        </li>
                        <li class="d-flex mb-4 pb-1">
                            <div class="avatar flex-shrink-0 me-3">
                                <img src="../assets/img/icons/unicons/cc-success.png" alt="User" class="rounded" />
                            </div>
                            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                <div class="me-2">
                                    <small class="text-muted d-block mb-1">Gasoline</small>
                                    <h6 class="mb-0">Rp 100.000</h6>
                                </div>
                                <div class="user-progress d-flex align-items-center gap-1">
                                    <h6 class="mb-0">-30.000</h6>
                                    <span class="text-muted">IDR</span>
                                </div>
                            </div>
                        </li>
                        <li class="d-flex mb-4 pb-1">
                            <div class="avatar flex-shrink-0 me-3">
                                <img src="../assets/img/icons/unicons/wallet.png" alt="User" class="rounded" />
                            </div>
                            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                <div class="me-2">
                                    <small class="text-muted d-block mb-1">Skincare</small>
                                    <h6 class="mb-0">Rp 250.000</h6>
                                </div>
                                <div class="user-progress d-flex align-items-center gap-1">
                                    <h6 class="mb-0">+100.000</h6>
                                    <span class="text-muted">IDR</span>
                                </div>
                            </div>
                        </li>
                        <li class="d-flex">
                            <div class="avatar flex-shrink-0 me-3">
                                <img src="../assets/img/icons/unicons/cc-warning.png" alt="User" class="rounded" />
                            </div>
                            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                <div class="me-2">
                                    <small class="text-muted d-block mb-1">Spoiled</small>
                                    <h6 class="mb-0">Rp 150.000</h6>
                                </div>
                                <div class="user-progress d-flex align-items-center gap-1">
                                    <h6 class="mb-0">-25.000</h6>
                                    <span class="text-muted">IDR</span>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-lg-12 mb-4 order-2">
            <div class="card">
                <div class="card-body">
                    <!-- <div class="row">
                        <div class="col-sm-12">
                            <div class="mb-3">
                                <label for="defaultSelect" class="form-label">Payment</label>
                                <select id="defaultSelect" class="form-select">
                                    <option>Default select</option>
                                    <option value="mandiri">Mandiri</option>
                                    <option value="bca">BCA</option>
                                    <option value="cash">Cash</option>
                                    <option value="shopeepay">ShopeePay</option>
                                    <option value="gopay">Gopay</option>
                                    <option value="ovo">OVO</option>
                                    <option value="linkaja">LinkAja</option>
                                </select>
                            </div>
                        </div>
                    </div> -->
                    <div class="d-flex align-items-end row">
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="defaultSelect" class="form-label">Nominal</label>
                                <div class="input-group input-group-merge">
                                    <span class="input-group-text">Rp</span>
                                    <input type="number" name="nominal" id="nominal" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1').replace(/^0[^.]/, '0');" class="form-control" placeholder="0" aria-label="Amount (to the nearest dollar)" />
                                    <span class="input-group-text">.00</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="defaultSelect" class="form-label">Category</label>
                                <select id="defaultSelect" class="form-select">
                                    <option>Default select</option>
                                    <option value="c112">Food&Beverage</option>
                                    <option value="2">Gasoline</option>
                                    <option value="3">Grocery</option>
                                    <option value="3">Kost</option>
                                    <option value="3">Electrical</option>
                                    <option value="3">Internet</option>
                                    <option value="3">Skincare</option>
                                    <option value="3">Spoiled</option>
                                </select>
                            </div>
                            <script>
                                $(document).ready(function() {
                                    $('#defaultSelect').select2();
                                });
                            </script>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="mb-3 row">
                                <div class="col-md-112">
                                    <input class="form-control" type="datetime-local" value="<?= $now ?>" id="html5-datetime-local-input" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="floatingInput" placeholder="Mcd, Cola, etc" aria-describedby="floatingInputHelp" />
                                <label for="floatingInput">Note</label>
                                <div id="floatingInputHelp" class="form-text">We'll never share your details with anyone else.</div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 text-center mt-3">
                            <button style="width: 200px;" type="button" name="record" id="record" class="btn btn-primary">Record</button>
                            <!-- <button style="width: 200px;" class="btn btn-primary" type="button" disabled>
                                <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                                Loading...
                            </button> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Total Revenue -->
        <div class="col-12 col-lg-12 order-2 order-md-3 order-lg-3 mb-4">
            <div class="card">
                <div class="card h-100">
                    <div class="card-header d-flex align-items-center justify-content-between pb-0">
                        <div class="card-title mb-0">
                            <h5 class="m-0 me-2">Spend Statistics</h5>
                            <small class="text-muted">Rp 4.543.000 Total Spend</small>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <div class="d-flex flex-column align-items-center gap-1">
                                <h2 class="mb-2">230</h2>
                                <span>Total Transaction</span>
                            </div>
                            <div id="orderStatisticsChart"></div>
                        </div>
                        <ul class="p-0 m-0">
                            <li class="d-flex mb-4 pb-1">
                                <div class="avatar flex-shrink-0 me-3">
                                    <span class="avatar-initial rounded bg-label-primary"><i class="bx bx-restaurant"></i></span>
                                </div>
                                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                    <div class="me-2">
                                        <h6 class="mb-0">Food & Beverage</h6>
                                        <small class="text-muted">Pak Gembus, KFC, Nasi Tongkol-Warteg</small>
                                    </div>
                                    <div class="user-progress">
                                        <small class="fw-semibold">576k</small>
                                    </div>
                                </div>
                            </li>
                            <li class="d-flex mb-4 pb-1">
                                <div class="avatar flex-shrink-0 me-3">
                                    <span class="avatar-initial rounded bg-label-success"><i class="bx bx-closet"></i></span>
                                </div>
                                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                    <div class="me-2">
                                        <h6 class="mb-0">Spoiled</h6>
                                        <small class="text-muted">Djarum 12, Es Krim, Shoes</small>
                                    </div>
                                    <div class="user-progress">
                                        <small class="fw-semibold">23k</small>
                                    </div>
                                </div>
                            </li>
                            <li class="d-flex mb-4 pb-1">
                                <div class="avatar flex-shrink-0 me-3">
                                    <span class="avatar-initial rounded bg-label-info"><i class="bx bx-home-alt"></i></span>
                                </div>
                                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                    <div class="me-2">
                                        <h6 class="mb-0">Kost</h6>
                                        <small class="text-muted">Kost November</small>
                                    </div>
                                    <div class="user-progress">
                                        <small class="fw-semibold">1100K</small>
                                    </div>
                                </div>
                            </li>
                            <li class="d-flex">
                                <div class="avatar flex-shrink-0 me-3">
                                    <span class="avatar-initial rounded bg-label-secondary"><i class="bx bx-football"></i></span>
                                </div>
                                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                    <div class="me-2">
                                        <h6 class="mb-0">Gasoline</h6>
                                        <small class="text-muted">Pertalite, Pertamax</small>
                                    </div>
                                    <div class="user-progress">
                                        <small class="fw-semibold">100k</small>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!--/ Total Revenue -->
    </div>
</div>