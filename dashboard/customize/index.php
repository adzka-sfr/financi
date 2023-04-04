<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">

        <div class="col-lg-6 mb-4 order-1">
            <div class="card">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h5 class="card-title m-0 me-2">Income Category</h5>
                </div>
                <div class="card-body">
                    <div class="d-flex align-items-end row">
                        <div class="col-sm-12">
                            <div class="mb-3">
                                <label for="defaultSelect" class="form-label">Name</label>
                                <div class="input-group input-group-merge">
                                    <input type="text" name="name" id="name" class="form-control" placeholder="ex. Grocery, Gasoline, etc" aria-label="Amount (to the nearest dollar)" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex align-items-end row">
                        <div class="col-sm-12 ">
                            <label for="defaultSelect" class="form-label d-block">Icon</label>
                            <div class="mb-3 text-center">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1" />
                                    <i class='bx bx-wallet'></i>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2" />
                                    <i class='bx bx-credit-card'></i>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option3" />
                                    <i class='bx bx-gift'></i>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option4" />
                                    <i class='bx bx-money-withdraw'></i>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option4" />
                                    <i class='bx bxs-bank'></i>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option4" />
                                    <i class='bx bx-store'></i>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option4" />
                                    <i class='bx bxs-discount'></i>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option4" />
                                    <i class='bx bx-dollar'></i>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option4" />
                                    <i class='bx bx-donate-heart'></i>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option4" />
                                    <i class='bx bxs-face-mask'></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 text-center mt-3">
                            <button type="button" name="record" id="record" class="btn btn-primary">Record</button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 text-center mt-3">
                            <hr>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Category</th>
                                            <th>Icon</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Angular Project</strong></td>
                                            <td>Albert Cook</td>
                                            <td><span class="badge bg-label-primary me-1">Active</span></td>
                                            <td>
                                                <div class="dropdown">
                                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i>Edit</a>
                                                        <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i>Delete</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-6 mb-4 order-2">
            <div class="card">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h5 class="card-title m-0 me-2">Outcome Category</h5>
                </div>
                <div class="card-body">
                    <div class="d-flex align-items-end row">
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="defaultSelect" class="form-label">Name</label>
                                <div class="input-group input-group-merge">
                                    <span class="input-group-text">Rp</span>
                                    <input type="number" name="nominal" id="nominal" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1').replace(/^0[^.]/, '0');" class="form-control" placeholder="0" aria-label="Amount (to the nearest dollar)" />
                                    <span class="input-group-text">.00</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="defaultSelect" class="form-label">Image</label>
                                <select id="defaultSelect" class="form-select">
                                    <option>Default select</option>
                                    <option value="c112"><i class="bx bx-dots-vertical-rounded"></i></option>
                                    <option value="2"><i class="bx-first-aid"></i></option>
                                    <option value="3">Grocery</option>
                                    <option value="3">Kost</option>
                                    <option value="3">Electrical</option>
                                    <option value="3">Internet</option>
                                    <option value="3">Skincare</option>
                                    <option value="3">Spoiled</option>
                                </select>
                            </div>
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
                            <button type="button" name="record" id="record" class="btn btn-primary">Record</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-12 order-2">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title d-flex align-items-start justify-content-between">
                                <div class="avatar flex-shrink-0">
                                    <img src="../assets/img/icons/unicons/wallet-info.png" alt="chart success" class="rounded" />
                                </div>
                            </div>
                            <span class="fw-semibold d-block mb-1">Budget</span>
                            <h3 class="card-title mb-2">Rp<br>6.230.000</h3>
                            <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> +72.80%</small>
                            <!-- <small class="text-danger fw-semibold"><i class="bx bx-down-arrow-alt"></i> +72.80%</small> -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title d-flex align-items-start justify-content-between">
                                <div class="avatar flex-shrink-0">
                                    <img src="../assets/img/icons/unicons/cc-warning.png" alt="Credit Card" class="rounded" />
                                </div>
                            </div>
                            <span class="fw-semibold d-block mb-1">Actual</span>
                            <h3 class="card-title mb-2">Rp<br>929.230k</h3>
                            <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> +28.42%</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>