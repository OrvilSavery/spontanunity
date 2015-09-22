<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!-- utf-8 works for most cases -->
    <meta name="viewport" content="width=device-width">
    <!-- Forcing initial-scale shouldn't be necessary -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Use the latest (edge) version of IE rendering engine -->
    <title></title> <!-- The title tag shows in email notifications, like Android 4.4. -->
    <style type="text/css">

        /* What it does: Remove spaces around the email design added by some email clients. */
        /* Beware: It can remove the padding / margin and add a background color to the compose a reply window. */
        html,
        body {
            margin: 0;
            padding: 0;
            height: 100% !important;
            width: 100% !important;
        }

        /* What it does: Stops email clients resizing small text. */
        * {
            -ms-text-size-adjust: 100%;
            -webkit-text-size-adjust: 100%;
        }

        /* What it does: Forces Outlook.com to display emails full width. */
        .ExternalClass {
            width: 100%;
        }

        /* What it does: Stops Outlook from adding extra spacing to tables. */
        table,
        td {
            mso-table-lspace: 0pt;
            mso-table-rspace: 0pt;
        }

        /* What it does: Fixes webkit padding issue. */
        table {
            border-spacing: 0 !important;
        }

        /* What it does: Fixes Outlook.com line height. */
        .ExternalClass,
        .ExternalClass * {
            line-height: 100%;
        }

        /* What it does: Fix for Yahoo mail table alignment bug. Applies table-layout to the first 2 tables then removes for anything nested deeper. */
        table {
            border-collapse: collapse;
            margin: 0 auto;
        }

        /* What it does: Uses a better rendering method when resizing images in IE. */
        img {
            -ms-interpolation-mode: bicubic;
        }

        /* What it does: Overrides styles added when Yahoo's auto-senses a link. */
        .yshortcuts a {
            border-bottom: none !important;
        }

        /* What it does: Overrides blue, underlined links auto-detected by iOS Mail. */
        /* More Info: https://litmus.com/blog/update-banning-blue-links-on-ios-devices */
        .mobile-link--footer a {
            color: #666666 !important;
        }

        /* What it does: Overrides styles added images. */
        img {
            border: 0 !important;
            outline: none !important;
            text-decoration: none !important;
        }

        /* What it does: Apple Mail doesn't support max-width, so a media query constrains the email container width. */
        @media only screen and (min-width: 601px) {
            .email-container {
                width: 600px !important;
            }
        }

        /* What it does: Apple Mail doesn't support max-width, so a media query constrains the email container width. */
        @media only screen and (max-width: 600px) {
            .email-container {
                width: 100% !important;
                max-width: none !important;
            }
        }

        h1, h2, h3 {
            font-weight: 300;
        }

    </style>
</head>
<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" bgcolor="#467720"
      style="margin:0; padding:0; -webkit-text-size-adjust:none; -ms-text-size-adjust:none;">
