

<!DOCTYPE html>
<html class="loading " lang="en" data-layout="dark-layout" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <title>{{env('APP_NAME')}}</title>
    <link rel="apple-touch-icon" href="{{asset('app-assets/images/ico/apple-icon-120.png')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('app-assets/images/ico/favicon.ico')}}">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/vendors.min.css')}}">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/bootstrap-extended.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/colors.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/components.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/themes/dark-layout.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/themes/bordered-layout.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/themes/semi-dark-layout.css')}}">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/core/menu/menu-types/vertical-menu.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/plugins/forms/form-validation.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/pages/page-auth.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/extensions/toastr.min.css')}}">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('backendsassets/css/style.css')}}">
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern blank-page navbar-floating footer-static   menu-collapsed" data-open="click" data-menu="vertical-menu-modern" data-col="blank-page">
    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <div class="auth-wrapper auth-v2">
                    <div class="auth-inner row m-0">
                        <!-- Brand logo--><a class="brand-logo" href="javascript:void(0);">
                            <svg viewBox="0 0 139 95" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" height="28">
                                <defs>
                                    <lineargradient id="linearGradient-1" x1="100%" y1="10.5120544%" x2="50%" y2="89.4879456%">
                                        <stop stop-color="#000000" offset="0%"></stop>
                                        <stop stop-color="#FFFFFF" offset="100%"></stop>
                                    </lineargradient>
                                    <lineargradient id="linearGradient-2" x1="64.0437835%" y1="46.3276743%" x2="37.373316%" y2="100%">
                                        <stop stop-color="#EEEEEE" stop-opacity="0" offset="0%"></stop>
                                        <stop stop-color="#FFFFFF" offset="100%"></stop>
                                    </lineargradient>
                                </defs>
                                <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <g id="Artboard" transform="translate(-400.000000, -178.000000)">
                                        <g id="Group" transform="translate(400.000000, 178.000000)">
                                            <path class="text-primary" id="Path" d="M-5.68434189e-14,2.84217094e-14 L39.1816085,2.84217094e-14 L69.3453773,32.2519224 L101.428699,2.84217094e-14 L138.784583,2.84217094e-14 L138.784199,29.8015838 C137.958931,37.3510206 135.784352,42.5567762 132.260463,45.4188507 C128.736573,48.2809251 112.33867,64.5239941 83.0667527,94.1480575 L56.2750821,94.1480575 L6.71554594,44.4188507 C2.46876683,39.9813776 0.345377275,35.1089553 0.345377275,29.8015838 C0.345377275,24.4942122 0.230251516,14.560351 -5.68434189e-14,2.84217094e-14 Z" style="fill: currentColor"></path>
                                            <path id="Path1" d="M69.3453773,32.2519224 L101.428699,1.42108547e-14 L138.784583,1.42108547e-14 L138.784199,29.8015838 C137.958931,37.3510206 135.784352,42.5567762 132.260463,45.4188507 C128.736573,48.2809251 112.33867,64.5239941 83.0667527,94.1480575 L56.2750821,94.1480575 L32.8435758,70.5039241 L69.3453773,32.2519224 Z" fill="url(#linearGradient-1)" opacity="0.2"></path>
                                            <polygon id="Path-2" fill="#000000" opacity="0.049999997" points="69.3922914 32.4202615 32.8435758 70.5039241 54.0490008 16.1851325"></polygon>
                                            <polygon id="Path-21" fill="#000000" opacity="0.099999994" points="69.3922914 32.4202615 32.8435758 70.5039241 58.3683556 20.7402338"></polygon>
                                            <polygon id="Path-3" fill="url(#linearGradient-2)" opacity="0.099999994" points="101.428699 0 83.0667527 94.1480575 130.378721 47.0740288"></polygon>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                            <h2 class="brand-text text-primary ml-1">{{env('APP_NAME')}}</h2>
                        </a>
                        <!-- /Brand logo-->
                        <!-- Left Text-->
                        <div class="d-none d-lg-flex col-lg-8 align-items-center p-5">
                            <div class="w-100 d-lg-flex align-items-center justify-content-center px-5"><img class="img-fluid" src="{{asset('app-assets/images/pages/login-v2.svg')}}" alt="Login V2" /></div>
                        </div>
                        <!-- /Left Text-->
                        <!-- Login-->
                        <div class="d-flex col-lg-4 align-items-center auth-bg px-2 p-lg-5">
                            <div class="col-12 col-sm-8 col-md-6 col-lg-12 px-xl-2 mx-auto">
                                <h2 class="card-title font-weight-bold mb-1">Welcome to <br>{{env('APP_NAME')}}! 👋</h2>
                                <p class="card-text mb-2">Please sign-in to your account and start the adventure</p>
                                <form class=" mt-2" action="{{route('loginAction')}}" id="ajax_form" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label class="form-label" for="login-email">Email/User Name</label>
                                        <input class="form-control" id="login-emaila" type="text"  placeholder="User Name" aria-describedby="login-email" autofocus="" tabindex="1"  name="userName" value="{{request()->userName}}" required/>
                                    </div>
                                    <div class="form-group">
                                        <div class="d-flex justify-content-between">
                                            <label for="login-password">Password</label><a href="#"><small>Forgot Password?</small></a>
                                        </div>
                                        <div class="input-group input-group-merge form-password-toggle">
                                            <input class="form-control form-control-merge" id="login-password" type="password"  placeholder="" aria-describedby="login-password" tabindex="2" name="password" required autocomplete="off" />
                                            <div class="input-group-append"><span class="input-group-text cursor-pointer"><i data-feather="eye"></i></span></div>
                                        </div>
                                    </div>

                                    <button type="submit" id="save-btn" class="btn btn-primary btn-block" >Login</button>
                                </form>

                            </div>
                        </div>
                        <!-- /Login-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END: Content-->
 <script src="{{asset('app-assets/vendors/js/vendors.min.js')}}"></script>
