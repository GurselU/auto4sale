{{--@extends('admin.layouts.app')--}}

{{--@section('content')--}}
{{--    <h1>New car available</h1>--}}
{{--    <div>{{$car->categorie->categorie}}</div>--}}
{{--    @foreach($pictures as $picture)--}}
{{--        <div>{{$picture->id}}</div>--}}
{{--    @endforeach--}}
{{--@endsection--}}


<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml"
      xmlns:o="urn:schemas-microsoft-com:office:office"
>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="format-detection" content="telephone=no">
    <meta name="HandheldFriendly" content="True">
    <!--[if !mso]><!-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <!--<![endif]-->
    <meta name="x-apple-disable-message-reformatting">
    <link rel="icon" href="{{asset('images/favicon.svg')}}">
    <title>Sellauto</title>
    <style type="text/css">
        html {
            color: #262626;
        }

        .break-after::after {
            content: "\A";
            white-space: pre;
        }

        body {
            width: 100% !important;
            -webkit-text-size-adjust: 100%;
            -ms-text-size-adjust: 100%;
            Margin: 0;
            padding: 0;
            background-color: #ffffff;
        }

        html, body {
            height: 100%;
        }

        a:link, a:visited {
            text-decoration: none;
            font-weight: normal;
            color: #262626;
        }

        .tg {
            border-collapse: collapse;
            border-spacing: 0;
        }

        .tg td {
            border-color: black;
            border-style: solid;
            border-width: 1px;
            font-family: Arial, sans-serif;
            font-size: 14px;
            overflow: hidden;
            padding: 10px 5px;
            word-break: normal;
        }

        .tg th {
            border-color: black;
            border-style: solid;
            border-width: 1px;
            font-family: Arial, sans-serif;
            font-size: 14px;
            font-weight: normal;
            overflow: hidden;
            padding: 10px 5px;
            word-break: normal;
        }

        .tg .tg-0pky {
            border-color: inherit;
            text-align: left;
            vertical-align: top
        }

        a:hover, a:active {
            text-decoration: none;
            font-weight: normal;
            color: #262626;
        }

        a, img, a img, iframe, form, fieldset, abbr, acronym, object, applet, table {
            border: 0 none transparent;
        }

        body, table, td, p, a, li, blockquote {
            -ms-text-size-adjust: 100%;
            -webkit-text-size-adjust: 100%;
        }

        .ExternalClass {
            width: 100%;
        }

        .ExternalClass, .ExternalClass p, .ExternalClass span, .ExternalClass font, .ExternalClass td, .ExternalClass div {
            line-height: 100%;
        }

        img {
            outline: none;
            text-decoration: none;
            -ms-interpolation-mode: bicubic;
        }

        table td {
            border-collapse: collapse;
        }

        table {
            border-collapse: collapse;
            mso-table-lspace: 0pt;
            mso-table-rspace: 0pt;
        }

        table#details {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        table#details td {
            padding: 10px;
            border: 1px solid #ddd;
        }

        table#details th {
            padding: 10px;
            border: 1px solid #ddd;
            background-color: #f2f2f2;
            font-weight: bold;
            text-align: left;
        }

        /* VML Basics */
        v\:rect {
            behavior: url(#default#VML);
            display: inline-block;
        }

        v\:fill {
            behavior: url(#default#VML);
            display: inline-block;
        }

        font {
            font-size: 16px;
            line-height: 24px;
            font-weight: normal;
            font-variant: normal;
        }

        @font-face {
            font-family: 'Sellauto-Bold';
            font-style: normal;
            font-weight: bold;
            src: url('https://Sellautoag-mid-prod1.campaign.adobe.com/res/Sellautoag_mid_prod1/db9915b3ceae506ea271acdbc6f0889c.woff') format('woff'), url('https://Sellautoag-mid-prod1.campaign.adobe.com/res/Sellautoag_mid_prod1/231b8df056bab150d029d181ea568f99.woff2') format('woff2');
        }

        @font-face {
            font-family: 'Sellauto-Light';
            font-style: normal;
            font-weight: normal;
            src: url('https://Sellautoag-mid-prod1.campaign.adobe.com/res/Sellautoag_mid_prod1/b75ab9a6b69828fd2c393f2de727ab88.woff') format('woff'), url('https://Sellautoag-mid-prod1.campaign.adobe.com/res/Sellautoag_mid_prod1/d1ead03ce45e7b7a6555f6b37504b777.woff2') format('woff2');
        }

        @font-face {
            font-family: 'Sellauto-Thin';
            font-style: normal;
            font-weight: normal;
            src: url('https://Sellautoag-mid-prod1.campaign.adobe.com/res/Sellautoag_mid_prod1/ce4cb97d488b761f5de738e23c7c637a.woff') format('woff'), url('https://Sellautoag-mid-prod1.campaign.adobe.com/res/Sellautoag_mid_prod1/808c84ca1b70578f4e44ad68ea401fd1.woff2') format('woff2');
        }

        @media only screen and (min-width: 500px ) {
            *[class].w700_d {
                width: 700px !important;
            }

            *[class].w595_d {
                width: 595px !important;
            }

            *[class].w494_d {
                width: 494px !important;
            }

            *[class].w342_d {
                width: 342px !important;
            }

            *[class].w300_d {
                width: 300px !important;
            }

            *[class].w290_d {
                width: 290px !important;
            }

            *[class].w288_d {
                width: 288px !important;
            }

            *[class].w239_d {
                width: 239px !important;
            }

            *[class].w237_d {
                width: 237px !important;
            }

            *[class].w230_d {
                width: 230px !important;
            }

            *[class].w203_d {
                width: 203px !important;
            }

            *[class].w188_d {
                width: 188px !important;
            }

            *[class].w158_d {
                width: 158px !important;
            }

            *[class].w52_d {
                width: 52px !important;
            }

            *[class].w48_d {
                width: 48px !important;
            }
        }

        @media only screen and (max-width: 499px ) {
            *[class].mobiletable {
                width: 100% !important;
                display: block !important;
            }

            *[class].hide_m {
                display: none !important;
                visibility: hidden !important;
                mso-hide: all !important;
                font-size: 0 !important;
                line-height: 0 !important;
                max-height: 0 !important;
                padding: 0 !important;
                Margin: 0 !important;
            }

            *[class].show_m {
                display: table-cell !important;
                overflow: visible !important;
                max-height: inherit !important;
                visibility: visible !important;
                mso-hide: none !important;
            }

            *[class].dis_blk_m {
                display: block !important;
                overflow: visible !important;
                max-height: inherit !important;
                visibility: visible !important;
                mso-hide: none !important;
            }

            *[class].bg_mob_spacer_m {
                width: 100% !important;
                height: auto !important;
                display: block !important;
                visibility: visible !important;
                mso-hide: none !important;
            }

            *[class].bgresize_100p_m {
                background-repeat: no-repeat !important;
                background-size: 100% auto !important;
            }

            *[class].tac_m {
                text-align: center !important;
            }

            *[class].tal_m {
                text-align: left !important;
            }

            *[class].tar_m {
                text-align: right !important;
            }

            *[class].wauto_m {
                width: auto !important;
            }

            *[class].w20_m {
                width: 20px !important;
            }

            *[class].w40_m {
                width: 40px !important;
            }

            *[class].w62_m {
                width: 62px !important;
            }

            *[class].w89_m {
                width: 89px !important;
            }

            *[class].w79p_m {
                width: 79% !important;
            }

            *[class].w90p_m {
                width: 90% !important;
            }

            *[class].w95p_m {
                width: 95% !important;
            }

            *[class].w100p_m {
                width: 100% !important;
            }

            *[class].ma-w500_m {
                max-width: 500px !important;
            }

            *[class].hauto_m {
                height: auto !important;
            }

            *[class].h64_m {
                height: 64px !important;
            }

            *[class].h48_m {
                height: 48px !important;
            }

            *[class].h40_m {
                height: 40px !important;
            }

            *[class].h32_m {
                height: 32px !important;
            }

            *[class].h24_m {
                height: 24px !important;
            }

            *[class].h16_m {
                height: 16px !important;
            }

            *[class].h12_m {
                height: 12px !important;
            }

            *[class].p0_m {
                padding: 0 !important;
            }

            *[class].pt0_m {
                padding-top: 0 !important;
            }

            *[class].pt5_m {
                padding-top: 5px !important;
            }

            *[class].pl16_m {
                padding-left: 16px !important;
            }

            *[class].pl40_m {
                padding-left: 40px !important;
            }

            *[class].bnone_m {
                border: none !important;
            }

            *[class].bt_1_262626_m {
                border-top: 1px solid #262626 !important;
            }

            *[class].col262626_m {
                color: #262626 !important;
            }

            *[class].bgcol_none_m {
                background-color: transparent !important;
            }

            *[class].bgcolffffff_m {
                background-color: #ffffff !important;
            }

            *[class].bgnone_m {
                background-image: none !important;
                background-size: 1px 1px !important;
                background-color: transparent;
            }

            .bgresize_100p_m {
                background-repeat: no-repeat !important;
                background-size: 100% auto !important;
            }

            *[class].bgresize_pos0_0_95p_m {
                background-repeat: no-repeat !important;
                background-size: 95% auto !important;
                background-position: top left !important;
            }

            *[class].fs24_m {
                font-size: 24px !important;
            }

            *[class].lh32_m {
                line-height: 32px !important;
            }

            *[class].lh27_m {
                line-height: 27px !important;
            }

            *[class].np_m {
                padding: 0 !important;
            }

            *[class].pb15_m {
                padding-bottom: 15px !important;
            }
        }

        @media only screen and (max-width: 374px ) {
            *[class].w_final {
                width: 375px !important;
            }
        }
    </style>

    <!--[if mso]>
    <style type="text/css">
        table {
            border-collapse: collapse;
            border-spacing: 0;
            margin: 0;
        }

        div, td {
            padding: 0;
        }

        div {
            margin: 0 !important;
        }

        .fbtxt {
            font-family: Arial, Helvetica, sans-serif !important;
        }
    </style>
    <xml>
        <o:OfficeDocumentSettings>
            <o:AllowPNG/>
            <o:PixelsPerInch>96</o:PixelsPerInch>
        </o:OfficeDocumentSettings>
    </xml>
    <![endif]-->

</head>
<body alink="#262626" vlink="#262626" link="##262626" text="#262626" bgcolor="#ffffff" topmargin="0" leftmargin="0"
      bottommargin="0" rightmargin="0"
      style="-webkit-text-size-adjust: none; font-stretch: normal; font-style: normal; font-weight: normal; font-variant: normal; font-size: 12px; margin: 0px; padding: 0px;"
>
<div align="center">

    <!-- START Preheader text -->

    <!-- START Second-Subject -->
    <table class="w_final" border="0" cellpadding="0" cellspacing="0" style="mso-cellspacing: 0; mso-padding-alt: 0;"
           align="center" width="100%" bgcolor="#ffffff" role="presentation"
    >
        <tr>
            <td class="" align="center" width="100%" valign="top" bgcolor="#ffffff" aria-hidden="true"
                style="font-size:2px; line-height:2px;"
            >
                <table class="w100p_m" border="0" cellpadding="0" cellspacing="0" align="center" width="700"
                       role="presentation" style="mso-cellspacing: 0; mso-padding-alt: 0; width:700px;"
                >
                    <tr>
                        <td class="hide_m" aria-hidden="true"
                            style="font-family: Arial, sans-serif; font-size:1px; line-height:1px; color:#ffffff;"
                            bgcolor="#ffffff" align="center"
                        ><!-- preheader -->&nbsp;
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
    <!-- END Second-Subject -->
    <table class="w_final" border="0" cellpadding="0" cellspacing="0" style="mso-cellspacing: 0; mso-padding-alt: 0;"
           align="center" width="100%" bgcolor="#ffffff" role="presentation"
    >
        <tr>
            <td class="" align="center" width="100%" valign="top" bgcolor="#ffffff" aria-hidden="true"
                style="font-size:2px; line-height:2px; "
            >
                <table class="w100p_m" border="0" cellpadding="0" cellspacing="0" bgcolor="#ffffff" align="center"
                       width="700" role="presentation" style="mso-cellspacing: 0; mso-padding-alt: 0; width:700px;"
                >
                    <tr>
                        <td class="" align="center" width="100%" valign="top" bgcolor="#ffffff" aria-hidden="true"
                            style="font-size:2px; line-height:2px;"
                        >
                            <table class="" bgcolor="#ffffff" border="0" cellpadding="0" cellspacing="0" align="center"
                                   width="100%" role="presentation" style="mso-cellspacing: 0; mso-padding-alt: 0;"
                            >
                                <tr>
                                    <td class="" align="center" valign="top" aria-hidden="true"
                                        style="font-size:2px; line-height:2px;"
                                    >
                                        <table class="w79p_m" width="85%" border="0" cellpadding="0" cellspacing="0"
                                               align="center" role="presentation"
                                               style="mso-cellspacing: 0; mso-padding-alt: 0;"
                                        >
                                            <tr>
                                                <td height="16"
                                                    style="color: #000; font-size: 12px; line-height: 16px; text-decoration: none; height:16px;"
                                                >&nbsp;
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="fbtxt" align="center" valign="top"
                                                    style="color: #000; font-family:'Sellauto-Light', Arial, sans-serif; font-size: 12px;font-weight: normal;line-height: 18px;"
                                                ><span class="fbtxt"
                                                       style="color: #000; font-family:'Sellauto-Light', Arial, sans-serif;font-size: 12px; font-weight: normal;line-height: 18px; text-decoration: none;"
                                                    >
                          <!-- START preview link -->
                          {{__('carAvailable.ifNonVisible')}}
                                                        <!-- link URL here --><a
                                                            href="http://view-online-link-do-not-change/" _label=""
                                                            target="_blank" class="fbtxt"
                                                            style="color: #1F2937; font-family:'Sellauto-Light', Arial, sans-serif; font-size: 12px; font-weight: normal;line-height: 18px; text-decoration: none;"
                                                        ><span class="fbtxt"
                                                               style="color: #1F2937; font-family:'Sellauto-Light', Arial, sans-serif; font-size: 12px; font-weight: normal;line-height: 18px; text-decoration: none;"
                                                            >{{__('carAvailable.clickHere')}}</span></a>
                                                        <!-- END preview link -->
                          </span></td>
                                            </tr>
                                            <tr>
                                                <td height="16"
                                                    style="color: #ffffff; font-size: 12px; line-height: 16px; text-decoration: none; height:16px;"
                                                >&nbsp;
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
    <!-- END Preheader text -->

    <!-- START Header Image -->
    <div data-wm-section-editable="false" data-wm-section-copyable="false" data-wm-section-deletable="false"
         data-wm-section-sortable="false"
    >
        <table class="w_final" border="0" cellpadding="0" cellspacing="0"
               style="mso-cellspacing: 0; mso-padding-alt: 0;" align="center" width="100%" bgcolor="#ffffff"
               role="presentation"
        >
            <tbody>
            <tr>
                <td class="" align="center" width="100%" valign="top" bgcolor="#ffffff" aria-hidden="true"
                    style="font-size:2px; line-height:2px; "
                >
                    <table class="w100p_m" border="0" cellpadding="0" cellspacing="0" bgcolor="#ffffff" align="center"
                           width="700" role="presentation" style="mso-cellspacing: 0; mso-padding-alt: 0; width:700px;"
                    >
                        <tbody>
                        <tr>
                            <td class="" align="center" valign="top" aria-hidden="true"
                                style="font-size:2px; line-height:2px; display:none !important; visibility:hidden; mso-hide:all; color:#ffffff;"
                            ></td>
                        </tr>
                        <tr>
                            <td class="" align="center" width="100%" valign="top" bgcolor="#ffffff" aria-hidden="true"
                                style="font-size:2px; line-height:2px;"
                            >
                                <table class="" bgcolor="#ffffff" border="0" cellpadding="0" cellspacing="0"
                                       align="center" width="100%" role="presentation"
                                       style="mso-cellspacing: 0; mso-padding-alt: 0;"
                                >
                                    <tbody>
                                    <tr>
                                        <td class="hide_m" align="center" valign="top" aria-hidden="true"
                                            style="font-size:2px; line-height:2px;"
                                        ><!-- link URL here --><img class="hide_m w700_d"
                                                                    src="{{asset('images/sellauto-bg.jpg')}}"
                                                                    style="display:block;" border="0" width="100%"
                                                                    alt="Découvrez vos conditions Salon"
                                            ></td>
                                    </tr>

                                    <!--[if !mso ]><!-->
                                    <tr>
                                        <td class="hauto_m show_m" align="center" valign="top" aria-hidden="true"
                                            style="font-size:2px; line-height:2px; display:none; visibility:hidden; mso-hide: all;"
                                        ><!-- link URL here --><img
                                                src="{{asset('images/sellauto-bg.jpg')}}"
                                                class="w100p_m hauto_m show_m" width="1" height="1"
                                                border="0"
                                                style="display:none; visibility:hidden; mso-hide: all;"
                                                alt="Découvrez vos conditions Salon"
                                            ></td>
                                    </tr>
                                    <!--<![endif]-->
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
    <!-- END Header Image -->
    <table class="w_final" border="0" cellpadding="0" cellspacing="0" style="mso-cellspacing: 0; mso-padding-alt: 0;"
           align="center" width="100%" bgcolor="#ffffff" role="presentation" data-wm-section-editable="true"
           data-wm-section-copyable="false" data-wm-section-deletable="false" data-wm-section-sortable="false"
    >
        <tbody>
        <tr>
            <td class="" align="center" width="100%" valign="top" bgcolor="#ffffff" aria-hidden="true"
                style="font-size:2px; line-height:2px; "
            >
                <table class="w100p_m" border="0" cellpadding="0" cellspacing="0" bgcolor="#ffffff" align="center"
                       width="700" role="presentation" style="mso-cellspacing: 0; mso-padding-alt: 0; width:700px;"
                >
                    <tbody>
                    <tr>
                        <td class="" align="center" valign="top" aria-hidden="true"
                            style="font-size:2px; line-height:2px; display:none !important; visibility:hidden; mso-hide:all; color:#ffffff;"
                        ></td>
                    </tr>
                    <tr>
                        <td class="" align="center" width="100%" valign="top" bgcolor="#ffffff" aria-hidden="true"
                            style="font-size:2px; line-height:2px;"
                        >
                            <table class="w79p_m" width="85%" border="0" cellpadding="0" cellspacing="0" align="center"
                                   role="presentation" style="mso-cellspacing: 0; mso-padding-alt: 0; "
                            >
                                <tbody>
                                <tr>
                                    <td class="h48_m" height="64"
                                        style="font-size: 12px; line-height: 16px; text-decoration: none; height:64px;"
                                    >&nbsp;
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </td>
        </tr>
        </tbody>
    </table>
    <!-- START Editorial -->
    <table class="w_final" border="0" cellpadding="0" cellspacing="0" style="mso-cellspacing: 0; mso-padding-alt: 0;"
           align="center" width="100%" bgcolor="#ffffff" role="presentation" data-wm-section-editable="true"
           data-wm-section-copyable="false" data-wm-section-deletable="false" data-wm-section-sortable="false"
    >
        <tr>
            <td class="" align="center" width="100%" valign="top" bgcolor="#ffffff" aria-hidden="true"
                style="font-size:2px; line-height:2px; "
            >
                <table class="w100p_m" border="0" cellpadding="0" cellspacing="0" bgcolor="#ffffff" align="center"
                       width="700" role="presentation" style="mso-cellspacing: 0; mso-padding-alt: 0; width:700px;"
                >
                    <tr>
                        <td class="" align="center" valign="top" aria-hidden="true"
                            style="font-size:2px; line-height:2px; display:none !important; visibility:hidden; mso-hide:all; color:#ffffff;"
                        ></td>
                    </tr>
                    <tr>
                        <td class="" align="center" width="100%" valign="top" bgcolor="#ffffff" aria-hidden="true"
                            style="font-size:2px; line-height:2px;"
                        >
                            <table class="w79p_m" width="85%" border="0" cellpadding="0" cellspacing="0" align="center"
                                   role="presentation" style="mso-cellspacing: 0; mso-padding-alt: 0; "
                            >
                                <tr>
                                    <td class="fbtxt" align="left" valign="top"
                                        style="color: #262626; font-family:'Sellauto-Light', Arial, sans-serif; font-size: 20px;font-weight: normal;line-height: 28px; "
                                    ><span class="fbtxt"
                                           style="color: #262626; font-family:'Sellauto-Light', Arial, sans-serif;font-size: 20px; font-weight: normal;line-height: 28px; text-decoration: none;"
                                           data-wm-content-type="text"
                                        >{{__('carAvailable.greeting')}}</span></td>
                                </tr>
                                <tr>
                                    <td height="16"
                                        style="font-size: 12px; line-height: 16px; text-decoration: none; height:16px;"
                                    >&nbsp;
                                    </td>
                                </tr>
                                <tr>
                                    <td class="fbtxt" align="left" valign="top"
                                        style="color: #262626; font-family:'Sellauto-Light', Arial, sans-serif; font-size: 16px;font-weight: normal;line-height: 24px;"
                                    ><span class="fbtxt"
                                           style="color: #262626; font-family:'Sellauto-Light', Arial, sans-serif;font-size: 16px; font-weight: normal;line-height: 24px; text-decoration: none;"
                                           data-wm-content-type="text" data-wm-text-allow-html="true"
                                        >{{__('carAvailable.intro')}}</span>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
    <!-- END Editorial -->
    <!-- START Button Blue -->
    <div data-wm-section-editable="true" data-wm-section-sortable="false" data-wm-section-deletable="false"
         data-wm-section-copyable="false"
    >


        <table class="w_final" border="0" cellpadding="0" cellspacing="0"
               style="mso-cellspacing: 0; mso-padding-alt: 0;" align="center" width="100%" bgcolor="#ffffff"
               role="presentation"
        >
            <tr>
                <td class="" align="center" width="100%" valign="top" bgcolor="#ffffff" aria-hidden="true"
                    style="font-size:2px; line-height:2px; "
                >
                    <table class="w100p_m" border="0" cellpadding="0" cellspacing="0" bgcolor="#ffffff" align="center"
                           width="700" role="presentation" style="mso-cellspacing: 0; mso-padding-alt: 0; width:700px;"
                    >
                        <tr>
                            <td class="" align="center" valign="top" aria-hidden="true"
                                style="font-size:2px; line-height:2px; display:none !important; visibility:hidden; mso-hide:all; color:#ffffff;"
                            ></td>
                        </tr>
                        <tr>
                            <td class="" align="center" width="100%" valign="top" bgcolor="#ffffff" aria-hidden="true"
                                style="font-size:2px; line-height:2px;"
                            >
                                <table class="w79p_m" width="85%" border="0" cellpadding="0" cellspacing="0"
                                       align="center" role="presentation"
                                       style="mso-cellspacing: 0; mso-padding-alt: 0; "
                                >
                                    <tr>
                                        <td height="32"
                                            style="font-size: 12px; line-height: 16px; text-decoration: none; height:32px;"
                                        >&nbsp;
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="fbtxt" valign="top"
                                            style="color: #262626;  font-size: 2px;line-height: 2px;"
                                        >
                                            <table class="w100p_m" align="left" border="0" cellpadding="0"
                                                   cellspacing="0" style="mso-cellspacing: 0; mso-padding-alt: 0; "
                                                   role="presentation"
                                            >
                                                <tr>
                                                    <td class="" align="center" valign="middle" aria-hidden="true"
                                                        style="font-size: 2px; line-height:2px; border-top: solid 1px #1F2937; border-bottom: solid 1px #1F2937"
                                                    >
                                                        <table class="" width="100%" align="center" border="0"
                                                               cellpadding="0" cellspacing="0"
                                                               style="mso-cellspacing: 0; mso-padding-alt: 0; "
                                                               role="presentation"
                                                        >
                                                            <tr>
                                                                <td class="" align="center" bgcolor="#1F2937"
                                                                    valign="middle" aria-hidden="true"
                                                                    style="font-size: 2px; line-height:2px; border-left: solid 1px #1F2937; border-right: solid 1px #1F2937"
                                                                >
                                                                    <table class="" bgcolor="#1F2937" width="100%"
                                                                           align="center" height="48" border="0"
                                                                           cellpadding="0" cellspacing="0"
                                                                           style="mso-cellspacing: 0; mso-padding-alt: 0; height:48px;"
                                                                           role="presentation"
                                                                    >
                                                                        <tr>
                                                                            <td class="" align="center" valign="top"
                                                                                aria-hidden="true"
                                                                                style="font-size:2px; line-height:2px;"
                                                                            >
                                                                                <table class="w100p_m" width="288"
                                                                                       height="48" border="0"
                                                                                       cellpadding="0" cellspacing="0"
                                                                                       align="center"
                                                                                       role="presentation"
                                                                                       style="mso-cellspacing: 0; mso-padding-alt: 0;height:38px; width:288px;"
                                                                                >
                                                                                    <tr>
                                                                                        <td class="fbtxt w100p_m w288_d"
                                                                                            width="280" align="center"
                                                                                            style="-webkit-border-radius: 0px; -moz-border-radius: 0px; border-radius: 0px; font-family: 'Sellauto-Bold', Arial, sans-serif; font-size: 15px; height:48px; color:#ffffff; font-weight:bold;"
                                                                                            bgcolor="#1F2937"
                                                                                        >
                                                                                            <a href="{{ route('login.for.offer', [$magicLink, $car]) }}"
                                                                                               target="_blank" title=""
                                                                                               style="font-size: 14px; font-family: 'Sellauto-Bold', Arial, sans-serif; color: #ffffff; text-decoration: none; font-weight: bold; border-radius: 0px; padding: 15px 0px; display: block; text-align: center;"
                                                                                               _label=""
                                                                                               data-wm-content-type="link-text"
                                                                                            >{{__('carAvailable.makeOffer')}}</a>
                                                                                        </td>
                                                                                    </tr>
                                                                                </table>
                                                                            </td>
                                                                        </tr>
                                                                    </table>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </div>
    <!-- END Button Blue -->
    <!-- START Editorial -->
    <table class="w_final" border="0" cellpadding="0" cellspacing="0" style="mso-cellspacing: 0; mso-padding-alt: 0;"
           align="center" width="100%" bgcolor="#ffffff" role="presentation" data-wm-section-editable="true"
           data-wm-section-copyable="false" data-wm-section-deletable="false" data-wm-section-sortable="false"
    >
        <tr>
            <td class="" align="center" width="100%" valign="top" bgcolor="#ffffff" aria-hidden="true"
                style="font-size:2px; line-height:2px; "
            >
                <table class="w100p_m" border="0" cellpadding="0" cellspacing="0" bgcolor="#ffffff" align="center"
                       width="700" role="presentation" style="mso-cellspacing: 0; mso-padding-alt: 0; width:700px;"
                >
                    <tr>
                        <td class="" align="center" valign="top" aria-hidden="true"
                            style="font-size:2px; line-height:2px; display:none !important; visibility:hidden; mso-hide:all; color:#ffffff;"
                        ></td>
                    </tr>
                    <tr>
                        <td class="" align="center" width="100%" valign="top" bgcolor="#ffffff" aria-hidden="true"
                            style="font-size:2px; line-height:2px;"
                        >
                            <table class="w79p_m" width="85%" border="0" cellpadding="0" cellspacing="0" align="center"
                                   role="presentation" style="mso-cellspacing: 0; mso-padding-alt: 0; "
                            >
                                <tr>
                                    <td height="32"
                                        style="font-size: 12px; line-height: 16px; text-decoration: none; height:32px;"
                                    >&nbsp;
                                    </td>
                                </tr>
                                <tr>
                                    <td class="fbtxt" align="left" valign="top"
                                        style="color: #262626; font-family:'Sellauto-Light', Arial, sans-serif; font-size: 16px;font-weight: normal;line-height: 24px;"
                                    ><span class="fbtxt"
                                           style="color: #262626; font-family:'Sellauto-Light', Arial, sans-serif;font-size: 16px; font-weight: normal;line-height: 24px; text-decoration: none;"
                                           data-wm-content-type="text" data-wm-text-allow-html="true"
                                        >

					  <strong></strong>


                                            <!-- Two side-by-side images (will stack on mobile) -->
<div class="img-container" align="center" style="display: inline-block; width: 49%;">
    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAM1BMVEXMzMyUlJTPz8+SkpKWlpbBwcHLy8vIyMi9vb2mpqaysrKgoKCZmZm3t7eqqqqenp6urq4Qymp7AAADX0lEQVR4nO3Y2Y7bMAxAUWuzrEhe/v9rS2qxp1syQIvED/cUmCSOFIgmtbjTBAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAANyFFV8/fKPHH5t/q+v72GXt47FrSo9xNWx5C68GGo/zR1I+oh1Xc1ruE6MNzuU6HJudMcbH+n7V9259Ps7oR/OjNl/q1WD0/XabEKP3Jugb+zA+J2OSDi06Xzb5Jj7tm4151EBCa+7r1eL9tnt3lyzaPDI1e79bm4yTeOXFBMmueZYJe5j+vc1yL+xa420v+mPvCeAVSdyIQkYmoUpUh9VopXLt3rPyZ5q41jXWzLeoJFo/T3ard+oGZjOCkIzomGome5wyTDOGGWOcx9/eIfvx7dKyV2OTItXstfv1eVpoiz0rTUe/+yIrYx2fJnjpDYtzyc7GuccY96I13Lq2dpq3qKuPzmRZbo47RBiNL4dPup5oSc6tyOqUWqc6pXoibNFkr8afEWr7o2TdUPQ+hf5iQyv7+HwOv4uEIOul/NPQii9nhD15y1VqUS8lqcuxuobatRZqn3S1l+3Jk8U43SFCCcfrpqCTTiKc/h6hZlECPGtU9xaTJI/F9vK8ZYR1L7TyV1e/33Nof1ouFslYObvqtH1Y6STZG1U6ItzuE6FUmm4KqQ6zrYRTlkB7aPqynI01piteKzdn6pufhvbrPHyxl75L3xRqxjROnWNF664v/8e1W9R9xF+Dtm0zrDXZ70T7hVi30v4LH9fud0tBr0xZXaW6Wo3JkP15bJPJVvwVsPUjQgmkzT1ZXcvc5/OXjeajYt3e65mr19WYenWwbfcfbZ1Zd5PPlWbXhGkg6zjwtZNNPSbYUfOf1qaWbBn1DCkL4xJLjVYD3ebt68NFkseIdTw+jOOe3CI3txn4mLOv38phLktLc4eFpo5Gt8N2hNQPzreg7C4PQOZKmX6X9Dztyrgk98KME8BcpHk7zOiTlHfmHinUB9c6zJYpu8g4fV8fZnnI8PkcpZSwrrfJXRHGXZ8Jj/FBum79Rw+JcL/HuVtGMy/rEs96CmE+J1oM1/VpDkGHHNtLb7Gs69nEhqu5dH35vwPv9A9juVMYAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA/9sP43QXWkfig3AAAAAASUVORK5CYII="
         alt="Car Image 1" style="max-width: 100%; height: auto;">
</div>
<div class="img-container" align="center" style="display: inline-block; width: 49%;">
    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAM1BMVEXMzMyUlJTPz8+SkpKWlpbBwcHLy8vIyMi9vb2mpqaysrKgoKCZmZm3t7eqqqqenp6urq4Qymp7AAADX0lEQVR4nO3Y2Y7bMAxAUWuzrEhe/v9rS2qxp1syQIvED/cUmCSOFIgmtbjTBAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAANyFFV8/fKPHH5t/q+v72GXt47FrSo9xNWx5C68GGo/zR1I+oh1Xc1ruE6MNzuU6HJudMcbH+n7V9259Ps7oR/OjNl/q1WD0/XabEKP3Jugb+zA+J2OSDi06Xzb5Jj7tm4151EBCa+7r1eL9tnt3lyzaPDI1e79bm4yTeOXFBMmueZYJe5j+vc1yL+xa420v+mPvCeAVSdyIQkYmoUpUh9VopXLt3rPyZ5q41jXWzLeoJFo/T3ard+oGZjOCkIzomGome5wyTDOGGWOcx9/eIfvx7dKyV2OTItXstfv1eVpoiz0rTUe/+yIrYx2fJnjpDYtzyc7GuccY96I13Lq2dpq3qKuPzmRZbo47RBiNL4dPup5oSc6tyOqUWqc6pXoibNFkr8afEWr7o2TdUPQ+hf5iQyv7+HwOv4uEIOul/NPQii9nhD15y1VqUS8lqcuxuobatRZqn3S1l+3Jk8U43SFCCcfrpqCTTiKc/h6hZlECPGtU9xaTJI/F9vK8ZYR1L7TyV1e/33Nof1ouFslYObvqtH1Y6STZG1U6ItzuE6FUmm4KqQ6zrYRTlkB7aPqynI01piteKzdn6pufhvbrPHyxl75L3xRqxjROnWNF664v/8e1W9R9xF+Dtm0zrDXZ70T7hVi30v4LH9fud0tBr0xZXaW6Wo3JkP15bJPJVvwVsPUjQgmkzT1ZXcvc5/OXjeajYt3e65mr19WYenWwbfcfbZ1Zd5PPlWbXhGkg6zjwtZNNPSbYUfOf1qaWbBn1DCkL4xJLjVYD3ebt68NFkseIdTw+jOOe3CI3txn4mLOv38phLktLc4eFpo5Gt8N2hNQPzreg7C4PQOZKmX6X9Dztyrgk98KME8BcpHk7zOiTlHfmHinUB9c6zJYpu8g4fV8fZnnI8PkcpZSwrrfJXRHGXZ8Jj/FBum79Rw+JcL/HuVtGMy/rEs96CmE+J1oM1/VpDkGHHNtLb7Gs69nEhqu5dH35vwPv9A9juVMYAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA/9sP43QXWkfig3AAAAAASUVORK5CYII="
         alt="Car Image 2" style="max-width: 100%; height: auto;">
</div>

                     </span>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
    <!-- END Editorial -->

    <!-- START Editorial -->
    <table class="w_final" border="0" cellpadding="0" cellspacing="0" style="mso-cellspacing: 0; mso-padding-alt: 0;"
           align="center" width="100%" bgcolor="#ffffff" role="presentation" data-wm-section-editable="true"
           data-wm-section-copyable="false" data-wm-section-deletable="false" data-wm-section-sortable="false"
    >
        <tr>
            <td class="" align="center" width="100%" valign="top" bgcolor="#ffffff" aria-hidden="true"
                style="font-size:2px; line-height:2px; "
            >
                <table class="w100p_m" border="0" cellpadding="0" cellspacing="0" bgcolor="#ffffff" align="center"
                       width="700" role="presentation" style="mso-cellspacing: 0; mso-padding-alt: 0; width:700px;"
                >
                    <tr>
                        <td class="" align="center" valign="top" aria-hidden="true"
                            style="font-size:2px; line-height:2px; display:none !important; visibility:hidden; mso-hide:all; color:#ffffff;"
                        ></td>
                    </tr>
                    <tr>
                        <td class="" align="center" width="100%" valign="top" bgcolor="#ffffff" aria-hidden="true"
                            style="font-size:2px; line-height:2px;"
                        >
                            <table class="w79p_m" width="85%" border="0" cellpadding="0" cellspacing="0" align="center"
                                   role="presentation" style="mso-cellspacing: 0; mso-padding-alt: 0; "
                            >
                                <tr>
                                    <td height="32"
                                        style="font-size: 12px; line-height: 16px; text-decoration: none; height:32px;"
                                    >&nbsp;
                                    </td>
                                </tr>
                                <tr>
                                    <td class="fbtxt" align="left" valign="top"
                                        style="color: #262626; font-family:'Sellauto-Light', Arial, sans-serif; font-size: 16px;font-weight: normal;line-height: 24px;"
                                    ><span class="fbtxt"
                                           style="color: #262626; font-family:'Sellauto-Light', Arial, sans-serif;font-size: 16px; font-weight: normal;line-height: 24px; text-decoration: none;"
                                           data-wm-content-type="text" data-wm-text-allow-html="true"
                                        >

					  <strong></strong>


                                            <!-- Two side-by-side images (will stack on mobile) -->
<div class="img-container" align="center" style="display: inline-block; width: 49%;">
    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAM1BMVEXMzMyUlJTPz8+SkpKWlpbBwcHLy8vIyMi9vb2mpqaysrKgoKCZmZm3t7eqqqqenp6urq4Qymp7AAADX0lEQVR4nO3Y2Y7bMAxAUWuzrEhe/v9rS2qxp1syQIvED/cUmCSOFIgmtbjTBAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAANyFFV8/fKPHH5t/q+v72GXt47FrSo9xNWx5C68GGo/zR1I+oh1Xc1ruE6MNzuU6HJudMcbH+n7V9259Ps7oR/OjNl/q1WD0/XabEKP3Jugb+zA+J2OSDi06Xzb5Jj7tm4151EBCa+7r1eL9tnt3lyzaPDI1e79bm4yTeOXFBMmueZYJe5j+vc1yL+xa420v+mPvCeAVSdyIQkYmoUpUh9VopXLt3rPyZ5q41jXWzLeoJFo/T3ard+oGZjOCkIzomGome5wyTDOGGWOcx9/eIfvx7dKyV2OTItXstfv1eVpoiz0rTUe/+yIrYx2fJnjpDYtzyc7GuccY96I13Lq2dpq3qKuPzmRZbo47RBiNL4dPup5oSc6tyOqUWqc6pXoibNFkr8afEWr7o2TdUPQ+hf5iQyv7+HwOv4uEIOul/NPQii9nhD15y1VqUS8lqcuxuobatRZqn3S1l+3Jk8U43SFCCcfrpqCTTiKc/h6hZlECPGtU9xaTJI/F9vK8ZYR1L7TyV1e/33Nof1ouFslYObvqtH1Y6STZG1U6ItzuE6FUmm4KqQ6zrYRTlkB7aPqynI01piteKzdn6pufhvbrPHyxl75L3xRqxjROnWNF664v/8e1W9R9xF+Dtm0zrDXZ70T7hVi30v4LH9fud0tBr0xZXaW6Wo3JkP15bJPJVvwVsPUjQgmkzT1ZXcvc5/OXjeajYt3e65mr19WYenWwbfcfbZ1Zd5PPlWbXhGkg6zjwtZNNPSbYUfOf1qaWbBn1DCkL4xJLjVYD3ebt68NFkseIdTw+jOOe3CI3txn4mLOv38phLktLc4eFpo5Gt8N2hNQPzreg7C4PQOZKmX6X9Dztyrgk98KME8BcpHk7zOiTlHfmHinUB9c6zJYpu8g4fV8fZnnI8PkcpZSwrrfJXRHGXZ8Jj/FBum79Rw+JcL/HuVtGMy/rEs96CmE+J1oM1/VpDkGHHNtLb7Gs69nEhqu5dH35vwPv9A9juVMYAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA/9sP43QXWkfig3AAAAAASUVORK5CYII="
         alt="Car Image 1" style="max-width: 100%; height: auto;">
</div>
<div class="img-container" align="center" style="display: inline-block; width: 49%;">
    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAM1BMVEXMzMyUlJTPz8+SkpKWlpbBwcHLy8vIyMi9vb2mpqaysrKgoKCZmZm3t7eqqqqenp6urq4Qymp7AAADX0lEQVR4nO3Y2Y7bMAxAUWuzrEhe/v9rS2qxp1syQIvED/cUmCSOFIgmtbjTBAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAANyFFV8/fKPHH5t/q+v72GXt47FrSo9xNWx5C68GGo/zR1I+oh1Xc1ruE6MNzuU6HJudMcbH+n7V9259Ps7oR/OjNl/q1WD0/XabEKP3Jugb+zA+J2OSDi06Xzb5Jj7tm4151EBCa+7r1eL9tnt3lyzaPDI1e79bm4yTeOXFBMmueZYJe5j+vc1yL+xa420v+mPvCeAVSdyIQkYmoUpUh9VopXLt3rPyZ5q41jXWzLeoJFo/T3ard+oGZjOCkIzomGome5wyTDOGGWOcx9/eIfvx7dKyV2OTItXstfv1eVpoiz0rTUe/+yIrYx2fJnjpDYtzyc7GuccY96I13Lq2dpq3qKuPzmRZbo47RBiNL4dPup5oSc6tyOqUWqc6pXoibNFkr8afEWr7o2TdUPQ+hf5iQyv7+HwOv4uEIOul/NPQii9nhD15y1VqUS8lqcuxuobatRZqn3S1l+3Jk8U43SFCCcfrpqCTTiKc/h6hZlECPGtU9xaTJI/F9vK8ZYR1L7TyV1e/33Nof1ouFslYObvqtH1Y6STZG1U6ItzuE6FUmm4KqQ6zrYRTlkB7aPqynI01piteKzdn6pufhvbrPHyxl75L3xRqxjROnWNF664v/8e1W9R9xF+Dtm0zrDXZ70T7hVi30v4LH9fud0tBr0xZXaW6Wo3JkP15bJPJVvwVsPUjQgmkzT1ZXcvc5/OXjeajYt3e65mr19WYenWwbfcfbZ1Zd5PPlWbXhGkg6zjwtZNNPSbYUfOf1qaWbBn1DCkL4xJLjVYD3ebt68NFkseIdTw+jOOe3CI3txn4mLOv38phLktLc4eFpo5Gt8N2hNQPzreg7C4PQOZKmX6X9Dztyrgk98KME8BcpHk7zOiTlHfmHinUB9c6zJYpu8g4fV8fZnnI8PkcpZSwrrfJXRHGXZ8Jj/FBum79Rw+JcL/HuVtGMy/rEs96CmE+J1oM1/VpDkGHHNtLb7Gs69nEhqu5dH35vwPv9A9juVMYAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA/9sP43QXWkfig3AAAAAASUVORK5CYII="
         alt="Car Image 2" style="max-width: 100%; height: auto;">
</div>

                     </span>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
    <!-- END Editorial -->


    <!-- START Editorial -->
    <table class="w_final" border="0" cellpadding="0" cellspacing="0" style="mso-cellspacing: 0; mso-padding-alt: 0;"
           align="center" width="100%" bgcolor="#ffffff" role="presentation" data-wm-section-editable="true"
           data-wm-section-copyable="false" data-wm-section-deletable="false" data-wm-section-sortable="false"
    >
        <tr>
            <td class="" align="center" width="100%" valign="top" bgcolor="#ffffff" aria-hidden="true"
                style="font-size:2px; line-height:2px; "
            >
                <table class="w100p_m" border="0" cellpadding="0" cellspacing="0" bgcolor="#ffffff" align="center"
                       width="700" role="presentation" style="mso-cellspacing: 0; mso-padding-alt: 0; width:700px;"
                >
                    <tr>
                        <td class="" align="center" valign="top" aria-hidden="true"
                            style="font-size:2px; line-height:2px; display:none !important; visibility:hidden; mso-hide:all; color:#ffffff;"
                        ></td>
                    </tr>
                    <tr>
                        <td class="" align="center" width="100%" valign="top" bgcolor="#ffffff" aria-hidden="true"
                            style="font-size:2px; line-height:2px;"
                        >
                            <table class="w79p_m" width="85%" border="0" cellpadding="0" cellspacing="0" align="center"
                                   role="presentation" style="mso-cellspacing: 0; mso-padding-alt: 0; "
                            >
                                <tr>
                                    <td height="32"
                                        style="font-size: 12px; line-height: 16px; text-decoration: none; height:32px;"
                                    >&nbsp;
                                    </td>
                                </tr>
                                <tr>
                                    <td class="fbtxt" align="left" valign="top"
                                        style="color: #262626; font-family:'Sellauto-Light', Arial, sans-serif; font-size: 16px;font-weight: normal;line-height: 24px;"
                                    ><span class="fbtxt"
                                           style="color: #262626; font-family:'Sellauto-Light', Arial, sans-serif;font-size: 16px; font-weight: normal;line-height: 24px; text-decoration: none;"
                                           data-wm-content-type="text" data-wm-text-allow-html="true"
                                        >

					  <strong></strong>

                                            <!-- Table with car details -->
<table id="details">
    <thead>
    <tr>
        <th>Marque et modèle</th>
        <td>{{$car->mark}} {{$car->model}}</td>
    </tr>
    </thead>
    <tbody>
    <tr>
        <th>Première mise en circulation</th>
        <td>{{$car->registration}}</td>
    </tr>
    <tr>
          <th>Kilométrage</th>
        <td>{{$car->mileage}}km</td>
    </tr>
    <tr>
          <th>Puissance</th>
        <td>{{$car->power}}ch</td>
    </tr>
    <tr>
          <th>Taille moteur</th>
        <td>{{$car->engineSize}}cm³</td>
    </tr>
    <tr>
          <th>Transmission</th>
        <td>{{$car->gearbox}}</td>
    </tr>
    <tr>
          <th>Carburant</th>
        <td>{{$car->fuel}}</td>
    </tr>
    <tr>
          <th>Classe d'émission</th>
        <td>{{$car->emissionClass}}</td>
    </tr>
    <tr>
          <th>Documents</th>
        <td>{{$car->documents}}</td>
    </tr>
    <tr>
          <th valign="top" height="0">Description</th>
        <td valign="top" height="200" class="break-after">
                {{$car->description}}
            </td>
    </tr>
    </tbody>
</table>

                     </span>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
    <!-- END Editorial -->



    <!-- START Button Blue -->
    <div data-wm-section-editable="true" data-wm-section-sortable="false" data-wm-section-deletable="false"
         data-wm-section-copyable="false"
    >


        <table class="w_final" border="0" cellpadding="0" cellspacing="0"
               style="mso-cellspacing: 0; mso-padding-alt: 0;" align="center" width="100%" bgcolor="#ffffff"
               role="presentation"
        >
            <tr>
                <td class="" align="center" width="100%" valign="top" bgcolor="#ffffff" aria-hidden="true"
                    style="font-size:2px; line-height:2px; "
                >
                    <table class="w100p_m" border="0" cellpadding="0" cellspacing="0" bgcolor="#ffffff" align="center"
                           width="700" role="presentation" style="mso-cellspacing: 0; mso-padding-alt: 0; width:700px;"
                    >
                        <tr>
                            <td class="" align="center" valign="top" aria-hidden="true"
                                style="font-size:2px; line-height:2px; display:none !important; visibility:hidden; mso-hide:all; color:#ffffff;"
                            ></td>
                        </tr>
                        <tr>
                            <td class="" align="center" width="100%" valign="top" bgcolor="#ffffff" aria-hidden="true"
                                style="font-size:2px; line-height:2px;"
                            >
                                <table class="w79p_m" width="85%" border="0" cellpadding="0" cellspacing="0"
                                       align="center" role="presentation"
                                       style="mso-cellspacing: 0; mso-padding-alt: 0; "
                                >
                                    <tr>
                                        <td height="32"
                                            style="font-size: 12px; line-height: 16px; text-decoration: none; height:32px;"
                                        >&nbsp;
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="fbtxt" valign="top"
                                            style="color: #262626;  font-size: 2px;line-height: 2px;"
                                        >
                                            <table class="w100p_m" align="left" border="0" cellpadding="0"
                                                   cellspacing="0" style="mso-cellspacing: 0; mso-padding-alt: 0; "
                                                   role="presentation"
                                            >
                                                <tr>
                                                    <td class="" align="center" valign="middle" aria-hidden="true"
                                                        style="font-size: 2px; line-height:2px; border-top: solid 1px #1F2937; border-bottom: solid 1px #1F2937"
                                                    >
                                                        <table class="" width="100%" align="center" border="0"
                                                               cellpadding="0" cellspacing="0"
                                                               style="mso-cellspacing: 0; mso-padding-alt: 0; "
                                                               role="presentation"
                                                        >
                                                            <tr>
                                                                <td class="" align="center" bgcolor="#1F2937"
                                                                    valign="middle" aria-hidden="true"
                                                                    style="font-size: 2px; line-height:2px; border-left: solid 1px #1F2937; border-right: solid 1px #1F2937"
                                                                >
                                                                    <table class="" bgcolor="#1F2937" width="100%"
                                                                           align="center" height="48" border="0"
                                                                           cellpadding="0" cellspacing="0"
                                                                           style="mso-cellspacing: 0; mso-padding-alt: 0; height:48px;"
                                                                           role="presentation"
                                                                    >
                                                                        <tr>
                                                                            <td class="" align="center" valign="top"
                                                                                aria-hidden="true"
                                                                                style="font-size:2px; line-height:2px;"
                                                                            >
                                                                                <table class="w100p_m" width="288"
                                                                                       height="48" border="0"
                                                                                       cellpadding="0" cellspacing="0"
                                                                                       align="center"
                                                                                       role="presentation"
                                                                                       style="mso-cellspacing: 0; mso-padding-alt: 0;height:38px; width:288px;"
                                                                                >
                                                                                    <tr>
                                                                                        <td class="fbtxt w100p_m w288_d"
                                                                                            width="280" align="center"
                                                                                            style="-webkit-border-radius: 0px; -moz-border-radius: 0px; border-radius: 0px; font-family: 'Sellauto-Bold', Arial, sans-serif; font-size: 15px; height:48px; color:#ffffff; font-weight:bold;"
                                                                                            bgcolor="#1F2937"
                                                                                        >
                                                                                            <a href="{{ route('login.for.offer', [$magicLink, $car]) }}"
                                                                                               target="_blank" title=""
                                                                                               style="font-size: 14px; font-family: 'Sellauto-Bold', Arial, sans-serif; color: #ffffff; text-decoration: none; font-weight: bold; border-radius: 0px; padding: 15px 0px; display: block; text-align: center;"
                                                                                               _label=""
                                                                                               data-wm-content-type="link-text"
                                                                                            >{{__('carAvailable.makeOffer')}}</a>
                                                                                        </td>
                                                                                    </tr>
                                                                                </table>
                                                                            </td>
                                                                        </tr>
                                                                    </table>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </div>
    <!-- END Button Blue -->
    <!-- START Editorial -->
    <table class="w_final" border="0" cellpadding="0" cellspacing="0" style="mso-cellspacing: 0; mso-padding-alt: 0;"
           align="center" width="100%" bgcolor="#ffffff" role="presentation" data-wm-section-editable="true"
           data-wm-section-copyable="false" data-wm-section-deletable="false" data-wm-section-sortable="false"
    >
        <tr>
            <td class="" align="center" width="100%" valign="top" bgcolor="#ffffff" aria-hidden="true"
                style="font-size:2px; line-height:2px; "
            >
                <table class="w100p_m" border="0" cellpadding="0" cellspacing="0" bgcolor="#ffffff" align="center"
                       width="700" role="presentation" style="mso-cellspacing: 0; mso-padding-alt: 0; width:700px;"
                >
                    <tr>
                        <td class="" align="center" valign="top" aria-hidden="true"
                            style="font-size:2px; line-height:2px; display:none !important; visibility:hidden; mso-hide:all; color:#ffffff;"
                        ></td>
                    </tr>
                    <tr>
                        <td class="" align="center" width="100%" valign="top" bgcolor="#ffffff" aria-hidden="true"
                            style="font-size:2px; line-height:2px;"
                        >
                            <table class="w79p_m" width="85%" border="0" cellpadding="0" cellspacing="0" align="center"
                                   role="presentation" style="mso-cellspacing: 0; mso-padding-alt: 0; "
                            >
                                <tr>
                                    <td bgcolor="#ffffff" class="h32_m" height="32"
                                        style="font-size: 12px; line-height: 16px; text-decoration: none; height:32px;"
                                    >&nbsp;
                                    </td>
                                </tr>

                                <tr>
                                    <td class="fbtxt" align="left" valign="top"
                                        style="color: #262626; font-family:'Sellauto-Light', Arial, sans-serif; font-size: 16px;font-weight: normal;line-height: 24px;"
                                    ><span class="fbtxt"
                                           style="color: #262626; font-family:'Sellauto-Light', Arial, sans-serif;font-size: 16px; font-weight: normal;line-height: 24px; text-decoration: none;"
                                           data-wm-content-type="text" data-wm-text-allow-html="true"
                                        >


                    {{__('carAvailable.signatureGreet')}}<br>
                    <strong>{{__('carAvailable.signature')}}</strong>


                     </span>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
    <!-- END Editorial -->

    <!-- START Footer -->
    <table class="w_final" border="0" cellpadding="0" cellspacing="0" style="mso-cellspacing: 0; mso-padding-alt: 0;"
           align="center" width="100%" bgcolor="#ffffff" role="presentation"
    >
        <tr>
            <td bgcolor="#ffffff" class="h64_m" height="80"
                style="font-size: 12px; line-height: 16px; text-decoration: none; height:80px;"
            >&nbsp;
            </td>
        </tr>
        <tr>
            <td class="" align="center" width="100%" valign="top" aria-hidden="true"
                style="font-size:2px; line-height:2px; "
            >
                <table class="w100p_m" border="0" cellpadding="0" cellspacing="0" bgcolor="#374151" align="center"
                       width="700" role="presentation" style="mso-cellspacing: 0; mso-padding-alt: 0; width:700px;"
                >
                    <tr>
                        <td class="hide_m" align="center" width="8" valign="top" aria-hidden="true"
                            style="font-size:2px; line-height:2px; width: 8px;"
                        >&nbsp;
                        </td>
                        <td class="" align="center" valign="top" bgcolor="#374151" aria-hidden="true"
                            style="font-size:2px; line-height:2px; "
                        >
                            <table class="w79p_m" width="87%" border="0" cellpadding="0" cellspacing="0" align="center"
                                   role="presentation" style="mso-cellspacing: 0; mso-padding-alt: 0; "
                            >
                                <tr>
                                    <td class="" height="40"
                                        style="font-size: 12px; line-height: 16px; text-decoration: none; height:40px;"
                                    >&nbsp;
                                    </td>
                                </tr>
                                <tr>
                                    <td class="" align="center" width="100%" valign="top" aria-hidden="true"
                                        style="font-size:2px; line-height:2px;"
                                    >
                                        <table class="" border="0" cellpadding="0" cellspacing="0" align="center"
                                               width="100%" role="presentation"
                                               style="mso-cellspacing: 0; mso-padding-alt: 0;"
                                        >
                                            <tr>
                                                <td style="font-size: 2px; line-height: 2px; "><!--[if gte mso 9]>
                                                    <table class="" width="100%" border="0" cellpadding="0"
                                                           cellspacing="0" align="center" role="presentation"
                                                           style="mso-cellspacing: 0; mso-padding-alt: 0;"
                                                    >
                                                        <tr>
                                                            <td class="" width="297" align="center" valign="top"
                                                                aria-hidden="true"
                                                                style="font-size:2px; line-height:2px; width:297;"
                                                            >
                                                    <![endif]-->

                                                    <table class="w100p_m" width="297" border="0" cellpadding="0"
                                                           cellspacing="0" align="left" role="presentation"
                                                           style="mso-cellspacing: 0; mso-padding-alt: 0; width:297px;"
                                                    >
                                                        <tr>
                                                            <td class="" height="24"
                                                                style="font-size: 12px; line-height: 16px; text-decoration: none; height:24px;"
                                                            >&nbsp;
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="w100p_m" width="282" align="center" valign="top"
                                                                style="font-size: 2px; line-height: 28px; width:282px;"
                                                            >
                                                                <table class="w100p_m" width="282" border="0"
                                                                       cellpadding="0" cellspacing="0" align="center"
                                                                       role="presentation"
                                                                       style="mso-cellspacing: 0; mso-padding-alt: 0; width:188px;"
                                                                >
                                                                    <tr>
                                                                        <td class="w100p_m" width="282" align="center"
                                                                            valign="top"
                                                                            style="font-size: 2px; line-height: 28px; width:282px;"
                                                                        >
                                                                            <table class="" border="0" cellpadding="0"
                                                                                   cellspacing="0" align="center"
                                                                                   role="presentation"
                                                                                   style="mso-cellspacing: 0; mso-padding-alt: 0;"
                                                                            >
                                                                                <tr>
                                                                                    <td class="" width="17"
                                                                                        align="center" valign="middle"
                                                                                        aria-hidden="true"
                                                                                        style="font-size:2px; line-height:2px; width:17px;"
                                                                                    ><!-- Footer URL 1 here --><img
                                                                                            class="w100p_m hauto_m"
                                                                                            src="https://agency.cdn01.rambla.be/343820324/Sellauto/2021_assets/cta-arrow-black.png"
                                                                                            style="display:block;"
                                                                                            border="0" width="17" alt=""
                                                                                        ></td>
                                                                                    <td class="fbtxt" align="left"
                                                                                        valign="middle"
                                                                                        style="color: #ffffff; font-family:'Sellauto-bold', Arial, sans-serif; font-size: 14px;font-weight: bold;line-height: 19px; padding-left: 2px; padding-right: 7px;"
                                                                                    ><!-- Footer URL 1 here --><a
                                                                                            target="_blank"
                                                                                            href="http://unsubscribe-link-do-not-change/"
                                                                                            _label=""
                                                                                            style="color: #ffffff; font-family:'Sellauto-bold', Arial, sans-serif;font-size: 14px; font-weight: bold;line-height: 19px; text-decoration: none;"
                                                                                            class="fbtxt"
                                                                                        ><span class="fbtxt"
                                                                                               style="color: #ffffff; font-family:'Sellauto-bold', Arial, sans-serif;font-size: 14px; font-weight: bold;line-height: 19px; text-decoration: none;"
                                                                                            >{{__('carAvailable.unsubscribe')}}</span></a></td>
                                                                                </tr>
                                                                            </table>
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </td>
                                                            <td class="hide_m" width="15" height="24"
                                                                style="font-size:2px; line-height:2px; height:24px; width:15px;"
                                                            ></td>
                                                        </tr>
                                                    </table>

                                                    <!--[if gte mso 9]>
                                                    </td>

                                                    <td class="" width="297" align="center" valign="top"
                                                        aria-hidden="true"
                                                        style="font-size:2px; line-height:2px; width:297;"
                                                    >
                                                    <![endif]-->

                                                    <table class="w100p_m" width="297" border="0" cellpadding="0"
                                                           cellspacing="0" align="left" role="presentation"
                                                           style="mso-cellspacing: 0; mso-padding-alt: 0; width:297px;"
                                                    >
                                                        <tr>
                                                            <td class="" height="24"
                                                                style="font-size: 12px; line-height: 16px; text-decoration: none; height:24px;"
                                                            >&nbsp;
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="w100p_m" width="282" align="center" valign="top"
                                                                style="font-size: 2px; line-height: 28px; width:282px;"
                                                            >
                                                                <table class="w100p_m" width="282" border="0"
                                                                       cellpadding="0" cellspacing="0" align="center"
                                                                       role="presentation"
                                                                       style="mso-cellspacing: 0; mso-padding-alt: 0; width:282px;"
                                                                >
                                                                    <tr>
                                                                        <td class="w100p_m" width="282" align="center"
                                                                            valign="top"
                                                                            style="font-size: 2px; line-height: 28px; width:282px;"
                                                                        >
                                                                            <table class="" border="0" cellpadding="0"
                                                                                   cellspacing="0" align="center"
                                                                                   role="presentation"
                                                                                   style="mso-cellspacing: 0; mso-padding-alt: 0;"
                                                                            >
                                                                                <tr>
                                                                                    <td class="" width="17"
                                                                                        align="center" valign="middle"
                                                                                        aria-hidden="true"
                                                                                        style="font-size:2px; line-height:2px; width:17px;"
                                                                                    ><!-- Footer URL 2 here --><img
                                                                                            class="w100p_m hauto_m"
                                                                                            src="https://agency.cdn01.rambla.be/343820324/Sellauto/2021_assets/cta-arrow-black.png"
                                                                                            style="display:block;"
                                                                                            border="0" width="17" alt=""
                                                                                        ></td>
                                                                                    <td class="fbtxt" align="left"
                                                                                        valign="middle"
                                                                                        style="color: #ffffff; font-family:'Sellauto-bold', Arial, sans-serif; font-size: 14px;font-weight: bold;line-height: 19px; padding-left: 2px; padding-right: 7px;"
                                                                                    ><!-- Footer URL 3 here --><a
                                                                                            target="_blank"
                                                                                            href="https://www.Sellauto.be/fr/index.html"
                                                                                            _label=""
                                                                                            style="color: #ffffff; font-family:'Sellauto-bold', Arial, sans-serif;font-size: 14px; font-weight: bold;line-height: 19px; text-decoration: none;"
                                                                                            class="fbtxt"
                                                                                        ><span class="fbtxt"
                                                                                               style="color: #ffffff; font-family:'Sellauto-bold', Arial, sans-serif;font-size: 14px; font-weight: bold;line-height: 19px; text-decoration: none;"
                                                                                            >Sellauto.be</span></a></td>
                                                                                </tr>
                                                                            </table>
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </td>
                                                            <td class="hide_m" width="15" height="24"
                                                                style="font-size:2px; line-height:2px; height:24px; width:15px;"
                                                            ></td>
                                                        </tr>
                                                    </table>

                                                    <!--[if gte mso 9]>
                                                    </td></tr>
                                                    </table>
                                                    <![endif]--></td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>

                                <!-- START Social Icon Part -->
                                <tr>
                                    <td class="" height="48"
                                        style="font-size: 12px; line-height: 16px; text-decoration: none; height:48px;"
                                    >&nbsp;
                                    </td>
                                </tr>
                                <tr>
                                    <td class="fbtxt" align="center" valign="top"
                                        style="color: #ffffff; font-family:'Sellauto-Light', Arial, sans-serif; font-size: 20px;font-weight: normal;line-height: 28px; "
                                    ><span class="fbtxt"
                                           style="color: #ffffff; font-family:'Sellauto-Light', Arial, sans-serif;font-size: 20px; font-weight: normal;line-height: 28px; text-decoration: none;text-transform: uppercase;"
                                        > {{__('carAvailable.followUs')}}</span></td>
                                </tr>
                                <tr>
                                    <td class="" height="24"
                                        style="font-size: 12px; line-height: 16px; text-decoration: none; height:24px;"
                                    >&nbsp;
                                    </td>
                                </tr>
                                <tr>
                                    <td align="center" class="" style="font-size: 12px; line-height: 2px;">
                                        <table class="" align="center" border="0" cellpadding="0" cellspacing="0"
                                               style="mso-cellspacing: 0; mso-padding-alt: 0;" role="presentation"
                                        >
                                            <tr>

                                                <!-- START facebook -->
                                                <td class="" width="24" align="center" valign="middle"
                                                    aria-hidden="true"
                                                    style="font-size:2px; line-height:2px; width:24px;"
                                                    data-wm-section-editable="true"
                                                ><!-- Linkedin URL here --><a target="_blank"
                                                                              href="https://www.facebook.com/Sellauto/"
                                                                              _label="Facebook"
                                                                              data-wm-content-type="link-text"
                                                    ><img class="hauto_m"
                                                          src="{{asset('images/facebook.svg')}}"
                                                          style="display:block;" border="0" width="24" alt="Facebook"
                                                        ></a></td>
                                                <!-- END facebook -->

                                                <!-- START space social icon -->
                                                <td width="19" style="font-size:2px; line-height:2px; width:19px;">
                                                    &nbsp;
                                                </td>
                                                <!-- END space social icon -->



                                                <!-- START space social icon -->
                                                <td width="19" style="font-size:2px; line-height:2px; width:19px;">
                                                    &nbsp;
                                                </td>
                                                <!-- END space social icon -->

                                                <!-- START instagram -->
                                                <td class="" width="24" align="center" valign="middle"
                                                    aria-hidden="true"
                                                    style="font-size:2px; line-height:2px; width:24px;"
                                                    data-wm-section-editable="true"
                                                ><!-- instagram URL here --><a target="_blank"
                                                                               href="https://www.instagram.com/Sellautobelux/"
                                                                               _label="Instagram"
                                                                               data-wm-content-type="link-text"
                                                    ><img class="hauto_m"
                                                          src="{{asset('images/instagram.svg')}}"
                                                          style="display:block;" border="0" width="24" alt="Instagram"
                                                        ></a></td>
                                                <!-- END instagram -->

                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                                <!-- END Social Icon Part -->

                                <tr>
                                    <td class="" height="48"
                                        style="font-size: 12px; line-height: 16px; text-decoration: none; height:48px;"
                                    >&nbsp;
                                    </td>
                                </tr>
                                <tr>
                                    <td class="fbtxt" align="center" valign="top"
                                        style="color: #ffffff; font-family:'Sellauto-Light', Arial, sans-serif; font-size: 12px;font-weight: normal;line-height: 18px;"
                                    ><span class="fbtxt"
                                           style="color: #ffffff; font-family:'Sellauto-Light', Arial, sans-serif;font-size: 12px; font-weight: normal;line-height: 18px; text-decoration: none;"
                                        >{{__('carAvailable.letUsPrioritizeSafety')}} <br>
                    <a style="color: #ffffff"
                       href="#" target="_blank"
                    >www.Sellauto.be</a><br>

                    <br>
                    <br>
                    &#169; Sellauto 2023 </span></td>
                                </tr>
                                <tr>
                                    <td class="" height="40"
                                        style="font-size: 12px; line-height: 16px; text-decoration: none; height:40px;"
                                    >&nbsp;
                                    </td>
                                </tr>
                            </table>
                        </td>
                        <td class="hide_m" align="center" width="8" valign="top" aria-hidden="true"
                            style="font-size:2px; line-height:2px; width: 8px;"
                        >&nbsp;
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td class="" height="40" style="font-size: 12px; line-height: 16px; text-decoration: none; height:40px;">
                &nbsp;
            </td>
        </tr>
    </table>
    <!-- END Footer -->
</div>
</body>
</html>
