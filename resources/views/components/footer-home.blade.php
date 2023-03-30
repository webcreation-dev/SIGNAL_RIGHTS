<!-- footer start-->
<footer class="footer">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12 footer-copyright text-center">
          <p class="mb-0">Copyright 2023 © WEBCREATION  </p>
        </div>
      </div>
    </div>
  </footer>
</div>
</div>
<!-- latest jquery-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript" src="{{asset('assets/js/toastr.min.js')}}"></script>

<script>
    $(document).ready(function() {
        @if (session()->has('message'))
            var message = "{{ session('message') }}";

            "use strict";
            var notify = $.notify(
            '<i class="fa fa-bell-o"></i><strong>Chargement</strong>...',
            {
                type: "theme",
                allow_dismiss: true,
                delay: 2000,
                showProgressbar: true,
                timer: 300,
                animate: {
                enter: "animated fadeInDown",
                exit: "animated fadeOutUp",
                },
            }
            );

            setTimeout(function () {
            notify.update(
                "message",
                '<i class="fa fa-bell-o"></i><strong>' + message + '</strong>.'
            );
            }, 1000);



        @endif


        @if (session()->has('generate_code'))
            var message = "{{ session('generate_code') }}";

            "use strict";
            var notify = $.notify(
            '<i class="fa fa-bell-o"></i><strong>Chargement</strong>...',
            {
                type: "theme",
                allow_dismiss: true,
                delay: 50000,
                showProgressbar: true,
                timer: 300,
                animate: {
                enter: "animated fadeInDown",
                exit: "animated fadeOutUp",
                },
            }
            );

            setTimeout(function () {
            notify.update(
                "message",
                '<i class="fa fa-bell-o"></i><strong>' + message + '</strong>.'
            );
            }, 1000);



        @endif
    });
    </script>

<script>
    function toggleFields(select) {
        var titre_div = document.getElementById("title");
        var preuves_div = document.getElementById("preuves");
        var content_div = document.getElementById("content");

        if (select.value == "proof") {
            titre_div.style.display = "none";
            content_div.style.display = "none";
            preuves_div.style.display = "block";
        } else {
            titre_div.style.display = "block";
            content_div.style.display = "block";
            preuves_div.style.display = "none";
        }
    }
    </script>








<script>
    $(function() {
        // Cacher le code de la demande avec des astérisques
        $(".code").text("*****");

        // Afficher/Masquer le code de la demande
        $(".toggle-code").click(function() {
            var code = $(".code");
            if (code.text() == "*****") {
                code.text("{{ Auth::user()->generate_code }}");
                $(this).text("Masquer");
            } else {
                code.text("* * * * *");
                $(this).text("Voir");
            }
        });
    });
</script>


<!-- Bootstrap js-->
<script src="{{ asset('assets/js/bootstrap/bootstrap.bundle.min.js')}}"></script>
<!-- feather icon js-->
<script src="{{ asset('assets/js/icons/feather-icon/feather.min.js')}}"></script>
<script src="{{ asset('assets/js/icons/feather-icon/feather-icon.js')}}"></script>
<!-- scrollbar js-->
<script src="{{ asset('assets/js/scrollbar/simplebar.js')}}"></script>
<script src="{{ asset('assets/js/scrollbar/custom.js')}}"></script>
<!-- Sidebar jquery-->
<script src="{{ asset('assets/js/config.js')}}"></script>
<!-- Plugins JS start-->
<script src="{{ asset('assets/js/sidebar-menu.js')}}"></script>
<script src="{{ asset('assets/js/clock.js')}}"></script>
<script src="{{ asset('assets/js/slick/slick.min.js')}}"></script>
<script src="{{ asset('assets/js/slick/slick.js')}}"></script>
<script src="{{ asset('assets/js/header-slick.js')}}"></script>
<script src="{{ asset('assets/js/chart/apex-chart/apex-chart.js')}}"></script>
<script src="{{ asset('assets/js/chart/apex-chart/stock-prices.js')}}"></script>
<script src="{{ asset('assets/js/chart/apex-chart/moment.min.js')}}"></script>
<script src="{{ asset('assets/js/notify/bootstrap-notify.min.js')}}"></script>
<script src="{{ asset('assets/js/dashboard/default.js')}}"></script>
{{-- <script src="{{ asset('assets/js/notify/index.js')}}"></script> --}}
<script src="{{ asset('assets/js/typeahead/handlebars.js')}}"></script>
<script src="{{ asset('assets/js/typeahead/typeahead.bundle.js')}}"></script>
<script src="{{ asset('assets/js/typeahead/typeahead.custom.js')}}"></script>
<script src="{{ asset('assets/js/typeahead-search/handlebars.js')}}"></script>
<script src="{{ asset('assets/js/typeahead-search/typeahead-custom.js')}}"></script>
<script src="{{ asset('assets/js/height-equal.js')}}"></script>
<script src="{{ asset('assets/js/animation/wow/wow.min.js')}}"></script>
<script src="{{ asset('assets/js/form-wizard/form-wizard-two.js')}}"></script>

<script src="{{ asset('assets/js/datatable/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{ asset('assets/js/datatable/datatables/datatable.custom.js')}}"></script>
<!-- Plugins JS Ends-->
<!-- Theme js-->
<script src="{{ asset('assets/js/script.js')}}"></script>
<script src="{{ asset('assets/js/theme-customizer/customizer.js')}}"></script>

<script src="{{ asset('assets/js/select2/select2.full.min.js')}}"></script>
<script src="{{ asset('assets/js/select2/select2-custom.js')}}"></script>
<script src="{{ asset('assets/js/form-validation-custom.js')}}"></script>

<script src="{{ asset('assets/js/photoswipe/photoswipe.min.js')}}"></script>
<script src="{{ asset('assets/js/photoswipe/photoswipe-ui-default.min.js')}}"></script>
<script src="{{ asset('assets/js/photoswipe/photoswipe.js')}}"></script>

<script src="{{ asset('assets/js/chart/chartjs/chart.min.js')}}"></script>
<script src="{{ asset('assets/js/chart/chartjs/chart.custom.js')}}"></script>

<!-- Plugin used-->
<script>new WOW().init();</script>



