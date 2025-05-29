<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title> Lodha PVTG CCDP Plan </title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        @livewireStyles

        <!-- Scripts -->
        <!-- Vendor css -->
        <link href="{{asset('assets/css/vendor.min.css')}}" rel="stylesheet" type="text/css" />

        <!-- App css -->
        <link href="{{asset('assets/css/app.min.css')}}" rel="stylesheet" type="text/css" id="app-style" />

        <!-- Icons css -->
        <link href="{{asset('assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />

        <!-- Theme Config Js -->
        <script src="{{asset('assets/js/config.js')}}"></script>

        <style>
            .gridjs-pagination .gridjs-pages a {
                margin-left: .3rem;
                border-radius: .3rem !important;
                border: 1px solid var(--highdmin-border-color);
                background-color: var(--highdmin-secondary-bg);
                padding: 5px 12px;
                color: var(--highdmin-body-color);
            }
            .popover {
                width: 250px;
            }
            .map-button {
                position: absolute;
                bottom:10px;
                right:10px;
                width: 30px;

            }
            .map-button div {
                margin-bottom: 25px;
            }
            .map-button div i {
                border-radius: 3px;
                background:white;
                padding:10px;
                color:black;
            }
            .hide-google {
                position: absolute;
                bottom:0;
                left:0;
                width:100%;
                height:25px;
                background:#edf1f3;
            }
        </style>

    </head>
    <body>
        
        <div class="wrapper">
            @livewire('custom-navigation-menu')

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->
            <div class="page-content">
                {{ $slot }}
                <!-- container -->
                @livewire('footer')
            </div>
            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->
        </div>
        
        <!--  Modal content for the Large example -->
        <div class="modal fade" id="bs-modal-lg" tabindex="-1" role="dialog"
            aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-body text-center">
                        <div class="spinner-border text-primary m-2" role="status"></div>
                    </div>
                </div>
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
            

            <!-- Page Heading -->
            <!-- @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif -->

            <!-- Page Content -->
            

        @stack('modals')

        <!-- Vendor js -->
        <script src="{{asset('assets/js/vendor.min.js')}}"></script>

        <!-- App js -->
        <script src="{{asset('assets/js/app.js')}}"></script>

        @stack('script')
        
        @livewireScripts
    </body>
</html>
