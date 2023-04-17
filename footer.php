<!-- footerここから -->
<footer>
    <div class="footer_inner">
        <p class="page-top">
            <a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/page-top.gif" alt="ページトップに戻るボタンアイコン" /></a>
        </p>
        <div class="footer_insta flex">
            <a href="https://www.instagram.com/yuru_henro/" target="_blank" class="flex">
                <i class="fa-brands fa-instagram"></i>
                <p>@yuru_henro</p>
            </a>
        </div>

        <div class="footer_links">
            <ul class="flex">
                <li><a href="https://www.awanavi.jp/" target=_blank><img src="<?php echo get_template_directory_uri(); ?>/assets/img/awanavi.jpg" alt="徳島県観光情報サイト 阿波ナビ バナー"></a></li>
                <li><a href="#" target=_blank>バナー2</a></li>
            </ul>
        </div>

        <nav class="footer_nav">
            <ul>
                <li class="mb_40">
                    <a href="<?php echo home_url(); ?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/footer_logo.png" alt="とくしま１日＃ゆるへんろロゴ" class="footer_logo">
                    </a>
                </li>
                <li>
                    <ul class="sp_none">
                        <li class="footer_nav_b"><a href="<?php echo home_url('about'); ?>">＃ゆるへんろって？</a></li>
                        <li><a href="<?php echo home_url('/'); ?>about#jump_to_abouth2">＃ゆるへんろってなぁに？</a></li>
                        <li><a href="<?php echo esc_url(home_url('/')); ?>about#jump_to_about">おへんろの作法</a></li>
                        <li><a href="<?php echo home_url('checkpoint'); ?>">参拝スタイル</a></li>
                        <li><a href="<?php echo home_url('glossary'); ?>">用語集</a></li>
                    </ul>
                </li>
                <li>
                    <ul>
                        <li class="footer_nav_b"><a href="<?php echo home_url('course/easy'); ?>" class="sp_none">コース紹介</a></li>
                        <li><a href="<?php echo home_url('course/easy'); ?>" class="sp_none">入門歩きへんろコース</a></li>
                        <li><a href="<?php echo home_url('course/north'); ?>" class="sp_none">県北　車コース</a></li>
                        <li><a href="<?php echo home_url('course/west'); ?>" class="sp_none">県西　車コース</a></li>
                        <li><a href="<?php echo home_url('course/south'); ?>" class="sp_none">県南　車コース</a></li>
                        <li><a href="<?php echo home_url('course/city'); ?>" class="sp_none">市内　徒歩コース</a></li>
                        <li class="footer_nav_b"><a href="<?php echo home_url('temple'); ?>">お寺一覧</a></li>
                    </ul>
                </li>
                <li>
                    <ul class="footer_nav_b">
                        <li><a href="<?php echo home_url('bookmark'); ?>" class="sp_none">マイブックマーク</a></li>
                        <li><a href="<?php echo home_url('?s='); ?>" class="sp_none">条件検索</a></li>
                        <li><a href="<?php echo home_url('qanda'); ?>" class="sp_none">Q&amp;A</a></li>
                        <li><a href="<?php echo home_url('contact'); ?>">お問い合わせ</a></li>
                        <li><a href="<?php echo home_url('sitemap'); ?>">このサイトについて</a></li>
                        <li><a href="<?php echo home_url('privacy'); ?>">プライバシーポリシー</a></li>
                        <li><a href="<?php echo home_url('aboutus'); ?>">サイト制作にあたって</a></li>
                    </ul>
                </li>
            </ul>
        </nav>

        <small>Copyright©とくしま１日＃ゆるへんろ</small>
    </div>
</footer>
<!-- footerここまで -->
</div>

<?php wp_footer(); ?>

</body>

</html>
