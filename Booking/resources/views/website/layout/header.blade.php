<header>
    <div id="header">
        <div class="container">
            <div class="header-inner desktop_navigation">
                <a href="{{ route('home') }}" class="brand header-logo">
                    @if(isset($green))
                        <img src="{{asset('images/jazeera-green-logo@2x.png')}}" alt="" class="lazyload">
                    @else
                        <img src="/images/jazeera-logo.png" alt="" class="lazyload">

                    @endif
                </a>



                <ul class="main-nav newly_added_mobile_class" style="margin-top:38px !important;">
                    <li class="hover plan-menu">
                        <a href="#" class="Plan main-category">&#x633;&#x627;&#x641;&#x631;</a>
                        <i class="icon icon-arrow-down"></i>
                        <div class="sub-menu plan-sub-menu" data-value="&#x633;&#x627;&#x641;&#x631;">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-4">
                                        <ul class="Flight Information">
                                            <li><a><strong>&#x645;&#x639;&#x644;&#x648;&#x645;&#x627;&#x62A;
                                                        &#x627;&#x644;&#x633;&#x641;&#x631;</strong></a></li>
                                            <li class=""><a href="{{ route('flights') }}"> &#x623;&#x641;&#x636;&#x644;
                                                    &#x627;&#x644;&#x623;&#x633;&#x639;&#x627;&#x631; </a></li>
                                            <li><a href="{{ route('baggage-allowance') }}">&#x648;&#x632;&#x646;
                                                    &#x627;&#x644;&#x62D;&#x642;&#x627;&#x626;&#x628;
                                                    &#x627;&#x644;&#x645;&#x633;&#x645;&#x648;&#x62D;</a></li>
                                            <li><a href="{{ route('fare-options') }}">&#x627;&#x644;&#x62F;&#x631;&#x62C;&#x629;
                                                    &#x627;&#x644;&#x633;&#x64A;&#x627;&#x62D;&#x64A;&#x629;</a></li>
                                            <li><a href="{{ route('liveanimals') }}">&#x627;&#x644;&#x633;&#x641;&#x631;
                                                    &#x645;&#x639;
                                                    &#x627;&#x644;&#x62D;&#x64A;&#x648;&#x627;&#x646;&#x627;&#x62A;</a>
                                            </li>
                                            <li><a href="{{ route('visa-information') }}">&#x645;&#x639;&#x644;&#x648;&#x645;&#x627;&#x62A;
                                                    &#x639;&#x646; &#x62A;&#x623;&#x634;&#x64A;&#x631;&#x627;&#x62A;
                                                    &#x627;&#x644;&#x62F;&#x62E;&#x648;&#x644;</a></li>
                                        </ul>


                                    </div>
                                    <div class="col-md-4">
                                        <ul class="Flight Information">
                                            <li><a><strong>&#x627;&#x644;&#x648;&#x635;&#x648;&#x644;
                                                        &#x625;&#x644;&#x649;
                                                        &#x627;&#x644;&#x645;&#x637;&#x627;&#x631;</strong></a></li>
                                            <li><a href="{{ route('jazeera-terminal') }}">&#x645;&#x628;&#x646;&#x649;
                                                    &#x637;&#x64A;&#x631;&#x627;&#x646;
                                                    &#x627;&#x644;&#x62C;&#x632;&#x64A;&#x631;&#x629; T5</a></li>
                                            <li><a href="{{ route('terminal-car-park') }}">&#x645;&#x648;&#x627;&#x642;&#x641;
                                                    &#x633;&#x64A;&#x627;&#x631;&#x627;&#x62A;
                                                    &#x645;&#x628;&#x646;&#x649; &#x631;&#x643;&#x627;&#x628; T5</a>
                                            </li>
                                            <li><a href="{{ route('early-check-in') }}">&#x62A;&#x633;&#x62C;&#x64A;&#x644;
                                                    &#x627;&#x644;&#x62F;&#x62E;&#x648;&#x644;
                                                    &#x627;&#x644;&#x645;&#x628;&#x643;&#x631;</a></li>
                                            <li><a href="{{ route('flight-status') }}">&#x62D;&#x627;&#x644;&#x629;
                                                    &#x627;&#x644;&#x631;&#x62D;&#x644;&#x629;</a></li>
                                            <li><a href="{{ route('flight-schedules') }}">&#x62C;&#x62F;&#x648;&#x644;
                                                    &#x631;&#x62D;&#x644;&#x627;&#x62A;
                                                    &#x627;&#x644;&#x637;&#x64A;&#x631;&#x627;&#x646;</a></li>
                                        </ul>


                                    </div>
                                    <div class="col-md-4">
                                        <ul class="Flight Information">
                                            <li><a><strong>&#x627;&#x62D;&#x62C;&#x632;</strong></a></li>
                                            <li><a href="{{ route('jazeera-charter') }}">&#x627;&#x644;&#x62C;&#x632;&#x64A;&#x631;&#x629;
                                                    &#x644;&#x644;&#x637;&#x627;&#x626;&#x631;&#x627;&#x62A;
                                                    &#x627;&#x644;&#x62E;&#x627;&#x635;&#x629;</a></li>
                                            <li class=""><a
                                                    href="https://hotels.jazeeraairways.com/index.en-us.html?aid=1562821;label=hp-pagenavtab-1562821-dsk;sid=9a7ea1d4b9306a30761524c9d46f21ba;keep_landing=1&amp;sb_price_type=total&amp;_ga=2.5284787.1627655454.1681192603-169893526.1679663201">
                                                    &#x62D;&#x62C;&#x632;
                                                    &#x627;&#x644;&#x641;&#x646;&#x627;&#x62F;&#x642; </a></li>
                                            <li><a href="{{ route('meet-assist') }}">&#x62E;&#x62F;&#x645;&#x629;
                                                    &#x627;&#x644;&#x627;&#x633;&#x62A;&#x642;&#x628;&#x627;&#x644;
                                                    &#x648;&#x627;&#x644;&#x645;&#x633;&#x627;&#x639;&#x62F;&#x629;</a>
                                            </li>
                                            <li><a href="{{ route('seat-selection') }}">&#x627;&#x62E;&#x62A;&#x64A;&#x627;&#x631;
                                                    &#x627;&#x644;&#x645;&#x642;&#x639;&#x62F;</a></li>
                                            <li><a href="{{ route('travel-insurance') }}">&#x62A;&#x623;&#x645;&#x64A;&#x646;
                                                    &#x627;&#x644;&#x633;&#x641;&#x631;</a></li>
                                            <li><a href="{{ route('jazeeracafe') }}">&#x62C;&#x632;&#x64A;&#x631;&#x629;
                                                    &#x643;&#x627;&#x641;&#x64A;&#x647;</a></li>
                                            <li><a href="{{ route('offers') }}">&#x639;&#x631;&#x648;&#x636;</a></li>
                                            <li><a href="{{ route('tripadmit') }}">&#x62C;&#x648;&#x644;&#x627;&#x62A;
                                                    &#x648;&#x641;&#x639;&#x627;&#x644;&#x64A;&#x627;&#x62A;
                                                    &#x633;&#x64A;&#x627;&#x62D;&#x64A;&#x629;</a></li>
                                            <li><a href="{{ route('priority-service') }}">&#x62E;&#x62F;&#x645;&#x629;
                                                    &#x627;&#x644;&#x623;&#x648;&#x644;&#x648;&#x64A;&#x629;</a></li>
                                        </ul>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="experience-menu">
                        <a href="#" class="main-category">&#x627;&#x633;&#x62A;&#x643;&#x634;&#x641;</a>
                        <i class="icon icon-arrow-down"></i>
                        <div class="sub-menu experience-sub-menu"
                             data-value="&#x627;&#x633;&#x62A;&#x643;&#x634;&#x641;">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-4">
                                        <ul class="">
                                            <li><a><strong>&#x62F;&#x627;&#x62E;&#x644;
                                                        &#x627;&#x644;&#x645;&#x637;&#x627;&#x631;</strong></a></li>
                                            <li><a href="{{ route('priority-service') }}">&#x62E;&#x62F;&#x645;&#x629;
                                                    &#x627;&#x644;&#x623;&#x648;&#x644;&#x648;&#x64A;&#x629;</a></li>
                                            <li><a href="{{ route('jazeera-lounge') }}">&#x642;&#x627;&#x639;&#x629;
                                                    Pearl</a></li>
                                            <li><a href="{{ route('special-assistance') }}">&#x62E;&#x62F;&#x645;&#x629;
                                                    &#x627;&#x644;&#x645;&#x633;&#x627;&#x639;&#x62F;&#x629;
                                                    &#x641;&#x64A; &#x627;&#x644;&#x633;&#x641;&#x631;</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-md-4">
                                        <ul class="">
                                            <li><a><strong>&#x639;&#x646;
                                                        &#x631;&#x62D;&#x644;&#x62A;&#x643;</strong></a></li>
                                            <li><a    href="{{ route('duo-seat') }}" >&#x645;&#x642;&#x639;&#x62F;
                                                    &#x645;&#x632;&#x62F;&#x648;&#x62C;
                                                    &#x62C;&#x62F;&#x64A;&#x62F;.</a></li>
                                            <li><a href="/ar-jo/experience/about-your-flight/your-carbon-foot-print">&#x628;&#x635;&#x645;&#x62A;&#x643;
                                                    &#x627;&#x644;&#x643;&#x631;&#x628;&#x648;&#x646;&#x64A;&#x629;</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-md-4">
                                        <ul class="">
                                            <li><a><strong>&#x625;&#x62F;&#x627;&#x631;&#x629;
                                                        &#x627;&#x644;&#x62D;&#x62C;&#x632;</strong></a></li>
                                            <li><a href="{{ route('home' ,'mngbooking') }}">&#x625;&#x62F;&#x627;&#x631;&#x629;
                                                    &#x627;&#x644;&#x62D;&#x62C;&#x632;</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a class="destination-link destination-drpdwn-menu main-category"
                           href='#'>&#x627;&#x644;&#x648;&#x62C;&#x647;&#x627;&#x62A;</a>
                        <i class="icon icon-arrow-down"></i>
                        <div class="sub-menu experience-sub-menu destination-submenu one_one"
                             data-value="&#x627;&#x644;&#x648;&#x62C;&#x647;&#x627;&#x62A;">
                            <div class="sub-menu experience-sub-menu destination-submenu" data-value="Destinations">
                                <div class="container">
                                    <div class="row">
                                        <div class="mediawidth" style="width: 20%; text-align: right;">
                                            <div class="region_underline" style="font-weight: bold; color: #fff;">
                                                <em>الشرق الأوسط وأفريقيا</em></div>
                                            <div style="font-weight: 600; color: #fff; padding-left: 10px;">البحرين
                                            </div>
                                            <div style="color: #fff;">
                                                <ul style="list-style-type: none; padding-left: 15px;">
                                                    <li class="active"><a href="{{ route('flights_to_type' ,'bahrain') }}"><span>رحلات
                                                                جوية إلى</span> البحرين</a></li>
                                                </ul>
                                            </div>
                                            <div style="font-weight: 600; color: #fff; padding-left: 10px;">مصر</div>
                                            <div style="color: #fff;">
                                                <ul style="list-style-type: none; padding-left: 15px;">
                                                    <li class="active"><a
                                                            href="{{ route('flights_to_type' ,'alexandria-1') }}"
                                                        ><span>رحلات جوية
                                                                إلى</span> الإسكندرية</a></li>
                                                    <li class="active"><a
                                                            href="{{ route('flights_to_type' ,'assiut') }}"
                                                         ><span>رحلات
                                                                جوية إلى</span> أسيوط</a></li>
                                                    <li class="active"><a

                                                            href="{{ route('flights_to_type' ,'cairo') }}"
                                                     ><span>رحلات
                                                                جوية إلى</span> القاهرة</a></li>

                                                   <li class="active"><a
                                                                         href="{{ route('flights_to_type' ,'giza') }}"
                                                       ><span>رحلات جوية
                                                                إلى</span> سفنكس، القاهرة</a></li>
                                                </ul>
                                            </div>
                                            <div style="font-weight: 600; color: #fff; padding-left: 10px;">إيران</div>
                                            <div style="color: #fff;">
                                                <ul style="list-style-type: none; padding-left: 15px;">


                                                    <li class="active"><a

                                                                          href="{{ route('flights_to_type' ,'shiraz') }}"
                                                        ><span>رحلات
                                                                جوية إلى</span> شيراز </a></li>
                                                 </ul>
                                            </div>

                                        </div>
                                        <div class="mediawidth" style="width: 20%; text-align: right;">
                                            <div style="color: #fff;"></div>

                                            <div style="font-weight: 600; color: #fff; padding-left: 10px;">المملكة
                                                العربية السعودية</div>
                                            <div style="color: #fff;">
                                                <ul style="list-style-type: none; padding-left: 15px;">


                                                    <li class="active"><a
                                                            href="{{ route('flights_to_type' ,'jeddah') }}" ><span>رحلات
                                                                جوية إلى</span> جدة</a></li>
                                                    <li class="active"><a
                                                            href="{{ route('flights_to_type' ,'medina') }}" ><span>رحلات
                                                                جوية إلى</span> المدينة المنورة</a></li>
                                                    <li class="active"><a
                                                                          href="{{ route('flights_to_type' ,'riyadh') }}"
                                                        ><span>رحلات
                                                                جوية إلى</span> الرياض</a></li>

                                                    <li class="active"><a
                                                            href="{{ route('flights_to_type' ,'taif') }}" ><span>رحلات جوية
                                                                إلى</span> الطائف</a></li>
                                                </ul>
                                            </div>
                                            <div style="font-weight: 600; color: #fff; padding-left: 10px;">الإمارات
                                                العربية المتحدة</div>
                                            <div style="color: #fff;">
                                                <ul style="list-style-type: none; padding-left: 15px;">
                                                    <li class="active"><a
                                                            href="{{ route('flights_to_type' ,'dubai') }}"
                                                        ><span>رحلات
                                                                جوية إلى</span> دبي </a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="mediawidth" style="width: 20%; text-align: right;">
                                            <div class="region_underline" style="font-weight: bold; color: #fff;">
                                                <em>جنوب آسيا</em></div>
                                            <div style="font-weight: 600; color: #fff; padding-left: 10px;">بنغلاديش
                                            </div>
                                            <div style="color: #fff;">
                                                <ul style="list-style-type: none; padding-left: 15px;">
                                                    <li class="active"><a

                                                            href="{{ route('flights_to_type' ,'chittagong') }}"


                                                    ><span>رحلات جوية
                                                                إلى</span> شاتوجرام</a></li>
                                                    <li class="active"><a
                                                            href="{{ route('flights_to_type' ,'dhaka') }}"
                                                        ><span>رحلات
                                                                جوية إلى</span> دكا</a></li>
                                                </ul>
                                            </div>
                                            <div style="font-weight: 600; color: #fff; padding-left: 10px;">الهند</div>
                                            <div style="color: #fff;">
                                                <ul style="list-style-type: none; padding-left: 15px;">
                                                     <li class="active"><a
                                                             href="{{ route('flights_to_type' ,'chennai') }}"
                                                             ><span>رحلات
                                                                جوية إلى</span> تشيناي </a></li>

                                                    <li class="active"><a
                                                            href="{{ route('flights_to_type' ,'hyderabad') }}"
                                                       ><span>رحلات
                                                                جوية إلى</span> حيدر أباد </a></li>
                                                     <li class="active"><a
                                                                           href="{{ route('flights_to_type' ,'bangalore') }}"
                                                         ><span>رحلات
                                                                جوية إلى</span> بنغالور</a></li>
                                                    <li class="active"><a
                                                                          href="{{ route('flights_to_type' ,'kochi') }}"
                                                        ><span>رحلات
                                                                جوية إلى</span> كوشي</a></li>
                                                    <li class="active"><a
                                                            href="{{ route('flights_to_type' ,'mumbai') }}"
                                                     ><span>رحلات
                                                                جوية إلى</span> مومباي</a></li>
                                                </ul>
                                            </div>
                                            <div style="font-weight: 600; color: #fff; padding-left: 10px;">نيبال</div>
                                            <div style="color: #fff;">
                                                <ul style="list-style-type: none; padding-left: 15px;">

                                                    <li class="active"><a
                                                            href="{{ route('flights_to_type' ,'kathmandu') }}"
                                                           ><span>رحلات
                                                                جوية إلى</span> كاتماندو </a></li>
                                                </ul>
                                            </div>
                                            <div style="font-weight: 600; color: #fff; padding-left: 10px;">باكستان
                                            </div>
                                            <div style="color: #fff;">
                                                <ul style="list-style-type: none; padding-left: 15px;">

                                                    <li class="active"><a
                                                            href="{{ route('flights_to_type' ,'lahore') }}"
                                                     ><span>رحلات
                                                                جوية إلى</span> لاهور </a></li>
                                                    <li><a
                                                            href="{{ route('flights_to_type' ,'islamabad') }}"
                                                      ><span>رحلات جوية إلى
                                                            </span>إسلام أباد</a></li>
                                                </ul>
                                            </div>

                                        </div>
                                        <div class="mediawidth" style="width: 20%; text-align: right;">
                                            <div class="region_underline" style="font-weight: bold; color: #fff;">
                                                <em>آسيا الوسطى</em></div>

                                            <div style="font-weight: 600; color: #fff; padding-left: 10px;">كازاخستان
                                            </div>
                                            <div style="color: #fff;">
                                                <ul style="list-style-type: none; padding-left: 15px;">
                                                    <li class="active"><a
                                                            href="{{ route('flights_to_type' ,'almaty') }}"

                                                           ><span>رحلات
                                                                جوية إلى</span> ألماتي</a></li>
                                                    <li class="active"><a
                                                            href="{{ route('flights_to_type' ,'turkistan') }}"
                                                   ><span>رحلات
                                                                جوية إلى</span> تركستان</a></li>
                                                </ul>
                                            </div>
                                            <div style="font-weight: 600; color: #fff; padding-left: 10px;">قيرغيزستان
                                            </div>
                                            <div style="color: #fff;">
                                                <ul style="list-style-type: none; padding-left: 15px;">
                                                    <li class="active"><a
                                                            href="{{ route('flights_to_type' ,'bishkek') }}"
                                                            ><span>رحلات
                                                                جوية إلى</span> بيشكيك</a></li>
                                                    <!-- <li class="active"><a href="/ar-jo/flights-to-osh"><span>رحلات جوية إلى</span> أوش</a></li> -->
                                                </ul>
                                            </div>
                                            <div style="font-weight: 600; color: #fff; padding-left: 10px;">أوزبكستان
                                            </div>
                                            <div style="color: #fff;">
                                                <ul style="list-style-type: none; padding-left: 15px;">

                                                    <li class="active"><a
                                                            href="{{ route('flights_to_type' ,'namangan') }}"
                                                          ><span>رحلات
                                                                جوية إلى</span> نامانغان</a></li>

                                                </ul>
                                            </div>

                                        </div>
                                        <div class="mediawidth" style="width: 20%; text-align: right;">
                                            <div class="region_underline" style="font-weight: bold; color: #fff;">
                                                <em>أوروبا</em></div>
                                            <!--<div style="font-weight:600;color: #fff;padding-left:10px;">النمسا</div>
            <div style="color: #fff;">
                <ul style="list-style-type:none;padding-left:15px;">
                    <li><a href="/ar-jo/flights-to-vienna"><span>رحلات جوية إلى</span> فيينا</a></li>
                </ul>
            </div>--> <!-- <div style="font-weight: 600; color: #fff; padding-left: 10px;">البوسنة والهرسك</div>
                    <div style="color: #fff;">
                        <ul style="list-style-type: none; padding-left: 15px;">
                            <li class="active"><a href="/ar-jo/flights-to-sarajevo"><span>رحلات جوية إلى</span> سراييفو</a>
                            </li>
                        </ul>
                    </div> --> <!-- <div style="font-weight:600;color: #fff;padding-left:10px;">الجمهورية التشيكية</div>
                    <div style="color: #fff;">
                        <ul style="list-style-type:none;padding-left:15px;">
                            <li><a href="/ar-jo/flights-to-prague"><span>رحلات جوية إلى</span> براغ</a></li>
                        </ul>
                    </div> --> <!-- <div style="font-weight: 600; color: #fff; padding-left: 10px;">تركيا</div>
                <div style="color: #fff;">
                    <ul style="list-style-type: none; padding-left: 15px;">
                        <li class="active"><a href="/ar-jo/flights-to-istanbul"><span>رحلات جوية إلى</span> اسطنبول</a>
                        </li> --> <!-- <li class="active"><a href="/ar-jo/flights-to-antalya"><span>رحلات جوية إلى</span> أنطاليا</a>
                            </li>
                            <li class="active"><a href="/ar-jo/flights-to-bodrum"><span>رحلات جوية إلى</span> بودروم</a>
                            </li>
                            <li class="active"><a href="/ar-jo/flights-to-trabzon"><span>رحلات جوية إلى</span> طرابزون</a>
                            </li> --> <!-- </ul>
                </div> --> <!-- <div style="font-weight: 600; color: #fff; padding-left: 10px;">روسيا</div>
                <div style="color: #fff;">
                    <ul style="list-style-type: none; padding-left: 15px;">
                        <li class="active"><a href="/ar-jo/flights-to-moscow"><span>رحلات جوية إلى</span> موسكو</a></li>
                    </ul>
                </div> --> <!-- <div style="font-weight: 600; color: #fff; padding-left: 10px;">جمهورية التشيك</div>
                    <div style="color: #fff;">
                        <ul style="list-style-type: none; padding-left: 15px;">
                            <li class="active"><a href="/ar-jo/flights-to-prague"><span>رحلات جوية إلى</span> براغ</a></li>
                        </ul>
                    </div>
                    <div style="font-weight: 600; color: #fff; padding-left: 10px;">قبرص</div>
                    <div style="color: #fff;">
                        <ul style="list-style-type: none; padding-left: 15px;">
                            <li class="active"><a href="/ar-jo/flights-to-larnaka"><span>رحلات جوية إلى</span> لارنكا</a>
                            </li>
                        </ul>
                    </div>
                    <div style="font-weight: 600; color: #fff; padding-left: 10px;">ألبانيا</div>
                    <div style="color: #fff;">
                        <ul style="list-style-type: none; padding-left: 15px;">
                            <li class="active"><a href="/ar-jo/flights-to-tirana"><span>رحلات جوية إلى</span> تيرانا</a>
                            </li>
                        </ul>
                    </div>
                    <div style="font-weight: 600; color: #fff; padding-left: 10px;">صربيا</div>
                    <div style="color: #fff;">
                        <ul style="list-style-type: none; padding-left: 15px;">
                            <li class="active"><a href="/ar-jo/flights-to-belgrade"><span>رحلات جوية إلى</span> بلغراد</a>
                            </li>
                        </ul>
                    </div>
                    <div style="font-weight: 600; color: #fff; padding-left: 10px;">مونتينيغرو</div>
                    <div style="color: #fff;">
                        <ul style="list-style-type: none; padding-left: 15px;">
                            <li class="active"><a href="/ar-jo/flights-to-tivat"><span>رحلات جوية إلى</span> تيفات</a></li>
                        </ul>
                    </div> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a class="terminal-link main-category clsNonPartnerClass"
                           onclick="window.location.href='{{route('jazeera-terminal')}}'">&#x645;&#x628;&#x646;&#x649;
                            &#x631;&#x643;&#x627;&#x628; &#x627;&#x644;&#x62C;&#x632;&#x64A;&#x631;&#x629; T5</a>
                    </li>
                    <li>
                        <a class="destination-link main-category clsNonPartnerClass"
                           onclick="window.open('{{route('flights-savers-club')}}', '_blank')">&#x633;&#x64A;&#x641;&#x631;&#x632;
                            &#x643;&#x644;&#x648;&#x628;</a>
                    </li>
                </ul>

                <ul class="toggle-btns">
                    <li>
                        <a href="#" class="btn btn-dropdown" id="dountryDropdownCountry" style="display:block">
                            <span class="options country-code">jo</span> <span
                                class="options active language-code">ar</span>
                            <i id="dountryDropdownCountryIcon" class="icon icon-arrow-down"></i>
                        </a>
                        <div class="btn-dropdown-menu dropdown-language-switcher">
                            <div id="language-switcherr">



                                <div class="dropdown-option">
                                    <div class="country">
                                        <div class="flag"><i class="flag-icon flag-icon-ae"></i></div>
                                        <div class="country-label">United Arab Emirates</div>


                                    </div>
                                    <div class="languages">



                                        <a onclick="changeCulture('en-ae',' ');" style="margin-right:0px;"
                                           class="culture" id="ChangeofLanguage" value="en-ae" data-code="ae"
                                           data-lang="en">English</a>

                                        <a onclick="changeCulture('ar-ae',' ');" style="padding-left:6px;"
                                           class="culture" id="ChangeofLanguage" value="en-ae" data-code="ae"
                                           data-lang="ar">عربي</a>
                                    </div>
                                </div>
                                <div class="dropdown-option">
                                    <div class="country">
                                        <div class="flag"><i class="flag-icon flag-icon-at"></i></div>
                                        <div class="country-label">Austria</div>


                                    </div>
                                    <div class="languages">



                                        <a onclick="changeCulture('en-at',' ');" style="margin-right:0px;"
                                           class="culture" id="ChangeofLanguage" value="en-at" data-code="at"
                                           data-lang="en">English</a>

                                        <a onclick="changeCulture('ar-at',' ');" style="padding-left:6px;"
                                           class="culture" id="ChangeofLanguage" value="en-at" data-code="at"
                                           data-lang="ar">عربي</a>
                                    </div>
                                </div>
                                <div class="dropdown-option">
                                    <div class="country">
                                        <div class="flag"><i class="flag-icon flag-icon-az"></i></div>
                                        <div class="country-label">Azerbaijan</div>


                                    </div>
                                    <div class="languages">


                                        <a onclick="changeCulture('ru-az',' ');" style="margin-right:0px;"
                                           class="culture" id="ChangeofLanguage" value="ar-az" data-code="az"
                                           data-lang="ru">Русский</a>

                                        <a onclick="changeCulture('en-az',' ');" style="margin-right:0px;"
                                           class="culture" id="ChangeofLanguage" value="ar-az" data-code="az"
                                           data-lang="en">English</a>

                                        <a onclick="changeCulture('ar-az',' ');" style="padding-left:6px;"
                                           class="culture" id="ChangeofLanguage" value="ar-az" data-code="az"
                                           data-lang="ar">عربي</a>
                                    </div>
                                </div>
                                <div class="dropdown-option">
                                    <div class="country">
                                        <div class="flag"><i class="flag-icon flag-icon-ba"></i></div>
                                        <div class="country-label">Bosnia &amp; Herzegovina</div>


                                    </div>
                                    <div class="languages">



                                        <a onclick="changeCulture('en-ba',' ');" style="margin-right:0px;"
                                           class="culture" id="ChangeofLanguage" value="ar-ba" data-code="ba"
                                           data-lang="en">English</a>

                                        <a onclick="changeCulture('ar-ba',' ');" style="padding-left:6px;"
                                           class="culture" id="ChangeofLanguage" value="ar-ba" data-code="ba"
                                           data-lang="ar">عربي</a>
                                    </div>
                                </div>
                                <div class="dropdown-option">
                                    <div class="country">
                                        <div class="flag"><i class="flag-icon flag-icon-bd"></i></div>
                                        <div class="country-label">Bangladesh</div>


                                    </div>
                                    <div class="languages">



                                        <a onclick="changeCulture('en-bd',' ');" style="margin-right:0px;"
                                           class="culture" id="ChangeofLanguage" value="ar-bd" data-code="bd"
                                           data-lang="en">English</a>

                                        <a onclick="changeCulture('ar-bd',' ');" style="padding-left:6px;"
                                           class="culture" id="ChangeofLanguage" value="ar-bd" data-code="bd"
                                           data-lang="ar">عربي</a>
                                    </div>
                                </div>
                                <div class="dropdown-option">
                                    <div class="country">
                                        <div class="flag"><i class="flag-icon flag-icon-bh"></i></div>
                                        <div class="country-label">Bahrain</div>


                                    </div>
                                    <div class="languages">



                                        <a onclick="changeCulture('en-bh',' ');" style="margin-right:0px;"
                                           class="culture" id="ChangeofLanguage" value="ar-bh" data-code="bh"
                                           data-lang="en">English</a>

                                        <a onclick="changeCulture('ar-bh',' ');" style="padding-left:6px;"
                                           class="culture" id="ChangeofLanguage" value="ar-bh" data-code="bh"
                                           data-lang="ar">عربي</a>
                                    </div>
                                </div>
                                <div class="dropdown-option">
                                    <div class="country">
                                        <div class="flag"><i class="flag-icon flag-icon-cz"></i></div>
                                        <div class="country-label">Czech Republic</div>


                                    </div>
                                    <div class="languages">



                                        <a onclick="changeCulture('en-cz',' ');" style="margin-right:0px;"
                                           class="culture" id="ChangeofLanguage" value="ar-cz" data-code="cz"
                                           data-lang="en">English</a>

                                        <a onclick="changeCulture('ar-cz',' ');" style="padding-left:6px;"
                                           class="culture" id="ChangeofLanguage" value="ar-cz" data-code="cz"
                                           data-lang="ar">عربي</a>
                                    </div>
                                </div>
                                <div class="dropdown-option">
                                    <div class="country">
                                        <div class="flag"><i class="flag-icon flag-icon-eg"></i></div>
                                        <div class="country-label">Egypt</div>


                                    </div>
                                    <div class="languages">



                                        <a onclick="changeCulture('en-eg',' ');" style="margin-right:0px;"
                                           class="culture" id="ChangeofLanguage" value="ar-eg" data-code="eg"
                                           data-lang="en">English</a>

                                        <a onclick="changeCulture('ar-eg',' ');" style="padding-left:6px;"
                                           class="culture" id="ChangeofLanguage" value="ar-eg" data-code="eg"
                                           data-lang="ar">عربي</a>
                                    </div>
                                </div>
                                <div class="dropdown-option">
                                    <div class="country">
                                        <div class="flag"><i class="flag-icon flag-icon-et"></i></div>
                                        <div class="country-label">Ethiopia</div>


                                    </div>
                                    <div class="languages">



                                        <a onclick="changeCulture('en-et',' ');" style="margin-right:0px;"
                                           class="culture" id="ChangeofLanguage" value="ar-et" data-code="et"
                                           data-lang="en">English</a>

                                        <a onclick="changeCulture('ar-et',' ');" style="padding-left:6px;"
                                           class="culture" id="ChangeofLanguage" value="ar-et" data-code="et"
                                           data-lang="ar">عربي</a>
                                    </div>
                                </div>
                                <div class="dropdown-option">
                                    <div class="country">
                                        <div class="flag"><i class="flag-icon flag-icon-gb"></i></div>
                                        <div class="country-label">United Kingdom</div>


                                    </div>
                                    <div class="languages">



                                        <a onclick="changeCulture('en-gb',' ');" style="margin-right:0px;"
                                           class="culture" id="ChangeofLanguage" value="en-gb" data-code="gb"
                                           data-lang="en">English</a>

                                        <a onclick="changeCulture('ar-gb',' ');" style="padding-left:6px;"
                                           class="culture" id="ChangeofLanguage" value="en-gb" data-code="gb"
                                           data-lang="ar">عربي</a>
                                    </div>
                                </div>
                                <div class="dropdown-option">
                                    <div class="country">
                                        <div class="flag"><i class="flag-icon flag-icon-ge"></i></div>
                                        <div class="country-label">Georgia</div>


                                    </div>
                                    <div class="languages">



                                        <a onclick="changeCulture('en-ge',' ');" style="margin-right:0px;"
                                           class="culture" id="ChangeofLanguage" value="ar-ge" data-code="ge"
                                           data-lang="en">English</a>

                                        <a onclick="changeCulture('ar-ge',' ');" style="padding-left:6px;"
                                           class="culture" id="ChangeofLanguage" value="ar-ge" data-code="ge"
                                           data-lang="ar">عربي</a>
                                    </div>
                                </div>
                                <div class="dropdown-option">
                                    <div class="country">
                                        <div class="flag"><i class="flag-icon flag-icon-in"></i></div>
                                        <div class="country-label">India</div>


                                    </div>
                                    <div class="languages">



                                        <a onclick="changeCulture('en-in',' ');" style="margin-right:0px;"
                                           class="culture" id="ChangeofLanguage" value="en-in" data-code="in"
                                           data-lang="en">English</a>

                                        <a onclick="changeCulture('ar-in',' ');" style="padding-left:6px;"
                                           class="culture" id="ChangeofLanguage" value="en-in" data-code="in"
                                           data-lang="ar">عربي</a>
                                    </div>
                                </div>
                                <div class="dropdown-option">
                                    <div class="country">
                                        <div class="flag"><i class="flag-icon flag-icon-iq"></i></div>
                                        <div class="country-label">Iraq</div>


                                    </div>
                                    <div class="languages">



                                        <a onclick="changeCulture('en-iq',' ');" style="margin-right:0px;"
                                           class="culture" id="ChangeofLanguage" value="ar-iq" data-code="iq"
                                           data-lang="en">English</a>

                                        <a onclick="changeCulture('ar-iq',' ');" style="padding-left:6px;"
                                           class="culture" id="ChangeofLanguage" value="ar-iq" data-code="iq"
                                           data-lang="ar">عربي</a>
                                    </div>
                                </div>
                                <div class="dropdown-option">
                                    <div class="country">
                                        <div class="flag"><i class="flag-icon flag-icon-ir"></i></div>
                                        <div class="country-label">Iran</div>


                                    </div>
                                    <div class="languages">



                                        <a onclick="changeCulture('en-ir',' ');" style="margin-right:0px;"
                                           class="culture" id="ChangeofLanguage" value="ar-ir" data-code="ir"
                                           data-lang="en">English</a>

                                        <a onclick="changeCulture('ar-ir',' ');" style="padding-left:6px;"
                                           class="culture" id="ChangeofLanguage" value="ar-ir" data-code="ir"
                                           data-lang="ar">عربي</a>
                                    </div>
                                </div>
                                <div class="dropdown-option">
                                    <div class="country">
                                        <div class="flag"><i class="flag-icon flag-icon-jo"></i></div>
                                        <div class="country-label">Jordan</div>


                                    </div>
                                    <div class="languages">



                                        <a onclick="changeCulture('en-jo',' ');" style="margin-right:0px;"
                                           class="culture" id="ChangeofLanguage" value="ar-jo" data-code="jo"
                                           data-lang="en">English</a>

                                        <a onclick="changeCulture('ar-jo',' ');" style="padding-left:6px;"
                                           class="culture" id="ChangeofLanguage" value="ar-jo" data-code="jo"
                                           data-lang="ar">عربي</a>
                                    </div>
                                </div>
                                <div class="dropdown-option">
                                    <div class="country">
                                        <div class="flag"><i class="flag-icon flag-icon-kg"></i></div>
                                        <div class="country-label">Kyrgyzstan</div>


                                    </div>
                                    <div class="languages">


                                        <a onclick="changeCulture('ru-kg',' ');" style="margin-right:0px;"
                                           class="culture" id="ChangeofLanguage" value="ar-kg" data-code="kg"
                                           data-lang="ru">Русский</a>

                                        <a onclick="changeCulture('en-kg',' ');" style="margin-right:0px;"
                                           class="culture" id="ChangeofLanguage" value="ar-kg" data-code="kg"
                                           data-lang="en">English</a>

                                        <a onclick="changeCulture('ar-kg',' ');" style="padding-left:6px;"
                                           class="culture" id="ChangeofLanguage" value="ar-kg" data-code="kg"
                                           data-lang="ar">عربي</a>
                                    </div>
                                </div>
                                <div class="dropdown-option">
                                    <div class="country">
                                        <div class="flag"><i class="flag-icon flag-icon-kw"></i></div>
                                        <div class="country-label">Kuwait</div>


                                    </div>
                                    <div class="languages">



                                        <a onclick="changeCulture('en-kw',' ');" style="margin-right:0px;"
                                           class="culture" id="ChangeofLanguage" value="ar-kw" data-code="kw"
                                           data-lang="en">English</a>

                                        <a onclick="changeCulture('ar-kw',' ');" style="padding-left:6px;"
                                           class="culture" id="ChangeofLanguage" value="ar-kw" data-code="kw"
                                           data-lang="ar">عربي</a>
                                    </div>
                                </div>
                                <div class="dropdown-option">
                                    <div class="country">
                                        <div class="flag"><i class="flag-icon flag-icon-lb"></i></div>
                                        <div class="country-label">Lebanon</div>


                                    </div>
                                    <div class="languages">



                                        <a onclick="changeCulture('en-lb',' ');" style="margin-right:0px;"
                                           class="culture" id="ChangeofLanguage" value="ar-lb" data-code="lb"
                                           data-lang="en">English</a>

                                        <a onclick="changeCulture('ar-lb',' ');" style="padding-left:6px;"
                                           class="culture" id="ChangeofLanguage" value="ar-lb" data-code="lb"
                                           data-lang="ar">عربي</a>
                                    </div>
                                </div>
                                <div class="dropdown-option">
                                    <div class="country">
                                        <div class="flag"><i class="flag-icon flag-icon-lk"></i></div>
                                        <div class="country-label">Sri Lanka</div>


                                    </div>
                                    <div class="languages">



                                        <a onclick="changeCulture('en-lk',' ');" style="margin-right:0px;"
                                           class="culture" id="ChangeofLanguage" value="ar-lk" data-code="lk"
                                           data-lang="en">English</a>

                                        <a onclick="changeCulture('ar-lk',' ');" style="padding-left:6px;"
                                           class="culture" id="ChangeofLanguage" value="ar-lk" data-code="lk"
                                           data-lang="ar">عربي</a>
                                    </div>
                                </div>
                                <div class="dropdown-option">
                                    <div class="country">
                                        <div class="flag"><i class="flag-icon flag-icon-np"></i></div>
                                        <div class="country-label">Nepal</div>


                                    </div>
                                    <div class="languages">



                                        <a onclick="changeCulture('en-np',' ');" style="margin-right:0px;"
                                           class="culture" id="ChangeofLanguage" value="ar-np" data-code="np"
                                           data-lang="en">English</a>

                                        <a onclick="changeCulture('ar-np',' ');" style="padding-left:6px;"
                                           class="culture" id="ChangeofLanguage" value="ar-np" data-code="np"
                                           data-lang="ar">عربي</a>
                                    </div>
                                </div>
                                <div class="dropdown-option">
                                    <div class="country">
                                        <div class="flag"><i class="flag-icon flag-icon-om"></i></div>
                                        <div class="country-label">Oman</div>


                                    </div>
                                    <div class="languages">



                                        <a onclick="changeCulture('en-om',' ');" style="margin-right:0px;"
                                           class="culture" id="ChangeofLanguage" value="ar-om" data-code="om"
                                           data-lang="en">English</a>

                                        <a onclick="changeCulture('ar-om',' ');" style="padding-left:6px;"
                                           class="culture" id="ChangeofLanguage" value="ar-om" data-code="om"
                                           data-lang="ar">عربي</a>
                                    </div>
                                </div>
                                <div class="dropdown-option">
                                    <div class="country">
                                        <div class="flag"><i class="flag-icon flag-icon-pk"></i></div>
                                        <div class="country-label">Pakistan</div>


                                    </div>
                                    <div class="languages">



                                        <a onclick="changeCulture('en-pk',' ');" style="margin-right:0px;"
                                           class="culture" id="ChangeofLanguage" value="en-pk" data-code="pk"
                                           data-lang="en">English</a>

                                        <a onclick="changeCulture('ar-pk',' ');" style="padding-left:6px;"
                                           class="culture" id="ChangeofLanguage" value="en-pk" data-code="pk"
                                           data-lang="ar">عربي</a>
                                    </div>
                                </div>
                                <div class="dropdown-option">
                                    <div class="country">
                                        <div class="flag"><i class="flag-icon flag-icon-qa"></i></div>
                                        <div class="country-label">Qatar</div>


                                    </div>
                                    <div class="languages">



                                        <a onclick="changeCulture('en-qa',' ');" style="margin-right:0px;"
                                           class="culture" id="ChangeofLanguage" value="ar-qa" data-code="qa"
                                           data-lang="en">English</a>

                                        <a onclick="changeCulture('ar-qa',' ');" style="padding-left:6px;"
                                           class="culture" id="ChangeofLanguage" value="ar-qa" data-code="qa"
                                           data-lang="ar">عربي</a>
                                    </div>
                                </div>
                                <div class="dropdown-option">
                                    <div class="country">
                                        <div class="flag"><i class="flag-icon flag-icon-ru"></i></div>
                                        <div class="country-label">Russia</div>


                                    </div>
                                    <div class="languages">


                                        <a onclick="changeCulture('ru-ru',' ');" style="margin-right:0px;"
                                           class="culture" id="ChangeofLanguage" value="ar-ru" data-code="ru"
                                           data-lang="ru">Русский</a>

                                        <a onclick="changeCulture('en-ru',' ');" style="margin-right:0px;"
                                           class="culture" id="ChangeofLanguage" value="ar-ru" data-code="ru"
                                           data-lang="en">English</a>

                                        <a onclick="changeCulture('ar-ru',' ');" style="padding-left:6px;"
                                           class="culture" id="ChangeofLanguage" value="ar-ru" data-code="ru"
                                           data-lang="ar">عربي</a>
                                    </div>
                                </div>
                                <div class="dropdown-option">
                                    <div class="country">
                                        <div class="flag"><i class="flag-icon flag-icon-sa"></i></div>
                                        <div class="country-label">Saudi Arabia</div>


                                    </div>
                                    <div class="languages">



                                        <a onclick="changeCulture('en-sa',' ');" style="margin-right:0px;"
                                           class="culture" id="ChangeofLanguage" value="ar-sa" data-code="sa"
                                           data-lang="en">English</a>

                                        <a onclick="changeCulture('ar-sa',' ');" style="padding-left:6px;"
                                           class="culture" id="ChangeofLanguage" value="ar-sa" data-code="sa"
                                           data-lang="ar">عربي</a>
                                    </div>
                                </div>
                                <div class="dropdown-option">
                                    <div class="country">
                                        <div class="flag"><i class="flag-icon flag-icon-tr"></i></div>
                                        <div class="country-label">Turkey</div>


                                    </div>
                                    <div class="languages">



                                        <a onclick="changeCulture('en-tr',' ');" style="margin-right:0px;"
                                           class="culture" id="ChangeofLanguage" value="ar-tr" data-code="tr"
                                           data-lang="en">English</a>

                                        <a onclick="changeCulture('ar-tr',' ');" style="padding-left:6px;"
                                           class="culture" id="ChangeofLanguage" value="ar-tr" data-code="tr"
                                           data-lang="ar">عربي</a>
                                    </div>
                                </div>
                                <div class="dropdown-option">
                                    <div class="country">
                                        <div class="flag"><i class="flag-icon flag-icon-uz"></i></div>
                                        <div class="country-label">Uzbekistan</div>


                                    </div>
                                    <div class="languages">


                                        <a onclick="changeCulture('ru-uz',' ');" style="margin-right:0px;"
                                           class="culture" id="ChangeofLanguage" value="ar-uz" data-code="uz"
                                           data-lang="ru">Русский</a>

                                        <a onclick="changeCulture('en-uz',' ');" style="margin-right:0px;"
                                           class="culture" id="ChangeofLanguage" value="ar-uz" data-code="uz"
                                           data-lang="en">English</a>

                                        <a onclick="changeCulture('ar-uz',' ');" style="padding-left:6px;"
                                           class="culture" id="ChangeofLanguage" value="ar-uz" data-code="uz"
                                           data-lang="ar">عربي</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="header-login-menu">
                        <div id="partnerlogin" style="display:none">
                            <a href="https://booking.jazeeraairways.com/ar/search-flight?showAgencyLogin=&amp;culture=ar-jo"
                               style="display:inherit !important;"
                               class="btn btn-dropdown login-btn-dropdown show"><span class="btn-icon"><i
                                        class="icon icon-avatar"></i></span><span class="user_loged_name">
                                    &#x62A;&#x633;&#x62C;&#x64A;&#x644;
                                    &#x627;&#x644;&#x62F;&#x62E;&#x648;&#x644;</span></a>
                        </div>
                        <div id="saverstrue" style="display:none">

                            <a href="#" style="display:inherit !important;"
                               class="btn btn-dropdown login-btn-dropdown show"><span class="btn-icon"><i
                                        class="icon icon-avatar"></i> <span><img class="Savers_Isolation_Mode"
                                                                                 src="/images/jazeera-savers-logo.svg" alt="Description of the image">
                                    </span></span><span class="user_loged_name"> <i
                                        class="icon icon-arrow-down"></i></span></a>
                            <div class="btn-dropdown-menu rounded" style="max-width:160px">
                                <div class="profile-menu">
                                    <div class="dropdown-option loginbtn">
                                        <a href="https://booking.jazeeraairways.com/ar/?dashboard&amp;culture=ar-jo"
                                           class="dropdown-item">&#x644;&#x648;&#x62D;&#x629;
                                            &#x627;&#x644;&#x62A;&#x62D;&#x643;&#x645;</a>
                                    </div>
                                    <div class="dropdown-option loginbtn">
                                        <a href="https://booking.jazeeraairways.com/ar/?logout&amp;culture=ar-jo"
                                           class="dropdown-item logout">&#x62A;&#x633;&#x62C;&#x64A;&#x644;
                                            &#x62E;&#x631;&#x648;&#x62C;</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="Not_savers" style="display:none">
                            <a href="#" style="display:inherit !important;"
                               class="btn btn-dropdown login-btn-dropdown show"><span class="btn-icon"><i
                                        class="icon icon-avatar"></i></span><span class="user_loged_name"> <i
                                        class="icon icon-arrow-down"></i></span></a>
                            <div class="btn-dropdown-menu rounded" style="max-width:160px">
                                <div class="profile-menu">
                                    <div class="dropdown-option loginbtn">
                                        <a href="https://booking.jazeeraairways.com/ar/?dashboard&amp;culture=ar-jo"
                                           class="dropdown-item">&#x644;&#x648;&#x62D;&#x629;
                                            &#x627;&#x644;&#x62A;&#x62D;&#x643;&#x645;</a>
                                    </div>
                                    <div class="dropdown-option loginbtn">
                                        <a href="https://booking.jazeeraairways.com/ar/?logout&amp;culture=ar-jo"
                                           class="dropdown-item logout">&#x62A;&#x633;&#x62C;&#x64A;&#x644;
                                            &#x62E;&#x631;&#x648;&#x62C;</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="Guest_Normal" style="display:none">
                            <a href="#" style="display:inherit !important;"
                               class="btn btn-dropdown login-btn-dropdown show"><span class="btn-icon"><i
                                        class="icon icon-avatar"></i></span><span class="user_loged_name">
                                    &#x62A;&#x633;&#x62C;&#x64A;&#x644; &#x627;&#x644;&#x62F;&#x62E;&#x648;&#x644;<i
                                        class="icon icon-arrow-down"></i></span></a>
                            <div class="btn-dropdown-menu rounded" style="max-width:160px">
                                <div class="profile-menu">
                                    <div class="dropdown-option loginbtn">
                                        <a href="https://booking.jazeeraairways.com/ar/?showMemberLogin&amp;culture=ar-jo"
                                           class="dropdown-item">&#x645;&#x633;&#x627;&#x641;&#x631;</a>
                                    </div>
                                    <div class="dropdown-option loginbtn">
                                        <a href="/ar-jo/partners" class="dropdown-item">
                                            &#x648;&#x643;&#x644;&#x627;&#x621; &#x627;&#x644;&#x633;&#x641;&#x631;</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="header-inner mobile_navigation mobile-header">
                <div>
                    <ul class="toggle-btns">
                        <li>
                            <a href="#" class="btn btn-dropdown" id="dountryDropdownCountryMobile"
                               style="display:block">
                                <span class="options country-code">jo</span> <span
                                    class="options active language-code">ar</span>
                                <i id="dountryDropdownCountryIconMobile" class="icon icon-arrow-down"></i>
                            </a>
                            <div class="btn-dropdown-menu dropdown-language-switcher">
                                <div id="language-switcherr">



                                    <div class="dropdown-option">
                                        <div class="country">
                                            <div class="flag"><i class="flag-icon flag-icon-ae"></i></div>
                                            <div class="country-label">United Arab Emirates</div>


                                        </div>
                                        <div class="languages">



                                            <a onclick="changeCulture('en-ae',' ');" style="margin-right:0px;"
                                               class="culture" id="ChangeofLanguage" value="en-ae" data-code="ae"
                                               data-lang="en">English</a>

                                            <a onclick="changeCulture('ar-ae',' ');" style="padding-left:6px;"
                                               class="culture" id="ChangeofLanguage" value="en-ae" data-code="ae"
                                               data-lang="ar">عربي</a>
                                        </div>
                                    </div>
                                    <div class="dropdown-option">
                                        <div class="country">
                                            <div class="flag"><i class="flag-icon flag-icon-at"></i></div>
                                            <div class="country-label">Austria</div>


                                        </div>
                                        <div class="languages">



                                            <a onclick="changeCulture('en-at',' ');" style="margin-right:0px;"
                                               class="culture" id="ChangeofLanguage" value="en-at" data-code="at"
                                               data-lang="en">English</a>

                                            <a onclick="changeCulture('ar-at',' ');" style="padding-left:6px;"
                                               class="culture" id="ChangeofLanguage" value="en-at" data-code="at"
                                               data-lang="ar">عربي</a>
                                        </div>
                                    </div>
                                    <div class="dropdown-option">
                                        <div class="country">
                                            <div class="flag"><i class="flag-icon flag-icon-az"></i></div>
                                            <div class="country-label">Azerbaijan</div>


                                        </div>
                                        <div class="languages">

                                            <a onclick="changeCulture('ru-az',' ');" style="margin-right:0px;"
                                               class="culture" id="ChangeofLanguage" value="ar-az" data-code="az"
                                               data-lang="ru">Русский</a>


                                            <a onclick="changeCulture('en-az',' ');" style="margin-right:0px;"
                                               class="culture" id="ChangeofLanguage" value="ar-az" data-code="az"
                                               data-lang="en">English</a>

                                            <a onclick="changeCulture('ar-az',' ');" style="padding-left:6px;"
                                               class="culture" id="ChangeofLanguage" value="ar-az" data-code="az"
                                               data-lang="ar">عربي</a>
                                        </div>
                                    </div>
                                    <div class="dropdown-option">
                                        <div class="country">
                                            <div class="flag"><i class="flag-icon flag-icon-ba"></i></div>
                                            <div class="country-label">Bosnia &amp; Herzegovina</div>


                                        </div>
                                        <div class="languages">



                                            <a onclick="changeCulture('en-ba',' ');" style="margin-right:0px;"
                                               class="culture" id="ChangeofLanguage" value="ar-ba" data-code="ba"
                                               data-lang="en">English</a>

                                            <a onclick="changeCulture('ar-ba',' ');" style="padding-left:6px;"
                                               class="culture" id="ChangeofLanguage" value="ar-ba" data-code="ba"
                                               data-lang="ar">عربي</a>
                                        </div>
                                    </div>
                                    <div class="dropdown-option">
                                        <div class="country">
                                            <div class="flag"><i class="flag-icon flag-icon-bd"></i></div>
                                            <div class="country-label">Bangladesh</div>


                                        </div>
                                        <div class="languages">



                                            <a onclick="changeCulture('en-bd',' ');" style="margin-right:0px;"
                                               class="culture" id="ChangeofLanguage" value="ar-bd" data-code="bd"
                                               data-lang="en">English</a>

                                            <a onclick="changeCulture('ar-bd',' ');" style="padding-left:6px;"
                                               class="culture" id="ChangeofLanguage" value="ar-bd" data-code="bd"
                                               data-lang="ar">عربي</a>
                                        </div>
                                    </div>
                                    <div class="dropdown-option">
                                        <div class="country">
                                            <div class="flag"><i class="flag-icon flag-icon-bh"></i></div>
                                            <div class="country-label">Bahrain</div>


                                        </div>
                                        <div class="languages">



                                            <a onclick="changeCulture('en-bh',' ');" style="margin-right:0px;"
                                               class="culture" id="ChangeofLanguage" value="ar-bh" data-code="bh"
                                               data-lang="en">English</a>

                                            <a onclick="changeCulture('ar-bh',' ');" style="padding-left:6px;"
                                               class="culture" id="ChangeofLanguage" value="ar-bh" data-code="bh"
                                               data-lang="ar">عربي</a>
                                        </div>
                                    </div>
                                    <div class="dropdown-option">
                                        <div class="country">
                                            <div class="flag"><i class="flag-icon flag-icon-cz"></i></div>
                                            <div class="country-label">Czech Republic</div>


                                        </div>
                                        <div class="languages">



                                            <a onclick="changeCulture('en-cz',' ');" style="margin-right:0px;"
                                               class="culture" id="ChangeofLanguage" value="ar-cz" data-code="cz"
                                               data-lang="en">English</a>

                                            <a onclick="changeCulture('ar-cz',' ');" style="padding-left:6px;"
                                               class="culture" id="ChangeofLanguage" value="ar-cz" data-code="cz"
                                               data-lang="ar">عربي</a>
                                        </div>
                                    </div>
                                    <div class="dropdown-option">
                                        <div class="country">
                                            <div class="flag"><i class="flag-icon flag-icon-eg"></i></div>
                                            <div class="country-label">Egypt</div>


                                        </div>
                                        <div class="languages">



                                            <a onclick="changeCulture('en-eg',' ');" style="margin-right:0px;"
                                               class="culture" id="ChangeofLanguage" value="ar-eg" data-code="eg"
                                               data-lang="en">English</a>

                                            <a onclick="changeCulture('ar-eg',' ');" style="padding-left:6px;"
                                               class="culture" id="ChangeofLanguage" value="ar-eg" data-code="eg"
                                               data-lang="ar">عربي</a>
                                        </div>
                                    </div>
                                    <div class="dropdown-option">
                                        <div class="country">
                                            <div class="flag"><i class="flag-icon flag-icon-et"></i></div>
                                            <div class="country-label">Ethiopia</div>


                                        </div>
                                        <div class="languages">



                                            <a onclick="changeCulture('en-et',' ');" style="margin-right:0px;"
                                               class="culture" id="ChangeofLanguage" value="ar-et" data-code="et"
                                               data-lang="en">English</a>

                                            <a onclick="changeCulture('ar-et',' ');" style="padding-left:6px;"
                                               class="culture" id="ChangeofLanguage" value="ar-et" data-code="et"
                                               data-lang="ar">عربي</a>
                                        </div>
                                    </div>
                                    <div class="dropdown-option">
                                        <div class="country">
                                            <div class="flag"><i class="flag-icon flag-icon-gb"></i></div>
                                            <div class="country-label">United Kingdom</div>


                                        </div>
                                        <div class="languages">



                                            <a onclick="changeCulture('en-gb',' ');" style="margin-right:0px;"
                                               class="culture" id="ChangeofLanguage" value="en-gb" data-code="gb"
                                               data-lang="en">English</a>

                                            <a onclick="changeCulture('ar-gb',' ');" style="padding-left:6px;"
                                               class="culture" id="ChangeofLanguage" value="en-gb" data-code="gb"
                                               data-lang="ar">عربي</a>
                                        </div>
                                    </div>
                                    <div class="dropdown-option">
                                        <div class="country">
                                            <div class="flag"><i class="flag-icon flag-icon-ge"></i></div>
                                            <div class="country-label">Georgia</div>


                                        </div>
                                        <div class="languages">



                                            <a onclick="changeCulture('en-ge',' ');" style="margin-right:0px;"
                                               class="culture" id="ChangeofLanguage" value="ar-ge" data-code="ge"
                                               data-lang="en">English</a>

                                            <a onclick="changeCulture('ar-ge',' ');" style="padding-left:6px;"
                                               class="culture" id="ChangeofLanguage" value="ar-ge" data-code="ge"
                                               data-lang="ar">عربي</a>
                                        </div>
                                    </div>
                                    <div class="dropdown-option">
                                        <div class="country">
                                            <div class="flag"><i class="flag-icon flag-icon-in"></i></div>
                                            <div class="country-label">India</div>


                                        </div>
                                        <div class="languages">



                                            <a onclick="changeCulture('en-in',' ');" style="margin-right:0px;"
                                               class="culture" id="ChangeofLanguage" value="en-in" data-code="in"
                                               data-lang="en">English</a>

                                            <a onclick="changeCulture('ar-in',' ');" style="padding-left:6px;"
                                               class="culture" id="ChangeofLanguage" value="en-in" data-code="in"
                                               data-lang="ar">عربي</a>
                                        </div>
                                    </div>
                                    <div class="dropdown-option">
                                        <div class="country">
                                            <div class="flag"><i class="flag-icon flag-icon-iq"></i></div>
                                            <div class="country-label">Iraq</div>


                                        </div>
                                        <div class="languages">



                                            <a onclick="changeCulture('en-iq',' ');" style="margin-right:0px;"
                                               class="culture" id="ChangeofLanguage" value="ar-iq" data-code="iq"
                                               data-lang="en">English</a>

                                            <a onclick="changeCulture('ar-iq',' ');" style="padding-left:6px;"
                                               class="culture" id="ChangeofLanguage" value="ar-iq" data-code="iq"
                                               data-lang="ar">عربي</a>
                                        </div>
                                    </div>
                                    <div class="dropdown-option">
                                        <div class="country">
                                            <div class="flag"><i class="flag-icon flag-icon-ir"></i></div>
                                            <div class="country-label">Iran</div>


                                        </div>
                                        <div class="languages">



                                            <a onclick="changeCulture('en-ir',' ');" style="margin-right:0px;"
                                               class="culture" id="ChangeofLanguage" value="ar-ir" data-code="ir"
                                               data-lang="en">English</a>

                                            <a onclick="changeCulture('ar-ir',' ');" style="padding-left:6px;"
                                               class="culture" id="ChangeofLanguage" value="ar-ir" data-code="ir"
                                               data-lang="ar">عربي</a>
                                        </div>
                                    </div>
                                    <div class="dropdown-option">
                                        <div class="country">
                                            <div class="flag"><i class="flag-icon flag-icon-jo"></i></div>
                                            <div class="country-label">Jordan</div>


                                        </div>
                                        <div class="languages">



                                            <a onclick="changeCulture('en-jo',' ');" style="margin-right:0px;"
                                               class="culture" id="ChangeofLanguage" value="ar-jo" data-code="jo"
                                               data-lang="en">English</a>

                                            <a onclick="changeCulture('ar-jo',' ');" style="padding-left:6px;"
                                               class="culture" id="ChangeofLanguage" value="ar-jo" data-code="jo"
                                               data-lang="ar">عربي</a>
                                        </div>
                                    </div>
                                    <div class="dropdown-option">
                                        <div class="country">
                                            <div class="flag"><i class="flag-icon flag-icon-kg"></i></div>
                                            <div class="country-label">Kyrgyzstan</div>


                                        </div>
                                        <div class="languages">

                                            <a onclick="changeCulture('ru-kg',' ');" style="margin-right:0px;"
                                               class="culture" id="ChangeofLanguage" value="ar-kg" data-code="kg"
                                               data-lang="ru">Русский</a>


                                            <a onclick="changeCulture('en-kg',' ');" style="margin-right:0px;"
                                               class="culture" id="ChangeofLanguage" value="ar-kg" data-code="kg"
                                               data-lang="en">English</a>

                                            <a onclick="changeCulture('ar-kg',' ');" style="padding-left:6px;"
                                               class="culture" id="ChangeofLanguage" value="ar-kg" data-code="kg"
                                               data-lang="ar">عربي</a>
                                        </div>
                                    </div>
                                    <div class="dropdown-option">
                                        <div class="country">
                                            <div class="flag"><i class="flag-icon flag-icon-kw"></i></div>
                                            <div class="country-label">Kuwait</div>


                                        </div>
                                        <div class="languages">



                                            <a onclick="changeCulture('en-kw',' ');" style="margin-right:0px;"
                                               class="culture" id="ChangeofLanguage" value="ar-kw" data-code="kw"
                                               data-lang="en">English</a>

                                            <a onclick="changeCulture('ar-kw',' ');" style="padding-left:6px;"
                                               class="culture" id="ChangeofLanguage" value="ar-kw" data-code="kw"
                                               data-lang="ar">عربي</a>
                                        </div>
                                    </div>
                                    <div class="dropdown-option">
                                        <div class="country">
                                            <div class="flag"><i class="flag-icon flag-icon-lb"></i></div>
                                            <div class="country-label">Lebanon</div>


                                        </div>
                                        <div class="languages">



                                            <a onclick="changeCulture('en-lb',' ');" style="margin-right:0px;"
                                               class="culture" id="ChangeofLanguage" value="ar-lb" data-code="lb"
                                               data-lang="en">English</a>

                                            <a onclick="changeCulture('ar-lb',' ');" style="padding-left:6px;"
                                               class="culture" id="ChangeofLanguage" value="ar-lb" data-code="lb"
                                               data-lang="ar">عربي</a>
                                        </div>
                                    </div>
                                    <div class="dropdown-option">
                                        <div class="country">
                                            <div class="flag"><i class="flag-icon flag-icon-lk"></i></div>
                                            <div class="country-label">Sri Lanka</div>


                                        </div>
                                        <div class="languages">



                                            <a onclick="changeCulture('en-lk',' ');" style="margin-right:0px;"
                                               class="culture" id="ChangeofLanguage" value="ar-lk" data-code="lk"
                                               data-lang="en">English</a>

                                            <a onclick="changeCulture('ar-lk',' ');" style="padding-left:6px;"
                                               class="culture" id="ChangeofLanguage" value="ar-lk" data-code="lk"
                                               data-lang="ar">عربي</a>
                                        </div>
                                    </div>
                                    <div class="dropdown-option">
                                        <div class="country">
                                            <div class="flag"><i class="flag-icon flag-icon-np"></i></div>
                                            <div class="country-label">Nepal</div>


                                        </div>
                                        <div class="languages">



                                            <a onclick="changeCulture('en-np',' ');" style="margin-right:0px;"
                                               class="culture" id="ChangeofLanguage" value="ar-np" data-code="np"
                                               data-lang="en">English</a>

                                            <a onclick="changeCulture('ar-np',' ');" style="padding-left:6px;"
                                               class="culture" id="ChangeofLanguage" value="ar-np" data-code="np"
                                               data-lang="ar">عربي</a>
                                        </div>
                                    </div>
                                    <div class="dropdown-option">
                                        <div class="country">
                                            <div class="flag"><i class="flag-icon flag-icon-om"></i></div>
                                            <div class="country-label">Oman</div>


                                        </div>
                                        <div class="languages">



                                            <a onclick="changeCulture('en-om',' ');" style="margin-right:0px;"
                                               class="culture" id="ChangeofLanguage" value="ar-om" data-code="om"
                                               data-lang="en">English</a>

                                            <a onclick="changeCulture('ar-om',' ');" style="padding-left:6px;"
                                               class="culture" id="ChangeofLanguage" value="ar-om" data-code="om"
                                               data-lang="ar">عربي</a>
                                        </div>
                                    </div>
                                    <div class="dropdown-option">
                                        <div class="country">
                                            <div class="flag"><i class="flag-icon flag-icon-pk"></i></div>
                                            <div class="country-label">Pakistan</div>


                                        </div>
                                        <div class="languages">



                                            <a onclick="changeCulture('en-pk',' ');" style="margin-right:0px;"
                                               class="culture" id="ChangeofLanguage" value="en-pk" data-code="pk"
                                               data-lang="en">English</a>

                                            <a onclick="changeCulture('ar-pk',' ');" style="padding-left:6px;"
                                               class="culture" id="ChangeofLanguage" value="en-pk" data-code="pk"
                                               data-lang="ar">عربي</a>
                                        </div>
                                    </div>
                                    <div class="dropdown-option">
                                        <div class="country">
                                            <div class="flag"><i class="flag-icon flag-icon-qa"></i></div>
                                            <div class="country-label">Qatar</div>


                                        </div>
                                        <div class="languages">



                                            <a onclick="changeCulture('en-qa',' ');" style="margin-right:0px;"
                                               class="culture" id="ChangeofLanguage" value="ar-qa" data-code="qa"
                                               data-lang="en">English</a>

                                            <a onclick="changeCulture('ar-qa',' ');" style="padding-left:6px;"
                                               class="culture" id="ChangeofLanguage" value="ar-qa" data-code="qa"
                                               data-lang="ar">عربي</a>
                                        </div>
                                    </div>
                                    <div class="dropdown-option">
                                        <div class="country">
                                            <div class="flag"><i class="flag-icon flag-icon-ru"></i></div>
                                            <div class="country-label">Russia</div>


                                        </div>
                                        <div class="languages">

                                            <a onclick="changeCulture('ru-ru',' ');" style="margin-right:0px;"
                                               class="culture" id="ChangeofLanguage" value="ar-ru" data-code="ru"
                                               data-lang="ru">Русский</a>


                                            <a onclick="changeCulture('en-ru',' ');" style="margin-right:0px;"
                                               class="culture" id="ChangeofLanguage" value="ar-ru" data-code="ru"
                                               data-lang="en">English</a>

                                            <a onclick="changeCulture('ar-ru',' ');" style="padding-left:6px;"
                                               class="culture" id="ChangeofLanguage" value="ar-ru" data-code="ru"
                                               data-lang="ar">عربي</a>
                                        </div>
                                    </div>
                                    <div class="dropdown-option">
                                        <div class="country">
                                            <div class="flag"><i class="flag-icon flag-icon-sa"></i></div>
                                            <div class="country-label">Saudi Arabia</div>


                                        </div>
                                        <div class="languages">



                                            <a onclick="changeCulture('en-sa',' ');" style="margin-right:0px;"
                                               class="culture" id="ChangeofLanguage" value="ar-sa" data-code="sa"
                                               data-lang="en">English</a>

                                            <a onclick="changeCulture('ar-sa',' ');" style="padding-left:6px;"
                                               class="culture" id="ChangeofLanguage" value="ar-sa" data-code="sa"
                                               data-lang="ar">عربي</a>
                                        </div>
                                    </div>
                                    <div class="dropdown-option">
                                        <div class="country">
                                            <div class="flag"><i class="flag-icon flag-icon-tr"></i></div>
                                            <div class="country-label">Turkey</div>


                                        </div>
                                        <div class="languages">



                                            <a onclick="changeCulture('en-tr',' ');" style="margin-right:0px;"
                                               class="culture" id="ChangeofLanguage" value="ar-tr" data-code="tr"
                                               data-lang="en">English</a>

                                            <a onclick="changeCulture('ar-tr',' ');" style="padding-left:6px;"
                                               class="culture" id="ChangeofLanguage" value="ar-tr" data-code="tr"
                                               data-lang="ar">عربي</a>
                                        </div>
                                    </div>
                                    <div class="dropdown-option">
                                        <div class="country">
                                            <div class="flag"><i class="flag-icon flag-icon-uz"></i></div>
                                            <div class="country-label">Uzbekistan</div>


                                        </div>
                                        <div class="languages">

                                            <a onclick="changeCulture('ru-uz',' ');" style="margin-right:0px;"
                                               class="culture" id="ChangeofLanguage" value="ar-uz" data-code="uz"
                                               data-lang="ru">Русский</a>


                                            <a onclick="changeCulture('en-uz',' ');" style="margin-right:0px;"
                                               class="culture" id="ChangeofLanguage" value="ar-uz" data-code="uz"
                                               data-lang="en">English</a>

                                            <a onclick="changeCulture('ar-uz',' ');" style="padding-left:6px;"
                                               class="culture" id="ChangeofLanguage" value="ar-uz" data-code="uz"
                                               data-lang="ar">عربي</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="header-login-menu">

                            <div id="partnerlogin_Mobile" style="display:none">
                                <a href="https://booking.jazeeraairways.com/ar/search-flight?showAgencyLogin=&amp;culture=ar-jo"
                                   style="display:inherit !important;"
                                   class="btn btn-dropdown login-btn-dropdown show"><span class="btn-icon"><i
                                            class="icon icon-avatar"></i></span><span class="user_loged_name">
                                        &#x62A;&#x633;&#x62C;&#x64A;&#x644;
                                        &#x627;&#x644;&#x62F;&#x62E;&#x648;&#x644;</span></a>
                            </div>
                            <div id="saverstrue_Mobile" style="display:none">

                                <a href="#" style="display:inherit !important;"
                                   class="btn btn-dropdown login-btn-dropdown show"><span class="btn-icon"><i
                                            class="icon icon-avatar"></i> <span><img class="Savers_Isolation_Mode"
                                                                                     src="/images/jazeera-savers-logo.svg" alt="Description of the image">
                                        </span></span><span class="user_loged_name"> <i
                                            class="icon icon-arrow-down"></i></span></a>
                                <div class="btn-dropdown-menu rounded" style="max-width:160px">
                                    <div class="profile-menu">
                                        <div class="dropdown-option loginbtn">
                                            <a href="https://booking.jazeeraairways.com/ar/?dashboard&amp;culture=ar-jo"
                                               class="dropdown-item">&#x644;&#x648;&#x62D;&#x629;
                                                &#x627;&#x644;&#x62A;&#x62D;&#x643;&#x645;</a>
                                        </div>
                                        <div class="dropdown-option loginbtn">
                                            <a href="https://booking.jazeeraairways.com/ar/?logout&amp;culture=ar-jo"
                                               class="dropdown-item logout">&#x62A;&#x633;&#x62C;&#x64A;&#x644;
                                                &#x62E;&#x631;&#x648;&#x62C;</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div id="Not_savers_Mobile" style="display:none">
                                <a href="#" style="display:inherit !important;"
                                   class="btn btn-dropdown login-btn-dropdown show"><span class="btn-icon"><i
                                            class="icon icon-avatar"></i></span><span class="user_loged_name"> <i
                                            class="icon icon-arrow-down"></i></span></a>
                                <div class="btn-dropdown-menu rounded" style="max-width:160px">
                                    <div class="profile-menu">
                                        <div class="dropdown-option loginbtn">
                                            <a href="https://booking.jazeeraairways.com/ar/?dashboard&amp;culture=ar-jo"
                                               class="dropdown-item">&#x644;&#x648;&#x62D;&#x629;
                                                &#x627;&#x644;&#x62A;&#x62D;&#x643;&#x645;</a>
                                        </div>
                                        <div class="dropdown-option loginbtn">
                                            <a href="https://booking.jazeeraairways.com/ar/?logout&amp;culture=ar-jo"
                                               class="dropdown-item logout">&#x62A;&#x633;&#x62C;&#x64A;&#x644;
                                                &#x62E;&#x631;&#x648;&#x62C;</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="Guest_Normal_Mobile" style="display:none">
                                <a href="#" style="display:inherit !important;"
                                   class="btn btn-dropdown login-btn-dropdown show"><span class="btn-icon"><i
                                            class="icon icon-avatar"></i></span><span class="user_loged_name">
                                        &#x62A;&#x633;&#x62C;&#x64A;&#x644; &#x627;&#x644;&#x62F;&#x62E;&#x648;&#x644;<i
                                            class="icon icon-arrow-down"></i></span></a>
                                <div class="btn-dropdown-menu rounded" style="max-width:160px">
                                    <div class="profile-menu">
                                        <div class="dropdown-option loginbtn">
                                            <a href="https://booking.jazeeraairways.com/ar/?showMemberLogin&amp;culture=ar-jo"
                                               class="dropdown-item">&#x645;&#x633;&#x627;&#x641;&#x631;</a>
                                        </div>
                                        <div class="dropdown-option loginbtn">
                                            <a href="/ar-jo/partners" class="dropdown-item">
                                                &#x648;&#x643;&#x644;&#x627;&#x621;
                                                &#x627;&#x644;&#x633;&#x641;&#x631;</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="mobile_header_logo d-flex">
                    <div class="mobile_header_logo_div">
                        <a href="{{ route('home') }}" class="brand header-logo">
                            <img src="/images/jazeera-logo.png" alt="" class="lazyload">
                        </a>
                    </div>
                    <div class="mobile_navigation_div">
                        <button type="button" class="navbar-toggle toggle-mobile-btns" data-toggle="collapse"
                                data-target="#myNavbar">
                            <span class="icon icon-menu"></span>
                            <div class="wrong_class">
                                <span class="icon icon-wrong"></span>
                            </div>
                        </button>

                        <div class="collapse navbar-collapse mobile-menu-wrap" id="myNavbar">
                            <div class="close-mobile-header"><i class="icon icon-wrong"></i></div>
                            <div class="search-header">
                                <div class="form-row row">
                                    <div class="form-field col-md-12 input-blank">
                                        <span class="icon">
                                            <i class="icon-zoom"></i>
                                        </span>
                                        <input id="search_jazeera_mobile" type="text" class="form-control"
                                               placeholder="Find what you need" autocomplete="off">
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <input type="hidden" id="hdnCulture" value="" />
    </div>
</header>
