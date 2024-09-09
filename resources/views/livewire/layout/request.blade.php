<li>
  <div class="flex">
    <span
      class="flex-none self-center max-h-fit {{ $request->method->bg_color . ' ' . $request->method->text_color . ' ' . $request->method->dark_bg_color . ' ' . $request->method->dark_text_color }} text-xs font-medium me-2 px-2.5 py-0.5 rounded">
      {{ strtoupper($request->method->name) }}
    </span>
    <span>
      {{ $request->name }}
    </span>
  </div>


</li>
