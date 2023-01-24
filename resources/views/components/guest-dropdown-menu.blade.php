@guest
<div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded shadow dark:bg-gray-700 dark:divide-gray-600" id="user-dropdown">
  <div class="px-4 py-3">
    <a href="{{route('initiate')}}" @class(['text-blue-900' => asCurrent('initiate')])>
        <span @class(["block text-sm text-gray-900 dark:text-white", 'text-blue-500' => asCurrent('initiate')])> Bienvenue sur</span>
        <span @class(["block text-sm font-medium text-gray-500 truncate dark:text-gray-400", 'text-blue-500' => asCurrent('initiate')])>{{__('profile.appName')}}</span>
    </a>
  </div>
  <ul class="py-1" aria-labelledby="user-menu-button">
     
    <li>
      <a href="{{route('discover')}}" @class(["block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white", 'text-blue-700' => asCurrent('discover')])>Découvrir {{__('profile.appName')}}</a>
    </li>

    <li>
      <a href="{{route('about')}}" @class(["block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white", 'text-blue-700' => asCurrent('about')])>À propos</a>
    </li>
    
    <li>
        <a href="{{route('register')}}" @class(["block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white", 'text-blue-700' => asCurrent('register')])>Nous réjoindre</a>
    </li>

    <li>
        <a href="{{route('login')}}" @class(["block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white", 'text-blue-700' => asCurrent('login')])>Se Connecter</a>
    </li>
  </ul>
</div>
@endguest