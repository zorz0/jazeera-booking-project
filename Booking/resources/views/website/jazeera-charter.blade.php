@extends('website.layout.app')

@section('content')
    <main>
        <section class="destination-partition">
            <div class="container">
                <div class="breadcrumb-wrap">
                    <ol class="breadcrumb">
                        <li>
                            <a href="/ar-jo">
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
                            الجزيرة للطائرات الخاصة
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
                            الجزيرة للطائرات الخاصة
                        </strong>
                    </h1>
                </div>
                <div class="content baggage_class">
                </div>
            </div>
            <div class="">
                <div class="container">
                    <p>
                        <img alt class="img-responsive" src="images/jazeera-charter.jpg" style="margin-top: 40px; margin-bottom: 25px;">
                    </p>
                </div>
                <div class="container">
                    <p>
                        الطائرات الجديدة من وإلى مطار الكويت الدولي.
                        <br>
                        <br>
                        سواء كان لحاجة اجتماع عمل مهماً يجب حضوره أو رحلة خاصة مع الأصدقاء والعائلة، نوفر لك طائرة خاصة لجميع متطلباتك عبر طيران الجزيرة لتسافر براحة وخصوصية تامة.
                        <br>
                        <br>
                        أسطولنا المكوّن من طائرات A320 متوفر للتأجير إلى وجهات تبعد عن الكويت بمدة 6 ساعات.
                        <br>
                        <br>
                        لمزيد من المعلومات، يرجى الاتصال بفريقنا وسنتواصل معك في غضون 24 ساعة:
                        <br>
                        <br>
                        عواطف عيسي
                        <br>
                        الهاتف النقال: 2393 6769 965+
                        <br>
                        البريد الإلكتروني:
                        <a href="/cdn-cgi/l/email-protection#16576077627370385d7e7760777872567c776c73736477777f6461776f653875797b" rel="cononical">
         <span class="__cf_email__" data-cfemail="eaab9c8b9e8f8cc4a1828b9c8b848eaa808b908f8f988b8b83989d8b9399c4898587">
          [email&nbsp;protected]
         </span>
                        </a>
                        <br>
                        <br>
                        فرانكي ليونج
                        <br>
                        الهاتف النقال: 60658741 965+
                        <br>
                        البريد الإلكتروني:
                        <a href="/cdn-cgi/l/email-protection#9ddbeffcf3f6f4f8b3d1f8e8f3faddf7fce7f8f8effcfcf4efeafce4eeb3fef2f0" rel="cononical">
         <span class="__cf_email__" data-cfemail="307642515e5b59551e7c55455e57705a514a55554251515942475149431e535f5d">
          [email&nbsp;protected]
         </span>
                        </a>
                        <br>
                        <br>
                        غونجا اكشا
                        <br>
                        الهاتف النقال: 69634654 965+
                        <br>
                        البريد الإلكتروني:
                        <a href="/cdn-cgi/l/email-protection#e3a48c8d8082cda2888082a389829986869182828a9194829a90cd808c8e" rel="cononical">
         <span class="__cf_email__" data-cfemail="fdba92939e9cd3bc969e9cbd979c8798988f9c9c948f8a9c848ed39e9290">
          [email&nbsp;protected]
         </span>
                        </a>
                        <br>
                        <br>
                        مركز الاتصال: 177
                        <br>
                        <br>
                        ملاحظة: تخضع خدمة الطائرات الخاصة للوائح الحكومية المعمول بها.
                    </p>
                </div>
            </div>
        </section>
        <script data-cfasync="false" src="javascript/email-decode.min.js">
        </script>
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
