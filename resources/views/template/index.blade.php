<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="{{ asset('css/app.css') }}" />
		<title>Bookshop | @yield('title', 'Home')</title>
	</head>
	<body>
		<header class="flex justify-between px-3 bg-blue-600 text-white h-14">
			<h1>
				<a href="{{ route('home.view') }}" class="flex items-center h-full text-3xl font-bold">BookShop</a>
			</h1>
			<nav class="flex items-center">
				<ul class="flex gap-6 p-0 m-0 h-full">
					<li class="h-full">
						<a href="{{ route('home.view') }}" class="flex items-center h-full hover:bg-blue-500 px-2">Home</a>
					</li>
					@guest
						<li class="h-full">
							<a href="{{ route('register.view') }}" class="flex items-center h-full hover:bg-blue-500 px-2">Register</a>
						</li>
						<li class="h-full">
							<a href="{{ route('login.view') }}" class="flex items-center h-full hover:bg-blue-500 px-2">Login</a>
						</li>
					@endguest
					@auth
						<li class="h-full">
							<a href="{{ route('profile.view') }}" class="flex items-center h-full hover:bg-blue-500 px-2">Profile</a>
						</li>
						<li class="h-full">
							<form action="{{ route('logout.post') }}" method="post" class="h-full">
								@csrf
								<button type="submit" class="flex items-center h-full hover:bg-blue-500 px-2">Logout</button>
							</form>
						</li>
					@endauth
				</ul>
			</nav>
		</header>
		<main>
			@yield('content')
		</main>
		<footer class="flex items-center justify-center h-12 bg-blue-600 text-white font-bold">
			copyright&copy; {{ now()->year }}
		</footer>
	</body>
</html>