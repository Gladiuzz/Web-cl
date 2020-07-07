<!DOCTYPE html>
<html>
  <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title><?=isset($title)?$title:''?></title>
    <meta name="description" content="<?=isset($description)?$description:''?>" />
    <meta name="keywords" content="<?=isset($keyword)?$keyword:''?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- jQuery UI -->
    <link href="https://code.jquery.com/ui/1.10.3/themes/redmond/jquery-ui.css" rel="stylesheet" media="screen">
    <!-- Bootstrap -->
    <link href="{{asset('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- styles -->
    <link href="{{asset('css/styles.css')}}" rel="stylesheet">
    <link href="{{asset('css/jquery.ui.all.css')}}" rel="stylesheet">
    <link href="{{asset('css/validationEngine.jquery.css')}}" rel="stylesheet">
    <link href="{{asset('css/utopia-growl.css')}}" rel="stylesheet">
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <link href="{{asset('vendors/form-helpers/css/bootstrap-formhelpers.min.css')}}" rel="stylesheet">
    <link href="{{asset('vendors/select/bootstrap-select.min.css')}}" rel="stylesheet">
    <link href="{{asset('vendors/tags/css/bootstrap-tags.css')}}" rel="stylesheet">
    <!-- javascript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js" ></script>
    <script src="https://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
	</head>
<body>
  	<div class="header">
	     <div class="container">
	        <div class="row">
	           <div class="col-md-5">
	              <!-- Logo -->
	              <div class="logo">
	                 <h1><a href="index.html">cyberlabs</a></h1>
	              </div>
	           </div>
	           <div class="col-md-5">
	              <div class="row">
	                <div class="col-lg-12">

	                </div>
	              </div>
	           </div>
	           <div class="col-md-2">
	              <div class="navbar navbar-inverse" role="banner">
	                  <nav class="collapse navbar-collapse bs-navbar-collapse navbar-right" role="navigation">
	                    <ul class="nav navbar-nav">
	                      <li class="dropdown">
	                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">  <b class="caret"></b></a>
	                        <ul class="dropdown-menu animated fadeInUp">
	                          <li><a href="#">Profile</a></li>
	                          <li><a href="">Logout</a></li>
	                        </ul>
	                      </li>
	                    </ul>
	                  </nav>
	              </div>
	           </div>
	        </div>
	     </div>
	</div>

    <div class="page-content">
    	<div class="row">
		  <div class="col-md-3">
		  	<div class="sidebar content-box" style="display: block;">
                <ul class="nav">
                    <!-- Main menu -->
                    <li><a href="{{route('home')}}"><i class="glyphicon glyphicon-home"></i> Dashboard</a></li>
                    <li><a href="{{route('news')}}"><i class="glyphicon glyphicon-pencil"></i> Artikel</a></li>
                    <li><a href="{{route('client')}}"><i class="glyphicon glyphicon-stats"></i> Clients</a></li>
                    <li><a href="{{route('testimoni')}}"><i class="glyphicon glyphicon-list"></i> Testimoni</a></li>
                    <li><a href=""><i class="glyphicon glyphicon-record"></i> Kategori</a></li>
                    <li><a href="{{route('portfolio')}}"><i class="glyphicon glyphicon-record"></i> Portfolio</a></li>
                    <li><a href=""><i class="glyphicon glyphicon-send"></i> Press dan Media</a></li>
                    <li><a href=""><i class="glyphicon glyphicon-list"></i> Meta</a></li>
                    <li><a href=""><i class="glyphicon glyphicon-user"></i> Prospek</a></li>
                    <li><a href="{{route('company_visit')}}"><i class="glyphicon glyphicon-pencil"></i> Company Visit</a></li>
                    <li><a href="{{route('internship')}}"><i class="glyphicon glyphicon-user"></i> Internship</a></li>
                    <li><a href="{{route('email_broadcast')}}"><i class="glyphicon glyphicon-envelope"></i> Email</a></li>
                    <li><a href="{{route('newsletter')}}"><i class="glyphicon glyphicon-user"></i> Langganan</a></li>
                </ul>
             </div>
		  </div>
          	<div class="row">
				<div class="col-md-8">
                    <div class="content-box-large" style="min-height:600px;">
                        @yield('content')
                    </div>
				</div>
			</div>


	  		<!--  Page content -->
		  </div>
		</div>
    </div>
    <footer>
         <div class="container">

            <div class="copy text-center">
               <?php  $time = time () ;  $year= date("Y",$time);   echo "Copyright @" . $year . ' <a href="http://www.cybermind.web.id">Cybermind</a> Team - Cyberlabs, Technology Business Solution';  ?>
            </div>

         </div>
      </footer>
<!-- Error Notification -->
<div id="growl" style="display:none">
    <div id="basic-template">
        <p>#{text}</p>
    </div>

    <div id="advanced-template">
        <!-- ... you get the idea ... -->
    </div>

</div>
<div id="growl-bottom" style="display:none; top: auto; left: 0pt; bottom: 0pt; margin: 0pt 0pt 10px 10px;">
    <div id="basic">
        <p>#{text}</p>
    </div>

</div>
<div id="notification-container" style="display: none;">
    <div id="themeroller" class="ui-state-error">
        <!-- alert icon -->
        <span style="float:left; margin:9px 5px 0 0;" class="ui-icon ui-icon-alert"></span>
        <h1>#{title}</h1>
        <p>#{text}</p>
    </div><!-- other templates here, if you'd like.. -->
</div>
    <!-- PLUGINS FILES -->
    <script type="text/javascript" src="{{asset('js/ui/jquery.ui.core.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/ui/jquery.ui.widget.js')}}}"></script>
    <script type="text/javascript" src="{{asset('js/ui/jquery.ui.menu.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/ui/jquery.ui.mouse.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/ui/jquery.ui.button.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/ui/jquery.ui.draggable.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/ui/jquery.ui.position.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/ui/jquery.ui.button.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/ui/jquery.ui.dialog.js')}}"></script>
    <script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('vendors/select/bootstrap-select.min.js')}}"></script>
    <script src="{{asset('vendors/tags/js/bootstrap-tags.min.js')}}"></script>
    <script src="{{asset('js/utopia-growl.js')}}"></script>
    <script src="{{asset('js/custom.js')}}"></script>
	<script src="{{asset('js/jquery.validationEngine.js')}}"></script>
    <script src="{{asset('js/jquery.validationEngine-en.js')}}"></script>
    <!-- bootstrap-datetimepicker -->
    <script src="{{asset('vendors/bootstrap-datetimepicker/bootstrap-datetimepicker.js')}}"></script>
    <script src="{{asset('vendors/ckeditor/ckeditor.js')}}"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/20.0.0/classic/ckeditor.js"></script>
    <script src="{{asset('vendors/ckeditor/adapters/jquery.js')}}"></script>
    <script src="{{asset('js/editors.js')}}"></script>
    <script src="{{asset('vendors/bootstrap-wysihtml5/lib/js/wysihtml5-0.3.0.js')}}"></script>
    <script src="{{asset('vendors/bootstrap-wysihtml5/src/bootstrap-wysihtml5.js')}}"></script>
    <script>

            ClassicEditor
                .create( document.querySelector( '#editor' ) )
                .catch( error => {
                    console.error( error );
            } );

    </script>
    <link href="{{asset('vendors/bootstrap-datetimepicker/datetimepicker.css')}}" rel="stylesheet">
  </body>
</html>
