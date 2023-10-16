<div class="sidenav-overlay"></div>
<div class="drag-target"></div>

<!-- BEGIN: Footer-->
<footer class="footer footer-static footer-light">
    <p class="clearfix mb-0"><span class="float-md-left d-block d-md-inline-block mt-25">COPYRIGHT &copy; 2023<a
                class="ml-25" href="https://github.com/almamun852" target="_blank">{{ $companyInfo->name ?? null }}</a><span
                class="d-none d-sm-inline-block">, All rights Reserved</span></span><span
            class="float-md-right d-none d-md-block">Design & Developed with<i data-feather="heart"></i></span></p>
</footer>
<button class="btn btn-primary btn-icon scroll-top" type="button"><i data-feather="arrow-up"></i></button>
<!-- END: Footer-->


<!-- BEGIN: Vendor JS-->
<script src="{{ asset('app-assets/vendors/js/vendors.min.js') }}"></script>
<!-- BEGIN Vendor JS-->

<!-- BEGIN: Page Vendor JS-->
<!-- <script src="{{ asset('app-assets/vendors/js/charts/apexcharts.min.js') }}"></script> -->
<script src="{{ asset('app-assets/vendors/js/extensions/toastr.min.js') }}"></script>
<!-- END: Page Vendor JS-->

<!-- BEGIN: Theme JS-->
<script src="{{ asset('app-assets/js/core/app-menu.js') }}"></script>
<script src="{{ asset('app-assets/js/core/app.js') }}"></script>
<!-- END: Theme JS-->

<!-- BEGIN: Page JS-->
<!-- <script src="{{ asset('app-assets/js/scripts/pages/dashboard-ecommerce.js') }}"></script> -->
<!-- END: Page JS-->

<!--BEGIN: Sweet Alert-->
<script src="{{ asset('app-assets/vendors/js/extensions/sweetalert2.all.min.js') }}"></script>
<!--END: Sweet Alert-->

<script src="{{ asset('app-assets/vendors/js/forms/select/select2.full.min.js') }}"></script>
<script src="{{ asset('app-assets/js/scripts/forms/form-select2.js') }}"></script>

{{-- Summernote Js
<script src="{{ asset('assets/js/summernote-bs4.min.js') }}"></script>
<script src="{{ asset('assets/js/form-editor.init.js') }}"></script>
--}}

@stack('js')



