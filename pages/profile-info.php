    <div class="profile-info">
        <div class="info_blogs">
            <div class="info_left_blog">
                <div class="text_left-blog">
                    <div class="img_blog">
                        <img src="../images/aboutme1img.png" class="left_img" alt="">
                    </div>
                    <div class="admin_user">
                        <h2 class="admin_name"> Admin ismi:  </h2>
                        <h2 class="admin_user-txt"><?= $_SESSION['login']?></h2>
                    </div>
                    <div class="admin_user">
                        <h2 class="admin_name"> Admin Telefon raqami:  </h2>
                        <h2 class="admin_user-txt"><?= $_SESSION['phone']?></h2>
                    </div>
                    <div class="admin_password">
                        <h2 class="admin_name">Admin Paroli:  </h2>
                        <h2 class="admin_pass-txt">********</h2>
                    </div>
                </div>
                <div class="img_left-blog">
                    <div class="admin_profile">
                        <h2 class="admin_profile-txt">Admin Profili:</h2>
                        <img src="<?= $_SESSION['photo']?>" class="admin_profile-img">
                    </div>
                </div>
            </div>
        </div>
    </div>