<script src="{{asset('app-assets/vendors/js/extensions/toastr.min.js')}}"></script>



<script type="text/javascript">
$( document ).ready(function() {
toastr.options.closeButton = true;
toastr.options.timeOut = 1500;
toastr.options.progressBar = true;
toastr.options.positionClass = "toast-bottom-right";
// $('select').select2();
$("select").select2({
    width: 'resolve' // need to override the changed default
});

@if(session()->has('message'))
  successMessage("{{session()->get('message')}}");
@endif
@if(session()->has('errorMessage'))
  errorMessage("{{session()->get('errorMessage')}}");
@endif
@if(session()->has('warningMessage'))
  warningMessage("{{session()->get('warningMessage')}}");
@endif

});
$(document).on('select2:open', () => {
    document.querySelector('.select2-search__field').focus();
  });

  $(document).on('submit','form#ajax_form', function(e) {
    // alert("okay");
    e.preventDefault();
    $('span.textdanger').text('');
    var url=$(this).attr('action');
    var method=$(this).attr('method');
    var formData = new FormData($(this)[0]);
    //formData.append("_token","{{csrf_token()}}");
    // console.dir(formData);
    document.getElementById("save-btn").disabled = true;
    setTimeout(function(){document.getElementById("save-btn").disabled = false;},1500);
    $.ajax({
        type: method,
        url: url,
        data: formData,
        async: false,
        processData: false,
        contentType: false,
        success: function(responseData) {
            if(responseData.status==true){
                successMessage(responseData.message);
                if(responseData.redirectUrl)
                  setTimeout(function()  {  document.location.href = responseData.redirectUrl; }, 1500);

            }else if(responseData.status==false){
              if(responseData.errorMessage)
                errorMessage(responseData.errorMessage);
              if(responseData.warningMessage)
                warningMessage(responseData.warningMessage)
              if(responseData.redirectUrl)
                setTimeout(function()  {  document.location.href = responseData.redirectUrl; }, 1500)

            }
        },
        error:function (response){
            $.each(response.responseJSON.errors,function(field_name,error){
              $(document).find('[name='+field_name+'] span').remove();
              $(document).find('[name='+field_name+']').after('<span class="alert-danger text-danger">' +error+ '</span>');
                errorMessage(response.msg);
            })
        }
    });
});
function successMessage(msg) {
   toastr.success(msg, 'Success' );
}
function warningMessage(msg) {
    toastr.warning(msg, 'Failture' );
}
function errorMessage(msg) {
    toastr.error(msg, 'Error' );
}



