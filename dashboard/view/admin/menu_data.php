<div class="left">
    <span class="left__icon">
        <span></span>
        <span></span>
        <span></span>
    </span>
    <div class="left__content">
    <div class="left__logo"><a href="../../index.php"><img src="../public/assets/logo.png " width="70px" alt="logo"></a></div>
        <div class="left__profile">
            <div class="left__image"><img src="../public/assets/me.jpg" style="object-fit:cover" alt="avatar"></div>
            <p class="left__name">LV</p>
        </div>
        <ul class="left__menu">
        <li class="left__menuItem">
                <div class="left__title"><img src="../public/assets/icon-tag.svg" alt="">Products<img class="left__iconDown" src="../public/assets/arrow-down.svg" alt=""></div>
                <div class="left__text">
                    <?php require 'product/category-con.php' ?>
                </div>
            </li>
            <li class="left__menuItem">
                <div class="left__title"><img src="../public/assets/icon-edit.svg" alt="">Category<img class="left__iconDown" src="../public/assets/arrow-down.svg" alt=""></div>
                <div class="left__text">
                    <?php require 'category/category-con.php' ?>
                </div>
            </li>
            <li class="left__menuItem">
                <div class="left__title"><img src="../public/assets/icon-book.svg" alt="">Group Product<img class="left__iconDown" src="../public/assets/arrow-down.svg" alt=""></div>
                <div class="left__text">
                    <?php require 'groupproduct/category-con.php' ?>
                </div>
            </li>
            <li class="left__menuItem">
                <div class="left__title"><img src="../public/assets/icon-settings.svg" alt="">Brand<img class="left__iconDown" src="../public/assets/arrow-down.svg" alt=""></div>
                <div class="left__text">
                    <?php require 'brand/category-con.php' ?>
                </div>
            </li>
            <li class="left__menuItem">
                <a href="?act=logout" class="left__title"><img src="../public/assets/icon-logout.svg" alt="">Logout</a>
            </li>

        </ul>
    </div>
</div>