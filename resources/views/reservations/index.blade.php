<x-app-layout>
<!-- component -->
<!-- Container -->

    <!-- Login component -->
  
    <div class="h-[100vh] pt-8 bg-white">

        {{-- @guest
        <div class="flex bg-red-100 mx-8 max-w-[600px] container rounded-lg p-4 mb-4 text-sm text-red-700" role="alert">
            <svg class="w-5 h-5 inline mr-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
            <div class=" ">
                <span class="font-medium">Vous n'etes pas connecté.</span> Connectez-vous pour finaliser votre Réservation 
            </div>
        </div>
        @endguest --}}
        <div id="reservation-course">
            <div id="map"></div>
            <!-- Login form -->
            <x-reservation-form />
            <!-- Login banner -->
            <x-letleaf-map />
            
        </div>

    </div>
  
</x-app-layout>