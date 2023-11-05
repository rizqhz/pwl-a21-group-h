@props([
  'title',
])

<ul class="space-y-2 font-medium">
  @foreach($title as $content)
  <li>
     <a href="/admin/{{ strtolower($content) }}" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
       <span class="fa fa-folder ml-1"></span>
       <span class="flex-1 ml-3 whitespace-nowrap">{{ $content }}</span>
     </a>
  </li>
  @endforeach
</ul>