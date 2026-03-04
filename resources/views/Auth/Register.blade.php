@extends('Layouts.AuthLayout')

@section('title', 'Register')

@section('content')

    <main>
        <section class="relative w-full h-full py-40 min-h-screen">
            <div class="absolute top-0 w-full h-full bg-blueGray-800 bg-full bg-no-repeat"
                style="background-image: url(../../assets/img/register_bg_2.png)"></div>
            <div class="container mx-auto px-4 h-full">
                <div class="flex content-center items-center justify-center h-full">
                    <div class="w-full lg:w-6/12 px-4">
                        <div
                            class="relative flex flex-col min-w-0 wrap-break-word w-full mb-6 shadow-lg rounded-lg bg-blueGray-200 border-0">
                            <div class="rounded-t mb-0 px-6 py-6">
                                <div class="text-center mb-3">
                                    <h6 class="text-blueGray-500 text-sm font-bold">
                                        Sign up with
                                    </h6>
                                </div>
                                <div class="btn-wrapper text-center">
                                    <button
                                        class="bg-white active:bg-blueGray-50 text-blueGray-700  px-4 py-2 rounded outline-none focus:outline-none mr-2 mb-1 uppercase shadow hover:shadow-md inline-flex items-center font-bold text-xs ease-linear transition-all duration-150"
                                        type="button">
                                        <img alt="..." class="w-5 mr-1" src="../../assets/img/github.svg" />
                                        Github
                                    </button>
                                    <button
                                        class="bg-white active:bg-blueGray-50 text-blueGray-700  px-4 py-2 rounded outline-none focus:outline-none mr-1 mb-1 uppercase shadow hover:shadow-md inline-flex items-center font-bold text-xs ease-linear transition-all duration-150"
                                        type="button">
                                        <img alt="..." class="w-5 mr-1" src="../../assets/img/google.svg" />
                                        Google
                                    </button>
                                </div>
                                <hr class="mt-6 border-b border-blueGray-300" />
                            </div>
                            <div class="flex-auto px-4 lg:px-10 py-10 pt-0">
                                <div class="text-blueGray-400 text-center mb-3 font-bold">
                                    <small>Or sign up with credentials</small>
                                </div>
                                @if (session('success'))
                                    <div class="mb-4 text-green-600 font-semibold text-sm text-center">
                                        {{ session('success') }}
                                    </div>
                                @endif

                                @if (session('error'))
                                    <div class="mb-4 text-red-600 font-semibold text-sm text-center">
                                        {{ session('error') }}
                                    </div>
                                @endif

                                @if ($errors->any())
                                    <div class="mb-4">
                                        <ul class="list-disc list-inside text-sm text-red-600">
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                <form method="POST" action="{{ route('register.post') }}">
                                    @csrf
                                    <div class="relative w-full mb-3">
                                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                            htmlFor="grid-password">
                                            Name
                                        </label>
                                        <input name="name" type="text" value="{{ old('name') }}"
                                            class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                            placeholder="Name" />
                                    </div>

                                    <div class="relative w-full mb-3">
                                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                            htmlFor="grid-password">
                                            Email
                                        </label>
                                        <input name="email" type="email" value="{{ old('email') }}"
                                            class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                            placeholder="Email" />
                                    </div>

                                    <div class="relative w-full mb-3">
                                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                            htmlFor="grid-password">
                                            Password
                                        </label>
                                        <input name="password" type="password"
                                            class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                            placeholder="Password" />
                                    </div>

                                    <div class="relative w-full mb-3">
                                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                            htmlFor="password_confirmation">
                                            Confirm Password
                                        </label>
                                        <input name="password_confirmation" type="password"
                                            class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                            placeholder="Confirm Password" />
                                    </div>

                                    <div>
                                        <label class="inline-flex items-center cursor-pointer">
                                            <input id="customCheckLogin" type="checkbox"
                                                class="form-checkbox border-0 rounded text-blueGray-700 ml-1 w-5 h-5 ease-linear transition-all duration-150" />
                                            <span class="ml-2 text-sm font-semibold text-blueGray-600">
                                                I agree with the
                                                <a href="javascript:void(0)" class="text-pink-500">
                                                    Privacy Policy
                                                </a>
                                            </span>
                                        </label>
                                    </div>

                                    <div class="text-center mt-6">
                                        <button
                                            class="bg-blueGray-800 text-white active:bg-blueGray-600 text-sm font-bold uppercase px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 w-full ease-linear transition-all duration-150"
                                            type="submit">
                                            Create Account
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="absolute w-full bottom-0 bg-blueGray-800 pb-6">
                <div class="container mx-auto px-4">
                    <hr class="mb-6 border-b- border-blueGray-600" />
                    <div class="flex flex-wrap items-center md:justify-between justify-center">
                        <div class="w-full md:w-4/12 px-4">
                            <div class="text-sm text-white font-semibold py-1 text-center md:text-left">
                                Copyright © <span id="get-current-year"></span>
                                <a href="https://www.creative-tim.com?ref=njs-register"
                                    class="text-white hover:text-blueGray-300 text-sm font-semibold py-1">Creative Tim</a>
                            </div>
                        </div>
                        <div class="w-full md:w-8/12 px-4">
                            <ul class="flex flex-wrap list-none md:justify-end justify-center">
                                <li>
                                    <a href="https://www.creative-tim.com?ref=njs-register"
                                        class="text-white hover:text-blueGray-300 text-sm font-semibold block py-1 px-3">Creative
                                        Tim</a>
                                </li>
                                <li>
                                    <a href="https://www.creative-tim.com/presentation?ref=njs-register"
                                        class="text-white hover:text-blueGray-300 text-sm font-semibold block py-1 px-3">About
                                        Us</a>
                                </li>
                                <li>
                                    <a href="http://blog.creative-tim.com?ref=njs-register"
                                        class="text-white hover:text-blueGray-300 text-sm font-semibold block py-1 px-3">Blog</a>
                                </li>
                                <li>
                                    <a href="https://github.com/creativetimofficial/notus-js/blob/main/LICENSE.md?ref=njs-register"
                                        class="text-white hover:text-blueGray-300 text-sm font-semibold block py-1 px-3">MIT
                                        License</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </footer>
        </section>
    </main>


@endsection
