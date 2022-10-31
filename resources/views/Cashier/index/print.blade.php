

<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>INVOICE</title>

    <style>
    .invoice-box {
        max-width: 800px;
        margin: auto;
        padding: 30px;
        border: 1px solid #eee;
        box-shadow: 0 0 10px rgba(0, 0, 0, .15);
        font-size: 16px;
        line-height: 24px;
        font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
        color: #555;
    }

    .invoice-box table {
        width: 100%;
        line-height: inherit;
        text-align: left;
    }

    .invoice-box table td {
        padding: 5px;
        vertical-align: top;
    }

    .invoice-box table tr td:nth-child(2) {
        text-align: right;
    }

    .invoice-box table tr.top table td {
        padding-bottom: 20px;
    }

    .invoice-box table tr.top table td.title {
        font-size: 45px;
        line-height: 45px;
        color: #333;
    }

    .invoice-box table tr.information table td {
        padding-bottom: 40px;
    }

    .invoice-box table tr.heading td {
        background: #eee;
        border-bottom: 1px solid #ddd;
        font-weight: bold;
    }

    .invoice-box table tr.details td {
        padding-bottom: 20px;
    }

    .invoice-box table tr.item td{
        border-bottom: 1px solid #eee;
    }

    .invoice-box table tr.item.last td {
        border-bottom: none;
    }

    .invoice-box table tr.total td:nth-child(2) {
        border-top: 2px solid #eee;
        font-weight: bold;
    }

    @media only screen and (max-width: 600px) {
        .invoice-box table tr.top table td {
            width: 100%;
            display: block;
            text-align: center;
        }

        .invoice-box table tr.information table td {
            width: 100%;
            display: block;
            text-align: center;
        }
    }

    /** RTL **/
    .rtl {
        direction: rtl;
        font-family: Tahoma, 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
    }

    .rtl table {
        text-align: right;
    }

    .rtl table tr td:nth-child(2) {
        text-align: left;
    }
    </style>
</head>

    

