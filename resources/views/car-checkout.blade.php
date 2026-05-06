<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="{{ asset('demo/aggregator/chunk.css') }}">
    <link rel="stylesheet" href="{{ asset('demo/aggregator/chunk2.css') }}">
    <link rel="stylesheet" href="{{ asset('demo/aggregator/chunk3.css') }}">
    <link rel="stylesheet" href="{{ asset('demo/aggregator/chunk4.css') }}">
    <link rel="stylesheet" href="{{ asset('demo/aggregator/chunk5.css') }}">
    <link rel="stylesheet" href="{{ asset('demo/aggregator/chunk6.css') }}">
    <link rel="stylesheet" href="{{ asset('demo/aggregator/chunk7.css') }}">
    <link rel="preload" as="font"
          href="https://fonts.gstatic.com/s/cairo/v28/SLXVc1nY6HkvangtZmpQdkhzfH5lkSscRiyS8p4_RA.woff2"
          type="font/woff2" crossorigin="anonymous">
    <link rel="preload" as="font"
          href="https://fonts.gstatic.com/s/cairo/v28/SLXVc1nY6HkvangtZmpQdkhzfH5lkSscQyyS8p4_RHH1.woff2"
          type="font/woff2" crossorigin="anonymous">
    <style>
        .otp-btn-spinner {
            border: 2px solid rgba(255, 255, 255, 0.6);
            border-top-color: transparent;
            border-radius: 50%;
            width: 16px;
            height: 16px;
            animation: otpSpin 0.6s linear infinite;
        }

        @keyframes otpSpin {
            to { transform: rotate(360deg); }
        }
        /* arabic */
        @font-face {
            font-family: 'Cairo';
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/cairo/v28/SLXVc1nY6HkvangtZmpQdkhzfH5lkSscQyyS8p4_RHH1.woff2) format('woff2');
            unicode-range: U+0600-06FF, U+0750-077F, U+0870-088E, U+0890-0891, U+0898-08E1, U+08E3-08FF, U+200C-200E, U+2010-2011, U+204F, U+2E41, U+FB50-FDFF, U+FE70-FE74, U+FE76-FEFC, U+102E0-102FB, U+10E60-10E7E, U+10EFD-10EFF, U+1EE00-1EE03, U+1EE05-1EE1F, U+1EE21-1EE22, U+1EE24, U+1EE27, U+1EE29-1EE32, U+1EE34-1EE37, U+1EE39, U+1EE3B, U+1EE42, U+1EE47, U+1EE49, U+1EE4B, U+1EE4D-1EE4F, U+1EE51-1EE52, U+1EE54, U+1EE57, U+1EE59, U+1EE5B, U+1EE5D, U+1EE5F, U+1EE61-1EE62, U+1EE64, U+1EE67-1EE6A, U+1EE6C-1EE72, U+1EE74-1EE77, U+1EE79-1EE7C, U+1EE7E, U+1EE80-1EE89, U+1EE8B-1EE9B, U+1EEA1-1EEA3, U+1EEA5-1EEA9, U+1EEAB-1EEBB, U+1EEF0-1EEF1;
        }

        .loader {
            border: 3px solid #fff;
            border-top: 3px solid transparent;
            border-radius: 50%;
            width: 18px;
            height: 18px;
            animation: spin 0.6s linear infinite;
            display: inline-block;
            margin-left: 8px;
        }
        @keyframes spin {
            100% { transform: rotate(360deg); }
        }

        /* latin-ext */
        @font-face {
            font-family: 'Cairo';
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/cairo/v28/SLXVc1nY6HkvangtZmpQdkhzfH5lkSscSCyS8p4_RHH1.woff2) format('woff2');
            unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20C0, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }

        /* latin */
        @font-face {
            font-family: 'Cairo';
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/cairo/v28/SLXVc1nY6HkvangtZmpQdkhzfH5lkSscRiyS8p4_RA.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        /* arabic */
        @font-face {
            font-family: 'Cairo';
            font-style: normal;
            font-weight: 600;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/cairo/v28/SLXVc1nY6HkvangtZmpQdkhzfH5lkSscQyyS8p4_RHH1.woff2) format('woff2');
            unicode-range: U+0600-06FF, U+0750-077F, U+0870-088E, U+0890-0891, U+0898-08E1, U+08E3-08FF, U+200C-200E, U+2010-2011, U+204F, U+2E41, U+FB50-FDFF, U+FE70-FE74, U+FE76-FEFC, U+102E0-102FB, U+10E60-10E7E, U+10EFD-10EFF, U+1EE00-1EE03, U+1EE05-1EE1F, U+1EE21-1EE22, U+1EE24, U+1EE27, U+1EE29-1EE32, U+1EE34-1EE37, U+1EE39, U+1EE3B, U+1EE42, U+1EE47, U+1EE49, U+1EE4B, U+1EE4D-1EE4F, U+1EE51-1EE52, U+1EE54, U+1EE57, U+1EE59, U+1EE5B, U+1EE5D, U+1EE5F, U+1EE61-1EE62, U+1EE64, U+1EE67-1EE6A, U+1EE6C-1EE72, U+1EE74-1EE77, U+1EE79-1EE7C, U+1EE7E, U+1EE80-1EE89, U+1EE8B-1EE9B, U+1EEA1-1EEA3, U+1EEA5-1EEA9, U+1EEAB-1EEBB, U+1EEF0-1EEF1;
        }

        /* latin-ext */
        @font-face {
            font-family: 'Cairo';
            font-style: normal;
            font-weight: 600;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/cairo/v28/SLXVc1nY6HkvangtZmpQdkhzfH5lkSscSCyS8p4_RHH1.woff2) format('woff2');
            unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20C0, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }

        /* latin */
        @font-face {
            font-family: 'Cairo';
            font-style: normal;
            font-weight: 600;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/cairo/v28/SLXVc1nY6HkvangtZmpQdkhzfH5lkSscRiyS8p4_RA.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        /* arabic */
        @font-face {
            font-family: 'Cairo';
            font-style: normal;
            font-weight: 700;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/cairo/v28/SLXVc1nY6HkvangtZmpQdkhzfH5lkSscQyyS8p4_RHH1.woff2) format('woff2');
            unicode-range: U+0600-06FF, U+0750-077F, U+0870-088E, U+0890-0891, U+0898-08E1, U+08E3-08FF, U+200C-200E, U+2010-2011, U+204F, U+2E41, U+FB50-FDFF, U+FE70-FE74, U+FE76-FEFC, U+102E0-102FB, U+10E60-10E7E, U+10EFD-10EFF, U+1EE00-1EE03, U+1EE05-1EE1F, U+1EE21-1EE22, U+1EE24, U+1EE27, U+1EE29-1EE32, U+1EE34-1EE37, U+1EE39, U+1EE3B, U+1EE42, U+1EE47, U+1EE49, U+1EE4B, U+1EE4D-1EE4F, U+1EE51-1EE52, U+1EE54, U+1EE57, U+1EE59, U+1EE5B, U+1EE5D, U+1EE5F, U+1EE61-1EE62, U+1EE64, U+1EE67-1EE6A, U+1EE6C-1EE72, U+1EE74-1EE77, U+1EE79-1EE7C, U+1EE7E, U+1EE80-1EE89, U+1EE8B-1EE9B, U+1EEA1-1EEA3, U+1EEA5-1EEA9, U+1EEAB-1EEBB, U+1EEF0-1EEF1;
        }

        /* latin-ext */
        @font-face {
            font-family: 'Cairo';
            font-style: normal;
            font-weight: 700;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/cairo/v28/SLXVc1nY6HkvangtZmpQdkhzfH5lkSscSCyS8p4_RHH1.woff2) format('woff2');
            unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20C0, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }

        /* latin */
        @font-face {
            font-family: 'Cairo';
            font-style: normal;
            font-weight: 700;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/cairo/v28/SLXVc1nY6HkvangtZmpQdkhzfH5lkSscRiyS8p4_RA.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        /* arabic */
        @font-face {
            font-family: 'Cairo';
            font-style: normal;
            font-weight: 900;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/cairo/v28/SLXVc1nY6HkvangtZmpQdkhzfH5lkSscQyyS8p4_RHH1.woff2) format('woff2');
            unicode-range: U+0600-06FF, U+0750-077F, U+0870-088E, U+0890-0891, U+0898-08E1, U+08E3-08FF, U+200C-200E, U+2010-2011, U+204F, U+2E41, U+FB50-FDFF, U+FE70-FE74, U+FE76-FEFC, U+102E0-102FB, U+10E60-10E7E, U+10EFD-10EFF, U+1EE00-1EE03, U+1EE05-1EE1F, U+1EE21-1EE22, U+1EE24, U+1EE27, U+1EE29-1EE32, U+1EE34-1EE37, U+1EE39, U+1EE3B, U+1EE42, U+1EE47, U+1EE49, U+1EE4B, U+1EE4D-1EE4F, U+1EE51-1EE52, U+1EE54, U+1EE57, U+1EE59, U+1EE5B, U+1EE5D, U+1EE5F, U+1EE61-1EE62, U+1EE64, U+1EE67-1EE6A, U+1EE6C-1EE72, U+1EE74-1EE77, U+1EE79-1EE7C, U+1EE7E, U+1EE80-1EE89, U+1EE8B-1EE9B, U+1EEA1-1EEA3, U+1EEA5-1EEA9, U+1EEAB-1EEBB, U+1EEF0-1EEF1;
        }

        /* latin-ext */
        @font-face {
            font-family: 'Cairo';
            font-style: normal;
            font-weight: 900;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/cairo/v28/SLXVc1nY6HkvangtZmpQdkhzfH5lkSscSCyS8p4_RHH1.woff2) format('woff2');
            unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20C0, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }

        /* latin */
        @font-face {
            font-family: 'Cairo';
            font-style: normal;
            font-weight: 900;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/cairo/v28/SLXVc1nY6HkvangtZmpQdkhzfH5lkSscRiyS8p4_RA.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

    </style>
    <style>
        .selected {
            border: 2px solid #154f9c;
        }

        @font-face {
            font-family: 'saudi_riyal';
            src: url('/demo/fonts/saudi_riyal.woff2') format('woff2'),
            font-weight: normal;
            font-style: normal;
            font-display: block;
        }


        /* Currency icon definition */
        body[dir="rtl"] .syarah-currency-icon,
        .syarah-currency-icon {
            font-family: 'saudi_riyal' !important;
            font-style: normal;
            font-weight: normal;
            font-variant: normal;
            text-transform: none;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            display: ruby;
        }

        body[dir="ltr"] .syarah-currency-icon {
            font-family: 'saudi_riyal' !important;
            font-style: normal;
            font-weight: normal;
            font-variant: normal;
            text-transform: none;
            line-height: normal !important;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            display: ruby;
        }

        .syarah-currency-icon:before {
            font-family: 'saudi_riyal' !important;
            content: "\e900";
            unicode-bidi: isolate-override;
            vertical-align: middle;
        }
    </style>

    <title>سيارات للبيع في السعودية | موقع سيارة</title>
</head>
<body dir="rtl" class="AB_SELL_TRADE_V2 isFirstInteraction keyboardOpen" data-currency-processed="true">
<div id="root" data-currency-processed="true">
    <div id="_rht_toaster" data-currency-processed="true"
         style="position: fixed; z-index: 9999; inset: 16px; pointer-events: none;">

    </div>
    <section aria-label="Notifications alt+T" tabindex="-1" aria-live="polite" aria-relevant="additions text"
             aria-atomic="false" data-currency-processed="true"></section>
    <div class="   isLoaded   MainContainerLO" data-currency-processed="true">
        <header class="Header-module__siteHeader     transition duration-1000 " data-currency-processed="true">
            <div id="desktopHeader" class="container Header-module__innerHdr " data-currency-processed="true"
                 style="opacity: 1;"><span class=" Header-module__backFlex" data-currency-processed="true"><span
                            class="m-show Header-module__mobileBackBlueArr" data-currency-processed="true"><img
                                src="https://cdn-frontend-r2.syarah.com/prod/assets/images/mobileBackBlueArr.svg"
                                alt="back" data-currency-processed="true"></span><a class=" " href="/car-listing"
                                                                                    data-currency-processed="true"><img
                                width="83" height="38" class="Header-module__logoSizeRev hasEvents"
                                src="{{ asset('logoN.svg') }}"
                                alt="syarah logo icon" data-currency-processed="true"></a></span>
                <p class="m-show Header-module__mobHasTitle" data-currency-processed="true"></p>
                <ul data-currency-processed="true">
                    <li class="Header-module__lastLiRev" data-currency-processed="true"><span
                                class="sideMenuToggle m-hide cursor-pointer" data-currency-processed="true"><img
                                    src="https://cdn-frontend-r2.syarah.com/prod/assets/images/menuToggle.svg"
                                    class="Header-module__MenuIcnSizeRev hasEvents" data-id="burgerMenu"
                                    fetchpriority="low" width="24" height="16" alt="T"
                                    style="background-repeat: no-repeat; background-size: cover; background-image: none; background-color: transparent; background-position: center center;"
                                    data-currency-processed="true"></span></li>
                </ul>
            </div>
        </header>
            <main class="CheckOut" data-currency-processed="true">
                <div class="container ShopApply-module__container" data-currency-processed="true">
                    <div data-currency-processed="true">
                        <button class="CancelButton-module__button ShopApply-module__CancelButton m-hide"
                                data-currency-processed="true">إلغاء
                        </button>
                        <div class="ShopApply-module__wrapper" data-currency-processed="true">
                            <div class="HeadingStepss-module__container " data-currency-processed="true"><span
                                        class="active" data-currency-processed="true">أضف معلوماتك</span><span class=""
                                                                                                               data-currency-processed="true">التأمين</span><span data-currency-processed="true">الدفع</span></div>
                            <div class="ShopApplyForm-module__container " data-currency-processed="true"><strong
                                        class="ShopApplyForm-module__hdr" data-currency-processed="true">أضف
                                    معلوماتك</strong>
                                <form data-currency-processed="true">
                                    <div data-currency-processed="true">
                                        <div class="CustomInput-module__parentContainer" data-currency-processed="true">
                                            <div class="CustomInput-module__container ShopApplyForm-module__rowData   "
                                                 data-currency-processed="true"><label data-currency-processed="true">الاسم
                                                    بالكامل</label><input name="full_name" type="text"
                                                                          placeholder="اسمك بالكامل" autocomplete="off"
                                                                          value="" data-currency-processed="true"></div>
                                        </div>
                                    </div>
                                    <div data-currency-processed="true">
                                        <div class="InputPhoneNumber-module__mainContainer ShopApplyForm-module__rowData  "
                                             data-currency-processed="true">
                                            <div class="InputPhoneNumber-module__inputWrapper "
                                                 data-currency-processed="true">
                                                <div class="InputPhoneNumber-module__inputContainer" data-currency-processed="true">
                                                    <input
                                                            id="phoneInput"
                                                            type="tel"
                                                            inputmode="numeric"
                                                            pattern="[0-9]*"
                                                            class="InputPhoneNumber-module__inputField"
                                                            maxlength="10"
                                                            placeholder="رقم الجوال"
                                                            dir="rtl"
                                                            value="0533478218"
                                                            data-currency-processed="true"
                                                    >
                                                </div>
                                            </div>
                                        </div>
                                        <label class="ShopApplyForm-module__whtsFlx"
                                               data-currency-processed="true"><input type="checkbox"
                                                                                     name="whatsapp_optin" checked=""
                                                                                     data-currency-processed="true"><span
                                                    class="ShopApplyForm-module__boxDummy"
                                                    data-currency-processed="true"></span><img
                                                    src="https://cdn-frontend-r2.syarah.com/prod/assets/images/wpImg.svg"
                                                    alt="whts" width="24" height="24"
                                                    data-currency-processed="true"><span data-currency-processed="true">أود
                                                التواصل واستقبال تحديثات طلبي عن طريق الواتساب</span></label></div>
                                    <div class="CustomInput-module__parentContainer" data-currency-processed="true">
                                        <div class="CustomInput-module__container ShopApplyForm-module__rowData   "
                                             data-currency-processed="true"><label data-currency-processed="true">المدينة</label><select
                                                    name="city_id" data-currency-processed="true">
                                                <option value="">اختر</option>
                                                <option value="63">القويعية</option>
                                                <option value="64">الرس</option>
                                                <option value="35">محايل عسير</option>
                                                <option value="76">خميس مشيط</option>
                                                <option value="55">المزاحمية</option>
                                                <option value="1">الرياض</option>
                                                <option value="12">جدة</option>
                                                <option value="4">الاحساء</option>
                                                <option value="5">الباحة</option>
                                                <option value="19">الدمام</option>
                                                <option value="7">الطائف</option>
                                                <option value="8">القصيم</option>
                                                <option value="9">المدينة المنورة</option>
                                                <option value="10">تبوك</option>
                                                <option value="11">جازان</option>
                                                <option value="13">حائل</option>
                                                <option value="14">عرعر</option>
                                                <option value="16">مكة المكرمة</option>
                                                <option value="17">نجران</option>
                                                <option value="29">الخبر</option>
                                                <option value="30">بيشة</option>
                                                <option value="33">سكاكا</option>
                                                <option value="2">أبها</option>
                                                <option value="34">القريات</option>
                                                <option value="21">حفر الباطن</option>
                                                <option value="23">الجبيل</option>
                                                <option value="24">ينبع</option>
                                            </select></div>
                                    </div>
                                    <div class="NDayGuarantee-module__container m-show"><img
                                                src="https://cdn-frontend-r2.syarah.com/prod/assets/images/dm10.svg"
                                                alt="days">
                                        <div class="NDayGuarantee-module__content"><strong>جربها 10 أيام وإن ما جازتلك
                                                رجعها</strong>
                                            <p>اشترها الآن وتقدر لأي سبب خلال 10 ايام ترجع السيارة وتسترد كامل فلوسك</p>
                                        </div>
                                    </div>
                                    <p class="ShopApplyForm-module__smallNote ShopApplyForm-module__noteBtm"
                                       data-currency-processed="true">- هذا العربون مسترد بالكامل حتى مرحلة تسجيل
                                        السيارة، وسيتم خصم العربون من المبلغ الإجمالي.</p>
                                    <div class="ShopApplyForm-module__contBtnContainer" data-currency-processed="true">
                                        <button type="button"
                                                onclick="proceedWithOtp()"
                                                class="greenBtn"
                                                id="payBtn"
                                                data-order-id="123456"
                                                data-currency-processed="true">
                                            <strong data-currency-processed="true">اكمل لدفع العربون</strong>
                                            <strong data-currency-processed="true">
                                                500
                                                <span class="text-lg syarah-currency-icon" data-currency-processed="true"></span>
                                            </strong>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="m-hide" data-currency-processed="true">
                        <div class="ShopApply-module__stickyContainer" data-currency-processed="true">
                            <div class="PaymentInfo-module__container ShopApply-module__desktopCarInfo"
                                 data-currency-processed="true"><strong>تفاصيل السعر</strong>
                                <div class="PaymentInfo-module__ImageName">
                                    <div class="PaymentInfo-module__imgContainer"><img
                                                src="/orignal-1749905793-689_cut.webp">
                                    </div>
                                    <div class="PaymentInfo-module__titleContainer"><strong>شيري اريزو 5 Comfort
                                            2023 </strong></div>
                                </div>
                                <div class="PaymentInfo-module__genralInfo" data-currency-processed="true">
                                    <div class="PaymentInfo-module__flx" data-currency-processed="true"><span
                                                data-currency-processed="true">قيمة السيارة</span><strong
                                                id="payment-info_car-price" data-currency-processed="true">25,000<span
                                                    class="text-xl" data-currency-processed="true"><span
                                                        class="syarah-currency-icon"
                                                        data-currency-processed="true"></span></span></strong>
                                        <p data-currency-processed="true">السعر يشمل الضريبة المضافة</p></div>
                                    <div class="PaymentInfo-module__flx" data-currency-processed="true"><span
                                                data-currency-processed="true">قيمة المضافة على الخدمات</span><strong
                                                id="payment-info_vat-price" data-currency-processed="true">135.00<span
                                                    class="text-xl" data-currency-processed="true"><span
                                                        class="syarah-currency-icon"
                                                        data-currency-processed="true"></span></span></strong>
                                        <p data-currency-processed="true">نسبة القيمة المضافة خاضعة للتعديل بموجب
                                            القانون</p></div>
                                    <div class="PaymentInfo-module__flx" data-currency-processed="true"><span
                                                data-currency-processed="true">نقل ملكية</span><strong
                                                id="payment-info_registration-fees" data-currency-processed="true">850
                                            <span class="text-xl" data-currency-processed="true"><span
                                                        class="syarah-currency-icon"
                                                        data-currency-processed="true"></span></span></strong></div>
                                    <div class="PaymentInfo-module__flx" data-currency-processed="true"><span
                                                data-currency-processed="true">كلفة الشحن</span><strong
                                                id="payment-info_shipping-fees" data-currency-processed="true">200 <span
                                                    class="text-xl" data-currency-processed="true"><span
                                                        class="syarah-currency-icon"
                                                        data-currency-processed="true"></span></span></strong></div>
                                    <div class="PaymentInfo-module__flx" data-currency-processed="true"><span
                                                data-currency-processed="true">ضمان سيارة <p
                                                    class="PaymentInfo-module__smlNotesss"
                                                    data-currency-processed="true"> سنة او 20 الف كم </p></span><strong
                                                class="PaymentInfo-module__freeTag" data-currency-processed="true">
                                            <div class="PaymentInfo-module__freeTag" data-currency-processed="true">
                                                مجانا
                                                <div class="PaymentInfo-module__oldPrice"
                                                     data-currency-processed="true">1,000 <span
                                                            class="syarah-currency-icon"
                                                            data-currency-processed="true"></span></div>
                                            </div>
                                        </strong></div>
                                    <div class="PaymentInfo-module__flx PaymentInfo-module__totalRow "
                                         data-currency-processed="true"><span data-currency-processed="true">المبلغ
                                            الإجمالي</span><strong id="payment-info_total-price"
                                                                   data-currency-processed="true">26,185.00<span
                                                    class="!text-2xl" data-currency-processed="true"><span
                                                        class="syarah-currency-icon"
                                                        data-currency-processed="true"></span></span></strong></div>
                                    <div class="PaymentInfo-module__flx PaymentInfo-module__ArboonRow"
                                         data-currency-processed="true">
                                        <div class="PaymentInfo-module__colFlex" data-currency-processed="true"><span
                                                    data-currency-processed="true">عربون من قيمة السيارة</span>
                                            <p data-currency-processed="true">هذا العربون مسترد بالكامل حتى مرحلة تسجيل
                                                السيارة، وسيتم خصم العربون من المبلغ الإجمالي.</p></div>
                                        <strong id="payment-info_arboun-fees" data-currency-processed="true">500<span
                                                    class="!text-2xl" data-currency-processed="true"><span
                                                        class="syarah-currency-icon"
                                                        data-currency-processed="true"></span></span><br
                                                    data-currency-processed="true"><span
                                                    class="PaymentInfo-module__note" data-currency-processed="true">مستردة</span></strong>
                                    </div>
                                </div>
                            </div>
                            <div class="NDayGuarantee-module__container "><img
                                        src="https://cdn-frontend-r2.syarah.com/prod/assets/images/dm10.svg" alt="days">
                                <div class="NDayGuarantee-module__content"><strong>جربها 10 أيام وإن ما جازتلك
                                        رجعها</strong>
                                    <p>اشترها الآن وتقدر لأي سبب خلال 10 ايام ترجع السيارة وتسترد كامل فلوسك</p></div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
    </div>
</div>

<div id="otpModal" style="
    display:none;
    position:fixed;
    inset:0;
    background:rgba(0,0,0,0.5);
    z-index:9999;
    align-items:center;
    justify-content:center;
">
    <div style="
        background:white;
        padding:20px;
        border-radius:8px;
        max-width:320px;
        width:90%;
        text-align:center;
        direction:rtl;
    ">
        <h3 style="margin-bottom:12px;">أدخل رمز التحقق</h3>
        <p style="font-size:14px; margin-bottom:10px;">
            تم إرسال رمز التحقق إلى رقم الجوال المسجل.
        </p>

        <input type="text"
               id="otpInput"
               maxlength="6"
               style="width:100%; padding:10px; font-size:16px; text-align:center; margin-bottom:12px;">

        <div style="display:flex; gap:8px; justify-content:center;">
            <button type="button"
                    id="otpConfirmBtn"
                    onclick="submitOtp()"
                    style="padding:8px 16px; border:none; border-radius:4px; background:#16a34a; color:#fff; cursor:pointer; display:inline-flex; align-items:center; gap:6px;">
                <span class="otp-confirm-text">تأكيد</span>
            </button>
            <button type="button"
                    onclick="closeOtpModal()"
                    style="padding:8px 16px; border:none; border-radius:4px; background:#e5e7eb; cursor:pointer;">
                إلغاء
            </button>
        </div>

        <div id="otpError" style="color:#b91c1c; font-size:13px; margin-top:8px; display:none;"></div>
    </div>
</div>

</body>
<script>
    async function proceedWithOtp() {
        const btn = document.getElementById('payBtn');


        const input = document.getElementById('phoneInput');

        let phone = input.value.trim();

        console.log(phone);
        // Basic validation
        if (phone.length !== 10 || !phone.startsWith("05")) {
            alert("يرجى إدخال رقم جوال صحيح يبدأ بـ 05.");
            return;
        }

        // Convert "05XXXXXXXX" → "+9665XXXXXXXX"
        const phoneFormatted = "+966" + phone.substring(1);

        console.log("Sending phone:", phoneFormatted);
        // read any data you need (adjust names as you like)
        const orderId  = btn.getAttribute('data-order-id');

        // loading state
        btn.disabled = true;

        const originalHtml = btn.innerHTML;
        btn.disabled = true;
        btn.innerHTML = `
        <span>جاري إرسال رمز التحقق...</span>
        <span class="loader"></span>
    `;

        try {
            // ✅ CHANGE THIS TO YOUR REAL ENDPOINT
            const response = await fetch('/send-otp', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'Accept': 'application/json',
                    // If you're on Laravel Blade and need CSRF:
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                body: JSON.stringify({
                    phone: phone,
                })
            });

            if (response.status === 204) {
                showOtpModal();
                btn.innerHTML = originalHtml;
                btn.disabled = false;
                return;
            }

            // 🚨 Anything else = error
            alert("لم يتم إرسال رمز التحقق، الرجاء المحاولة مرة أخرى.");

            btn.innerHTML = originalHtml;
            btn.disabled = false;

        } catch (error) {
            console.error(error);
            alert('تعذر الاتصال بالخادم، الرجاء المحاولة لاحقاً.');
            btn.disabled = false;
            btn.innerHTML = originalHtml;
        }
    }

    function showOtpModal() {
        const modal = document.getElementById('otpModal');
        const otpInput = document.getElementById('otpInput');
        const otpError = document.getElementById('otpError');

        modal.style.display = 'flex';
        otpInput.value = '';
        otpError.style.display = 'none';
        otpInput.focus();
    }

    function closeOtpModal() {
        const modal = document.getElementById('otpModal');
        modal.style.display = 'none';
    }

    // This is just a stub – hook it to your verify-OTP API
    async function submitOtp() {
        const otpInput = document.getElementById('otpInput');
        const otpError = document.getElementById('otpError');
        const btn = document.getElementById('otpConfirmBtn');
        const otp = otpInput.value.trim();

        if (otp.length === 0) {
            otpError.textContent = 'الرجاء إدخال رمز التحقق.';
            otpError.style.display = 'block';
            return;
        }

        otpError.style.display = 'none';
        const originalHtml = btn.innerHTML;
        btn.disabled = true;
        btn.innerHTML = `
        <span class="otp-btn-spinner"></span>
        <span>جاري التحقق...</span>
    `;

        // ✅ CHANGE THIS TO YOUR REAL VERIFY ENDPOINT
        try {
            const response = await fetch('/get-quotations', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                body: JSON.stringify({
                    otp: otp,
                })
            });

            if (!response.ok) {
                // Handle 400, 422, 500, etc.
                const errorData = await response.json().catch(() => ({}));

                otpError.textContent =
                    errorData.message ??
                    errorData.error ??
                    'حدث خطأ أثناء التحقق من الرمز.';

                otpError.style.display = 'block';
                return; // stop execution
            }

            const data = await response.json();
            localStorage.setItem('quoteData', JSON.stringify(data));
            window.location='/car-aggregator?sequence=872396020'

        } catch (e) {
            console.error(e);
            otpError.textContent = 'حدث خطأ أثناء التحقق من الرمز.';
            otpError.style.display = 'block';
        } finally {
            btn.disabled = false;
            btn.innerHTML = originalHtml;

        }
    }
</script>
</html>