<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);

$this->registerJs(<<<JS

	console.log(123);
	jssor_1_slider_init();
	
JS
    , yii\web\View::POS_READY);

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1,user-scalable=0">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
	
</head>
<body>
<?php $this->beginBody() ?>
	
	
    <div class="top">
        <div class="center">
            <div class="top_smile">
                <a name ="#totop" href=""></a>
            </div>
            <nav class="top_nav">
                <ul>
                    <li><a href="">УСЛУГИ</a></li>
                    <li><a href="">ЦЕНЫ</a></li>
                    <li><a href="">КОНТАКТЫ</a></li>
                    <li><a href="">НОВОСТИ</a></li>
                </ul>
            </nav>
            <div class="top_social">
                <ul>
                    <li class="vk">
                        <a href=""></a>
                    </li>
                    <li class="in">
                        <a href=""></a>
                    </li>
                    <li class="ok">
                        <a href=""></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="clear"></div>
    <div class="center">
        <header>
            <div class="logo">
            </div>
            <div class="mail">
                <p>info@goodwin58.ru</p>
            </div>
            <div class="phone">
                <p>8-8412-211-733</p>
            </div>
            <div class="slogan">
                <p>Мы творим сказку!</p>
            </div>
        </header>
    </div>
    <div class="slider">
            <div id="jssor_1" style="height: 528px;">
                <div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; min-width: 100%; height: 528px; overflow: hidden;">
                    <div data-p="112.50" style="display: none;">
                        <img data-u="image" src="uploads/img/sl1.jpg" />
                    </div>
                    <div data-p="112.50" style="display: none;">
                        <img data-u="image" src="uploads/img/sl3.jpg" />
                    </div>
                    <div data-p="112.50" style="display: none;">
                        <img data-u="image" src="uploads/img/sl2.jpg" />
                    </div>
                </div>
                <span data-u="arrowleft" class="jssora02l" style="top:0px;left:8px;width:55px;height:55px;" data-autocenter="2"></span>
                <span data-u="arrowright" class="jssora02r" style="top:0px;right:8px;width:55px;height:55px;" data-autocenter="2"></span>
            </div>
	
        </div>
        
    <div class="center content">
        <div class="block">
            <a href="">
                <img src="images/conferancie.png" alt="">
                <div class="name_block">Ведущие</div>
            </a>
            <div class="line"></div>
            <div class="description">Профессиональные ведущие с широкой душой и интеллигентным юмором</div>
        </div>
        <div class="block">
            <a href="">
                <img src="images/show.png" alt="">
                <div class="name_block">Шоу - номера</div>
            </a>
            <div class="line"></div>
            <div class="description"> Эксклюзивные шоу-номера для насыщенной программы</div>
        </div>
        <div class="block">
            <a href="">
                <img src="images/scene.png" alt="">
                <div class="name_block">Места</div>
            </a>
            <div class="line"></div>
            <div class="description"> Места для проведения мероприятий с лучшей кухней и персоналом</div>
        </div>
        <div class="block">
            <a href="">
                <img src="images/photo.png" alt="">
                <div class="name_block">Фото / Видео</div>
            </a>
            <div class="line"></div>
            <div class="description">Услуги фото и видео для шикарных кадров</div>
        </div>
        <div class="block">
            <a href="">
                <img src="images/view.png" alt="">
                <div class="name_block">Оформление</div>
            </a>
            <div class="line"></div>
            <div class="description">Праздничное оформление с атмосферной "начинкой"</div>
        </div>
        <div class="block">
            <a href="">
                <img src="images/anima.png" alt="">
                <div class="name_block">Анимация</div>
            </a>
            <div class="line"></div>
            <div class="description">Всё для незабываемых детских праздников</div>
        </div>
    </div>
    
    <div class="max content clearfix">
        <div class="title center">Отзывы</div>
        <div class="block">
            <div class="name_review">Оксана</div>
            <div class="text shadow bg_f">
                Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. 
            </div>
            <div class="date_review">21.12.12</div>
        </div>
        <div class="block">
            <div class="name_review">Вадим</div>
            <div class="text shadow bg_f">
                Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. 
            </div>
            <div class="date_review">9.11.15</div>
        </div>
        <div class="block">
            <div class="name_review">Donatella</div>
            <div class="text shadow bg_f">
                Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. 
            </div>
            <div class="date_review">30.04.09</div>
        </div>
        
    </div>
    
    <div class="puzzle ">
        <ul>
            <li class="">
                <a class="fancybox" href="puzzle/3_b.jpg" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet"><img src="puzzle/3_s.jpg" alt="" /></a>
            </li>
            <li>
                <a class="fancybox" href="puzzle/2_b.jpg" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet"><img src="puzzle/2_s.jpg" alt="" /></a>
            </li>
            <li>
                <a class="fancybox" href="puzzle/5_b.jpg" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet"><img src="puzzle/5_s.jpg" alt="" /></a>
            </li>
            <li>
                <a class="fancybox" href="puzzle/3_b.jpg" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet"><img src="puzzle/3_s.jpg" alt="" /></a>
            </li>
            <li>
                <a class="fancybox" href="puzzle/4_b.jpg" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet"><img src="puzzle/4_s.jpg" alt="" /></a>
            </li>
            <li>
                <a class="fancybox" href="puzzle/5_b.jpg" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet"><img src="puzzle/5_s.jpg" alt="" /></a>
            </li>
            <li>
                <a class="fancybox" href="puzzle/4_b.jpg" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet"><img src="puzzle/4_s.jpg" alt="" /></a>
            </li>
            <li><a class="fancybox" href="puzzle/2_b.jpg" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet"><img src="puzzle/3_s.jpg" alt="" /></a></li>
            <li>
                <a class="fancybox" href="puzzle/3_b.jpg" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet"><img src="puzzle/1_s.jpg" alt="" /></a>
            </li>
            <li>
                <a class="fancybox" href="puzzle/2_b.jpg" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet"><img src="puzzle/2_s.jpg" alt="" /></a>
            </li>
            <li>
                <a class="fancybox" href="puzzle/1_b.jpg" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet"><img src="puzzle/1_s.jpg" alt="" /></a>
            </li>
            <li>
                <a class="fancybox" href="puzzle/4_b.jpg" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet"><img src="puzzle/4_s.jpg" alt="" /></a>
            </li>
        </ul>
	</div>
    
    <div class="center">
        <div class="article clearfix">
            <div class="title">Это интересно..</div>
            <div class="left_article">
                <a href="">
                    <p class="news_name">Где стоит свадьба</p>
                    <div class="text shadow">Ulysses, Ulysses - Soaring through all the galaxies. In search of Earth, flying in to the night. Ulysses, Ulysses - Fighting evil and tyranny, with all his power, and with all of his might. Ulysses - no-one else can do the things you do. Ulysses - like a bolt of thunder from the blue. Ulysses - always fighting all the evil forces bringing peace and justice to all.
                    </div>
                </a>
                <a href="">
                    <p class="news_name">Когда лучше свалить</p>
                    <div class="text shadow">Ulysses, Ulysses - Soaring through all the galaxies. In search of Earth, flying in to the night. Ulysses, Ulysses - Fighting evil and tyranny, with all his power, and with all of his might. Ulysses - no-one else can do the things you do. Ulysses - like a bolt of thunder from the blue. Ulysses - always fighting all the evil forces bringing peace and justice to all.
                    </div>
                </a>
            </div>
            <div class="right_article">
                <a href="">
                    <p class="news_name">Сколько стоит свадьба</p>
                    <div class="text shadow">Ulysses, Ulysses - Soaring through all the galaxies. In search of Earth, flying in to the night. Ulysses, Ulysses - Fighting evil and tyranny, with all his power, and with all of his might. Ulysses - no-one else can do the things you do. Ulysses - like a bolt of thunder from the blue. Ulysses - always fighting all the evil forces bringing peace and justice to all.
                    </div>
                </a>
                <a href="">
                    <p class="news_name">Недорогое такси</p>
                    <div class="text shadow">Ulysses, Ulysses - Soaring through all the galaxies. In search of Earth, flying in to the night. Ulysses, Ulysses - Fighting evil and tyranny, with all his power, and with all of his might. Ulysses - no-one else can do the things you do. Ulysses - like a bolt of thunder from the blue. Ulysses - always fighting all the evil forces bringing peace and justice to all.
                    </div>
                </a>    
            </div>
            
                
        </div>
    </div>
    
    <footer>
        <div class="copyright center"><a href="">2011 Агенство организации прадников GoodWin &#169</a>
        <a href="#totop">Top</a>
        </div>
        
    </footer>
	
<?/*
<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => 'My Company',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => [
            ['label' => 'Home', 'url' => ['/site/index']],
            ['label' => 'About', 'url' => ['/site/about']],
            ['label' => 'Contact', 'url' => ['/site/contact']],
            Yii::$app->user->isGuest ?
                ['label' => 'Login', 'url' => ['/site/login']] :
                [
                    'label' => 'Logout (' . Yii::$app->user->identity->username . ')',
                    'url' => ['/site/logout'],
                    'linkOptions' => ['data-method' => 'post']
                ],
        ],
    ]);
    NavBar::end();
    ?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; My Company <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>
*/?>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
