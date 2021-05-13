<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>{{ env('APP_NAME') }}</title>

	<!-- styles -->
	<link rel="stylesheet" href="{{ asset('assets/style/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/style/bootstrap.min.css') }}">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css">
    <link rel="stylesheet" href="{{ asset('assets/jqueryui/jquery-ui.min.css') }}">

	<!-- scripts -->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/jqueryui/jquery-ui.min.js') }}"></script>
    <script>
        $( function() {
          $("#datepicker").datepicker();
        } );
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</head>
<body>

	@yield('layout')
	
	<!-- scripts -->
	<script src="{{ asset('assets/js/script.js') }}"></script>
    <script>
        // select взят с codepen.io
        jQuery(($) => {
            $('.select').on('click', '.select__head', function () {
                if ($(this).hasClass('open')) {
                    $(this).removeClass('open');
                    $(this).next().fadeOut();
                } else {
                    $('.select__head').removeClass('open');
                    $('.select__list').fadeOut();
                    $(this).addClass('open');
                    $(this).next().fadeIn();
                }
            });

            $('.select').on('click', '.select__item', function () {
                $('.select__head').removeClass('open');
                $(this).parent().fadeOut();
                $(this).parent().prev().text($(this).text());
                $(this).parent().prev().prev().val($(this).text());
            });

            $(document).click(function (e) {
                if (!$(e.target).closest('.select').length) {
                    $('.select__head').removeClass('open');
                    $('.select__list').fadeOut();
                }
            });
        });
    </script>
</body>
</html>