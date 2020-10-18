{{favicon()}}

	{{generate_theme_css('assets/css/reset.css')}}
	{{generate_theme_css('assets/css/flexslider.css')}}
	{{generate_theme_css('assets/css/jcarousel_tango.css')}}
	{{generate_theme_css('assets/css/simpletabs.css')}}
	{{generate_theme_css('assets/css/short_codes.css')}}
	@if($tema->isiCss=='')
	{{generate_theme_css('assets/css/base.css?v=013a')}}
	
	@else
	{{generate_theme_css('assets/css/editbase.css?v=013a')}}
	@endif	
	
	{{generate_theme_css('assets/css/responsive.css')}}
	{{generate_theme_css('assets/dist/css/bootstrap.min.css')}}
	{{generate_theme_css('assets/css/sosmed.css')}}
	<!-- <link href='//fonts.googleapis.com/css?family=Istok+Web' rel='stylesheet' type='text/css'> -->