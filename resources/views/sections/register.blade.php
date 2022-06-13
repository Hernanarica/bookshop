@extends('template.index')
@section('title') Register @endsection
@section('content')
	<section class="flex justify-center items-center h-screen">
		<h2 class="sr-only">Sign up</h2>
		<form action="{{ route('register.post') }}" class="flex flex-col justify-center items-center max-w-xl w-full space-y-6" method="post">
			@csrf
			<div>
				<svg xmlns="http://www.w3.org/2000/svg" class="h-32 w-32 text-gray-300" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1">
					<path stroke-linecap="round" stroke-linejoin="round" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z" />
				</svg>
			</div>
			<div class="flex flex-col justify-center items-center w-full space-y-4">
				<div class="flex flex-col gap-2 max-w-sm w-full">
					<label for="name" class="sr-only">name</label>
					<input type="text"
					       id="name"
					       name="name"
					       placeholder="Your name"
					       autocomplete="off"
					       class="border-2 p-2 border-gray-200 rounded-lg w-full outline-none focus-within:border-blue-500 @error('name') border-red-500 @enderror"
					       value="{{ old('name') }}"
					>
					@error('name')
						<div class="border max-w-sm w-full bg-red-500 text-white p-2 rounded-lg text-center font-bold flex items-center justify-start gap-2">
							<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
								<path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
							</svg>
							<span>{{ $message }}</span>
						</div>
					@enderror
				</div>
				<div class="flex flex-col gap-2 max-w-sm w-full">
					<label for="username" class="sr-only">Username</label>
					<input type="text"
					       id="username"
					       name="username"
					       placeholder="Your username"
					       autocomplete="off"
					       class="border-2 p-2 border-gray-200 rounded-lg w-full outline-none focus-within:border-blue-500 @error('username') border-red-500 @enderror"
					       value="{{ old('username') }}"
					>
					@error('username')
						<div class="border max-w-sm w-full bg-red-500 text-white p-2 rounded-lg text-center font-bold flex items-center justify-start gap-2">
							<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
								<path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
							</svg>
							<span>{{ $message }}</span>
						</div>
					@enderror
				</div>
				<div class="flex flex-col gap-2 max-w-sm w-full">
					<label for="email" class="sr-only">Email</label>
					<input type="email"
					       id="email"
					       name="email"
					       placeholder="Your email"
					       autocomplete="off"
					       class="border-2 p-2 border-gray-200 rounded-lg w-full outline-none focus-within:border-blue-500 @error('email') border-red-500 @enderror"
					       value="{{ old('email') }}"
					>
					@error('email')
						<div class="border max-w-sm w-full bg-red-500 text-white p-2 rounded-lg text-center font-bold flex items-center justify-start gap-2">
							<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
								<path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
							</svg>
							<span>{{ $message }}</span>
						</div>
					@enderror
				</div>
				<div class="flex flex-col gap-2 max-w-sm w-full">
					<label for="password" class="sr-only">Password</label>
					<input type="password"
					       id="password"
					       name="password"
					       placeholder="Your password"
					       autocomplete="off"
					       class="border-2 p-2 border-gray-200 rounded-lg w-full outline-none focus-within:border-blue-500 @error('password') border-red-500 @enderror"
					       value="{{ old('password') }}"
					>
					@error('password')
						<div class="border max-w-sm w-full bg-red-500 text-white p-2 rounded-lg text-center font-bold flex items-center justify-start gap-2">
							<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
								<path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
							</svg>
							<span>{{ $message }}</span>
						</div>
					@enderror
				</div>
			</div>
			<div class="max-w-sm w-full">
				<button class="border-2 rounded-lg text-blue-500 border-blue-500 px-4 py-2 font-bold w-full hover:bg-blue-500 hover:text-white transition duration-300">
					Register
				</button>
			</div>
		</form>
	</section>
@endsection