<body>


    @isset($GL)
    <div class="invoice-box">
        <table cellpadding="0" cellspacing="0">
            <tr class="top">
                <td colspan="2">
                    <table>
                        <tr>
                            <td class="title">
                                <img src="{{URL::asset('/image/logo.png')}}" alt="">
                            </td>

                            <td>
                                Invoice #: 123<br>
                                Created: {{ date('jS M Y') }}<br>
                                Due: February 1, 2015
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <br>
          
            <tr class="information">
                <td colspan="2">
                    <table>
                        <tr>
                            
                            <td>
                                AGENT<br>
                                SHIP<br>
                                Voyage<br>
                                Departure<br>
                                Container<br>
                                Type
                            </td>


                            <td>
                                {{ $agent }}<br>
                                {{ $shipname }}<br>
                                {{ $Voyage }}<br>
                                {{ $Departure }}<br>
                                {{ $Container }}<br>
                                {{ $Type }}
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>


            

          
            


            <tr class="heading">
                <td>
                    Ton Information
                </td>

                <td>
                    TON #
                </td>
            </tr>

            <tr class="item">
                <td>
                    LBS
                </td>

                <td>
                    {{ $lbs }}
                </td>
            </tr>
            <tr class="item">
                <td>
                    CF
                </td>

                <td>
                    {{ $cf }}
                </td>
            </tr>
            <tr class="item">
                <td>
                    Short Tons LBS
                </td>

                <td>
                    {{ $shorttonslbs }}
                </td>
            </tr>
            <tr class="item">
                <td>
                    Short Tons CF
                </td>

                <td>
                    {{ $shorttonscf }}
                </td>
            </tr>
            <tr class="item">
                <td>
                    Revton
                </td>

                <td>
                    {{ $revton }}
                </td>
            </tr>
            <tr class="item">
                <td>
                    Roundup
                </td>

                <td>
                    {{ $roundup }}
                </td>
            </tr>

            <tr class="heading">
                <td>
                    Charge
                </td>

                <td>
                    Price
                </td>
            </tr>
            <tr class="item">
                <td>
                    Day
                </td>

                <td>
                    {{ $day }}
                </td>
            </tr>

            <tr class="item">
                <td>
                    Freeday
                </td>

                <td>
                    {{ $freedays }}
                </td>
            </tr>

            <tr class="item last">
                <td>
                    #Days
                </td>

                <td>
                    ${{ $two }}
                </td>
            </tr>
            <tr class="item last">
                <td>
                    1st Week
                </td>

                <td>
                    ${{ $three }}
                </td>
            </tr>
            <tr class="item last">
                <td>
                    2nd Week and more
                </td>

                <td>
                    ${{ $five }}
                </td>
            </tr>
            
            <tr class="item last">
                <td>
                    Loading
                </td>

                <td>
                    ${{ $loadingcharge }}
                </td>
            </tr>

            <tr class="total">
                <td></td>

                <td>
                   Total: ${{ $total }}
                </td>
            </tr>
        </table>
    </div>
    @endisset
    @isset($record)
    <div class="invoice-box">
        <table cellpadding="0" cellspacing="0">
            <tr class="top">
                <td colspan="2">
                    <table>
                        <tr>
                            <td class="title">
                                <img src="{{URL::asset('/image/logo.png')}}" alt="">
                            </td>

                            <td>
                                Invoice #: 123<br>
                                Created: {{ date('jS M Y') }}<br>
                                Due: February 1, 2015
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <br>
          
            <tr class="information">
                <td colspan="2">
                    <table>
                        <tr>
                            
                            <td>
                                AGENT<br>
                                SHIP<br>
                                Voyage<br>
                                Departure<br>
                                Container<br>
                                Type
                            </td>


                            <td>
                                {{ $agent }}<br>
                                {{ $shipname }}<br>
                                {{ $Voyage }}<br>
                                {{ $Departure }}<br>
                                {{ $Container }}<br>
                                {{ $Type }}
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>


            

          
            


            <tr class="heading">
                <td>
                    Ton Information
                </td>

                <td>
                    TON #
                </td>
            </tr>

            <tr class="item">
                <td>
                    LBS
                </td>

                <td>
                    {{ $lbs }}
                </td>
            </tr>
            <tr class="item">
                <td>
                    CF
                </td>

                <td>
                    {{ $cf }}
                </td>
            </tr>
            <tr class="item">
                <td>
                    Short Tons LBS
                </td>

                <td>
                    {{ $shorttonslbs }}
                </td>
            </tr>
            <tr class="item">
                <td>
                    Short Tons CF
                </td>

                <td>
                    {{ $shorttonscf }}
                </td>
            </tr>
            <tr class="item">
                <td>
                    Revton
                </td>

                <td>
                    {{ $revton }}
                </td>
            </tr>
            <tr class="item">
                <td>
                    Roundup
                </td>

                <td>
                    {{ $roundup }}
                </td>
            </tr>

            <tr class="heading">
                <td>
                    Charge
                </td>

                <td>
                    Price
                </td>
            </tr>
            <tr class="item">
                <td>
                    Day
                </td>

                <td>
                    {{ $day }}
                </td>
            </tr>

            <tr class="item">
                <td>
                    Freeday
                </td>

                <td>
                    {{ $freedays }}
                </td>
            </tr>

            <tr class="item last">
                <td>
                    #Days
                </td>

                <td>
                    ${{ $two }}
                </td>
            </tr>
            <tr class="item last">
                <td>
                    1st Week
                </td>

                <td>
                    ${{ $three }}
                </td>
            </tr>
            <tr class="item last">
                <td>
                    2nd Week
                </td>

                <td>
                    ${{ $five }}
                </td>
            </tr>
            <tr class="item last">
                <td>
                    Week 4 and More
                </td>

                <td>
                    ${{ $seven }}
                </td>
            </tr>
            <tr class="item last">
                <td>
                    Loading
                </td>

                <td>
                    ${{ $loadingcharge }}
                </td>
            </tr>

            <tr class="total">
                <td></td>

                <td>
                   Total: ${{ $total }}
                </td>
            </tr>
        </table>
    </div>
    @endisset















    @isset($VH)
    <div class="invoice-box">
        <table cellpadding="0" cellspacing="0">
            <tr class="top">
                <td colspan="2">
                    <table>
                        <tr>
                            <td class="title">
                                <img src="{{URL::asset('/image/logo.png')}}" alt="">
                            </td>

                            <td>
                                Invoice #: 123<br>
                                Created: {{ date('jS M Y') }}<br>
                                Due: February 1, 2015
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <br>
          
            <tr class="information">
                <td colspan="2">
                    <table>
                        <tr>
                            
                            <td>
                                AGENT<br>
                                SHIP<br>
                                Voyage<br>
                                Departure<br>
                                Container<br>
                                Type
                            </td>


                            <td>
                                {{ $agent }}<br>
                                {{ $shipname }}<br>
                                {{ $Voyage }}<br>
                                {{ $Departure }}<br>
                                {{ $Container }}<br>
                                {{ $Type }}
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>


            

          
            


            <tr class="heading">
                <td>
                    Ton Information
                </td>

                <td>
                    TON #
                </td>
            </tr>

            <tr class="item">
                <td>
                    LBS
                </td>

                <td>
                    {{ $lbs }}
                </td>
            </tr>
            <tr class="item">
                <td>
                    CF
                </td>

                <td>
                    {{ $cf }}
                </td>
            </tr>
            <tr class="item">
                <td>
                    Short Tons LBS
                </td>

                <td>
                    {{ $shorttonslbs }}
                </td>
            </tr>
            <tr class="item">
                <td>
                    Short Tons CF
                </td>

                <td>
                    {{ $shorttonscf }}
                </td>
            </tr>
            <tr class="item">
                <td>
                    Revton
                </td>

                <td>
                    {{ $revton }}
                </td>
            </tr>
            <tr class="item">
                <td>
                    Roundup
                </td>

                <td>
                    {{ $roundup }}
                </td>
            </tr>

            <tr class="heading">
                <td>
                    Charge
                </td>

                <td>
                    Price
                </td>
            </tr>
            <tr class="item">
                <td>
                    Day
                </td>

                <td>
                    {{ $day }}
                </td>
            </tr>

            <tr class="item">
                <td>
                    Freeday
                </td>

                <td>
                    {{ $freedays }}
                </td>
            </tr>

            <tr class="item last">
                <td>
                    #Days
                </td>

                <td>
                    ${{ $two }}
                </td>
            </tr>
            <tr class="item last">
                <td>
                    1st Week
                </td>

                <td>
                    ${{ $three }}
                </td>
            </tr>
            <tr class="item last">
                <td>
                    2nd Week
                </td>

                <td>
                    ${{ $five }}
                </td>
            </tr>
            <tr class="item last">
                <td>
                    Week 4 and More
                </td>

                <td>
                    ${{ $seven }}
                </td>
            </tr>
            <tr class="item last">
                <td>
                    Loading
                </td>

                <td>
                    ${{ $loadingcharge }}
                </td>
            </tr>

            <tr class="total">
                <td></td>

                <td>
                   Total: ${{ $total }}
                </td>
            </tr>
        </table>
    </div>
    @endisset
    @isset($record)
    <div class="invoice-box">
        <table cellpadding="0" cellspacing="0">
            <tr class="top">
                <td colspan="2">
                    <table>
                        <tr>
                            <td class="title">
                                <img src="{{URL::asset('/image/logo.png')}}" alt="">
                            </td>

                            <td>
                                Invoice #: 123<br>
                                Created: {{ date('jS M Y') }}<br>
                                Due: February 1, 2015
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <br>
          
            <tr class="information">
                <td colspan="2">
                    <table>
                        <tr>
                            
                            <td>
                                AGENT<br>
                                SHIP<br>
                                Voyage<br>
                                Departure<br>
                                Container<br>
                                Type
                            </td>


                            <td>
                                {{ $agent }}<br>
                                {{ $shipname }}<br>
                                {{ $Voyage }}<br>
                                {{ $Departure }}<br>
                                {{ $Container }}<br>
                                {{ $Type }}
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>


            

          
            


            <tr class="heading">
                <td>
                    Ton Information
                </td>

                <td>
                    TON #
                </td>
            </tr>

            <tr class="item">
                <td>
                    LBS
                </td>

                <td>
                    {{ $lbs }}
                </td>
            </tr>
            <tr class="item">
                <td>
                    CF
                </td>

                <td>
                    {{ $cf }}
                </td>
            </tr>
            <tr class="item">
                <td>
                    Short Tons LBS
                </td>

                <td>
                    {{ $shorttonslbs }}
                </td>
            </tr>
            <tr class="item">
                <td>
                    Short Tons CF
                </td>

                <td>
                    {{ $shorttonscf }}
                </td>
            </tr>
            <tr class="item">
                <td>
                    Revton
                </td>

                <td>
                    {{ $revton }}
                </td>
            </tr>
            <tr class="item">
                <td>
                    Roundup
                </td>

                <td>
                    {{ $roundup }}
                </td>
            </tr>

            <tr class="heading">
                <td>
                    Charge
                </td>

                <td>
                    Price
                </td>
            </tr>
            <tr class="item">
                <td>
                    Day
                </td>

                <td>
                    {{ $day }}
                </td>
            </tr>

            <tr class="item">
                <td>
                    Freeday
                </td>

                <td>
                    {{ $freedays }}
                </td>
            </tr>

            <tr class="item last">
                <td>
                    #Days
                </td>

                <td>
                    ${{ $two }}
                </td>
            </tr>
            <tr class="item last">
                <td>
                    1st Week
                </td>

                <td>
                    ${{ $three }}
                </td>
            </tr>
            <tr class="item last">
                <td>
                    2nd Week
                </td>

                <td>
                    ${{ $five }}
                </td>
            </tr>
            <tr class="item last">
                <td>
                    Week 4 and More
                </td>

                <td>
                    ${{ $seven }}
                </td>
            </tr>
            <tr class="item last">
                <td>
                    Loading
                </td>

                <td>
                    ${{ $loadingcharge }}
                </td>
            </tr>

            <tr class="total">
                <td></td>

                <td>
                   Total: ${{ $total }}
                </td>
            </tr>
        </table>
    </div>
    @endisset
</body>

</html>