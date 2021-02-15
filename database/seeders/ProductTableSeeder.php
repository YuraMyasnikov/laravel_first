<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'name'=>'iPhone X 64GB',
                'code'=>'iphone_X_64GB',
                'price'=>'44990',
                'description'=>'Вы можете купить Смартфон Apple iPhone XR 64GB Black (MH6M3RU/A) в магазинах М.Видео по доступной цене. Смартфон Apple iPhone XR 64GB Black (MH6M3RU/A): описание, фото, характеристики, отзывы покупателей, инструкция и аксессуары.',
                'image'=>'product/iphone_X_64GB.png',
                'category_id'=> 1,
            ],
            [
                'name'=>'iPhone X 256GB',
                'code'=>'iphone_X_256GB',
                'price'=>'48990',
                'description'=>'Вы можете купить Смартфон Apple iPhone XR 128GB (PRODUCT)RED (MH7N3RU/A) в магазинах М.Видео по доступной цене. Смартфон Apple iPhone XR 128GB (PRODUCT)RED (MH7N3RU/A): описание, фото, характеристики, отзывы покупателей, инструкция и аксессуары.',
                'image'=>'product/iphone_X_256GB.png',
                'category_id'=>1,
            ],
            [
                'name'=>'HTC One Dual Slim',
                'code'=>'htc_one_dual_slim',
                'price'=>'0',
                'description'=>'HTC ONE dual sim - усовершенствованная версия флагманского смартфона HTC ONE. Учтя пожелания пользователей, разработчики внесли ряд изменений в популярную модель, главным из которых является Dual SIM и наличие слота под SD-карты. Также HTC ONE dual sim имеет съемную крышку от аккумулятора (сама батарея по-прежнему остается встроенной). Как и его предшественник, новый флагманский телефон от HTC оснащен 4,7-дюймовым дисплеем с разрешением Full HD (1080p) и плотностью экрана 468 ppi.',
                'image'=>'product/htc_one_dual_slim.webp',
                'category_id'=>1,
            ],
            [
                'name'=>'iPhone 5SE',
                'code'=>'iphone_5se',
                'price'=>'0',
                'description'=>'Операционная система Операционная система iOS Вы можете купить Смартфон Apple iPhone 5S 16Gb Space Gray (ME432RU/A) в магазинах М.Видео по доступной цене. Смартфон Apple iPhone 5S 16Gb Space Gray (ME432RU/A): описание, фото, характеристики, отзывы покупателей, инструкция и аксессуары система Операционная система iOS. Вы можете купить Смартфон Apple iPhone 5S 16Gb Space Gray (ME432RU/A) в магазинах М.Видео по доступной цене. Смартфон Apple iPhone 5S 16Gb Space Gray (ME432RU/A): описание, фото, характеристики, отзывы покупателей, инструкция и аксессуары.',
                'image'=>'product/iphone_5se.jpg',
                'category_id'=>1,
            ],
            [
                'name'=>'Камера GoPro',
                'code'=>'gopro',
                'price'=>'43990',
                'description'=>'Экшен-камера GoPro Hero 8 Black Edition – новая версия знаменитого девайса, готовая порадовать нас улучшенной системой стабилизации HyperSmooth 2.0. Она компенсирует тряску при быстром движении, автоматически выравнивает линию горизонта и удаляет помехи. Попробуйте сами и убедитесь, какими плавными могут быть ваши движения во время спортивных соревнований и экстремальных трюков.',
                'image'=>'product/gopro.jpg',
                'category_id'=>2,
            ],
            [
                'name'=>'Наушники Beats Audio',
                'code'=>'beats_audio',
                'price'=>'14990',
                'description'=>'Наушники Beats Solo3 могут работать до 40 часов без подзарядки, чтобы вы могли пользоваться ими каждый день. 5‑минутной зарядки Fast Fuel хватит ещё на 3 часа воспроизведения. Фирменное звучание Beats в наушниках с технологией Bluetooth класса 1 будет сопровождать вас повсюду — куда бы вы ни отправились. Расположение чашек с мягкими амбушюрами можно регулировать — вы сможете носить их целый день. Беспроводные наушники Beats Solo3 готовы к работе в любой момент. Включите их и поднесите к своему iPhone — они мгновенно подключатся к нему, а заодно и к вашим Apple Watch, iPad и Mac. Точная настройка акустической системы обеспечивает чистое сбалансированное звучание в широком диапазоне. Складные наушники обтекаемой формы прослужат вам долго — а ещё их удобно брать с собой куда угодно. Отвечайте на звонки, управляйте воспроизведением и обращайтесь к Siri, используя многофункциональные элементы управления на чашке наушников.',
                'image'=>'product/beats_audio.jpg',
                'category_id'=>2,
            ],
            [
                'name'=>'Камера Panasonic HC-V770',
                'code'=>'panasonic_hc-v770',
                'price'=>'33990',
                'description'=>'Сохраняйте естественную красоту каждой сцены. Снимайте то, что хотите с помощью простых функций зуммирования, обеспечивающих высокое качество. Используйте новейшую в мире технологи. -Фильм HDR-, представляющую из себя расширенный динамический диапазон для получения четких снимков при задней подсветке. Используйте планшет в качестве дополнительной камеры.',
                'image'=>'product/panasonic_hc-v770.jpg',
                'category_id'=>2,
            ],
            [
                'name'=>'Кофемашина DeLongi',
                'code'=>'de_longi',
                'price'=>'54990',
                'description'=>'Кофемашина De Longhi ECAM22.360.S оснащается встроенной кофемолкой, позволяющей выбирать одну из 13 степеней помола. Она позволяет использовать кофе в зёрнах, который намного дольше сохраняет свой аромат и вкусовые качества. СТРОЕ ПРИГОТОВЛЕНИЕ В устройстве предусмотрено шесть программ приготовления напитков. Для их активации достаточно нажать на соответствующую кнопку - все процессы выполняются в автоматическом режиме.',
                'image'=>'product/de_longi.jpg',
                'category_id'=>2,
            ],
            [
                'name'=>'Мясорубка Bosch Pro Power MF 440',
                'code'=>'bosch_pro_power_mf_440',
                'price'=>'11990',
                'description'=>'Электромясорубка Bosch ProPower MFW67440 не только переработает мясо в фарш, но и поможет вам в приготовлении других блюд. Она укомплектована насадками для кеббе, набивки домашних колбасок и барабанами для шинковки и резки овощей. За считаные минуты вы получите пережарку для супа или заготовки для салата. БЫСТРАЯ РАБОТА Высокая мощность мотора (700 Вт – номинальная, 2000 Вт – при блокировке) обеспечивает производительность 3,5 кг фарша в минуту.',
                'image'=>'product/bosch_pro_power_mf_440.jpg',
                'category_id'=>3,
            ],
            [
                'name'=>'Холодильник Haier A3FE742CGBJRU',
                'code'=>'kholodilnik_haier_a3fe742cgbjru',
                'price'=>'100990',
                'description'=>'Haier A3FE742CGBJRU – стильный вместительный холодильник с инверторным компрессором и выдвижными морозильными камерами. Он экономно расходует электроэнергию, необходимую для создания оптимальных условий для хранения продуктов, и работает с низким уровнем шума. Панель, расположенная на внешней стороне двери, даёт возможность легко контролировать состояние холодильника и пользоваться всеми его функциями.',
                'image'=>'product/kholodilnik_haier_a3fe742cgbjru.jpg',
                'category_id'=>3,
            ],
            [
                'name'=>'Блендер Moulinex',
                'code'=>'moulinex',
                'price'=>'3490',
                'description'=>'Блендер Moulinex DD643132 способен заменить сразу несколько кухонных приборов. Сливки, яичные белки взобьёт венчик, он же поможет в замешивании лёгкого теста, например, для блинчиков. Измельчитель (500 мл) быстро подготовит овощную пережарку для супа, мясо для запеканки или порубит орехи. Погружная насадка сделает пюре, такое однородное и нежное, что его можно будет использовать даже для детского питания.',
                'image'=>'product/moulinex.jpg',
                'category_id'=>3,
            ],
            [
                'name'=>'Samsung Galaxy A71 Black',
                'code'=>'samsung_galaxy_a71_black',
                'price'=>'11980',
                'description'=>'Samsung Galaxy A71 – большой и стильный смартфон с уникальным дизайном корпуса. Динамичный узор на задней панели подчеркнёт вашу индивидуальность. Благодаря плавным линиям девайс удобно лежит в руке. БЕЗ ГРАНИЦ Безрамочный 6,7-дюймовый дисплей выполнен по технологии Super AMOLED Plus. Он гарантирует реалистичную цветопередачу при просмотре кино, пользовании интернетом.',
                'image'=>'product/samsung_galaxy_a71_black.jpg',
                'category_id'=>1,
            ],
            [
                'name'=>'iPhone 11',
                'code'=>'iphone_11',
                'price'=>'85400',
                'description'=>'Вы можете купить Смартфон Apple iPhone 11 64GB Black (MHDA3RU/A) в магазинах М.Видео по доступной цене. Смартфон Apple iPhone 11 64GB Black (MHDA3RU/A): описание, фото, характеристики, отзывы покупателей, инструкция и аксессуары.',
                'image'=>'product/iphone_11.jpg',
                'category_id'=>1,
            ],
            [
                'name'=>'iPhone 11Pro',
                'code'=>'iphone_11_pro',
                'price'=>'96990',
                'description'=>'Вы можете купить Смартфон Apple iPhone 11 Pro 256GB Midnight Green (MWCC2RU/A) в магазинах М.Видео по доступной цене. Смартфон Apple iPhone 11 Pro 256GB Midnight Green (MWCC2RU/A): описание, фото, характеристики, отзывы покупателей, инструкция и аксессуары.',
                'image'=>'product/iphone_11_pro.jpg',
                'category_id'=>1,
            ],
            [
                'name'=>'iPhone 12Pro',
                'code'=>'iphone_12_pro',
                'price'=>'99990',
                'description'=>'iPhone 12 Pro. Новая эра. Новые скорости. Это iPhone 12 Pro. A14 Bionic, самый быстрый процессор iPhone. Система камер Pro, которая обеспечивает потрясающее качество снимков при слабом освещении. Это новая прекрасная эра для iPhone.',
                'image'=>'product/iphone_12_pro.jpg',
                'category_id'=>1,
            ],
            [
                'name'=>'iPhone 12Pro max',
                'code'=>'iphone_12_pro_max',
                'price'=>'109990',
                'description'=>'Встречайте iPhone 12 Pro Max. Это iPhone 12 Pro Max. A14 Bionic, самый быстрый процессор iPhone. Система камер Pro, которая обеспечивает потрясающее качество снимков при слабом освещении. И увеличенный дисплей Super Retina XDR. Это новая эра для iPhone.',
                'image'=>'product/iphone_12_pro_max.jpg',
                'category_id'=>1,
            ],
            [
                'name'=>'iPhone SE 2020',
                'code'=>'iphone_se_2020',
                'price'=>'39990',
                'description'=>'Phone SE. Компактный iPhone. Огромные возможности. Легко держать. Сложно не влюбиться. Всё, как вы любите. iPhone SE. A13 Bionic — самый быстрый процессор iPhone. Портретный режим и видео 4K. Великолепный дисплей Retina HD 4,7 дюйма и Touch ID.1 Долгое время работы без подзарядки.2 Это компактный и невероятно мощный iPhone.',
                'image'=>'product/iphone_se_2020.jpg',
                'category_id'=>1,
            ],
            [
                'name'=>'iPhone XS max',
                'code'=>'iphone_XS_max',
                'price'=>'70990',
                'description'=>'Вы можете купить Смартфон Apple iPhone XS Max 512Gb Space Grey (FT562RU/A) восст. в магазинах М.Видео по доступной цене. Смартфон Apple iPhone XS Max 512Gb Space Grey (FT562RU/A) восст.: описание, фото, характеристики, отзывы покупателей, инструкция и аксессуары.',
                'image'=>'product/iphone_XS_max.jpg',
                'category_id'=>1,
            ],
            [
                'name'=>'Холодильник Indesit DS-4160',
                'code'=>'kholodilnik-indesit-ds-4160',
                'price'=>'23990',
                'description'=>'Indesit DS 4180 E – это холодильник высотой 185 сантиметров с нижней морозильной камерой. Класс энергоэффективности А позволит значительно сократить расходы на электроэнергию. Холодильное отделение дополнено капельной технологией размораживания. Она работает в автоматическом режиме, эффективно препятствует образованию наледи на стенках прибора и существенно упрощает уход за холодильником. В морозильной камере предусмотрен контейнер для льда.',
                'image'=>'product/kholodilnik-indesit-ds-4160.jpg',
                'category_id'=>3,
            ],
            [
                'name'=>'Холодильник Indesit ITF-120 X',
                'code'=>'kholodilnik-indesit-itf-120-x',
                'price'=>'36490',
                'description'=>'Холодильник Indesit ITF 120 X – отличный выбор для большой семьи. В нём реализована работающая в автоматическом режиме система Total No Frost, которая избавит вас от наледи на стенках.',
                'image'=>'product/kholodilnik-indesit-itf-120-x.jpg',
                'category_id'=>3,
            ],
            [
                'name'=>'Samsung WF60F1R2E2W',
                'code'=>'samsung_wf60f1r2e2w',
                'price'=>'26990',
                'description'=>'Вы можете купить Стиральная машина узкая Samsung WF 60 F1R2E2S/DLP в магазинах М.Видео по доступной цене. Стиральная машина узкая Samsung WF 60 F1R2E2S/DLP: описание, фото, характеристики, отзывы покупателей, инструкция и аксессуары.',
                'image'=>'product/samsung_wf60f1r2e2w.jpg',
                'category_id'=>3,
            ],
            [
                'name'=>'Samsung Galaxy Buds',
                'code'=>'samsung-galaxy-buds',
                'price'=>'11990',
                'description'=>'Наушники Samsung Buds Live мягко и плотно прилегают к ушам благодаря эргономичной форме, которая обеспечивает комфортную и надёжную посадку. Ими удобно пользоваться в течение всего дня – в офисе, по пути домой, во время длительного авиаперелёта и вечерней пробежки.',
                'image'=>'product/samsung-galaxy-buds.webp',
                'category_id'=>3,
            ],
            [
                'name'=>'Стиральная машина Weissgauff WM 4927',
                'code'=>'stiralnaia-mashina-weissgauff-wm-4927',
                'price'=>'66990',
                'description'=>'Вы можете купить Стиральная машина стандартная Whirlpool WM E104A S RU в магазинах М.Видео по доступной цене. Стиральная машина стандартная Whirlpool WM E104A S RU: описание, фото, характеристики, отзывы покупателей, инструкция и аксессуары.',
                'image'=>'product/stiralnaia-mashina-weissgauff-wm-4927.webp',
                'category_id'=>3,
            ],
            [
                'name'=>'Беспроводные наушники Xiaomi AirDots Pro 2',
                'code'=>'xiaomi_air_dots_pro_2',
                'price'=>'3890',
                'description'=>'При разработке наушников специально для смартфонов Xiaomi на базе ОС MIUI был оптимизирован Bluetooth-кодек LHDC. Этот аудиокодек считается одним из самых качественных благодаря чрезвычайно низкой задержке, высокой четкости сигнала и поддержке на уровне системы. Благодаря кодеку LHDC аудиофайлы передаются с битрейтом до 900 кбит/сек, битовой глубиной до 24 бит и частотой дискретизации до 96 кГц. Каждый из наушников оснащен двумя микрофонами с поддержкой технологии шумоподавления ENC. Больше никакого шума улицы, автомобилей и разговоров вокруг. Собеседник будет слышать только ваш голос, причем с минимальными задержками и в отличном качестве. Динамик диаметром 14.2 мм с композитной катушкой и мембраной Благодаря продуманной конструкции динамик передает глубокие и насыщенные низкие частоты, естественные и мягкие средние частоты, не обрезая при этом яркие и чистые высокие частоты. Приятный звук определенно придется по душе внимательных к мелочам меломанов, удивляя наполненностью не слышимых ранее деталей любимой музыки. Для управления наушниками вам даже не нужно доставать телефон. Простыми прикосновениями вы можете управлять воспроизведением музыки, вызывать голосового помощника и отвечать на звонки. Дважды нажмите на любой наушник для принятия или завершения вызова. Когда вы не говорите по телефону, дважды нажмите на левый наушник для вызова голосового помощника. Чтобы начать воспроизведение музыки или поставить ее на паузу дважды нажмите на правый наушник или просто снимите один из них, инфракрасный датчик распознает ваше движение и остановит музыку. Наушники Xiaomi AirDots Pro 2 спроектированы таким образом, при котором обеспечивается плотная и удобная посадка в ушном канале. Даже при длительном ношении вы не будете ощущать дискомфорта. При весе каждого наушника всего по 4.2 грамма вы даже не заметите как носите их.',
                'image'=>'product/xiaomi_air_dots_pro_2.jpg',
                'category_id'=>2,
            ],
            [
                'name'=>'Беспроводные наушники Xiaomi Redmi AairDots',
                'code'=>'xiaomi-redmi-airdots',
                'price'=>'1490',
                'description'=>'Универсальная Bluetooth-гарнитура с чехлом - зарядной станцией. Redmi Airdots 2 можно использовать как в паре, так и по отдельности, максимально просто и быстро переключаясь между режимами работы одного и двух наушников. Не нужно изменять настройки, надели один наушник - включился один наушник, надели второй наушник - и автоматически включается объемное звучание.Благодаря тщательной и профессиональной калибровке звучания из динамика размером 7.2 мм можно выжать низкие и средние частоты превосходного качества, а применение технологии цифрового шумоподавления позволяет отсеивать окружающие шумы и сохранять поразительную четкость голоса в самом шумном окружении. лючевым отличием между AirDots и AirDots 2 стало наличие у последних Bluetooth 5.0, который обеспечивает быстрое подключение гарнитуры к смартфону и лучшую энергоэффективность. По умолчанию AirDots 2 поддерживают функции голосового ассистента XiaoAI.',
                'image'=>'product/xiaomi-redmi-airdots.webp',
                'category_id'=>2,
            ],
            [
                'name'=>'Мультиварка Tefa RK 802 B-32',
                'code'=>'multivarka_tefal_RK802B32',
                'price'=>'11990',
                'description'=>'Tefal RK802B32 – компактная мультиварка со стильным дизайном, которая позволит готовить блюда почти как в русской печи. И всё благодаря быстрому индукционному нагреву и равномерному распределению воздуха в сферической чаше объёмом 4,8 литра. РАЗБЕРЁТЕСЬ В ДВА СЧЁТА а панели управления расположены кнопки с информативными символами. Все же выставленные вами изменения отображаются на чётком дисплее.',
                'image'=>'product/multivarka_tefal_RK802B32.jpg',
                'category_id'=>3,
            ],
            [
                'name'=>'Рисоварка Xiaomi Heating Rice Cooker 2 4L',
                'code'=>'risovarka_xiaomi_heating_rice_cooker_2_4l',
                'price'=>'8190',
                'description'=>'С мультиваркой Mi Induction Heating Rice Cooker у вас всегда будет получаться идеальный рис. Если для вас важна рассыпчатость, активируйте соответствующий режим. То же самое касается и каши: для неё предусмотрена отдельная программа. ЧТО ЕЩЁ? Кроме традиционного для стран Азии и Карибского бассейна гарнира, прибор приготовит и гречку, и пшено, и перловку. А специальная функция Keep warm не даст блюду быстро остыть.',
                'image'=>'product/risovarka_xiaomi_heating_rice_cooker_2_4l.jpg',
                'category_id'=>3,
            ],
            [
                'name'=>'Утюг MIE E5',
                'code'=>'utyg_mie_e5',
                'price'=>'10290',
                'description'=>'Вы можете купить Утюг Mie E5 (380804) в магазинах М.Видео по доступной цене. Утюг Mie E5 (380804): описание, фото, характеристики, отзывы покупателей, инструкция и аксессуары.',
                'image'=>'product/utyg_mie_e5.jpg',
                'category_id'=>3,
            ],
            [
                'name'=>'Утюг Philips GC4556_20 Azur',
                'code'=>'utyg_philips_gs_4556_20_azur',
                'price'=>'9990',
                'description'=>'Утюг Philips GC4556/20 очень удобен вы использовании благодаря прорезиненной ручке, которая хорошо лежит в ладони, и шарнирному креплению сетевого шнура. ПРЕВОСХОДНЫЙ РЕЗУЛЬТАТ Мощность 2 500 Вт обеспечивает быстрый нагрев. Подошва Steel Glide хорошо скользит по ткани, а для разглаживания жёстких складок можно воспользоваться паровым ударом.',
                'image'=>'product/utyg_philips_gs_4556_20_azur.jpg',
                'category_id'=> 3,
            ],
        ]);
    }
}
