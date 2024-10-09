<li>
  <div class="flex flex-row items-center justify-items-center my-1.5">
    <div class="flex min-w-12 me-2">
      @dd($request)
      <span
        class="ml-auto max-h-fit {{ $request->method->bg_color . ' ' . $request->method->text_color . ' ' . $request->method->dark_bg_color . ' ' . $request->method->dark_text_color }} text-micro font-medium px-1 py-0.5 rounded">
        {{ strtoupper($request->method->name) }}
      </span>
    </div>
    <span class="text-sm font-medium text-gray-800 dark:text-gray-200 truncate">
      {{ $request->name }}
    </span>
  </div>


</li>
