<nav class="flex" aria-label="Breadcrumb">
  <ol class="inline-flex items-center space-x-1 md:space-x-3">
    <li class="inline-flex items-center">
      <a href="/admin/{{ strtolower($slot) }}" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">
        <span class="fa fa-folder ml-1"></span>
        <span class="flex-1 ml-3 whitespace-nowrap">{{ $slot }}</span>
      </a>
    </li>
  </ol>
</nav>