<table cellpadding="0" cellspacing="0" border="0" height="100%" width="100%" bgcolor="#467720"
       style="border-collapse:collapse;">
    <tr>
        <td>

            <!-- Visually Hidden Preheader Text : BEGIN -->
            <div style="display:none;font-size:1px;color:#222222;line-height:1px;max-height:0px;max-width:0px;opacity:0;overflow:hidden;mso-hide: all;">
                Thank you for being a part of our beta tester community! Spontanuity helps you break up the familiar
                routine in your day.
            </div>
            <!-- Visually Hidden Preheader Text : END -->

            <!-- Outlook and Lotus Notes don't support max-width but are always on desktop, so we can enforce a wide, fixed width view. -->
            <!-- Beginning of Outlook-specific wrapper : BEGIN -->
            <!--[if (gte mso 9)|(IE)]>
            <table width="600" align="center" cellpadding="0" cellspacing="0" border="0">
                <tr>
                    <td>
            <![endif]-->
            <!-- Beginning of Outlook-specific wrapper : END -->

            <!-- Email wrapper : BEGIN -->
            <table border="0" width="100%" cellpadding="0" cellspacing="0" align="center"
                   style="max-width:600px; margin:auto;" class="email-container">
                <tr>
                    <td>

                        <!-- Logo + Links : BEGIN -->
                        <table border="0" height="100" width="100%" cellpadding="0" cellspacing="0">
                            <tr>
                                <td valign="middle" style="padding:10px 10px; text-align:left;" width="200">
                                    <img src="{{ URL::asset('library/img/logo.png') }}" alt="alt text" width="200"
                                         border="0" align="left">
                                </td>
                                <td valign="middle"
                                    style="padding:10px 10px; text-align:right; line-height:1.1; font-family: sans-serif; font-size: 13px; color: #ffffff;">
                                    Live Free | Live Intentionally
                                </td>
                            </tr>
                        </table>
                        <!-- Logo + Links : END -->

                        <!-- Main Email Body : BEGIN -->
                        <table border="0" width="100%" cellpadding="0" cellspacing="0" bgcolor="#ffffff" style="border:1px solid #326610;">
                            <tr align="center" bgcolor="#467720">
                                <td style="padding: 0% 4%; font-family: sans-serif; font-size: 18px; line-height: 1.3; color: #ffffff;">
                                    <h1>Welcome to the Spontanuity! Subscription Confirmed.</h1>
                                </td>
                            </tr>
                            <tr bgcolor="#2D5712" align="center"
                                style="background:url({{ URL::to('library/img/emails/bg-body.jpg') }}) top center;background-size:100% auto">
                                <td style="padding:4%; font-family:sans-serif;font-size:18px; line-height:1.3;color:#fff">
                                    <p>Hey! Welcome to Spontanuity.<br/> <strong>The platform that helps you to break up<br/>
                                            the familiar routine in your day.</strong></p>
                                </td>
                            </tr>
                            <!-- Single Fluid Image, No Crop : END -->

                            <!-- Full Width, Fluid Column : BEGIN -->
                            <tr bgcolor="#A8D588">
                                <td style="padding: 4%; font-family: sans-serif; font-size: 16px; line-height: 1.3; color: #2D5712;">
                                    We’re, excited to have you as part of the spontanuity community and as a beta
                                    tester. <strong>As a beta tester, here’s what you can expect from us</strong>:
                                </td>
                            </tr>
                            <!-- Full Width, Fluid Column : END -->

                            <!-- 2 x 2 grid : BEGIN -->
                            <tr>
                                <td>
                                    <table border="0" width="100%" cellpadding="0" cellspacing="0" align="center">
                                        <tr align="center">
                                            <td width="15%"
                                                style="font-size: 18px;line-height: 0; font-family: sans-serif;color:#467720"
                                                bgcolor="#A8D588"><h1>1.</h1></td>
                                            <td valign="top" width="70%"
                                                style="padding: 2% 4%; font-family: sans-serif; font-size: 15px; line-height: 1.3; color: #666666; text-align: left;border-bottom:1px solid #ccc">
                                                <h3>First to get updates on our launch and new things coming happening
                                                    with us. <i>(get excited!)</i></h3>
                                            </td>
                                            <td width="15%" style="font-size: 0;line-height: 0;">&nbsp;</td>
                                        </tr>
                                        <tr align="center">
                                            <td width="15%"
                                                style="font-size: 18px;line-height: 0; font-family: sans-serif;color:#467720"
                                                bgcolor="#A8D588"><h1>2.</h1></td>
                                            <td valign="top" width="70%"
                                                style="padding: 2% 4%; font-family: sans-serif; font-size: 15px; line-height: 1.3; color: #666666; text-align: left;border-bottom:1px solid #ccc">
                                                <h3>The unique ability to be a part of the Spontanuity community and
                                                    joining others looking to expand and explore the world around
                                                    them. <i>(even more exciting!)</i></h3>
                                            </td>
                                            <td width="15%" style="font-size: 0;line-height: 0;">&nbsp;</td>
                                        </tr>
                                        <tr align="center">
                                            <td width="15%"
                                                style="font-size: 18px;line-height: 0; font-family: sans-serif;color:#467720"
                                                bgcolor="#A8D588"><h1>3.</h1></td>
                                            <td valign="top" width="70%"
                                                style="padding: 2% 4%; font-family: sans-serif; font-size: 15px; line-height: 1.3; color: #666666; text-align: left;">
                                                <h3>Exclusive access to help improve and impact the development of
                                                    Spontanuity to make it the best platform possible <i>(lose your mind!)</i></h3>
                                            </td>
                                            <td width="15%" style="font-size: 0;line-height: 0;">&nbsp;</td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                            <!-- 2 x 2 grid : END -->

                            <!-- Full Width, Fluid Column : BEGIN -->
                            <tr bgcolor="#A8D588">
                                <td style="padding: 2% 4%; font-family: sans-serif; font-size: 14px; line-height: 1.3; color: #2D5712;">
                                    We’ve set out to make Spontanuity more than just a platform for doing cool things.
                                    It’s a about a mindset, a way of life, and most importantly <strong>a
                                        community</strong>.
                                </td>
                            </tr>

                            <!-- Full Width, Fluid Column : BEGIN -->
                            <tr bgcolor="#A8D588">
                                <td style="padding: 2% 4%; font-family: sans-serif; font-size: 14px; line-height: 1.3; color: #2D5712;">
                                    So if you ever have suggestions about how to make it better, things we should be
                                    watching out for, or just an awesome story don’t hesitate to reach out to us at:
                                </td>
                            </tr>

                            <tr bgcolor="#2D5712" align="center" style="background:url({{ URL::to('library/img/emails/bg-body.jpg') }}) bottom center;background-size:100% auto">
                                <td style="padding:4%; font-family:sans-serif;font-size:24px; line-height:1.3;color:#ffffff">
                                    <a href="mailto:team@spontanuity.com" style="color:#ffffff; text-decoration: none;">team@spontanuity.com</a>
                                </td>
                            </tr>

                            <tr align="center">
                                <td style="padding: 2% 4%; font-family: sans-serif; font-size: 18px; line-height: 1.3; color: #666666;">
                                    <h3>Thank you for being a part of this!</h3>
                                </td>
                            </tr>

                        </table>
                        <!-- Main Email Body : END -->

                    </td>
                </tr>

                {{--<tr bgcolor="#467720" height="100">--}}
                    {{--<td>--}}
                        {{--<table cellpadding="0" cellspacing="0" bgcolor="#467720">--}}
                            {{--<tr colspan="3" style="font-size:14px; color:#fff; font-family:sans-serif" valign="middle" align="center" height="30">--}}
                                {{--<td>--}}
                                    {{--Share this with others you think would benefit:--}}
                                {{--</td>--}}
                            {{--</tr>--}}
                            {{--<tr style="font-size:18px; color:#fff; font-family:sans-serif" valign="middle" align="center" height="70">--}}
                                {{--<td><a href="#"></a></td>--}}
                                {{--<td></td>--}}
                                {{--<td></td>--}}
                            {{--</tr>--}}
                        {{--</table>--}}
                    {{--</td>--}}
                {{--</tr>--}}

                <!-- Footer : BEGIN -->
                <tr>
                    <td style="text-align:center; padding:4% 0; font-family:sans-serif; font-size:13px; line-height:1.2; color:#ffffff;">
                        Spontanuity &bull; <span class="mobile-link--footer">Columbia, MO USA</span>
                        <br><br>
                        Don’t worry you can unsubscribe anytime:<br/>
                        <unsubscribe style="color:#ffffff; text-decoration:underline;">unsubscribe</unsubscribe>
                    </td>
                </tr>
                <!-- Footer : END -->

            </table>
            <!-- Email wrapper : END -->

            <!-- End of Outlook-specific wrapper : BEGIN -->
            <!--[if (gte mso 9)|(IE)]>
            </td>
            </tr>
            </table>
            <![endif]-->
            <!-- End of Outlook-specific wrapper : END -->

        </td>
    </tr>
</table>
</body>
</html>
