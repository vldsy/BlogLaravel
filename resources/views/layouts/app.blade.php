<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  <title>Blog</title>
</head>

<body class="bg-gray-200">
  <nav class="p-6 bg-white flex justify-between mb-6">
    <ul class="flex items-center">
      <li>
        <a class="p-3" href="">Home</a>
      </li>
      <li>
        <a class="p-3" href="">Dashboard</a>
      </li>
      <li>
        <a class="p-3" href="">Posts</a>
      </li>
    </ul>
    <ul class="flex items-center">
      <li>
        <a class="p-3" href="">John Doe</a>
      </li>
      <li>
        <a class="p-3" href="">Login</a>
      </li>
      <li>
        <a class="p-3" href="">Register</a>
      </li>
      <li>
        <a class="p-3" href="">Logout</a>
      </li>
    </ul>
  </nav>
  @yield('content')
</body>

</html>