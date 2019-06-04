<?php 

$section_class;
$i = 0;
$j = 1;

 ?>


<div class="uk-offcanvas" id="my-id">
    <div class="uk-offcanvas-bar">
        <div class="form">
            <div class="form__header">
                <a href="#my-id" data-uk-offcanvas="{mode:'slide'}" class="offcanvas__exit"></a>

                <img src=<?= $config->urls->templates . 'assets/image/contacts_logo.svg'?> alt="" width="230px" height="40px">
            </div>
            <h2 class="header__title">Стать участником</h2>
            <form action="" method="POST">
                <input type="text" class="header__input" placeholder="Ваше имя" name="fname" required="">
                <input type="text" class="header__input" placeholder="Ваша фамилия" name="lname" required="">
                <input type="text" class="header__input" placeholder="Организация" name="org">
                <input type="text" class="header__input" placeholder="Должность" name="dol">
                <input type="tel" pattern="[1-9]*" class="header__input" placeholder="Телефон" name="phone" required="">
                <input type="text" class="header__input" placeholder="Email" name="email" required="">
                <p class="header__help">Нажимая кнопку отправить, Вы соглашаетесь с политикой обработки персональных данных</p>
                <input type="submit" class="btn btn__form" value="Отправить" name="send">
            </form>
        </div>
    </div>
</div>
<?php foreach ($variable as $key => $value): ?>
	
<?php endforeach ?>

<!--NAVIGATION-->
<div class="header__wrap">
    <nav class="nav">
        <div class="nav__elements">
            <div class="nav__element"><a href="#organizations" data-uk-smooth-scroll>Организаторы</a></div>
            <div class="nav__element"><a href="#audience" data-uk-smooth-scroll>Аудитория</a></div>
            <div class="nav__element"><a href="#content" data-uk-smooth-scroll>Содержание</a></div>
            <div class="nav__element"><a href="#experts" data-uk-smooth-scroll>Эксперты</a></div>
            <div class="nav__element"><a href="#program" data-uk-smooth-scroll>Программа</a></div>
            <div class="nav__element"><a href="#price" data-uk-smooth-scroll>Стоимость</a></div>
            <div class="nav__element"><a href="#contacts" data-uk-smooth-scroll>Контакты</a></div>
        </div>
        <div class="nav__btn">
            <a href="#my-id" data-uk-offcanvas="{mode:'slide'}" class="btn btn_nav">Стать участником</a>
        </div>
    </nav>
</div>
<hr class="gray-line">


<!--Main-->
<div class="main">
    <div class="main__info">
        <p class="main__conf">Международная научно-практическая конференция</p>
        <h1 class="main__title">Применение пеностекольных и пеностеколокерамических материалов в дорожном хозяйстве</h1>
        <hr class="line">
        <a href="#my-id" data-uk-offcanvas="{mode:'slide'}"  class="btn btn_info">Стать участником</a>
        <time class="main__date">11 - 12 ноября 2018</time>
        <p class="main__address">Западно-сибирский Иновационный Центр, Тюменский технопарк улица Руспублики, 142
            <br> Зал: Международный конгресс-холл</p>
            <a href="tel:+73452603105" class="main__phone main__address">8 (3452) 603-105</a>
        <a href="#my-id" data-uk-offcanvas="{mode:'slide'}" class="btn btn_hide">Стать участником</a>
    </div>
    <div class="main__bg" data-uk-parallax="{bg: '-300'}">

    </div>

</div>

<section class="organization" id="organizations">
    <div class="organization__wrap">
        <div class="block_green">
            <h2 class="block_green__title">Организаторы</h2>
            <img src=<?= $config->urls->templates . 'assets/image/organization_logo.svg'?> alt="">
        </div>
        <div class="block_white">
            <div class="block_white__wrap">
                <h3 class="block_white__title">При поддержке</h3>
                <hr class="line block_white__line">
            </div>
            <div class="block_white__wrap">
            	
                <img src=<?= $config->urls->templates . 'assets/image/logotekhnopark.png'?> alt="">
                <img src="<?= $config->urls->templates . 'assets/image/organization_tumen.png'?>" alt="">
            </div>
        </div>
    </div>
</section>


