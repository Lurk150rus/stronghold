@extends('master', ["file"=>'product'])
@section('title', 'О компании')
@section('content')
    <style>
        @media screen and (max-width: 1100px) and (min-width: 640px) {
            .container {
                margin-left: 3rem;
                margin-right: 3rem;
            }
        }
    </style>
    <div class="contact-all container" style="padding: 0 1rem;">
        <h2>Лидер среди огнезащитных компаний</h2>
        <p>
            Техстронг – международная производственная и инжиниринговая компания, которая с 2009 года создает уникальные решения в сфере пожарной безопасности, делая безопасное будущее вместе со своими клиентами.
        </p>
        <h2>Контакты</h2>

        <div class="cont-mb page-contact">
            <p>
                <a href="tel:89851697307">8 (985) 169-73-07</a> <br>
                <small>Пн-Пт, 10:00—19:00 (время московское)</small>
            </p>
            <p>
            </p>
            <p>
                <a href="mailto:t.tehstrong@yandex.ru">t.tehstrong@yandex.ru</a>
            </p>
        </div>
        <h3>Адреса</h3>
        <div class="cont-common">
            <div>
                <div>
                    <p>
                        <b>Главый офис в Москве</b>:<br>
                        115035, г. Москва, Космодамианская наб., д. 4/22 корп. Б, пом. VIII, ком. 3, офис 240
                    </p>
                </div>
                <div class="cont-common">
                    <div class="map-div">
                        <a class="map-text map-text-no-top" href="https://yandex.ru/maps/213/moscow/?utm_medium=mapframe&utm_source=maps"
                        >Москва</a>
                        <a href="https://yandex.ru/maps/213/moscow/house/kosmodamianskaya_naberezhnaya_2/Z04YcARoSE0HQFtvfXt1dHViYA==/?ll=37.639531%2C55.746392&source=wizgeo&utm_medium=mapframe&utm_source=maps&z=14"
                           class="map-text map-text-top-14">Космодамианская набережная, 2 на
                            карте Москвы, ближайшее метро Новокузнецкая — Яндекс.Карты</a>
                        <iframe class="map-location" src="https://yandex.ru/map-widget/v1/-/CCUujBEjkC" width="100%" height="320" frameborder="0"
                                allowfullscreen="true"></iframe>
                    </div>
                    <div class="map-div">
                        <a href="https://yandex.ru/maps/213/moscow/search/%D0%B3.%20%D0%9C%D0%BE%D1%81%D0%BA%D0%B2%D0%B0%2C%20%D0%9A%D0%BE%D1%81%D0%BC%D0%BE%D0%B4%D0%B0%D0%BC%D0%B8%D0%B0%D0%BD%D1%81%D0%BA%D0%B0%D1%8F%20%D0%BD%D0%B0%D0%B1.%2C%20%D0%B4.%204%2F22%20%D0%BA%D0%BE%D1%80%D0%BF.%20%D0%91%2C%20%D0%BF%D0%BE%D0%BC.%20VIII%2C%20%D0%BA%D0%BE%D0%BC.%203%2C%20%D0%BE%D1%84%D0%B8%D1%81%20240/?utm_medium=mapframe&utm_source=maps"
                           class="map-text map-text-no-top">г. Москва, Космодамианская наб., д.
                            4/22 корп. Б, пом. VIII, ком. 3, офис 240 в Москве</a><a
                            href="https://yandex.ru/maps/213/moscow/?utm_medium=mapframe&utm_source=maps"
                            class="map-text map-text-top-14">Москва</a>
                        <iframe class="map-location" src="https://yandex.ru/map-widget/v1/-/CCUuj4hQLA" width="100%" height="320" frameborder="0"
                                allowfullscreen="true"></iframe>
                    </div>
                </div>
            </div>
            <div>
                <div>
                    <p>
                        <b>Офис в Новокузнецке</b>:<br>
                        654007, г. Новокузнецк, пр-т Ермакова, 9А, оф. 348, а/я 64
                    </p>
                </div>
                <div class="cont-common">
                    <div class="map-div">
                        <a href="https://yandex.ru/maps/237/novokuznetsk/?utm_medium=mapframe&utm_source=maps"
                           class="map-text map-text-no-top">Новокузнецк</a> <br><a
                            href="https://yandex.ru/maps/237/novokuznetsk/house/prospekt_n_s_yermakova_9a/bE4YdwRjTkcBQFtpfXt3dnRiYQ==/?ll=87.134602%2C53.768753&source=wizgeo&utm_medium=mapframe&utm_source=maps&z=14.8"
                            class="map-text map-text-top-14">Проспект Н.С. Ермакова, 9А на
                            карте Новокузнецка — Яндекс.Карты</a>
                        <iframe class="map-location" src="https://yandex.ru/map-widget/v1/-/CCUujBug3A" width="100%" height="320" frameborder="0"
                                allowfullscreen="true"></iframe>
                    </div>
                    <div class="map-div">
                        <a href="https://yandex.ru/maps/237/novokuznetsk/?utm_medium=mapframe&utm_source=maps"
                           class="map-text map-text-no-top">Новокузнецк</a> <br><a
                            href="https://yandex.ru/maps/237/novokuznetsk/house/prospekt_n_s_yermakova_9a/bE4YdwRjTkcBQFtpfXt3dnRiYQ==/panorama/?l=stv%2Csta&ll=87.133726%2C53.767815&panorama%5Bdirection%5D=81.322579%2C2.421712&panorama%5Bfull%5D=true&panorama%5Bpoint%5D=87.133062%2C53.767638&panorama%5Bspan%5D=114.425589%2C60.000000&source=wizgeo&tab=panorama&utm_medium=mapframe&utm_source=maps&z=16"
                            class="map-text map-text-top-14">Проспект Н.С. Ермакова, 9А на
                            карте Новокузнецка — Яндекс.Карты</a>
                        <iframe class="map-location" src="https://yandex.ru/map-widget/v1/-/CCUujBqhGB" width="100%" height="320" frameborder="0"
                                allowfullscreen="true"></iframe>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Адреса -->
        <h3>Руководство</h3>
        <div class="cont-common">
            <div>
                <p>
                    <b>Генеральный директор</b><br>
                    Михаил Викторович Шумилишский, <br>
                    <a href="&quot;mailto:mikhail.shumilishskiy@yandex.ru&quot;">mikhail.shumilishskiy@yandex.ru</a>
                    <br>
                    8 985 169-73-07
                </p>
            </div>
            <div>
                <p>
                    <b>Исполнительный директор</b><br>
                    Татьяна Сергеевна Сорокина, <br>
                    <a href="mailto:tatiana.sorokina@yandex.ru">tatiana.sorokina@yandex.ru</a><br>
                    8 903 909-67-71
                </p>
            </div>
            <div>
                <p>
                    <b>Бухгалтер</b><br>
                    Ирина Попова,<br>
                    <a href="mailto:irina.popova@yandex.ru">irina.popova@yandex.ru</a>
                </p>
            </div>
        </div>
    </div>


@endsection