// ajax request for delete data
$(document).on('click','a.delete', function(e) {
var form=$(this);
e.preventDefault();
var url=$(form).attr('href');
Swal.fire({
    title: "Are you sure?",
    text: "You won't be able to revert this!",
    type: "warning",
    showCancelButton: !0,
    confirmButtonColor: "#3085D6",
    cancelButtonColor: "#d33",
    confirmButtonText: "Yes, delete it.",
    confirmButtonClass: "btn btn-primary",
    cancelButtonClass: "btn btn-danger ml-1",
    buttonsStyling: !1,
  }).then(function (t) {
    t.value?
        $.ajax({
            type: 'DELETE',
            url: url,
            data: {"_token": "{{ csrf_token() }}"},
            success: function(responseData) {
              if(responseData.status==true){
                successMessage(responseData.message);
              if(responseData.redirectUrl)
                  setTimeout(function()  {  document.location.href = responseData.redirectUrl; }, 1500);

            }else if(responseData.status==false){
              if(responseData.errorMessage)
                errorMessage(responseData.errorMessage);
              if(responseData.warningMessage)
                warningMessage(responseData.warningMessage)
              if(responseData.redirectUrl)
                setTimeout(function()  {  document.location.href = responseData.redirectUrl; }, 1500)

            }
            },
            error:function (response){
                errorMessage("Something Went Wrong.Please Try Again.");
            }
        })
      : t.dismiss === Swal.DismissReason.cancel &&
        Swal.fire({
          title: "Cancelled",
          text: "Your data is safe :)",
          type: "error",
          confirmButtonClass: "btn btn-success",
        });
  });
});
$(document).on('click','a.status_change', function(e) {
var form=$(this);
e.preventDefault();
var url=$(form).attr('href');
Swal.fire({
    title: "Are you sure?",
    text: "You want to change data status!",
    type: "warning",
    showCancelButton: !0,
    confirmButtonColor: "#3085D6",
    cancelButtonColor: "#d33",
    confirmButtonText: "Yes, change status.",
    confirmButtonClass: "btn btn-primary",
    cancelButtonClass: "btn btn-danger ml-1",
    buttonsStyling: !1,
  }).then(function (t) {
    t.value?
        $.ajax({
            type: 'get',
            url: url,
            // data: {"_token": "{{ csrf_token() }}"},
            success: function(responseData) {
              if(responseData.status==true){
                successMessage(responseData.message);
                if(responseData.redirectUrl)
                  setTimeout(function()  {  document.location.href = responseData.redirectUrl; }, 1500);

            }else if(responseData.status==false){
              if(responseData.errorMessage)
                errorMessage(responseData.errorMessage);
              if(responseData.warningMessage)
                warningMessage(responseData.warningMessage)
              if(responseData.redirectUrl)
                setTimeout(function()  {  document.location.href = responseData.redirectUrl; }, 1500)

            }
            },
            error:function (response){
            }
        })
      : t.dismiss === Swal.DismissReason.cancel &&
        Swal.fire({
          title: "Cancelled",
          text: "No change make in data status.:)",
          type: "error",
          confirmButtonClass: "btn btn-success",
        });
  });
});
$(document).on('click','.btn_modal', function(e){
    e.preventDefault();
    var url = $(this).attr('href');
    $.ajax({
       type:'GET',
       url:url,
       data:{},
       success:function(response){
           $(".modal #content").html(response);
       }
    });
});
</script>

</body>
<!-- END: Body-->

</html>
