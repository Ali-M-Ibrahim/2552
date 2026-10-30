<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Title</title>
    <style>
        h1{
            color: red;
        }
    </style>
    <link rel="stylesheet" href="{{asset('css/app.css')}}" />
</head>
<body>
<!-- Visible content goes here -->
<h1>Hello, World!</h1>
<p>This is a paragraph.</p>
<h3>hiii class</h3>
<button onclick="test1()">click me</button>

<button onclick="test2()">click me</button>
<h6>test external css</h6>
<script>
    function test1(){
        alert("hii ");
    }
</script>
<script src="{{ asset('js/app.js')  }}"></script>
</body>
</html>
