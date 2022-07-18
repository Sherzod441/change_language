<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Language Php</title>
</head>
<body>
    <h1>{{__('lang.register')}}</h1>
    <h1>{{__('lang.login')}}</h1>
    <select name="select" id="lang" onchange="selectLang()">
        <option value="uzb" {{ session('lang') == 'uzb' ? 'selected' : '' }}>UZB</option>
        <option value="en" {{ session('lang') == 'en' ? 'selected' : '' }}>ENG</option>
    </select>

    <script>

        const lang = document.getElementById('lang');
        const url = "{{ route('lang') }}";
        function selectLang() {
            window.location.href = url + "?lang=" + lang.value;
        }

    </script>
</body>
</html>