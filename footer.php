<!-- footerここから -->
<footer>
    <!-- <div class="footer_wrap"> -->
    <div class="footer_inner">
        <p class="page-top">
            <a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/flower01.png" alt="" /></a>
        </p>
        <div class="footer_insta flex">
            <a href="https://www.instagram.com/yuru_henro/" target="_blank" class="flex">
                <i class="fa-brands fa-instagram"></i>
                <p>@yuru_henro</p>
            </a>
        </div>

        <div class="footer_links">
            <ul class="flex">
                <li><a href="#" target=_blank>バナー1</a></li>
                <li><a href="#" target=_blank>バナー2</a></li>
            </ul>
        </div>

        <nav class="footer_nav">
            <ul>
                <li>
                    <a href="<?php echo home_url(); ?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/footer_logo.png" alt="とくしま１日＃ゆるへんろロゴ" class="footer_logo">
                    </a>
                </li>
                <li>
                    <ul class="sp_none">
                        <li class="footer_nav_b"><a href="<?php echo home_url('about'); ?>">＃ゆるへんろとは</a></li>
                        <li><a href="<?php echo home_url('about'); ?>">＃ゆるへんろとは</a></li>
                        <li><a href="<?php echo home_url('about'); ?>">おへんろのお作法</a></li>
                        <li><a href="<?php echo home_url('checkpoint'); ?>">参拝スタイル</a></li>
                        <li><a href="<?php echo home_url('temple'); ?>">寺社一覧</a></li>

                    </ul>
                </li>
                <li>
                    <ul class="sp_none">
                        <li class="footer_nav_b"><a href="<?php echo home_url('single-course'); ?>">コース紹介</a></li>
                        <li><a href="<?php echo home_url('course/easy'); ?>">入門コース</a></li>
                        <li><a href="<?php echo home_url('course/north'); ?>">車入門コース</a></li>
                        <li><a href="<?php echo home_url('course/west'); ?>">県西コース</a></li>
                        <li><a href="<?php echo home_url('course/south'); ?>">県南コース</a></li>
                        <li><a href="<?php echo home_url('course/city'); ?>">市街コース</a></li>
                    </ul>
                </li>
                <li>
                    <ul class="footer_nav_b">
                        <li><a href="<?php echo home_url('bookmark'); ?>" class="sp_none">マイブックマーク</a></li>
                        <li><a href="<?php echo home_url('?s='); ?>" class="sp_none">条件検索</a></li>
                        <li><a href="<?php echo home_url('qanda'); ?>" class="sp_none">Q&A</a></li>
                        <li><a href="<?php echo home_url('sitemap'); ?>">このサイトについて</a></li>
                        <li><a href="<?php echo home_url('privacy'); ?>">プライバシーポリシー</a></li>
                        <li><a href="<?php echo home_url('aboutus'); ?>">サイト制作にあたって</a></li>
                    </ul>
                </li>
            </ul>
        </nav>

        <small>Copyright©とくしま１日＃ゆるへんろ</small>
    </div>
    <!-- </div> -->
</footer>
<!-- footerここまで -->
</div>
<!-- jsプラグイン読み込み -->

<!-- オリジナルjs読み込み -->

<?php wp_footer(); ?>
</body>

</html>
