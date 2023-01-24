<script>
export default {

}
</script>

<template>

<div id="toast-notification" class="p-4 w-full max-w-lg w-[40vh] text-gray-900 bg-white rounded-lg shadow dark:bg-gray-800 dark:text-gray-300" role="alert">
    <div class="flex items-center mb-3">
        <span class="mb-1 text-md font-semibold text-gray-900 dark:text-white">Ajouter des informations</span>
        <span></span>
    </div>
    <div class="flex items-center">
        <div class="inline-block relative shrink-0">
            <img class="w-12 h-12 rounded-full" src="https://flowbite.com/docs/images/logo.svg" alt="Jese Leos image"/>
             
        </div>
        <div class="ml-3 text-sm font-normal">
            <div class="text-sm font-semibold text-gray-900 dark:text-white">Completez les informations</div>
            <div class="text-xs py-4 font-normal">Pour effectuez une réservation, vous devrez nous indiquez quelques informations supplementaires</div> 
            <router-link to="/" class="text-xs mt-4 hover:border-b-2 hover:border-blue-400 font-medium text-blue-600 dark:text-blue-500">Indiquez les informations manquantes</router-link>   
        </div>
    </div>
</div>

</template>