<!--for whom-->
<section class="for-whom" data-uk-parallax="{bg: '-200'}" id="audience">
    <div class="block">
        <h2 class="for-whom__title">Для кого <br> этот форум?</h2>
        <hr class="line for-whom__line">
        <ul class="list-prof">
        	<?php foreach ($page->home_forWhom as $text): ?>
        		<li class="list-prof__element"><span>0<?= $j; ?></span><p class="list-prof__text"><?= $text->home_forWhom_text?></p></li>
        		<?php $j++; ?>
        	<?php endforeach ?>
            
        </ul>
        <div class="for-whom__buttons">
            <a href="#my-id" data-uk-offcanvas="{mode:'slide'}"  class="btn">Стать участником</a>
            <a href="#my-id" data-uk-offcanvas="{mode:'slide'}"  class="btn">Стать докладчиком</a>
        </div>
    </div>
</section>

<!--Секции-->

<section class="sections" id="content">
    <div class="block">
        <p class="sections__p">Тематические</p>
        <h2 class="sections__title">Разделы <br> конференции</h2>
        <hr class="line">
        <ul class="list-sections">

			<?php foreach ($page->home_section as $section): ?>

			<?php 
				if($i % 2 == 1) {
					$section_class = '';
				}
				else{
					$section_class = 'list-sections__info_right';
				}
			 ?>

            <li class="list-sections__element">
	                <div class="list-sections__info <?= $section_class; ?>">
	                    <h4 class="list-sections__title">Раздел №<?= $i + 1?></h4>
	                    <hr class="line list-sections__line">
	                    <p class="list-sections__text"><?= $section->home_section_text?></p>
	                </div>

					<?php 
						if($i % 2 == 1) {
							$section_class = '';
						}
						else{
							$section_class = 'list-sections__bg_left';
						}
					 ?>

	                <div class="list-sections__bg <?= $section_class; ?>" style="background-image: url(<?= $section->home_section_image->url .  $section->home_section_image; ?>); "></div>
	            </li>				
			<?php $i++; ?>
			<?php endforeach ?>


        </ul>
    </div>
</section>

<section class="specialists" id="experts">
    <div class="block">
        <h2 class="specialists__title">Эксперты и докладчики форума</h2>
        <hr class="line specialists__line">
        <div class="slider">
			<?php foreach ($page->home_expert as $expert): ?>
	            <div class="slider__slide">
	            	<div class="slider__img" style="background-image: url(<?= $expert->home_expert_image->url . $expert->home_expert_image; ?>);"></div>
	                <h4 class="slider__title"><?= $expert->home_expert_name; ?></h4>
	                <p class="slider__about"><?= $expert->home_expert_about; ?></p>
	            </div>				
			<?php endforeach ?>
        </div>
        <div class="slideshow__arrows"></div>
    </div>
</section>

<section class="program" id="program">
    <div class="program__wrap">
        <div class="program__left-info">
            <div class="left-info__wrap">
                <h2 class="program__title">Программа форума</h2>
                <p class="program__text">Заполните форму, и мы направим вам на почту программу</p>
                <a href="#my-id" data-uk-offcanvas="{mode:'slide'}"  class="btn btn_program">Получить программу</a>
            </div>
        </div>
        <div class="program__right-bg" data-uk-parallax="{bg: '-300'}">

        </div>
    </div>
</section>

<!--PRICE-->

<section class="price" id="price">
    <div class="block">
        <h2 class="price__title">Стоимость <br> участия</h2>
        <div class="price__wrap">
            <div class="price__item">
                <h3 class="price__roll">Участник</h3>
                <p class="price__sum"><?= substr($page->home_partnerPrice, 0, 2);?> <?= substr($page->home_partnerPrice, 2, 5);?> Р</p>
                <p class="price__include">Включено</p>
                <hr class="price__line">
                <ul class="price__list">
                	<?php foreach ($page->home_includePartner as $include): ?>
                		<li class="price__item"><?= $include->home_includePartner_text; ?></li>
                	<?php endforeach ?>
               
                </ul>
                <a href="#my-id" data-uk-offcanvas="{mode:'slide'}" class="btn btn__hide">Зарегистрироваться</a>
            </div>

            <div class="price__item">
                <h3 class="price__roll">Докладчик</h3>
                <p class="price__sum"><?= substr($page->home_speakerPrice, 0, 2);?> <?= substr($page->home_speakerPrice, 2, 5);?> Р</p>
                <p class="price__include">Включено</p>
                <hr class="price__line">
                <ul class="price__list">
                	<?php foreach ($page->home_includeSpeaker as $include): ?>
                		<li class="price__item"><?= $include->home_includeSpeaker_text; ?></li>
                	<?php endforeach ?>
                </ul>

            </div>
        </div>
        <div class="btn__wrap">
            <a href="#my-id" data-uk-offcanvas="{mode:'slide'}" class="btn price__btn btn__hide">Зарегистрироваться</a>
            <a href="#my-id" data-uk-offcanvas="{mode:'slide'}" class="btn price__btn">Зарегистрироваться</a>
        </div>
    </div>
