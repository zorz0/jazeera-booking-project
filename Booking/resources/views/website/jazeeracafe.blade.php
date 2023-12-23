@extends('website.layout.app')
@section('content')
    <main>
        <section class="destination-partition">
            <div class="container">
                <div class="breadcrumb-wrap">
                    <ol class="breadcrumb">
                        <li>
                            <a href="{{ route('home') }}">
                                الصفحة الرئيسية
                            </a>
                        </li>
                        <li class="active">
                            سافر
                        </li>
                        <li class="active">
                            احجز
                        </li>
                        <li class="active">
                            جزيرة كافيه
                        </li>
                    </ol>
                </div>
            </div>
        </section>
        <section class="banner generic-banner">
            <div class="container">
                <div class="title lg">
                    <h1>
                        <strong class="spl">
                        </strong>
                    </h1>
                </div>
                <div class="content baggage_class">
                </div>
            </div>
            <div class="">
                <div style="position: relative;">
                    <div class="banner_jcafe_img">
                        <img alt class="banner_jcafe_desktop_img" src="images/j-cafe-bg-2.png">
                        <div class="banner_jcafe_mobile_img" style="background-image: url('/images/j-cafe-bg-2_1.png');">
                            &nbsp;
                        </div>
                        </img>
                    </div>
                    <div class="banner_jcafe_description">
                        <h2>
                            اطلب وجبتك مسبقًا واستمتع بتناولها خلال رحلتك مع جزيرة كافيه
                        </h2>
                        <p>
                            استمتع برحلتك مع تشكيلتنا الشهية من الشطائر الطازجة، السلطات، اللفائف، والوجبات الساخنة. من النكهات المحلية إلى المأكولات العالمية المفضلة، هناك خيارات ترضي الجميع.
                        </p>
                        <a class="mealsbutton" href="#menu_meals" rel="cononical">
                            شاهد قائمة الوجبات
                        </a>
                    </div>
                </div>
                <div>
                    <div class="tab_jcafe_container">
                        <div class="tab_jcafe_div">
                            <div class="custom_nav_jcafe_div custom-nav-tabs-outlined tabs-outlined-wrap">
                                <div class="nav-tab-wrapper">
                                    <ul class="nav nav-tabs">
                                        <li>
                                            <a aria-controls="wraps" aria-selected="true" class="active show" data-toggle="tab" href="#wraps" rel="cononical">
                                                وجبات اللفائف
                                            </a>
                                        </li>
                                        <li>
                                            <a aria-controls="sandwiches" aria-selected="false" data-toggle="tab" href="#sandwiches" rel="cononical">
                                                وجبات الشطائر
                                            </a>
                                        </li>
                                        <li>
                                            <a aria-controls="salads" data-toggle="tab" href="#salads" rel="cononical">
                                                وجبات السلطات
                                            </a>
                                        </li>
                                        <li>
                                            <a aria-controls="hotmeals" data-toggle="tab" href="#hotmeals" rel="cononical">
                                                الوجبات الساخنة
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tab-content" id="menu_meals">
                                    <div class="tab-pane active show" id="wraps">
                                        <div>
                                            <h3 class="tab_note">
                                                * غير متوفرة على الرحلات المتجهة من وإلى القاهرة
                                            </h3>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="data-list-boby">
                                                    <div class="image-wrapper">
                                                        <img alt="Falafel wrap" src="images/falafel-wrap_4.jpg">
                                                    </div>
                                                    <div class="meals_type_logo">
                                                        <img alt src="images/image-49.png">
                                                    </div>
                                                    <div class="data-list data-list title split">
                                                        <div class="included_img">
                                                            <img alt src="images/image-52.png">
                                                            <span class="span_add_img">
                        +
                       </span>
                                                            <img alt src="images/image-54.png">
                                                            <span>
                        مشمول
                       </span>
                                                            </img>
                                                        </div>
                                                        <h3>
                                                            فلافل + شيبس ومشروب
                                                        </h3>
                                                    </div>
                                                    <div class="pt-3 content">
                                                        <p>
                                                            استمتع بمزيج الفلافل مع المايونيز في خبز الصاج الطريّ. بالإضافة إلى شيبس ومشروب غازي أو ماء.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="data-list-boby">
                                                    <div class="image-wrapper">
                                                        <img alt="Potato wrap" src="images/potato-wrap_4.jpg">
                                                    </div>
                                                    <div class="meals_type_logo">
                                                        <img alt src="images/image-49.png">
                                                    </div>
                                                    <div class="data-list title split">
                                                        <div class="included_img">
                                                            <img alt src="images/image-52.png">
                                                            <span class="span_add_img">
                       +
                      </span>
                                                            <img alt src="images/image-54.png">
                                                            <span>
                       مشمول
                      </span>
                                                        </div>
                                                        <h3>
                                                            بطاطس الباجي + شيبس ومشروب
                                                        </h3>
                                                    </div>
                                                    <div class="pt-3 content">
                                                        <p>
                                                            تذوّق شطيرة بطاطس الباجي الهندية مع المايونيز في خبز الصاج الطريّ. بالإضافة إلى شيبس ومشروب غازي أو ماء.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="data-list-boby">
                                                    <div class="image-wrapper">
                                                        <img alt="chicken masal wrap" src="images/masala-chicken-wrap_1.jpg">
                                                    </div>
                                                    <div class="meals_type_logo">
                                                        <img alt src="images/image-48.png">
                                                    </div>
                                                    <div class="data-list title split">
                                                        <div class="included_img">
                                                            <img alt src="images/image-52.png">
                                                            <span class="span_add_img">
                       +
                      </span>
                                                            <img alt src="images/image-54.png">
                                                            <span>
                       مشمول
                      </span>
                                                        </div>
                                                        <h3>
                                                            دجاج مسالا + شيبس ومشروب
                                                        </h3>
                                                    </div>
                                                    <div class="pt-3 content">
                                                        <p>
                                                            استمتع بنكهة لحم الدجاج الأبيض المنقوع باللبن والتوابل في خبز الصاج الطريّ بالإضافة إلى شيبس و مشروب غازي أو ماء.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="data-list-boby">
                                                    <div class="image-wrapper">
                                                        <img alt="Chicken Shawarma" src="images/chicken-shawarma-wrap_1.jpg">
                                                    </div>
                                                    <div class="meals_type_logo">
                                                        <img alt src="images/image-48.png">
                                                    </div>
                                                    <div class="data-list title split">
                                                        <div class="included_img">
                                                            <img alt src="images/image-52.png">
                                                            <span class="span_add_img">
                       +
                      </span>
                                                            <img alt src="images/image-54.png">
                                                            <span>
                       مشمول
                      </span>
                                                        </div>
                                                        <h3>
                                                            شاورما دجاج + شيبس ومشروب
                                                        </h3>
                                                    </div>
                                                    <div class="pt-3 content">
                                                        <p>
                                                            متّع نفسك بشطيرة شاورما الدجاج الشهيّة مع المايونيز في خبز الصاج الطريّ. بالإضافة إلى شيبس ومشروب غازي أو ماء.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="sandwiches">
                                        <div>
                                            <h3 class="tab_note">
                                                * غير متوفرة على الرحلات المتجهة من وإلى القاهرة
                                            </h3>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="data-list-boby">
                                                    <div class="image-wrapper">
                                                        <img alt="Halloumi Sandwich" src="images/halloumi-sandwich_1.jpg">
                                                    </div>
                                                    <div class="meals_type_logo">
                                                        <img alt src="images/image-49.png">
                                                    </div>
                                                    <div class="data-list title split">
                                                        <div class="included_img">
                                                            <img alt src="images/image-52.png">
                                                            <span class="span_add_img">
                       +
                      </span>
                                                            <img alt src="images/image-54.png">
                                                            <span>
                       مشمول
                      </span>
                                                        </div>
                                                        <h3>
                                                            جبنة حلوم + شيبس ومشروب
                                                        </h3>
                                                    </div>
                                                    <div class="pt-3 content">
                                                        <p>
                                                            شطيرة خبز أبيض مليئة بشرائح جبن الحلّوم، والباذنجان المشويّ، وشرائح الفلفل الطازج والزوكيني، وشرائح الطماطم، والخسّ وأوراق الجرجير.بالإضافة إلى شيبس و مشروب غازي أو ماء.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="data-list-boby">
                                                    <div class="image-wrapper">
                                                        <img alt="Turkey" src="images/turkey-sandwich_1.jpg">
                                                    </div>
                                                    <div class="meals_type_logo">
                                                        <img alt src="images/image-48.png">
                                                    </div>
                                                    <div class="data-list title split">
                                                        <div class="included_img">
                                                            <img alt src="images/image-52.png">
                                                            <span class="span_add_img">
                       +
                      </span>
                                                            <img alt src="images/image-54.png">
                                                            <span>
                       مشمول
                      </span>
                                                        </div>
                                                        <h3>
                                                            الديك الرومي + شيبس ومشروب
                                                        </h3>
                                                    </div>
                                                    <div class="pt-3 content">
                                                        <p>
                                                            خبز السيباتا الإيطالي الأسمر مع لحم الحبش المُدخّن، وشرائح الطماطم، والزوكيني المشويّ، وسلطة الملفوف، واللبنة وصلصة التوت البريّ.بالإضافة إلى شيبس و مشروب غازي أو ماء.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="data-list-boby">
                                                    <div class="image-wrapper">
                                                        <img alt="Roast Beef" src="images/roast-beef-sandwich_2.jpg">
                                                    </div>
                                                    <div class="meals_type_logo">
                                                        <img alt src="images/image-48.png">
                                                    </div>
                                                    <div class="data-list title split">
                                                        <div class="included_img">
                                                            <img alt src="images/image-52.png">
                                                            <span class="span_add_img">
                       +
                      </span>
                                                            <img alt src="images/image-54.png">
                                                            <span>
                       مشمول
                      </span>
                                                        </div>
                                                        <h3>
                                                            روست بيف + شيبس ومشروب
                                                        </h3>
                                                    </div>
                                                    <div class="pt-3 content">
                                                        <p>
                                                            شرائح من لحم البقر المشويّ، والخسّ الأحمر، وشرائح الطماطم، وأوراق الجرجير، والخيار المخلّل الحلو وعجينة العسل والخردل في خبز السيباتا بالإضافة إلى شيبس و مشروب غازي أو ماء.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="data-list-boby">
                                                    <div class="image-wrapper">
                                                        <img alt="Cheddar Cheese" src="images/cheddar-cheese-sandwich_1.jpg">
                                                    </div>
                                                    <div class="meals_type_logo">
                                                        <img alt src="images/image-49.png">
                                                    </div>
                                                    <div class="data-list title split">
                                                        <div class="included_img">
                                                            <img alt src="images/image-52.png">
                                                            <span class="span_add_img">
                       +
                      </span>
                                                            <img alt src="images/image-54.png">
                                                            <span>
                       مشمول
                      </span>
                                                        </div>
                                                        <h3>
                                                            جبنة شيدر + شيبس ومشروب
                                                        </h3>
                                                    </div>
                                                    <div class="pt-3 content">
                                                        <p>
                                                            تذوّق أشهى شطيرة شيدر في خبز الفوكاشيا الأسمر مع صلصة الغواكامولي، وعجينة الزيتون وشرائح الطماطم بالإضافة إلى شيبس و مشروب غازي أو ماء.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="salads">
                                        <div>
                                            <h3 class="tab_note">
                                                * غير متوفرة على الرحلات المتجهة من وإلى القاهرة
                                            </h3>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="data-list-boby">
                                                    <div class="image-wrapper">
                                                        <img alt="Rocca" src="images/rocca-salad_1.jpg">
                                                    </div>
                                                    <div class="meals_type_logo">
                                                        <img alt src="images/image-49.png">
                                                    </div>
                                                    <div class="data-list title split">
                                                        <div class="included_img">
                                                            <img alt src="images/image-52.png">
                                                            <span>
                       مشمول
                      </span>
                                                        </div>
                                                        <h3>
                                                            جرجير + مشروب
                                                        </h3>
                                                    </div>
                                                    <div class="pt-3 content">
                                                        <p>
                                                            أوراق الجرجير البريّ الطازجة، والطماطم الكرزية الحلوة، وجبنة بارميجيانو ريجيانو مع الخلّ الإيطاليّ. بالإضافة إلى مشروب غازي أو ماء.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="data-list-boby">
                                                    <div class="image-wrapper">
                                                        <img alt="Pesto Pasta" src="images/pesto-pasta-salad_1.jpg">
                                                    </div>
                                                    <div class="meals_type_logo">
                                                        <img alt src="images/image-49.png">
                                                    </div>
                                                    <div class="data-list title split">
                                                        <div class="included_img">
                                                            <img alt src="images/image-52.png">
                                                            <span>
                       مشمول
                      </span>
                                                        </div>
                                                        <h3>
                                                            بيستو باستا + مشروب
                                                        </h3>
                                                    </div>
                                                    <div class="pt-3 content">
                                                        <p>
                                                            لفائف المعكرونة المطهوّة باحتراف مع ثلاثة أنواع من الفليفلة الملوّنة مع صلصة البيتسو الخضراء الشهيّة الغنيّة بالحبق، وزيت الزيتون وجبنة البارميزان بالإضافة إلى مشروب غازي أو ماء.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="data-list-boby">
                                                    <div class="image-wrapper">
                                                        <img alt="Chicken Caesar" src="images/chicken-cesar-salad_2.jpg">
                                                    </div>
                                                    <div class="meals_type_logo">
                                                        <img alt src="images/image-48.png">
                                                    </div>
                                                    <div class="data-list title split">
                                                        <div class="included_img">
                                                            <img alt src="images/image-52.png">
                                                            <span>
                       مشمول
                      </span>
                                                        </div>
                                                        <h3>
                                                            سيزر بالدجاج + مشروب
                                                        </h3>
                                                    </div>
                                                    <div class="pt-3 content">
                                                        <p>
                                                            دجاج مسفوع على اللهب مع أوراق الخسّ المدوّر، والطماطم الكرزية، وجبنة الباميزان ومكعّبات الخبز المقرمش وصلصة السيزر الشهيّة. بالإضافة إلى مشروب غازي أو ماء.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="hotmeals">
                                        <div>
                                            <h3 class="tab_note tab_note_hotmeals">
                                                * متوفرة حاليًا فقط على الرحلات المتجهة من وإلى كاتماندو ودكا وكولومبو وشيتاغونغ وباهيراهاوا وتشيناي.
                                            </h3>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="data-list-boby">
                                                    <div class="image-wrapper">
                                                        <img alt="mushroom_omelet" src="images/mushroom_omelet.jpg">
                                                    </div>
                                                    <div class="meals_type_logo">
                                                        <img alt src="images/image-48.png">
                                                    </div>
                                                    <div class="data-list title split">
                                                        <div class="included_img">
                                                            <img alt src="images/image-52.png">
                                                            <span>
                       مشمول
                      </span>
                                                        </div>
                                                        <h3>
                                                            أومليت بالفطر + مشروب
                                                        </h3>
                                                    </div>
                                                    <div class="pt-3 content">
                                                        <p>
                                                            أومليت بالفطر الطازجة تقدّم مع الفاصوليا المسلوقة ومكعبات البطاطا المقلية بالإضافة إلى مشروب (ماء)
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="data-list-boby">
                                                    <div class="image-wrapper">
                                                        <img alt="Potatao_frittata" src="images/potatao_frittata.jpg">
                                                    </div>
                                                    <div class="meals_type_logo">
                                                        <img alt src="images/image-48.png">
                                                    </div>
                                                    <div class="data-list title split">
                                                        <div class="included_img">
                                                            <img alt src="images/image-52.png">
                                                            <span>
                       مشمول
                      </span>
                                                        </div>
                                                        <h3>
                                                            بطاطا فريتاتا + مشروب
                                                        </h3>
                                                    </div>
                                                    <div class="pt-3 content">
                                                        <p>
                                                            طاطا فريتاتا لذيذة محضرة مع مختلف أنواع الخضروات، وتقدّم مع الفطر والخضروات بالإضافة إلى مشروب (ماء)
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="data-list-boby">
                                                    <div class="image-wrapper">
                                                        <img alt="grilled_halloumi" src="images/grilled_halloumi.jpg">
                                                    </div>
                                                    <div class="meals_type_logo">
                                                        <img alt src="images/image-49.png">
                                                    </div>
                                                    <div class="data-list title split">
                                                        <div class="included_img">
                                                            <img alt src="images/image-52.png">
                                                            <span>
                       مشمول
                      </span>
                                                        </div>
                                                        <h3>
                                                            حلوم مشوي + مشروب
                                                        </h3>
                                                    </div>
                                                    <div class="pt-3 content">
                                                        <p>
                                                            حلوم مشوي تقدّم مكعبات البطاطا المقلية بالإضافة إلى مشروب (ماء)
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-3">
                                                <div class="data-list-boby">
                                                    <div class="image-wrapper">
                                                        <img alt="lamb_biryani" src="images/lamb-biryani-hot-meal.jpg">
                                                    </div>
                                                    <div class="meals_type_logo">
                                                        <img alt src="images/image-48.png">
                                                    </div>
                                                    <div class="data-list title split">
                                                        <div class="included_img">
                                                            <img alt src="images/image-52.png">
                                                            <span>
                       مشمول
                      </span>
                                                        </div>
                                                        <h3>
                                                            برياني لحم + مشروب
                                                        </h3>
                                                    </div>
                                                    <div class="pt-3 content">
                                                        <p>
                                                            مزيج متبل من اللحم والأرز ، مطبوخ تقليديًا على نار مفتوحة في وعاء من النحاس. يشمل بالاضافة الى مشروب (ماء)
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="data-list-boby">
                                                    <div class="image-wrapper">
                                                        <img alt="chick_biryani" src="images/chick_biryani.jpg">
                                                    </div>
                                                    <div class="meals_type_logo">
                                                        <img alt src="images/image-48.png">
                                                    </div>
                                                    <div class="data-list title split">
                                                        <div class="included_img">
                                                            <img alt src="images/image-52.png">
                                                            <span>
                       مشمول
                      </span>
                                                        </div>
                                                        <h3>
                                                            برياني الدجاج + مشروب
                                                        </h3>
                                                    </div>
                                                    <div class="pt-3 content">
                                                        <p>
                                                            برياني الدجاج تقدّم مع أرز طويل مطهو في مزيج خاص من التوابل الغنية وصلصة مرق خفيفة بالإضافة إلى مشروب (ماء)
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="data-list-boby">
                                                    <div class="image-wrapper">
                                                        <img alt="veg_lasagna" src="images/veg_lasagna.jpg">
                                                    </div>
                                                    <div class="meals_type_logo">
                                                        <img alt src="images/image-49.png">
                                                    </div>
                                                    <div class="data-list title split">
                                                        <div class="included_img">
                                                            <img alt src="images/image-52.png">
                                                            <span>
                       مشمول
                      </span>
                                                        </div>
                                                        <h3>
                                                            لازانيا نباتية +مشروب
                                                        </h3>
                                                    </div>
                                                    <div class="pt-3 content">
                                                        <p>
                                                            لازانيا نباتية مخبوزة ومكونة من باستا البيني في صلصة نابوليتانا بالإضافة إلى مشروب (ماء)
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        &nbsp;
                                        <div>
                                            <h3 class="tab_note tab_note_hotmeals">
                                                * متوفرة حاليًا فقط على الرحلات المتجهة من وإلى دكا.
                                            </h3>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="data-list-boby">
                                                    <div class="image-wrapper">
                                                        <img alt="mushroom_omelet" src="images/kcml2.jpg">
                                                    </div>
                                                    <div class="meals_type_logo">
                                                        <img alt src="images/image-48.png">
                                                    </div>
                                                    <div class="data-list title split">
                                                        <div class="included_img">
                                                            <img alt src="images/image-52.png">
                                                            <span>
                       مشمول
                      </span>
                                                        </div>
                                                        <h3>
                                                            خيشوري مع دجاج كاري + مشروب
                                                        </h3>
                                                    </div>
                                                    <div class="pt-3 content">
                                                        <p>
                                                            وجبة شهية من الأرز والعدس المطبوخ مع البهارات والسمن تقدم مع دجاج ماسالا بالكاري اللذيذ. بالإضافة إلى مشروب (ماء)
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="data-list-boby">
                                                    <div class="image-wrapper">
                                                        <img alt="mushroom_omelet" src="images/cbml.jpg">
                                                    </div>
                                                    <div class="meals_type_logo">
                                                        <img alt src="images/image-48.png">
                                                    </div>
                                                    <div class="data-list title split">
                                                        <div class="included_img">
                                                            <img alt src="images/image-52.png">
                                                            <span>
                       مشمول
                      </span>
                                                        </div>
                                                        <h3>
                                                            برياني الدجاج مع الخضار المقلي + مشروب
                                                        </h3>
                                                    </div>
                                                    <div class="pt-3 content">
                                                        <p>
                                                            مكعبات دجاج متبلة مغموسة بالأرز مطبوخة بمزيج خاص من التوابل اللذيدة ، تقدم مع خضروات مقرمشة مقلية. بالإضافة إلى مشروب (ماء)
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="data-list-boby">
                                                    <div class="image-wrapper">
                                                        <img alt="mushroom_omelet" src="images/vbml.jpg">
                                                    </div>
                                                    <div class="meals_type_logo">
                                                        <img alt src="images/image-49.png">
                                                    </div>
                                                    <div class="data-list title split">
                                                        <div class="included_img">
                                                            <img alt src="images/image-52.png">
                                                            <span>
                       مشمول
                      </span>
                                                        </div>
                                                        <h3>
                                                            برياني الخضار مع كاتليت + مشروب
                                                        </h3>
                                                    </div>
                                                    <div class="pt-3 content">
                                                        <p>
                                                            برياني الخضار مع النكهات اللذيذة يقدم مع كاتليت خضروات مقلية مقرمشة. بالإضافة إلى مشروب (ماء)
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="jcafe_terms_conditions">
                        <div>
                            <div class="row terms_cond">
                                <div class="col-md-7 list-direction">
                                    <h2 class="terms_con">
                                        الشروط والأحكام
                                    </h2>
                                    <div class="bullet-list">
                                        <ul class="list">
                                            <li>
                                                يجب طلب الوجبات عبر الإنترنت قبل 24 ساعة على الأقلّ من الموعد المحدّد لانطلاق الرحلة.
                                            </li>
                                            <li>
                                                جميع مكوّنات الوجبات عبر الإنترنت من المواد الحلال.
                                            </li>
                                            <li>
                                                عندما يكون هناك أكثر من مسافر في الحجز نفسه، يمكن لصاحب الحجز أن يطلب مأكولات للمسافر الآخر في نفس الحجز.
                                            </li>
                                            <li>
                                                تتوفر الوجبات المطلوبة عبر الانترنت في الدرجة السياحية فقط.
                                            </li>
                                            <li>
                                                الوجبات المطلوبة عبر الانترنت غير متوفرة على الرحلات المتجهة من وإلى القاهرة.
                                            </li>
                                            <li>
                                                الوجبات الساخنة متوفرة فقط على رحلات معينة
                                                <span style="color: red;">
                    *
                   </span>
                                            </li>
                                            <li>
                                                سيتم تأكيد الطلب في صفحة التأكيد بعد اتمام عملية الدفع.
                                            </li>
                                            <li>
                                                يمكن تغيير الوجبات المُختارة قبل 24 ساعة على الأقلّ من الموعد المحدّد لانطلاق الرحلة الجويّة.
                                            </li>
                                            <li>
                                                في حال تغيير الرحلة قبل 24 ساعة أو أكثر من الموعد المحدّد:
                                                <ul class="list">
                                                    <li>
                                                        <strong>
                                                            التعديل
                                                        </strong>
                                                        <ul class="sub_li">
                                                            <li>
                                                                يتم ترحيل الوجبات المطلوبة عبر الإنترنت إلى الرحلة الجديدة على شرط أنّ موعد الرحلة الجديد سيكون بعد 24 ساعة على الأقلّ
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <strong>
                                                            الإلغاء
                                                        </strong>
                                                        <ul class="sub_li">
                                                            <li>
                                                                يتمّ إعادة ثمن الوجبات المطلوبة عبر الإنترنت إلى الرصيد الذي سُحبت منه.
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                                <ul class="sub_li">
                                                    <li>
                                                        في حال تغيير موعد الرحلة الجوية قبل أقلّ من 24 ساعة من الموعد المحدّد:
                                                        <ul class="list">
                                                            <li>
                                                                <strong>
                                                                    التعديل
                                                                </strong>
                                                                <ul class="sub_li">
                                                                    <li>
                                                                        يتمّ إعادة ثمن الوجبات المطلوبة عبر الإنترنت إلى الرصيد الذي سُحبت منه.
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                            <li>
                                                                <strong>
                                                                    الإلغاء
                                                                </strong>
                                                            </li>
                                                            <li>
                                                                يتمّ إعادة ثمن الوجبات المطلوبة عبر الإنترنت إلى الرصيد الذي سُحبت منه.
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        لا يمكن إعادة ثمن الوجبات المطلوبة عبر الإنترنت إذا لم يتمّ استخدامها في الرحلة الجويّة المُختارة التي تمّ طلب الوجبات عليها مسبقاً، وذلك سواء التحق المسافر بالرحلة أم لم يلتحق.
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                        <p class="meals_note">
                  <span>
                   *
                  </span>
                                            الوجبات الساخنة متوفرة حاليًا فقط على الرحلات المتجهة من وإلى كاتماندو ودكا وكولومبو وشيتاغونغ وباهيراهاوا وتشيناي.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-5 cms-img">
                                    <div style="background: url('/images/image-46.png');">
                                        &nbsp;
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <script>
            $('.challange').click(function () {
                var val = $(this)[0].children[0].innerText;
                dataLayer.push({
                    'event': 'ctaClick',
                    'ctaName': 'career select',
                    'productName': val,
                    'section': 'carrers',
                    'userType': document.cookie.includes("agent_dashboardCookie") ? 'agent' : document.cookie.includes("loggedInUser") ? 'member' : 'guest',
                    'language': window.location.href.indexOf('/ar-') > 0 ? 'ar' : 'en',
                    'country': localStorage.pageCountry.toUpperCase(),
                    'channel': 'Web',
                    'pos': 'J9WEB'
                });
            })
        </script>
    </main>
@endsection
