<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') | {{env('COLLEGE_NAME_SHORT')}}</title>
    {{-- styles --}}

    <!-- jQuery UI CSS -->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://weareoutman.github.io/clockpicker/dist/jquery-clockpicker.min.css"></link>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/clockpicker/0.0.7/bootstrap-clockpicker.min.css">

    <!-- Global stylesheets -->
    <link rel="stylesheet" href="{{ asset('admin/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets2/fonts/inter/inter.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets2/icons/phosphor/styles.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/full2/assets/css/ltr/all.min.css') }}">

    <!-- Bootstrap-Select CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.18/css/bootstrap-select.min.css">
    
    {{-- scripts --}}

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.18/css/bootstrap-select.min.css">
    <style>
        .tox-control-wrap input{
            color: #000 !important;
        }
        .tox-form__group input{
            color: #000 !important;
        }
    </style>

    
</head>
<body>

    @include('admin.includes.Header')
    <div class="page-content">
        @include('admin.includes.sidebar')                
        @yield('content') 
        <!-- Core JS files -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="{{ asset('admin/assets2/js/bootstrap/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('admin/assets2/demo/demo_configurator.js') }}"></script>

        <!-- Select2 (for select boxes) -->
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
        <!-- SweetAlert2 -->
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


        <!-- External JS libraries -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.18/js/bootstrap-select.min.js"></script>
        {{--
        <script src="//cdn.ckeditor.com/4.15.0/full/ckeditor.js"></script> --}}
        <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>

        <!-- Theme JS files -->
        <script src="{{ asset('admin/assets2/js/vendor/visualization/d3/d3.min.js') }}"></script>
        <script src="{{ asset('admin/assets2/js/vendor/visualization/d3/d3_tooltip.js') }}"></script>
        <script src="{{ asset('admin/assets2/demo/pages/dashboard.js') }}"></script>
        <script src="{{ asset('admin/assets2/demo/pages/datatables_basic.js') }}"></script>
        <script src="{{ asset('admin/assets2/js/vendor/forms/selects/select2.min.js') }}"></script>
        <script src="{{ asset('admin/assets2/js/vendor/forms/selects/bootstrap_multiselect.js') }}"></script>
        <script src="{{ asset('admin/assets2/js/vendor/uploaders/fileinput/plugins/sortable.min.js') }}"></script>
        <script src="{{ asset('admin/assets2/js/vendor/uploaders/fileinput/fileinput.min.js') }}"></script>
        <script src="{{ asset('admin/assets2/js/vendor/notifications/sweet_alert.min.js') }}"></script>
        <script src="{{ asset('admin/full2/assets/js/app.js') }}"></script>
        <script src="{{ asset('admin/assets2/demo/pages/table_elements.js') }}"></script>

        <!-- Additional JS files -->
        <script src="{{ asset('admin/assets2/js/vendor/tables/datatables/datatables.min.js') }}"></script>
        <script src="{{ asset('admin/assets2/demo/pages/extra_sweetalert.js') }}"></script>
        <script src="{{ asset('admin/js/script.js') }}"></script>
        <script src="{{ asset('admin/tinymce/js/tinymce/tinymce.min.js')}}"></script>
        <script src="https://weareoutman.github.io/clockpicker/dist/jquery-clockpicker.min.js"></script>

        <!-- jQuery and DataTables JS -->
        
        <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.18/js/bootstrap-select.min.js"></script>

        <script>
            $(document).ready(function () {
                $('.datatale').DataTable({                    
                    pageLength: 10, // Show 10 rows per page
                    responsive: true, // Makes it work well on small screens
                    autoWidth: false
                });
            });            
        </script>

        <script type="text/javascript">            
            $(document).ready(function () {                
                $('.selectpicker').selectpicker('refresh');
                // Hide alert after 3 seconds
                setTimeout(function () {
                    $('.alert').fadeOut('slow');
                }, 3000);
            });
        </script>
        


        <script>
            $(document).ready(function () {                
                setTimeout(function () {
                    $(".alert").fadeOut("slow");
                }, 2000); // 3 seconds
            });
        </script>
    </div>
    @include('admin.includes.footer')

    
    


</body>
</html>