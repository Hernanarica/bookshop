@extends('template.index')
@section('title') Login @endsection
@section('content')
	<section class="flex justify-center items-center h-screen">
		<h2 class="sr-only">Sign in</h2>
		<form class="flex flex-col justify-center items-center max-w-xl w-full space-y-6">
			<div>
				<svg xmlns="http://www.w3.org/2000/svg" class="h-32 w-32 text-gray-300" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1">
					<path stroke-linecap="round" stroke-linejoin="round" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
				</svg>
			</div>
			<div class="flex flex-col justify-center items-center w-full space-y-4">
				<div class="max-w-sm w-full">
					<label for="username" class="sr-only">Username</label>
					<input type="text"
					       id="username"
					       name="username"
					       placeholder="Your username"
					       autocomplete="off"
					       class="border-2 px-2 py-2 border-gray-200 rounded-lg w-full outline-none focus-within:border-blue-500"
					>
				</div>
				<div class="max-w-sm w-full">
					<label for="password" class="sr-only">Password</label>
					<input type="password"
					       id="password"
					       name="password"
					       placeholder="Your password"
					       autocomplete="off"
					       class="border-2 px-2 py-2 border-gray-200 rounded-lg w-full outline-none focus-within:border-blue-500"
					>
				</div>
			</div>
			<div class="max-w-sm w-full">
				<button class="border-2 rounded-lg text-blue-500 border-blue-500 px-4 py-2 font-bold w-full hover:bg-blue-500 hover:text-white transition duration-300">Login</button>
			</div>
		</form>
	</section>
@endsection