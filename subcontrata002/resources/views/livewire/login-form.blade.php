<div class="mx-6 mt-6 flex flex-col">
  <form wire:submit.prevent="login">
    <div class="flex flex-wrap mb-6">
      <label for="email" class="block text-gray-700 text-sm font-bold mb-2">
        {{ __("E-Mail Address") }}:
      </label>
      <input
        wire:model="email"
        id="email"
        type="email"
        class="form-input w-full @error('email') border-red-500 @enderror"
        name="email"
        value="{{ old('email') }}"
        required
        autocomplete="email"
        autofocus
      />

      <p class="text-red-500 text-xs italic mt-4">
        {{ session()->get('error') }}
      </p>
      @error('email')
      <p class="text-red-500 text-sm italic mt-4">
        {{ $message }}
      </p>
      @enderror
    </div>

    <div class="flex flex-wrap mb-6">
      <label for="password" class="block text-gray-700 text-sm font-bold mb-2">
        {{ __("Password") }}:
      </label>

      <input
        wire:model="password"
        id="password"
        type="password"
        class="form-input w-full @error('password') border-red-500 @enderror"
        name="password"
        required
      />

      @error('password')
      <p class="text-red-500 text-xs italic mt-4">
        {{ $message }}
      </p>
      @enderror
    </div>

    <div class="tipo-cuenta flex mb-2">
      <input
        wire:model="type"
        type="radio"
        value="employer"
        id="employer"
        name="tipoCuenta"
      />
      <label class="radio text-sm pt-1" for="employer">
        <span class="ml-1"> Busco profesionista </span>
      </label>

      <input
        wire:model="type"
        type="radio"
        value="expert"
        id="expert"
        name="tipoCuenta"
      />
      <label class="radio text-sm pt-1" for="expert">
        <span class="ml-1">Soy un experto</span>
      </label>
    </div>
    @error('type')
    <p class="text-red-500 text-xs italic mb-6">
      {{ $message }}
    </p>
    @enderror

    <div class="flex flex-wrap items-center mb-6">
      <button
        type="submit"
        class="bg-gray-800 hover:bg-gray-600 text-gray-100 font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
      >
        {{ __("Login") }}
      </button>

      @if (Route::has('password.request'))
      <a
        class="text-sm text-blue-500 hover:text-blue-700 whitespace-no-wrap no-underline ml-auto"
        href="{{ route('password.request') }}"
      >
        {{ __("Forgot Your Password?") }}
      </a>
      @endif @if (Route::has('register'))
      <p class="w-full text-xs text-center text-gray-700 mt-8 -mb-4">
        {{ __("Don't have an account?") }}
        <a
          class="text-blue-500 hover:text-blue-700 no-underline"
          href="{{ route('register') }}"
        >
          {{ __("Register") }}
        </a>
      </p>
      @endif
    </div>
  </form>
</div>