</section>

<section class="support">
    <div class="block">
        <h2 class="support__title">При поддержке</h2>
        <hr class="line support__line">
        <div class="support_slider">

        	<?php foreach ($page->home_support as $support): ?>
	             <div class="support__slide">
	                <img src=<?= $support->home_support_image->url; ?> alt="">
	                <p class="support__text"><?= $support->home_support_name; ?></p>
	            </div>       		
        	<?php endforeach ?>

        </div>
        <div class="support__arrows"></div>
    </div>
</section>









<section class="organizer">
    <div class="block">
        <h2 class="organizer__title">Организационный <br> комитет форума</h2>
        <hr class="line organizer__line">
        <div class="organizer__people">
            <div class="person"><img src=<?= $config->urls->templates . "assets/image/bolotin_black1.jpg"?> alt="">
                <h4 class="person__title">Болотин Владимир Николаевич</h4>
                <hr class="line person__line">
                <p class="person__spec">Председатель организационного комитета</p>
                <p class="person__spec">почетный профессор БГТУ им. В.Г. Шухова (г.Белгород), руководитель производственно–технической службы Главного управления стекольной промышленности и ВПО «СоюзСтеклоПромМаш» Минестерства промышленности строительных материалов СССР (г.Москва)</p>
            </div>

            <div class="person"><img src=<?= $config->urls->templates . "assets/image/comitet3.png"?> alt="">
                <h4 class="person__title">Коротков Евгений Анатольевич</h4>
                <hr class="line person__line">
                <p class="person__spec">Программный директор форума</p>
                <p class="person__number"><a href="tel:+ 79610000000" class="link_black">+ 7 (961) 000-00-00</a></p>
                <p class="person__email"><a href="malito:e.korotkov@poroglass.ru" class="link_black">e.korotkov@poroglass.ru</a></p>
            </div>

            <div class="person"><img src=<?= $config->urls->templates . "assets/image/comitet1.png"?> alt="">
                <h4 class="person__title">Башканова Наталья</h4>
                <hr class="line person__line">
                <p class="person__spec">По вопросам сотрудничества</p>
                <p class="person__number"><a href="tel:+79292693105" class="link_black">8-929-269-3105</a></p>
                <p class="person__email"><a href="malito:mice@atlanta-bt.ru" class="link_black">mice@atlanta-bt.ru</a></p>
            </div>
        </div>
    </div>
</section>

<section class="contacts" id="contacts">
    <div id="contacts__map"></div>
    <div class="block contacts__block">
        <div class="contacts__info">

            <img src=<?= $config->urls->templates . "assets/image/contacts_logo.svg"?> alt="">
            <h3 class="contacts__title">I Международная научно-практическая конференция</h3>
            <p class="contacts__contact">Западно-сибирский Инновационный Центр, Тюменский технопарк,улица Республики, 142</p>
            <p class="contacts__contact">Зал: Международный конгресс-холл</p>
            <hr class="line contacts__line">
            <p class="contacts__phone">8-912-397-60-20</p>
            <div class="contacts__socials">
                <a href="https://www.instagram.com"><i class="fab fa-instagram"></i></a>
                <a href="https://vk.com"><i class="fab fa-vk"></i></a>
                <a href="https://ru-ru.facebook.com/"><i class="fab fa-facebook-f"></i></a>
            </div>
        </div>
    </div>
</section>