<script type="text/javascript">
    $(window).on('load', function() {
        if (feather) {
            feather.replace({
                width: 14,
                height: 14
            });
        }
    });


    $(document).ready(function() {
        toastr.options.closeButton = true;
        toastr.options.timeOut = 1500;
        toastr.options.progressBar = true;
        toastr.options.positionClass = "toast-bottom-right";
        $('select').select2();
        $("select").select2({
            width: 'resolve' // need to override the changed default
        });

        @if (session()->has('message'))
            successMessage("{{ session()->get('message') }}");
        @endif
        @if (session()->has('errorMessage'))
            errorMessage("{{ session()->get('errorMessage') }}");
        @endif
        @if (session()->has('warningMessage'))
            warningMessage("{{ session()->get('warningMessage') }}");
        @endif


        if (feather) {
            feather.replace({
                width: 14,
                height: 14
            });
        }
        feather.replace();




    });


    $(document).on('select2:open', () => {
        document.querySelector('.select2-search__field').focus();
    });

    $(document).on('submit', 'form#ajax_form', function(e) {
        // alert("okay");
        e.preventDefault();
        $('span.textdanger').text('');
        var url = $(this).attr('action');
        var method = $(this).attr('method');
        var formData = new FormData($(this)[0]);
        // formData.append("_token","{{ csrf_token() }}");
        // console.dir(formData);
        document.getElementById("save-btn").disabled = true;
        setTimeout(function() {
            document.getElementById("save-btn").disabled = false;
        }, 1500);
        $.ajax({
            type: method,
            url: url,
            data: formData,
            async: false,
            processData: false,
            contentType: false,
            success: function(responseData) {
                if (responseData.status == true) {
                    successMessage(responseData.message);
                    if (responseData.redirectUrl)
                        setTimeout(function() {
                            document.location.href = responseData.redirectUrl;
                        }, 1500);

                } else if (responseData.status == false) {
                    if (responseData.errorMessage)
                        errorMessage(responseData.errorMessage);
                    if (responseData.warningMessage)
                        warningMessage(responseData.warningMessage)
                    if (responseData.redirectUrl)
                        setTimeout(function() {
                            document.location.href = responseData.redirectUrl;
                        }, 1500)

                }
            },
            error: function(response) {
                $.each(response.responseJSON.errors, function(field_name, error) {
                    $(document).find('[name=' + field_name + '] span').remove();
                    $(document).find('[name=' + field_name + ']').after(
                        '<span class="alert-danger text-danger">' + error + '</span>');
                    errorMessage(error);
                })
            }
        });
    });

    function successMessage(msg) {
        toastr.success(msg, 'Success');
    }

    function warningMessage(msg) {
        toastr.warning(msg, 'Failture');
    }

    function errorMessage(msg) {
        toastr.error(msg, 'Error');
    }



    // ajax request for delete data
    $(document).on('click', 'a.delete', function(e) {
        var form = $(this);
        e.preventDefault();
        var url = $(form).attr('href');
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
        }).then(function(t) {
            t.value ?
                $.ajax({
                    type: 'DELETE',
                    url: url,
                    data: {
                        "_token": "{{ csrf_token() }}"
                    },
                    success: function(responseData) {
                        if (responseData.status == true) {
                            successMessage(responseData.message);
                            if (responseData.redirectUrl)
                                setTimeout(function() {
                                    document.location.href = responseData.redirectUrl;
                                }, 1500);

                        } else if (responseData.status == false) {
                            if (responseData.errorMessage)
                                errorMessage(responseData.errorMessage);
                            if (responseData.warningMessage)
                                warningMessage(responseData.warningMessage)
                            if (responseData.redirectUrl)
                                setTimeout(function() {
                                    document.location.href = responseData.redirectUrl;
                                }, 1500)

                        }
                    },
                    error: function(response) {
                        errorMessage("Something Went Wrong.Please Try Again.");
                    }
                }) :
                t.dismiss === Swal.DismissReason.cancel &&
                Swal.fire({
                    title: "Cancelled",
                    text: "Your data is safe :)",
                    type: "error",
                    confirmButtonClass: "btn btn-success",
                });
        });
    });
    $(document).on('click', 'a.status_change', function(e) {
        var form = $(this);
        e.preventDefault();
        var url = $(form).attr('href');
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
        }).then(function(t) {
            t.value ?
                $.ajax({
                    type: 'get',
                    url: url,
                    // data: {"_token": "{{ csrf_token() }}"},
                    success: function(responseData) {
                        if (responseData.status == true) {
                            successMessage(responseData.message);
                            if (responseData.redirectUrl)
                                setTimeout(function() {
                                    document.location.href = responseData.redirectUrl;
                                }, 1500);

                        } else if (responseData.status == false) {
                            if (responseData.errorMessage)
                                errorMessage(responseData.errorMessage);
                            if (responseData.warningMessage)
                                warningMessage(responseData.warningMessage)
                            if (responseData.redirectUrl)
                                setTimeout(function() {
                                    document.location.href = responseData.redirectUrl;
                                }, 1500)

                        }
                    },
                    error: function(response) {}
                }) :
                t.dismiss === Swal.DismissReason.cancel &&
                Swal.fire({
                    title: "Cancelled",
                    text: "No change make in data status.:)",
                    type: "error",
                    confirmButtonClass: "btn btn-success",
                });
        });
    });
    $(document).on('click', '.btn_modal', function(e) {
        e.preventDefault();
        var url = $(this).attr('href');
        $.ajax({
            type: 'GET',
            url: url,
            data: {},
            success: function(response) {
                $(".modal #content").html(response);
            }
        });
    });



    $(document).on('click', 'a.btn_confirm_data', function(e) {
        var form = $(this);
        e.preventDefault();
        var url = $(form).attr('href');
        Swal.fire({
            title: "Are you sure?",
            text: "You want to Confirm Data!",
            type: "warning",
            showCancelButton: !0,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes, Confirm Data.",
            confirmButtonClass: "btn btn-primary",
            cancelButtonClass: "btn btn-danger ml-1",
            buttonsStyling: !1,
        }).then(function(t) {
            t.value ?
                $.ajax({
                    type: 'get',
                    url: url,
                    // data: {"_token": "{{ csrf_token() }}"},
                    success: function(res) {
                        if (responseData.status == true) {
                            successMessage(responseData.message);
                            if (responseData.redirectUrl)
                                setTimeout(function() {
                                    document.location.href = responseData.redirectUrl;
                                }, 1500);

                        } else if (responseData.status == false) {
                            if (responseData.errorMessage)
                                errorMessage(responseData.errorMessage);
                            if (responseData.warningMessage)
                                warningMessage(responseData.warningMessage)
                            if (responseData.redirectUrl)
                                setTimeout(function() {
                                    document.location.href = responseData.redirectUrl;
                                }, 1500)

                        }
                    },
                    error: function(response) {}
                }) :
                t.dismiss === Swal.DismissReason.cancel &&
                Swal.fire({
                    title: "Cancelled",
                    text: "No change make in data status.:)",
                    type: "error",
                    confirmButtonClass: "btn btn-success",
                });
        });
    });

    $('.close').click(function() {
        window.location.reload();
    });
</script>
