<!DOCTYPE html>
<html>

<head>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet" />

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;900&display=swap" rel="stylesheet" />
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1" />
    <style>
        body {
            font-family: "Inter", sans-serif;
        }
    </style>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js" defer></script>
</head>

<body class="min-h-screen bg-gray-100 text-gray-900 flex justify-center">


    <div class="max-w-screen-xl m-0 sm:m-20 bg-white shadow sm:rounded-lg flex justify-center flex-1">
        <div class="lg:w-1/2 xl:w-5/12 p-6 sm:p-12">
            <div class="mt-12 flex flex-col items-center">
                <h1 class="text-2xl xl:text-3xl font-extrabold">
                    registration </h1>
                <div class="w-full flex-1 mt-8">
                    <div class="my-12 border-b text-center">
                    <div class="mx-auto max-w-xs">
                        <form action="{{ route('patient.store') }}" method="POST">
                            @csrf
                            @if ($message = Session::get('success'))
                                <div class="alert alert-success" role="alert">
                                    {{ $message }}
                                </div>
                            @elseif ($message = Session::get('status'))
                                <div class="alert alert-danger" role="alert">
                                    {{ $message }}
                                </div>
                            @endif
                        <input type="text" class="w-full px-8 py-4 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white " name="b_d_n_name"  placeholder="User name">
                    @error('b_d_n_name')
                        <div class="alert alert-danger mt-1 mb-1" style="color:crimson">{{ $message }}</div>
                    @enderror
                    <input type="text" class="w-full px-8 py-4 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white mt-5" name="b_d_n_phone"  placeholder="Phone number">
                    @error('b_d_n_phone')
                        <div class="alert alert-danger mt-1 mb-1" style="color:crimson">{{ $message }}</div>
                    @enderror
                    <select class="w-full px-8 py-4 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white mt-5" name="b_d_n_gender">
                        <option value="">Address</option>
                        <option value="Irbid">Irbid</option>
                    <option value="Amman">Amman</option>
                    <option value="Jarsh">Jarsh</option>
                    <option value="Blqa">Blqa</option>
                    <option value="Karak">Karak</option>
                    <option value="Zarqa">Zarqa</option>
                    <option value="Maan">Maan</option>
                    <option value="Mafraq">Mafraq</option>
                    <option value="Tafelah">Tafelah</option>
                    <option value="Madaba">Madaba</option>
                    <option value="Ajloun">Ajloun </option>
                    <option value="Ajloun">Aqaba </option>
                      </select>
                    <input type="number" class="w-full px-8 py-4 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white mt-5" name="b_d_n_age"  placeholder="Age">
                        @error('b_d_n_age')
                            <div class="alert alert-danger mt-1 mb-1" style="color:crimson">{{ $message }}</div>
                        @enderror
                        <select class="w-full px-8 py-4 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white mt-5" name="b_d_blood_type" >
                            <option value="">select blood type</option>
                            @foreach ($type as $value)
                                <option value="{{ $value->id }}">{{ $value->name }}</option>
                            @endforeach
                        </select>
                        <select class="w-full px-8 py-4 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white mt-5" name="b_d_n_address">
                          <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>

                        <input type="text" class="w-full px-8 py-4 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white mt-5" name="b_d_n_email" placeholder="Email" >
                        @error('b_d_n_email')
                            <div class="alert alert-danger mt-1 mb-1" style="color:crimson">{{ $message }}</div>
                        @enderror
                        <input type="password" class="w-full px-8 py-4 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white mt-5" name="b_d_n_password" placeholder="Password">
                    @error('b_d_n_password')
                        <div class="alert alert-danger mt-1 mb-1" style="color:crimson">{{ $message }}</div>
                    @enderror
                    <input type="password" class="w-full px-8 py-4 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white mt-5" name="password_confirmation" placeholder="Password confirmation">

                        <button class="mt-5 tracking-wide font-semibold bg-indigo-500 text-gray-100 w-full py-4 rounded-lg hover:bg-indigo-700 transition-all duration-300 ease-in-out flex items-center justify-center focus:shadow-outline focus:outline-none" style="background-color:   #ee3d32">
                            <svg class="w-6 h-6 -ml-2" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M16 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2" />
                                <circle cx="8.5" cy="7" r="4" />
                                <path d="M20 8v6M23 11h-6" />
                            </svg>
                            <span class="ml-3">
                                Sign Up
                            </span>
                        </button>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex-1 bg-indigo-100 text-center hidden lg:flex">
            <div class="m-12 xl:m-16 w-full bg-contain bg-center bg-no-repeat" style="background-image: url('{{asset('img/group.png')}}') ; width: 70%; margin-left:15%;"></div>
        </div>
    </div>
    <div class="REMOVE-THIS-ELEMENT-IF-YOU-ARE-USING-THIS-PAGE hidden treact-popup fixed inset-0 flex items-center justify-center" style="background-color: rgba(0,0,0,0.3);">
        <div class="max-w-lg p-8 sm:pb-4 bg-white rounded shadow-lg text-center sm:text-left">

            <h3 class="text-xl sm:text-2xl font-semibold mb-6 flex flex-col sm:flex-row items-center">
                <div class="bg-green-200 p-2 rounded-full flex items-center mb-4 sm:mb-0 sm:mr-2">
                    <svg class="text-green-800 inline-block w-5 h-5" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24">
                        <path d="M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z"></path>
                    </svg>
                </div>
                Free TailwindCSS Component Kit!
            </h3>
            <p>I recently released Treact, a <span class="font-bold">free</span> TailwindCSS Component Kit built with React.</p>
            <p class="mt-2">It has 52 different UI components, 7 landing pages, and 8 inner pages prebuilt. And they are customizable!</p>
            <div class="mt-8 pt-8 sm:pt-4 border-t -mx-8 px-8 flex flex-col sm:flex-row justify-end leading-relaxed">
                <button class="close-treact-popup px-8 py-3 sm:py-2 rounded border border-gray-400 hover:bg-gray-200 transition duration-300">Close</button>
                <a class="font-bold mt-4 sm:mt-0 sm:ml-4 px-8 py-3 sm:py-2 rounded bg-purple-700 text-gray-100 hover:bg-purple-900 transition duration-300 text-center" href="https://treact.owaiskhan.me" target="_blank">See Treact</a>
            </div>
        </div>
    </div>
</form>
</body>

</html>
