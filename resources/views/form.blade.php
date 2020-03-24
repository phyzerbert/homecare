<!DOCTYPE html>
<!-- saved from url=(0045)https://www.payssion.com/pay/N319806517852574 -->
<html>

<head lang="en">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>LSO Sponser</title>
    <link href="{{asset('pages/bank/css/bootstrap3.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('pages/bank/css/theme.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('pages/bank/css/admin-forms.css')}}">
    <style>
        @font-face {
            font-family: 'Open Sans';
            font-style: normal;
            font-weight: 400;
            src: url(/static/font/OpenSans.woff) format('woff');
        }
        
        @font-face {
            font-family: 'OpenSansSemibold';
            font-style: normal;
            font-weight: 600;
            src: url(/static/font/OpenSans-Semibold.woff) format('woff');
        }
        
        @font-face {
            font-family: 'OpenSansBold';
            font-style: normal;
            font-weight: 700;
            src: url(/static/font/OpenSans-Bold.woff) format('woff');
        }
        
        @font-face {
            font-family: 'OpenSansLightWebfont';
            font-style: normal;
            font-weight: 700;
            src: url(/static/font/OpenSans-Light-webfont.woff) format('woff');
        }
        
        body {
            font-family: 'Open Sans', sans-serif;
            -webkit-font-smoothing: antialiased !important;
        }
        
        .panel_margin_top {
            margin-top: 30px;
        }
        
        @media (min-width: 992px) {
            #content_main {
                width: 360px!important;
                margin: auto;
            }
        }
        
        @media (max-width: 780px) {
            .container-fluid {
                margin-right: auto;
                margin-left: auto;
                padding-left: 0px;
                padding-right: 0px;
            }
            .panel_margin_top {
                margin-top: 0px;
            }
        }
        
        .container-fluid .row {
            margin: 0px!important;
        }
        
        .container-fluid .panel-body {
            padding: 0px;
            margin: 0px;
            padding-bottom: 30px;
        }
        
        .pay_logo {
            text-align: center;
            padding-top: 30px;
        }
        /*.pay_logo img{border: 1px solid #e7e7e7;}*/
        
        .title {
            padding-top: 10px;
            padding-bottom: 20px;
            border-bottom: 1px solid #e7e7e7;
        }
        
        .title .col-md-12 {
            text-align: center;
            font-size: 14px;
            color: #666;
        }
        
        .row_padding {
            padding: 20px 30px 0 30px!important;
        }
        
        .continue_btn {
            padding: 7px 15px 8px 15px !important;
            border: 1px solid #086099;
            border-radius: 3px;
            filter: progid: DXImageTransform.Microsoft.gradient(startColorstr='#0d94de', endColorstr='#0773b8');
            /* for IE */
            background: -webkit-linear-gradient(#0d94de, #0773b8);
            /* Safari 5.1 - 6.0 */
            background: -o-linear-gradient(#0d94de, #0773b8);
            /* Opera 11.1 - 12.0 */
            background: -moz-linear-gradient(#0d94de, #0773b8);
            /* Firefox 3.6 - 15 */
            background: linear-gradient(#0d94de, #0773b8);
            /* 标准的语法（必须放在最后） */
            color: #fff!important;
        }
        
        .continue_btn:hover,
        .continue_btn:active {
            border: 1px solid #0d7ebd;
            filter: progid: DXImageTransform.Microsoft.gradient(startColorstr='#11a8e9 ', endColorstr='#0986ca');
            /* for IE */
            background: -webkit-linear-gradient(#11a8e9, #0986ca);
            /* Safari 5.1 - 6.0 */
            background: -o-linear-gradient(#11a8e9, #0986ca);
            /* Opera 11.1 - 12.0 */
            background: -moz-linear-gradient(#11a8e9, #0986ca);
            /* Firefox 3.6 - 15 */
            background: linear-gradient(#11a8e9, #0986ca);
            /* 标准的语法（必须放在最后） */
        }
        
        .input_title_1 {
            font-size: 14px;
            color: #555;
            font-weight: bold;
            text-transform: uppercase
        }
        
        .input_title_2 {
            font-size: 13px;
            color: #666;
        }
        
        .box-shadow {
            -webkit-box-shadow: 0 0 10px #CCC;
            -moz-box-shadow: 0 0 10px #CCC;
            box-shadow: 0 0 10px #CCC;
        }
        
        .c_name {
            font-size: 13px;
            color: #888;
            text-align: center;
            padding-bottom: 20px;
        }
        
        .c_name span {
            font-size: 18px;
            margin-right: 10px;
        }
        
        .c_name a {
            color: #888;
        }
        
        .c_name a:hover,
        .c_name a:active {
            color: #07c;
            text-decoration: none;
        }
        
        input.valid {
            /*background: #9deb91;*/
            border: 1px solid #ddd!important;
        }
        
        input.invalid {
            /*background: #eb91ae;*/
            border: 1px solid rgb(226, 60, 33)!important;
        }
        .invalid-feedback{
            width:100%;
            margin-top:.25rem;
            font-size:80%;
            color:#dc3545;
        }
    </style>
</head>

<body style="background-color: #f5f5f5;">
    <div class="container-fluid">
        <div class="row">
            <div id="content_main">
                <div class="panel panel-default panel_margin_top">
                    <div class="admin-form theme-primary">
                        <form method="post" action="{{route('form_submit')}}" id="pay_form">
                            @csrf
                            <input type="hidden" name="sale_id" value="{{$sale->id}}">
                            <div class="panel-body box-shadow">
                                <div class="row">
                                    <div class="col-md-12 col-xs-12 pay_logo">
                                        <img height="40" src="{{asset('pages/bank/images/ebanking_my.png')}}">
                                    </div>
                                </div>
                                <div class="row title">
                                    <div class="col-md-12 col-xs-12">
                                        Please fill in the following form to continue.
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 col-xs-12 row_padding">
                                        <p class="input_title_1">Description</p>
                                        <p class="input_title_2" style="overflow: hidden;text-overflow: ellipsis;">Delivery will be made upon confirmations of your information.</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 col-xs-12 row_padding">
                                        <p class="input_title_1">FullName (As Per IC) *</p>
                                        <p class="input_title_2">
                                            <input id="name_as_ic" name="name_as_ic" class="gui-input" value="{{old('name_as_ic')}}" placeholder="Name as IC" required />
                                            @error('name_as_ic')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 col-xs-12 row_padding">
                                        <p class="input_title_1">Phone Number *</p>
                                        <p class="input_title_2">
                                            <input id="phone_number" name="phone_number" class="gui-input" value="{{old('phone_number')}}" placeholder="Phone Number" required />
                                            @error('phone_number')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 col-xs-12 row_padding">
                                        <p class="input_title_1">Address *</p>
                                        <p class="input_title_2">
                                            <input id="address" name="address" class="gui-input" value="{{old('adderss')}}" placeholder="Address" required />
                                            @error('address')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 col-xs-12 row_padding">
                                        <p class="input_title_1">PostCode</p>
                                        <p class="input_title_2">
                                            <input id="ic" name="postcode" class="gui-input" value="{{old('post_code')}}" placeholder="PostCode">
                                            @error('postcode')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </p>
                                    </div>
                                </div>
                                @php
                                    $total_price = $sale->price * $sale->quantity;
                                @endphp
                                <div class="row">
                                    <div class="col-md-12 col-xs-12 row_padding">
                                        <p style="font-size: 16px; color: #555;font-weight: bold;text-align: right;"><span style="color: #cd0000">&nbsp;{{$sale->quantity}} Boxed of 3 ply mask</span></p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 col-xs-12 row_padding" style="text-align: right;">
                                        <button type="submit" class="btn continue_btn">Continue</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="c_name">
                    <span class="fa fa-lock"></span> SECURED BY <a href="https://www.payssion.com/">PAYSSION</a>
                </div>
            </div>
        </div>
    </div>
    <script src="{{asset('pages/bank/js/jquery.min.js')}}"></script>

</body>

</html>