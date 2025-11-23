<html lang="ar">
<head>
    <link rel="stylesheet" href="{{ asset('demo/aggregator/chunk.css') }}">
    <link rel="stylesheet" href="{{ asset('demo/aggregator/chunk2.css') }}">
    <link rel="stylesheet" href="{{ asset('demo/aggregator/chunk3.css') }}">
    <link rel="stylesheet" href="{{ asset('demo/aggregator/chunk4.css') }}">
    <link rel="stylesheet" href="{{ asset('demo/aggregator/chunk5.css') }}">
    <link rel="stylesheet" href="{{ asset('demo/aggregator/chunk6.css') }}">
    <link rel="stylesheet" href="{{ asset('demo/aggregator/chunk7.css') }}">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.15.2/dist/cdn.min.js"></script>

    <link rel="preload" as="font"
          href="https://fonts.gstatic.com/s/cairo/v28/SLXVc1nY6HkvangtZmpQdkhzfH5lkSscRiyS8p4_RA.woff2"
          type="font/woff2" crossorigin="anonymous">
    <link rel="preload" as="font"
          href="https://fonts.gstatic.com/s/cairo/v28/SLXVc1nY6HkvangtZmpQdkhzfH5lkSscQyyS8p4_RHH1.woff2"
          type="font/woff2" crossorigin="anonymous">
    <style>
        /* arabic */
        @font-face {
            font-family: 'Cairo';
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/cairo/v28/SLXVc1nY6HkvangtZmpQdkhzfH5lkSscQyyS8p4_RHH1.woff2) format('woff2');
            unicode-range: U+0600-06FF, U+0750-077F, U+0870-088E, U+0890-0891, U+0898-08E1, U+08E3-08FF, U+200C-200E, U+2010-2011, U+204F, U+2E41, U+FB50-FDFF, U+FE70-FE74, U+FE76-FEFC, U+102E0-102FB, U+10E60-10E7E, U+10EFD-10EFF, U+1EE00-1EE03, U+1EE05-1EE1F, U+1EE21-1EE22, U+1EE24, U+1EE27, U+1EE29-1EE32, U+1EE34-1EE37, U+1EE39, U+1EE3B, U+1EE42, U+1EE47, U+1EE49, U+1EE4B, U+1EE4D-1EE4F, U+1EE51-1EE52, U+1EE54, U+1EE57, U+1EE59, U+1EE5B, U+1EE5D, U+1EE5F, U+1EE61-1EE62, U+1EE64, U+1EE67-1EE6A, U+1EE6C-1EE72, U+1EE74-1EE77, U+1EE79-1EE7C, U+1EE7E, U+1EE80-1EE89, U+1EE8B-1EE9B, U+1EEA1-1EEA3, U+1EEA5-1EEA9, U+1EEAB-1EEBB, U+1EEF0-1EEF1;
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
        .insurance-option {
            border-radius: 10px;
            border-color: #d1d5db;
            border-width: 1px;
            border-style: solid;
        }
        .selected {
            border-color: #154f9c;
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
<body dir="rtl">
<header class="Header-module__siteHeader   m-hide  transition duration-1000 " data-currency-processed="true">
    <div id="desktopHeader" class="container Header-module__innerHdr " data-currency-processed="true"><span class=""
                                                                                                            data-currency-processed="true"><a
                    class="" href="/" data-currency-processed="true"><img width="83" height="38"
                                                                          class="Header-module__logoSizeRev hasEvents"
                                                                          src="https://cdn-frontend-r2.syarah.com/prod/assets/images/logoN.svg"
                                                                          alt="syarah logo icon"
                                                                          data-currency-processed="true"></a></span>
        <p class="m-show Header-module__mobHasTitle" data-currency-processed="true"></p>
        <ul data-currency-processed="true">
            <li class="Header-module__lastLiRev" data-currency-processed="true"><span
                        class="sideMenuToggle m-hide cursor-pointer" data-currency-processed="true"><img
                            src="https://cdn-frontend-r2.syarah.com/prod/assets/images/menuToggle.svg"
                            class="Header-module__MenuIcnSizeRev hasEvents" data-id="burgerMenu" fetchpriority="low"
                            width="24" height="16" alt="T"
                            style="background-repeat: no-repeat; background-size: cover; background-image: none; background-color: transparent; background-position: center center;"
                            data-currency-processed="true"></span></li>
        </ul>
    </div>
</header>
<main x-data="quotesPage" class="CheckOut" data-currency-processed="true">

    <div class="container ShopApply-module__container" data-currency-processed="true">
        <div data-currency-processed="true">
            <button class="CancelButton-module__button ShopApply-module__CancelButton m-hide"
                    data-currency-processed="true">إلغاء
            </button>
            <div class="ShopApply-module__wrapper" data-currency-processed="true">
                <div class="HeadingStepss-module__container " data-currency-processed="true"><span class=""
                                                                                                   data-currency-processed="true">أضف
                        معلوماتك</span><span class="active" data-currency-processed="true">التأمين</span><span
                            data-currency-processed="true">الدفع</span></div>
                <div class="ShopApplyForm-module__container " data-currency-processed="true">
                    <span>احصل على تغطية فورية لمركبتك أثناء إتمام الطلب</span>
                    <div class="flex gap-2">
                        <label class="ShopApplyForm-module__whtsFlx" data-currency-processed="true">
                            <input
                                    type="radio" name="insurance_option" checked="" value="comp">
                            <span
                                    data-currency-processed="true">تأمين شامل</span></label>
                        <label class="ShopApplyForm-module__whtsFlx" data-currency-processed="true">
                            <input
                                    type="radio" name="insurance_option" value="tpl_plus">
                            <span
                                    data-currency-processed="true">تأمين ضد الغير بلس</span></label>
                        <label class="ShopApplyForm-module__whtsFlx" data-currency-processed="true">
                            <input
                                    type="radio" name="insurance_option" value="tpl">
                            <span
                                    data-currency-processed="true">تأمين ضد الغير </span></label>
                        <label class="ShopApplyForm-module__whtsFlx" data-currency-processed="true">
                            <input
                                    type="radio" name="insurance_option" value="no_insurance">
                            <span
                                    data-currency-processed="true">لا اريد الحصول على تأمين</span>
                        </label>
                    </div>
                    <div id="comp_section" class="justify-between gap-2 mt-6 insurances-option items-stretch"
                         data-currency-processed="true">
                        <div class="quotes-list" x-show="quotesByType.comprehensive">
                            <template x-for="quote in quotesByType.comprehensive" :key="quote.quote_reference_id">
                                <div
                                        :data-price="quote.prices[0].total"
                                        onclick="selectCard(this)"
                                        style="cursor: pointer;"

                                        class="p-3 mt-2 insurance-option"
                                >
                                    <div class="flex justify-between items-center gap-3">
                                        <div class="flex items-center">
                                            <img :src="quote.company_logo" width="80" height="auto" alt="السيارات المستعملة">

                                            <div>
                                                <strong class="text-[#484848] text-base font-bold" x-text="quote.company_name"></strong>
                                                <br />
                                                <strong class="text-[#484848] text-base font-bold" x-text="quote.fix_type ? quote.fix_type.charAt(0).toUpperCase() + quote.fix_type.slice(1) : ''"
                                                ></strong>
                                            </div>
                                        </div>
                                        <div class="flex items-center">
                                            <strong class="text-[#484848] text-base font-bold leading-[24px]">
                                                <span x-text="quote.prices[0].total"></span> <span

                                                            class="text-xl syarah-currency-icon"></span>
                                            </strong>
                                            <x-tabler-circle-chevron-down class="chevron transition-transform duration-300" onclick="event.stopPropagation();toggleBenefits(this)" />
                                        </div>
                                    </div>
                                    <div class="flex flex-col gap-2 mt-4 hidden benefits">
                                        <template x-for="(benefit, index) in quote.benefits" :key="benefit.quote_benefit_id">
                                            <span style="font-size: 16px" class="flex items-center gap-1"><img
                                                        src="https://cdn-frontend-r2.syarah.com/prod/assets/images/post_check_mark.svg"
                                                        alt="icon" width="16" height="16"
                                                        class="inline"> <span x-text="benefit.name"></span></span>
                                        </template>
                                    </div>
                                </div>
                            </template>
                        </div>
                    </div>
                    <div style="display: none" id="tpl_plus_section" class="justify-between gap-2 mt-6 insurances-option items-stretch"
                         data-currency-processed="true">
                        <div class="quotes-list" x-show="quotesByType.tpl_plus">
                            <template x-for="quote in quotesByType.tpl_plus" :key="quote.quote_reference_id">
                                <div
                                        :data-price="quote.prices[0].total"
                                        onclick="selectCard(this)"
                                        style="cursor: pointer;"

                                        class="p-3 mt-2 insurance-option"
                                >
                                    <div class="flex justify-between items-center gap-3">
                                        <div class="flex items-center">
                                            <img :src="quote.company_logo" width="80" height="auto" alt="السيارات المستعملة">

                                            <div>
                                                <strong class="text-[#484848] text-base font-bold" x-text="quote.company_name"></strong>
                                                <br />
                                                <strong class="text-[#484848] text-base font-bold" x-text="quote.fix_type ? quote.fix_type.charAt(0).toUpperCase() + quote.fix_type.slice(1) : ''"
                                                ></strong>
                                            </div>
                                        </div>
                                        <div class="flex items-center">
                                            <strong class="text-[#484848] text-base font-bold leading-[24px]">
                                                <span x-text="quote.prices[0].total"></span> <span

                                                        class="text-xl syarah-currency-icon"></span>
                                            </strong>
                                            <x-tabler-circle-chevron-down class="chevron transition-transform duration-300" onclick="event.stopPropagation();toggleBenefits(this)" />
                                        </div>
                                    </div>
                                    <div class="flex flex-col gap-2 mt-4 hidden benefits">
                                        <template x-for="(benefit, index) in quote.benefits" :key="benefit.quote_benefit_id">
                                            <span style="font-size: 16px" class="flex items-center gap-1"><img
                                                        src="https://cdn-frontend-r2.syarah.com/prod/assets/images/post_check_mark.svg"
                                                        alt="icon" width="16" height="16"
                                                        class="inline"> <span x-text="benefit.name"></span></span>
                                        </template>
                                    </div>
                                </div>
                            </template>
                        </div>
                    </div>
                    <div style="display: none" id="tpl_section" class="justify-between gap-2 mt-6 insurances-option items-stretch"
                         data-currency-processed="true">
                        <div class="quotes-list" x-show="quotesByType.tpl">
                            <template x-for="quote in quotesByType.tpl" :key="quote.quote_reference_id">
                                <div
                                        :data-price="quote.prices[0].total"
                                        onclick="selectCard(this)"
                                        style="cursor: pointer;"

                                        class="p-3 mt-2 insurance-option"
                                >
                                    <div class="flex justify-between items-center gap-3">
                                        <div class="flex items-center">
                                            <img :src="quote.company_logo" width="80" height="auto" alt="السيارات المستعملة">

                                            <div>
                                                <strong class="text-[#484848] text-base font-bold" x-text="quote.company_name"></strong>
                                                <br />
                                                <strong class="text-[#484848] text-base font-bold" x-text="quote.fix_type ? quote.fix_type.charAt(0).toUpperCase() + quote.fix_type.slice(1) : ''"
                                                ></strong>
                                            </div>
                                        </div>
                                        <div class="flex items-center">
                                            <strong class="text-[#484848] text-base font-bold leading-[24px]">
                                                <span x-text="quote.prices[0].total"></span> <span

                                                        class="text-xl syarah-currency-icon"></span>
                                            </strong>
                                            <x-tabler-circle-chevron-down class="chevron transition-transform duration-300" onclick="event.stopPropagation();toggleBenefits(this)" />
                                        </div>
                                    </div>
                                    <div class="flex flex-col gap-2 mt-4 hidden benefits">
                                        <template x-for="(benefit, index) in quote.benefits" :key="benefit.quote_benefit_id">
                                            <span style="font-size: 16px" class="flex items-center gap-1"><img
                                                        src="https://cdn-frontend-r2.syarah.com/prod/assets/images/post_check_mark.svg"
                                                        alt="icon" width="16" height="16"
                                                        class="inline"> <span x-text="benefit.name"></span></span>
                                        </template>
                                    </div>
                                </div>
                            </template>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @if (request()->get('sequence') == "972396060")
            <div class="m-hide" data-currency-processed="true">
                <div class="ShopApply-module__stickyContainer" data-currency-processed="true">
                    <div class="PaymentInfo-module__container ShopApply-module__desktopCarInfo"
                         data-currency-processed="true"><strong data-currency-processed="true">تفاصيل السعر</strong>
                        <div class="PaymentInfo-module__ImageName" data-currency-processed="true">
                            <div class="PaymentInfo-module__imgContainer" data-currency-processed="true"><img
                                        src="https://cdn.syarah.com/photos-thumbs/online-v1/0x300/online/posts/206452/orignal-1720628761-249.jpg"
                                        data-currency-processed="true"></div>
                            <div class="PaymentInfo-module__titleContainer" data-currency-processed="true"><strong
                                        data-currency-processed="true">تويوتا يارس Y 2021 </strong></div>
                        </div>
                        <div class="PaymentInfo-module__genralInfo" data-currency-processed="true">
                            <div class="PaymentInfo-module__flx" data-currency-processed="true"><span
                                        data-currency-processed="true">قيمة السيارة</span><strong
                                        id="payment-info_car-price" data-currency-processed="true">46,500<span
                                            class="text-xl syarah-currency-icon" data-currency-processed="true"></span></strong>
                                <p data-currency-processed="true">السعر يشمل الضريبة المضافة</p></div>
                            <div class="PaymentInfo-module__flx" data-currency-processed="true"><span
                                        data-currency-processed="true">قيمة المضافة على الخدمات</span><strong
                                        id="payment-info_vat-price" data-currency-processed="true">135.00<span
                                            class="text-xl syarah-currency-icon" data-currency-processed="true"></span></strong>
                                <p data-currency-processed="true">نسبة القيمة المضافة خاضعة للتعديل بموجب القانون</p>
                            </div>
                            <div class="PaymentInfo-module__flx" data-currency-processed="true"><span
                                        data-currency-processed="true">نقل ملكية</span><strong
                                        id="payment-info_registration-fees" data-currency-processed="true">850 <span
                                            class="text-xl syarah-currency-icon" data-currency-processed="true"></span></strong>
                            </div>
                            <div class="PaymentInfo-module__flx" data-currency-processed="true"><span
                                        data-currency-processed="true">كلفة الشحن</span><strong
                                        id="payment-info_shipping-fees" data-currency-processed="true">200 <span
                                            class="text-xl syarah-currency-icon" data-currency-processed="true"></span></strong>
                            </div>
                            <div id="insurance-wrapper" class="PaymentInfo-module__flx hidden"
                                 data-currency-processed="true">
                                <span>التأمين</span>
                                <strong><strong id="insurance-price">5700</strong><span
                                            class="text-xl syarah-currency-icon"></span></strong>
                                <p data-currency-processed="true">نسبة القيمة المضافة خاضعة للتعديل بموجب القانون</p>
                            </div>
                            <div class="PaymentInfo-module__flx" data-currency-processed="true"><span
                                        data-currency-processed="true">ضمان سيارة <p
                                            class="PaymentInfo-module__smlNotesss" data-currency-processed="true"> سنة
                                        او 20 الف كم </p></span><strong class="PaymentInfo-module__freeTag"
                                                                        data-currency-processed="true">
                                    <div class="PaymentInfo-module__freeTag" data-currency-processed="true">مجانا
                                        <div class="PaymentInfo-module__oldPrice" data-currency-processed="true">1,000
                                            <span class="syarah-currency-icon" data-currency-processed="true"></span>
                                        </div>
                                    </div>
                                </strong></div>
                            <div class="PaymentInfo-module__flx PaymentInfo-module__totalRow "
                                 data-currency-processed="true"><span data-currency-processed="true">المبلغ
                                    الإجمالي</span><strong id="payment-info_total-price" data-currency-processed="true">
                                    <strong id="total-price">47,685.00</strong><span
                                            class="!text-2xl syarah-currency-icon"
                                            data-currency-processed="true"></span></strong></div>
                            <div class="PaymentInfo-module__flx PaymentInfo-module__ArboonRow"
                                 data-currency-processed="true">
                                <div class="PaymentInfo-module__colFlex" data-currency-processed="true"><span
                                            data-currency-processed="true">عربون من قيمة السيارة</span>
                                    <p data-currency-processed="true">هذا العربون مسترد بالكامل حتى مرحلة تسجيل السيارة،
                                        وسيتم خصم العربون من المبلغ الإجمالي.</p></div>
                                <strong id="payment-info_arboun-fees" data-currency-processed="true">500<span
                                            class="!text-2xl syarah-currency-icon"
                                            data-currency-processed="true"></span><br
                                            data-currency-processed="true"><span class="PaymentInfo-module__note"
                                                                                 data-currency-processed="true">مستردة</span></strong>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @elseif (request()->get('sequence') == "872396020")
            <div class="m-hide" data-currency-processed="true">
                <div class="ShopApply-module__stickyContainer" data-currency-processed="true">
                    <div class="PaymentInfo-module__container ShopApply-module__desktopCarInfo"
                         data-currency-processed="true"><strong data-currency-processed="true">تفاصيل السعر</strong>
                        <div class="PaymentInfo-module__ImageName" data-currency-processed="true">
                            <div class="PaymentInfo-module__imgContainer" data-currency-processed="true"><img
                                        src="https://cdn.syarah.com/photos-thumbs/online-v1/0x300/online/posts/237971/orignal-1740076317-60_cut.jpg"
                                        data-currency-processed="true"></div>
                            <div class="PaymentInfo-module__titleContainer" data-currency-processed="true"><strong
                                        data-currency-processed="true">شيري اريزو 5 Comfort 2023 </strong></div>
                        </div>
                        <div class="PaymentInfo-module__genralInfo" data-currency-processed="true">
                            <div class="PaymentInfo-module__flx" data-currency-processed="true"><span
                                        data-currency-processed="true">قيمة السيارة</span><strong
                                        id="payment-info_car-price" data-currency-processed="true">25,300<span
                                            class="text-xl syarah-currency-icon"
                                            data-currency-processed="true"></span></strong>
                                <p data-currency-processed="true">السعر يشمل الضريبة المضافة</p></div>
                            <div class="PaymentInfo-module__flx" data-currency-processed="true"><span
                                        data-currency-processed="true">قيمة المضافة على الخدمات</span><strong
                                        id="payment-info_vat-price" data-currency-processed="true">135.00<span
                                            class="text-xl syarah-currency-icon"
                                            data-currency-processed="true"></span></strong>
                                <p data-currency-processed="true">نسبة القيمة المضافة خاضعة للتعديل بموجب القانون</p>
                            </div>
                            <div class="PaymentInfo-module__flx" data-currency-processed="true"><span
                                        data-currency-processed="true">نقل ملكية</span><strong
                                        id="payment-info_registration-fees" data-currency-processed="true">850 <span
                                            class="text-xl syarah-currency-icon"
                                            data-currency-processed="true"></span></strong></div>
                            <div class="PaymentInfo-module__flx" data-currency-processed="true"><span
                                        data-currency-processed="true">كلفة الشحن</span><strong
                                        id="payment-info_shipping-fees" data-currency-processed="true">200 <span
                                            class="text-xl syarah-currency-icon"
                                            data-currency-processed="true"></span></strong></div>
                            <div id="insurance-wrapper" class="PaymentInfo-module__flx hidden"
                                 data-currency-processed="true">
                                <span>التأمين</span>
                                <strong><strong id="insurance-price">5,700</strong><span
                                            class="text-xl syarah-currency-icon"></span></strong>
                                <p data-currency-processed="true">نسبة القيمة المضافة خاضعة للتعديل بموجب القانون</p>
                            </div>
                            <div class="PaymentInfo-module__flx" data-currency-processed="true"><span
                                        data-currency-processed="true">ضمان سيارة <p
                                            class="PaymentInfo-module__smlNotesss"
                                            data-currency-processed="true"> سنة او
                                        20 الف كم </p></span><strong class="PaymentInfo-module__freeTag"
                                                                     data-currency-processed="true">
                                    <div class="PaymentInfo-module__freeTag" data-currency-processed="true">مجانا
                                        <div class="PaymentInfo-module__oldPrice" data-currency-processed="true">1,000
                                            <span
                                                    class="syarah-currency-icon" data-currency-processed="true"></span>
                                        </div>
                                    </div>
                                </strong></div>
                            <div class="PaymentInfo-module__flx PaymentInfo-module__totalRow "
                                 data-currency-processed="true"><span data-currency-processed="true">المبلغ
                                    الإجمالي</span><strong id="payment-info_total-price" data-currency-processed="true"><strong
                                            id="total-price">26,485.00</strong><span
                                            class="!text-2xl syarah-currency-icon"
                                            data-currency-processed="true"></span></strong></div>
                            <div class="PaymentInfo-module__flx PaymentInfo-module__ArboonRow"
                                 data-currency-processed="true">
                                <div class="PaymentInfo-module__colFlex" data-currency-processed="true"><span
                                            data-currency-processed="true">عربون من قيمة السيارة</span>
                                    <p data-currency-processed="true">هذا العربون مسترد بالكامل حتى مرحلة تسجيل السيارة،
                                        وسيتم خصم العربون من المبلغ الإجمالي.</p></div>
                                <strong id="payment-info_arboun-fees" data-currency-processed="true">500<span
                                            class="!text-2xl syarah-currency-icon"
                                            data-currency-processed="true"></span><br
                                            data-currency-processed="true"><span class="PaymentInfo-module__note"
                                                                                 data-currency-processed="true">مستردة</span></strong>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @else
            <div class="m-hide" data-currency-processed="true">
                <div class="ShopApply-module__stickyContainer" data-currency-processed="true">
                    <div class="PaymentInfo-module__container ShopApply-module__desktopCarInfo"
                         data-currency-processed="true"><strong data-currency-processed="true">تفاصيل السعر</strong>
                        <div class="PaymentInfo-module__ImageName" data-currency-processed="true">
                            <div class="PaymentInfo-module__imgContainer" data-currency-processed="true"><img
                                        src="https://cdn.syarah.com/photos-thumbs/online-v1/0x300/online/posts/241399/orignal-1748559956-5_cut.jpg"
                                        data-currency-processed="true"></div>
                            <div class="PaymentInfo-module__titleContainer" data-currency-processed="true"><strong
                                        data-currency-processed="true">ام جي 5 LUX 2022 </strong></div>
                        </div>
                        <div class="PaymentInfo-module__genralInfo" data-currency-processed="true">
                            <div class="PaymentInfo-module__flx" data-currency-processed="true"><span
                                        data-currency-processed="true">قيمة السيارة</span><strong
                                        id="payment-info_car-price" data-currency-processed="true">43,500<span
                                            class="text-xl syarah-currency-icon" data-currency-processed="true"></span></strong>
                                <p data-currency-processed="true">السعر يشمل الضريبة المضافة</p></div>
                            <div class="PaymentInfo-module__flx" data-currency-processed="true"><span
                                        data-currency-processed="true">قيمة المضافة على الخدمات</span><strong
                                        id="payment-info_vat-price" data-currency-processed="true">135.00<span
                                            class="text-xl syarah-currency-icon" data-currency-processed="true"></span></strong>
                                <p data-currency-processed="true">نسبة القيمة المضافة خاضعة للتعديل بموجب القانون</p>
                            </div>
                            <div class="PaymentInfo-module__flx" data-currency-processed="true"><span
                                        data-currency-processed="true">نقل ملكية</span><strong
                                        id="payment-info_registration-fees" data-currency-processed="true">850 <span
                                            class="text-xl syarah-currency-icon" data-currency-processed="true"></span></strong>
                            </div>
                            <div class="PaymentInfo-module__flx" data-currency-processed="true"><span
                                        data-currency-processed="true">كلفة الشحن</span><strong
                                        id="payment-info_shipping-fees" data-currency-processed="true">200 <span
                                            class="text-xl syarah-currency-icon" data-currency-processed="true"></span></strong>
                            </div>
                            <div id="insurance-wrapper" class="PaymentInfo-module__flx hidden"
                                 data-currency-processed="true">
                                <span>التأمين</span>
                                <strong><strong id="insurance-price">5,700</strong><span
                                            class="text-xl syarah-currency-icon"></span></strong>
                                <p data-currency-processed="true">نسبة القيمة المضافة خاضعة للتعديل بموجب القانون</p>
                            </div>
                            <div class="PaymentInfo-module__flx" data-currency-processed="true"><span
                                        data-currency-processed="true">ضمان سيارة <p
                                            class="PaymentInfo-module__smlNotesss" data-currency-processed="true"> سنة
                                        او 20 الف كم </p></span><strong class="PaymentInfo-module__freeTag"
                                                                        data-currency-processed="true">
                                    <div class="PaymentInfo-module__freeTag" data-currency-processed="true">مجانا
                                        <div class="PaymentInfo-module__oldPrice" data-currency-processed="true">1,000
                                            <span class="syarah-currency-icon" data-currency-processed="true"></span>
                                        </div>
                                    </div>
                                </strong></div>
                            <div class="PaymentInfo-module__flx PaymentInfo-module__totalRow "
                                 data-currency-processed="true"><span data-currency-processed="true">المبلغ
                                    الإجمالي</span><strong id="payment-info_total-price" data-currency-processed="true">
                                    <strong
                                            id="total-price">26,485.00</strong><span
                                            class="!text-2xl syarah-currency-icon"
                                            data-currency-processed="true"></span></strong></div>
                            <div class="PaymentInfo-module__flx PaymentInfo-module__ArboonRow"
                                 data-currency-processed="true">
                                <div class="PaymentInfo-module__colFlex" data-currency-processed="true"><span
                                            data-currency-processed="true">عربون من قيمة السيارة</span>
                                    <p data-currency-processed="true">هذا العربون مسترد بالكامل حتى مرحلة تسجيل السيارة،
                                        وسيتم خصم العربون من المبلغ الإجمالي.</p></div>
                                <strong id="payment-info_arboun-fees" data-currency-processed="true">500<span
                                            class="!text-2xl syarah-currency-icon"
                                            data-currency-processed="true"></span><br
                                            data-currency-processed="true"><span class="PaymentInfo-module__note"
                                                                                 data-currency-processed="true">مستردة</span></strong>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </div>
</main>
<script>
    document.addEventListener('alpine:init', () => {
        Alpine.data('quotesPage', () => ({
            data: null,
            quotes: [],          // flat list (optional, still available)
            quotesByType: {      // grouped lists
                comprehensive: [],
                tpl: [],
                tpl_plus: [],
            },
            init() {
                console.log("ok?");
                const saved = localStorage.getItem('quoteData');
                if (!saved) {
                    console.warn('No quoteData found in localStorage');
                    return;
                }

                // Full object (owner_id, email, quotes, etc.)
                this.data = JSON.parse(saved);
                console.log(this.data);

                // Group quotes by type and calculate minPrice
                this.quotesByType = this.data.quotes.reduce(
                    (groups, q) => {
                        const minPrice = q.prices.reduce(
                            (min, p) => (p.total < min ? p.total : min),
                            q.prices[0]?.total ?? 0
                        );

                        const rawType = (q.type || '').trim(); // "Comprehensive", "TPL", "TPL +"
                        let key = 'tpl'; // default

                        if (rawType === 'Comprehensive') {
                            key = 'comprehensive';
                        } else if (rawType === 'TPL +') {
                            key = 'tpl_plus';
                        } else if (rawType === 'TPL') {
                            key = 'tpl';
                        }

                        const quoteWithMin = {
                            ...q,
                            minPrice,
                            displayType: rawType,
                        };

                        groups[key].push(quoteWithMin);
                        this.quotes.push(quoteWithMin); // keep flat list too

                        return groups;
                    },
                    {
                        comprehensive: [],
                        tpl: [],
                        tpl_plus: [],
                    }
                );
            },
            formatMoney(value) {
                if (value == null) return '';
                return value.toLocaleString('ar-SA', {
                    minimumFractionDigits: 2,
                    maximumFractionDigits: 2,
                });
            },
        }));
    });

    let initialTotalPrice = @php
        $sequence = request()->get('sequence');
        if ($sequence == "872396020")
            echo 26485.00;
		else if ($sequence == "972396060" )
            echo 47685.00;
		else if ($sequence == "172256061" )
            echo 44685.00;
    @endphp

    document.querySelectorAll('input[name="insurance_option"]').forEach((elem) => {
        elem.addEventListener("change", function () {
            // Hide all sections first
            document.getElementById('comp_section').style.display = 'none';
            document.getElementById('tpl_plus_section').style.display = 'none';
            document.getElementById('tpl_section').style.display = 'none';

            // Show the selected section
            if (this.value === 'comp') {
                document.getElementById('comp_section').style.display = 'block';
            } else if (this.value=== 'tpl_plus') {
                document.getElementById('tpl_plus_section').style.display = 'block';
            } else if (this.value === 'tpl') {
                document.getElementById('tpl_section').style.display = 'block';
            } else if (this.value === 'no_insurance') {
                totalPrice = initialTotalPrice;
                document.getElementById('insurance-wrapper').classList.add('hidden');
                document.getElementById('total-price').textContent = totalPrice.toLocaleString();
                document.querySelectorAll('.insurances-option a').forEach(card => card.classList.remove('selected'));
            }
        });
    });

    function selectCard(element, companyName) {
        // Remove 'selected' from all cards
        document.querySelectorAll('.insurances-option div').forEach(card => card.classList.remove('selected'));

        // Add 'selected' to the clicked card
        element.classList.add('selected');
        let price = parseFloat(element.dataset.price);
        document.getElementById('insurance-wrapper').classList.remove('hidden');
        document.getElementById('insurance-price').textContent = price.toLocaleString();

        totalPrice = initialTotalPrice + price;
        document.getElementById('total-price').textContent = totalPrice.toLocaleString();

    }

    function toggleBenefits(el) {
        const card = el.closest('.insurance-option');
        const benefits = card.querySelector('.benefits');
        const isHidden = benefits.classList.toggle('hidden');
        el.classList.toggle('rotate-180', !isHidden);
    }
</script>
</body>
</html>