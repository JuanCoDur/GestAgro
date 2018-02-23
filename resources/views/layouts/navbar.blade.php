@guest
@yield('content')
@else
<nav>
	<div class="nav-wrapper grey darken-4">
		
		<a><img class="circle brand-logo right"src="image/logo.png" height="60px" weight="60px"></a>
		<a href="#" data-activates="slide-out" class="btn_menu brand-logo left" style="padding-left: 10px"><i class="material-icons">menu</i></a>
	</div>
</nav>
<ul id="slide-out" class="side-nav blue-grey darken-4">
	<li>
		<div class="user-view">
			<div class="background">
				<img src="image/agro.jpg" height="220px" weight="300px">
			</div>
			<a><img class="circle"src="image/logo.png" alt=""></a>
			<a href=""><span class="white-text name">{{ auth()->user()->name }}</span></a>
			<a href=""><span class="white-text email">{{ auth()->user()->email }}</span></a>
			
			<a class="white-text" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Cerrar Session
                                        </a>
			<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
		</div>
	</li>
	<li><div class="divider"></div></li>
	<li><a class="subheader white-text">subheader</a></li>
	<li><a class="grey-text"><i class="material-icons white-text">cloud</i>Firs link con iconos</a></li>
	<li><a class="grey-text"><i class="material-icons white-text">cloud</i>segunda</a></li>
	<li><a class="grey-text"><i class="material-icons white-text">cloud</i>tercera</a></li>
</ul>
<body>
	@yield('content')
</body>
<script>
	$(document).ready(function(){
		$(".btn_menu").sideNav();
	});
</script>
<style>
nav div{
	@extend .green, .lighten-3;
	@extend .white-text, .text;
}
	
</style>

@endguest