<script type="text/javascript">
    var map;
    function initMap() {
        map = new google.maps.Map(document.getElementById('contacts__map'), {
            center: {lat: 57.137942, lng: 65.567073},
            draggable: !("ontouchend" in document),
            disableDefaultUI: true,
            zoom: 16,
            styles: [
                {
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "color": "#212121"
                        }
                    ]
                },
                {
                    "elementType": "labels.icon",
                    "stylers": [
                        {
                            "visibility": "off"
                        }
                    ]
                },
                {
                    "elementType": "labels.text.fill",
                    "stylers": [
                        {
                            "color": "#757575"
                        }
                    ]
                },
                {
                    "elementType": "labels.text.stroke",
                    "stylers": [
                        {
                            "color": "#212121"
                        }
                    ]
                },
                {
                    "featureType": "administrative",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "color": "#757575"
                        }
                    ]
                },
                {
                    "featureType": "administrative.country",
                    "elementType": "labels.text.fill",
                    "stylers": [
                        {
                            "color": "#9e9e9e"
                        }
                    ]
                },
                {
                    "featureType": "administrative.land_parcel",
                    "stylers": [
                        {
                            "visibility": "off"
                        }
                    ]
                },
                {
                    "featureType": "administrative.locality",
                    "elementType": "labels.text.fill",
                    "stylers": [
                        {
                            "color": "#bdbdbd"
                        }
                    ]
                },
                {
                    "featureType": "poi",
                    "elementType": "labels.text.fill",
                    "stylers": [
                        {
                            "color": "#757575"
                        }
                    ]
                },
                {
                    "featureType": "poi.park",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "color": "#181818"
                        }
                    ]
                },
                {
                    "featureType": "poi.park",
                    "elementType": "labels.text.fill",
                    "stylers": [
                        {
                            "color": "#616161"
                        }
                    ]
                },
                {
                    "featureType": "poi.park",
                    "elementType": "labels.text.stroke",
                    "stylers": [
                        {
                            "color": "#1b1b1b"
                        }
                    ]
                },
                {
                    "featureType": "road",
                    "elementType": "geometry.fill",
                    "stylers": [
                        {
                            "color": "#2c2c2c"
                        }
                    ]
                },
                {
                    "featureType": "road",
                    "elementType": "labels.text.fill",
                    "stylers": [
                        {
                            "color": "#8a8a8a"
                        }
                    ]
                },
                {
                    "featureType": "road.arterial",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "color": "#373737"
                        }
                    ]
                },
                {
                    "featureType": "road.highway",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "color": "#3c3c3c"
                        }
                    ]
                },
                {
                    "featureType": "road.highway.controlled_access",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "color": "#4e4e4e"
                        }
                    ]
                },
                {
                    "featureType": "road.local",
                    "elementType": "labels.text.fill",
                    "stylers": [
                        {
                            "color": "#616161"
                        }
                    ]
                },
                {
                    "featureType": "transit",
                    "elementType": "labels.text.fill",
                    "stylers": [
                        {
                            "color": "#757575"
                        }
                    ]
                },
                {
                    "featureType": "water",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "color": "#000000"
                        }
                    ]
                },
                {
                    "featureType": "water",
                    "elementType": "labels.text.fill",
                    "stylers": [
                        {
                            "color": "#3d3d3d"
                        }
                    ]
                }
            ]
        });
		var marker = new google.maps.Marker({position:{lat:57.137942,lng:65.567073},map:map});
    }

    initMap();
</script>
<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDz-fa3z3jDQhfL6rwyNt3DEJ3XHbyoUHk&callback=initMap" async></script>

<script>




    $(document).ready(function(){
        if(screen.width < 700) var slides = 1;
        else var slides = 3;
        $('.slider').slick({
            dots: true,
            slidesToShow: slides,
            slidesToScroll: 1,
            appendArrows: $('.slideshow__arrows'),
            prevArrow: '<div class="slideshow__arrow_left slideshow__arrow"><img src=<?= $config->urls->templates . "assets/image/left_arrow.png"?>></div>',
            nextArrow: '<div class="slideshow__arrow_right slideshow__arrow"><img src=<?= $config->urls->templates . "assets/image/right_arrow.png"?>></div>'
        });
    });

    $(document).ready(function(){
        if(screen.width < 700) var slides = 1;
        else var slides = 3;
        $('.support_slider').slick({
            dots: true,
            slidesToShow: slides,
            slidesToScroll: 1,
            appendArrows: $('.support__arrows'),
            prevArrow: '<div class="support__arrow_left support__arrow"><img src=<?= $config->urls->templates . "assets/image/left_arrow.png"?>></div>',
            nextArrow: '<div class="support__arrow_right support__arrow"><img src=<?= $config->urls->templates . "assets/image/right_arrow.png"?>></div>'
        });
    });

</script>

