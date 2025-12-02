<!DOCTYPE html>
<html lang="en">
<head>
    <title>Test Form CSRF</title>
</head>
<body>
    <h1>Ini adalah Form Tes</h1>
    <form action="/test-submit" method="POST">
        @csrf
        <button type="submit">Kirim Tes</button>
    </form>
</body>
</html>