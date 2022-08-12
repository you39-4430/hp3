<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inn | news</title>
    <link rel="stylesheet" href="./sass/style.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="./js/index.js"></script>
</head>

<body>
    <header class="l_header c-flex">
        <a href="/" class="l-header__logo">
            <h1 class="u-textSize__l">Inn</h1>
        </a>
        <div class="l-header__hamburger u-spHidden js-hamburger"></div>
        <ul class="l-header__menu c-flex">
            <a href="/" class="l-header__menuItem">
                <li>TOP</li>
            </a>
            <a href="./news.html" class="l-header__menuItem">
                <li>お知らせ</li>
            </a>
            <a href="./company.html" class="l-header__menuItem">
                <li>会社概要</li>
            </a>
            <a href="./recruit.html" class="l-header__menuItem">
                <li>採用情報</li>
            </a>
            <a href="./contact.html" class="l-header__menuItem">
                <li>お問い合わせ</li>
            </a>
        </ul>
    </header>
    <main class="l-main">
        <section class="p-confirm">
            <div class="p-confirm__container">
                <div class="p-confirm__title">
                    <div class="p-confirm__titleWrap">
                        <div class="u-bg__gradation c-flex">
                            <div class="p-confirm__titleInner">
                                <p class="u-textSize__s">お問い合わせ <span class="u-textSize__xs">CONTACT</span></p>
                                <div class="p-confirm__border"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="p-confirm__content">
                    <div class="p-confirm__contentWrap">
                        <div class="p-confirm__messageWrap">
                            <p>
                                ご入力内容にお間違いありませんか？<br>
                                問題なければ、送信してください。
                            </p>
                        </div>
                    </div>
                    <form action="./completion.php" id="form" class="p-confirm__form c-flex" method="post">
                        <div class="p-confirm__formTitle">
                            <p class="u-textSize__s">FORM</p>
                        </div>
                        <div class="p-confirm__formRow c-flex">
                            <p class="p-confirm__formHeading">氏名</p>
                            <p class="p-confirm__formText" name="name" placeholder="氏名"><?php echo $_POST["name"]; ?></p>
                        </div>
                        <div class="p-confirm__formRow c-flex">
                            <p class="p-confirm__formHeading">ふりがな</p>
                            <p class="p-confirm__formText" name="nameKana" placeholder="ふりがな"><?php echo $_POST["nameKana"]; ?></p>
                        </div>
                        <div class="p-confirm__formRow c-flex">
                            <p class="p-confirm__formHeading">メールアドレス</p>
                            <p class="p-confirm__formText" name="mail" placeholder="メールアドレス"><?php echo $_POST["mail"]; ?></p>
                        </div>
                        <div class="p-confirm__formRow c-flex">
                            <p class="p-confirm__formHeading">電話番号</p>
                            <p class="p-confirm__formText" name="tel" placeholder="電話番号"><?php echo $_POST["tel"]; ?></p>
                        </div>
                        <div class="p-confirm__formRow c-flex">
                            <p class="p-confirm__formHeading">郵便番号</p>
                            <p class="p-confirm__formText" name="address_num" placeholder="郵便番号"><?php echo $_POST["addressNum"]; ?></p>
                        </div>
                        <div class="p-confirm__formRow c-flex">
                            <p class="p-confirm__formHeading">住所</p>
                            <p class="p-confirm__formText" name="address" placeholder="住所"><?php echo $_POST["address"]; ?></p>
                        </div>
                        <div class="p-confirm__formRow c-flex">
                            <p class="p-confirm__formHeading">問い合わせ内容</p>
                            <div class="p-confirm__formRadioWrap c-flex">
                                <p class="p-confirm__formRadio"><?php echo $_POST["inquiry"]; ?></p>
                            </div>
                        </div>
                        <div class="p-confirm__formRow c-flex">
                            <p class="p-confirm__formHeading">問い合わせ詳細</p>
                            <p class="p-confirm__formTextarea"><?php echo $_POST["inquiryDetail"]; ?></p>
                        </div>
                    </form>
                    <input type="submit" form="form" class="p-confirm__button c-button u-textSize__xs" value="送信" />
                    <div class="p-confirm__tel">
                        <p class="u-textSize__s">お電話でのお問い合わせはこちら</p>
                        <div class="p-confirm__telInner c-flex">
                            <img src="./img/tel.png" alt="" class="l-footer__telIcon">
                            <p class="u-textSize__s">00-0000-0000</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="p-slider">
            <div class="p-slider__container js-slide">
                <div class="p-slider__imgWrap">
                    <img src="./img/inn2.png" alt="">
                </div>
                <div class="p-slider__imgWrap">
                    <img src="./img/fv1.png" alt="">
                </div>
                <div class="p-slider__imgWrap">
                    <img src="./img/hotspring1.png" alt="">
                </div>
            </div>
            <a href="./contact.html" class="p-slider__button c-button__dark u-textSize__s">お問い合わせはこちらから</a>
        </section>
    </main>
    <footer class="l-footer c-flex">
        <ul class="l-footer__menu c-flex">
            <ul class="l-footer__menu c-flex">
                <a href="/">
                    <li class="l-footer__menuItem">TOP</li>
                </a>
                <a href="./news.html">
                    <li class="l-footer__menuItem">お知らせ</li>
                </a>
                <a href="">
                    <li class="l-footer__menuItem">会社概要</li>
                </a>
                <a href="">
                    <li class="l-footer__menuItem">採用情報</li>
                </a>
                <a href="">
                    <li class="l-footer__menuItem">お問い合わせ</li>
                </a>
            </ul>
        </ul>
        <div class="l-footer__catchCopy u-textSize__xs">最高の食材、最高の景色で束の間のひとときを</div>
        <div class="l-footer__logo">
            <h1 class="u-textSize__l">Inn</h1>
        </div>
        <div class="l-footer__info c-flex">
            <div class="l-footer__left">
                <p class="l-footer__address">
                    〒000-0000<br>
                    長野県飯田市0-0-0 温泉旅館Inn
                </p>
            </div>
            <div class="l-footer__right">
                <div class="c-flex">
                    <img src="./img/tel.png" alt="" class="l-footer__telIcon">
                    <p class="l-footer__number">00-0000-0000</p>
                </div>
                <div class="c-flex">
                    <img src="./img/mail.png" alt="" class="l-footer__mailIcon">
                    <p class="l-footer__mail">xxxxxxx@ryokan.com</p>
                </div>
            </div>
        </div>
        <p class="p-footer__copyright">&copy;copyright</p>
    </footer>
</body>

</html>