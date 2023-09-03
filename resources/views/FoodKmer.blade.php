@extends('Layout.app2')

@section('content')
<div class="grid md:grid-cols-4"><!--Conteneur Globale-->
        <div class="p-4 md:col-span-1 flex justify-end"><!--En tete-->
            <nav>
                <div class="flex"> 
                    <div class="flex items-center justify-items-center">
                        <div class="bg-[#06b6d4] h-3 w-3"></div>
                        <div class="bg-[#9333ea] h-4 w-3"></div>
                        <div class="bg-[#2563eb] h-6 w-3"></div>
                    </div>
                    <h1 class="text-gray-700 text-2xl font-bold ml-2">
                        <a href="" class="text-gray-300 sm:text-[#06b6d4] md:text-[#2563eb] lg:text-[#9333ea] hover:text-purple-900 uppercase font-bold">KamerFood</a>
                    </h1>
                </div>
                @include('partial.navbar2')
            </nav>
        </div>
        <main class="p-4  md:p-16 bg-gray-100 col-span-3"><!--Conteneur Principal-->
            <div class="my-2 text-[#2563eb] flex justify-center md:justify-end"><!--Authentification-->
                <a href="" class="rounded-full py-2 px-4 cursor-pointer font-bold border border-2 border-[#2563eb] hover:bg-[#2563eb] hover:text-white">Connexion</a>
                <a href="" class="ml-3 rounded-full py-2 px-4 cursor-pointer font-bold border border-2 border-[#2563eb] hover:bg-[#2563eb] hover:text-white">Inscription</a>
            </div><!--Authentification-->
            <header class="mt-8">
                <h2 class="text-[#06b6d4] text-5xl font-semibold">Recettes</h2>
                <h3 class="text-2xl font-semibold">Pour les pros</h3>
            </header>
            <div>
                <div>
                    <h4 class="text-[#9333ea] text-3xl my-4 border-b pb-2 border-gray-300">Recettes les plus recentes</h4>
                    <div class="py-10 grid md:grid-cols-2 xl:grid-cols-3 gap-10">
                            @extends('Layout.appImg')
                            @section('contenu')
                            <span class="font-bold text-2xl sm:text-xl">Poisson Braisé</span>
                            @endsection
                            @extends('Layout.appImg')
                            @section('contenu1')
                            <span class="font-bold text-2xl sm:text-xl">Porc Braisé</span>
                            @endsection
                            @extends('Layout.appImg')
                            @section('contenu')
                            <span class="font-bold text-2xl sm:text-xl">Poulet DG</span>
                            @endsection
                            @include('Layout.appImg')
                            @section('contenu')
                            <span class="font-bold text-2xl sm:text-xl">Fufu & Eru</span>
                            @endsection
                       
                    </div>
                </div>
            </div>
        </main>
</div>
@endsection