<!-- Logo -->
<h4 class="mb-2">Welcome to Financi! 👋</h4>
<p class="mb-4">Sign-in to your account and start manage your financial</p>
<div class="mb-3">
    <label for="user_id" class="form-label">User ID <i id="userid_login_info_err" style="text-transform: lowercase; color: red; display: none;">(user id tidak ditemukan!)</i> <i id="userid_login_info_null" style="text-transform: lowercase; color: red; display: none;">(user id tidak boleh kosong!)</i> </label>
    <input type="text" class="form-control" id="userid_login" placeholder="Enter your User ID" />
</div>
<div class="mb-3 form-password-toggle">
    <div class="d-flex justify-content-between">
        <label class="form-label" for="password">Password</label>
        <a href="auth-forgot-password-basic.html">
            <small>Forgot Password?</small>
        </a>
    </div>
    <div class="input-group input-group-merge">
        <input type="password" id="password_login" class="form-control" name="password" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="password" />
        <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
    </div>
</div>
<!-- <div class="mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="remember-me" />
                                    <label class="form-check-label" for="remember-me"> Remember Me </label>
                                </div>
                            </div> -->
<div class="mb-3">
    <button id="sign_in" class="btn btn-primary d-grid w-100" type="button">Sign in</button>
</div>

<!-- sementara -->
<script>
    // variable untuk menyimpan DOM user id dan password, untuk memanipulasi style jika error
    const useriddom = document.querySelector('#userid_login');
    const passworddom = document.querySelector('#password_login');

    var password = $('#password_login').val();

    // function untuk melanjutkan ke password jika klik enter
    $('#userid_login').keypress(function(e) {
        if (e.which == 13) {
            $('#password').focus();
        }
    });

    // function untuk melanjutkan ke button login jika klik enter
    $('#password').keypress(function(e) {
        if (e.which == 13) {
            $('#sign_in').click();
        }
    });

    // function untuk hide dan reset style ketika kolom user id sedang focus
    $('#userid_login').focus(function() {
        useriddom.style.cssText = 'null';
        $('#userid_login_info_err').hide();
        $('#userid_login_info_null').hide();
    });

    // function untuk hide dan reset style ketika kolom password id sedang focus
    $('#password_login').focus(function() {
        passworddom.style.cssText = 'null';
        // $('#userid_login_info_err').hide();
        // $('#userid_login_info_null').hide();
    });

    // function untuk melakukan pengecekan jika kolom user id sudah tidak focus
    $('#userid_login').blur(function() {
        var userid = $('#userid_login').val();
        // percabangan untuk melakukan pengecekan apakah user id kosong atau tidak (menampilkan error yang berbeda)
        if (userid == '') {
            $('#userid_login_info_null').show();
            useriddom.style.cssText = 'border-color:red;';
        } else {
            $.ajax({
                url: 'data1.php',
                type: 'POST',
                data: {
                    "userid": userid
                },
                success: function(response) {
                    var response = JSON.parse(response);
                    if (response.status == "kosong") {
                        console.log("user id tidak ditemukan");
                        useriddom.style.cssText = 'border-color:red;';
                        $('#userid_login_info_err').show();
                    } else if (response.status == "ada") {
                        console.log("user id ada");
                    } else {
                        console.log("server busy!");
                    }
                }
            });
        }
    });

    // function yang dijalankan ketika tombol sign in diklik
    $('#sign_in').click(function() {
        console.log('tombol di klik');
        var userid = $('#userid_login').val();
        var password = $('#password_login').val();
        if (userid == '') {
            console.log('user id masih kosong');
            useriddom.style.cssText = 'border-color:red;';
        }

        if (password == '') {
            console.log('password masih kosong');
            passworddom.style.cssText = 'border-color:red;';
        }
    })
</script>
<!-- Logo -->