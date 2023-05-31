<!DOCTYPE html>
<html lang="en">
<head>
    <title>Laravel MockApi Example</title>
    <style>
        body {
            font-family: sans-serif;
            font-size: 20px;
        }
        h1 { font-size: 30px; }
        h4 { margin-bottom: 10px; }
        ul { margin-top: 10px; }
    </style>
</head>
<body>
    <h1>Laravel MockApi Example</h1>
    <p><a href="/telescope/client-requests" target="_blank">Telescope - HTTP Client</a></p>

    <h4>Get Users</h4>
    <ul>
        <li><a href="/get/users">GET /users</a></li>
        <li><a href="/get/users/1">GET /users/1</a></li>
        <li><a href="/get/users/2">GET /users/2</a></li>
        <li><a href="/get/users/3">GET /users/3</a></li>
    </ul>
    <h4>Get Posts</h4>
    <ul>
        <li><a href="/get/posts">GET /posts</a></li>
        <li><a href="/get/posts/1">GET /posts/1</a></li>
        <li><a href="/get/posts/2">GET /posts/2</a></li>
        <li><a href="/get/posts/3">GET /posts/3</a></li>
    </ul>
    <h4>Posts mutations</h4>
    <ul>
        <li><a href="/post/posts">POST /posts</a></li>
        <li><a href="/put/posts/1">PUT /posts/1</a></li>
        <li><a href="/patch/posts/1">PATCH /posts/1</a></li>
        <li><a href="/delete/posts/1">DELETE /posts/1</a></li>
    </ul>
</body>
</html>

