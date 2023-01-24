@auth
<div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded shadow dark:bg-gray-700 dark:divide-gray-600" id="user-dropdown">
  <div class="px-4 py-3">
    <span class="block text-sm text-gray-900 dark:text-white">{{Auth::user()->name}}</span>
    <span class="block text-sm font-medium text-gray-500 truncate dark:text-gray-400">{{Auth::user()->email}}</span>
  </div>
  <ul class="py-1" aria-labelledby="user-menu-button">
    <li>
      <a href="{{route('dashboard')}}" @class(['text-blue-700' => asCurrent('dashboard'), "block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white"]) >Tableau de bord</a>
    </li>
    <li>
        <a href="{{route('activities')}}" @class(['text-blue-700' => asCurrent('activities'), "block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white"]) >Vos activités</a>
    </li>
    <li>
      <a href="{{route('profile.edit')}}" @class(['text-blue-700' => asCurrent('profile.edit'), "block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white"]) >Paramètres</a>
    </li>
    <form action="{{route('logout')}}" method="post">
        <li>
        @csrf
        <button type="submit" class="block w-[100%] text-left px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">
            Déconnexion
        </button>
         
        </li>
    </form>
  </ul>
</div>
@endauth