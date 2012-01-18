<?php get_header(); ?>

<section id="container">
<section id="content">
    <h2 class="title">Блог Taobao.ru.com</h2>
    <span class="post">Всего записей: 137</span>
    <div class="top"></div>
    <div class="body">
        <div class="page">
            <h2><a href="#">В долине кукол</a></h2>
            <p>Все мы, девушки, были совсем недавно маленькими девочками. В куколки играли. Теперь немного подросли. В куклы играть уже несолидно. А так хочется, чтобы хоть что-нибудь напоминало о куклах. <a href="#">Есть решение!</a></p>
            <div class="article">
                <span class="label">корсеты, перчатки, платья, стиль Gothic & Lolita, туфли на платформе, украшения для волос, чулки, юбки</span>
                <a class="com">15</a>
                <span class="data">02.11.2011</span>
            </div>
            <div class="all">
                <div class="left-box">
                    <h2 class="post">Новые статьи</h2>
                    <ul>
                        <li>
                            <p><a href="#">В долине кукол</a></p>
                            <p><span>04.11.2011  15 комментариев</span></p>
                        </li>
                        <li>
                            <p><a href="#">Пуловер. Достоин мужского внимания</a></p>
                            <p><span>03.11.2011   7 комментариев</span></p>
                        </li>
                        <li>
                            <p><a href="#">Информация для покупателей: вес вещей</a></p>
                            <p><span>02.11.2011    15 комментариев</span></p>
                        </li>
                        <li>
                            <p><a href="#">В чём встречать Новый 2012 год?</a></p>
                            <p><span>01.11.2011    29 комментариев</span></p>
                        </li>
                        <li>
                            <p><a href="#">Какие цвета актуальны в этом сезоне?</a></p>
                            <p><span>29.10.2011   3 комментария</span></p>
                        </li>
                        <li>
                            <p><a href="#">Какие цвета актуальны в этом сезоне?</a></p>
                            <p><span>29.10.2011   3 комментария</span></p>
                        </li>
                    </ul>
                </div>
                <div class="left-box right-box">
                    <h2 class="read">Полезно почитать</h2>
                    <ul>
                        <li>
                            <p><a href="#">Первые шаги на Таобао. Что такое Таобао? Справочная информация о компании, предлагаемых услугах.</a></p>
                            <p><span>04.11.2011  15 комментариев</span></p>
                        </li>
                        <li>
                            <p><a href="#">Первые шаги на таобао. Как искать вещи?</a></p>
                            <p><span>04.11.2011  15 комментариев</span></p>
                        </li>
                        <li>
                            <p><a href="#">Как правильно выбирать продавца? Все доступно и с картинками.</a></p>
                            <p><span>04.11.2011  15 комментариев</span></p>
                        </li>
                        <li>
                            <p><a href="#">Как правильно выбирать продавца? Все доступно и с картинками.</a></p>
                            <p><span>04.11.2011  15 комментариев</span></p>
                        </li>
                        <li>
                            <p><a href="#">Как правильно выбирать продавца? Все доступно и с картинками.</a></p>
                            <p><span>04.11.2011  15 комментариев</span></p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="all">
                <div class="line-title">
					<?php if ( function_exists('wp_tag_cloud') ) : ?>
                    <h2 class="tegi">Поиск статей по тегам</h2>
					
					
					<span><a href="#" class="rig">все статьи</a> →</span>
                </div>
                <div class="tegs">                   
					<?php wp_tag_cloud( 'smallest=8&largest=22&number=25' ); ?>
                <?php endif; ?>
				</div>
            </div>
            <div class="all">
                <h2 class="video">Это интересно</h2>
                <ul class="video">
                    <li>
                        <div class="foto"><a href="#"><img src="<?php bloginfo('template_directory'); ?>/img/video.gif" alt="" title="" /></a></div>
                        <div class="text-video">
                            <p><a href="#">Регистрация на сайте Taobao.ru.com</a></p>
                        </div>
                    </li>
                    <li>
                        <div class="foto"><a href="#"><img src="<?php bloginfo('template_directory'); ?>/img/video.gif" alt="" title="" /></a></div>
                        <div class="text-video">
                            <p><a href="#">Регистрация на сайте Taobao.ru.com</a></p>
                        </div>
                    </li>
                    <li>
                        <div class="foto"><a href="#"><img src="<?php bloginfo('template_directory'); ?>/img/video.gif" alt="" title="" /></a></div>
                        <div class="text-video">
                            <p><a href="#">Регистрация на сайте Taobao.ru.com</a></p>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="all">
                <div class="line-title">
                    <h2 class="list">Видеоинструкции</h2> <span><a href="#" class="rig">все видео</a> →</span>
                </div>
                <div class="left-box">
                    <ul>
                        <li>
                            <p><a href="#">В долине кукол</a></p>
                        </li>
                        <li>
                            <p><a href="#">Пуловер. Достоин мужского внимания</a></p>
                        </li>
                        <li>
                            <p><a href="#">Информация для покупателей: вес вещей</a></p>
                        </li>
                        <li>
                            <p><a href="#">В чём встречать Новый 2012 год?</a></p>
                        </li>
                        <li>
                            <p><a href="#">Какие цвета актуальны в этом сезоне?</a></p>
                        </li>
                        <li>
                            <p><a href="#">Какие цвета актуальны в этом сезоне?</a></p>
                        </li>
                    </ul>
                </div>
                <div class="left-box right-box">
                    <ul>
                        <li>
                            <p><a href="#">Первые шаги на Таобао. Что такое Таобао? Справочная информация о компании, предлагаемых услугах.</a></p>
                        </li>
                        <li>
                            <p><a href="#">Первые шаги на таобао. Как искать вещи?</a></p>
                        </li>
                        <li>
                            <p><a href="#">Как правильно выбирать продавца? Все доступно и с картинками.</a></p>
                        </li>
                        <li>
                            <p><a href="#">Как правильно выбирать продавца? Все доступно и с картинками.</a></p>
                        </li>
                        <li>
                            <p><a href="#">Как правильно выбирать продавца? Все доступно и с картинками.</a></p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="bottom"></div>
</section>
    <div class="right">
        <div class="boxen">
            <?php get_sidebar('calc') ?>
        </div>
        <div class="blog-gree">
            <?php get_sidebar('blog') ?>
        </div>
    </div>
</section>
</div>

<?php get_footer(); ?>