<!DOCTYPE HTML>
<html>
    <head>
    
</head>
<body>
    <h1>Hello, world</h1>
    <a href="/"{{ url('/') }} >Link To Home</a>
    <h1>My view</h1>
    <h2><?php echo $name; ?></h2>
    <h2>{{ $name }}</h2>
</body>
</html>