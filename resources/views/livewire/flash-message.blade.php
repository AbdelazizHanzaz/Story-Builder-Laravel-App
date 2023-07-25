@if (session()->has('message'))

  <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative my-3" role="alert">

    <strong class="font-bold">Success!</strong>

    <span class="block sm:inline">{{ session('success') }}</span>

  </div>

@endif