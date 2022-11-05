<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    keyframes: {
                        bring: {
                            '0%': {
                                width: '0%'
                            },
                            '100%': {
                                width: '90%'
                            },
                        },
                        bring2: {
                            '0%': {
                                width: '0%'
                            },
                            '100%': {
                                width: '80%'
                            },
                        },
                        bring3: {
                            '0%': {
                                width: '0%'
                            },
                            '100%': {
                                width: '70%'
                            },
                        }
                    },
                    animation: {
                        bring: 'bring 3s ease-in-out',
                        bring2: 'bring2 3s ease-in-out',
                        bring3: 'bring3 3s ease-in-out',
                    }
                }
            }
        }
    </script>
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('Assets-Adri/css/main.css') }}">
    <style>
        ::-webkit-scrollbar {
            display: none;
        }
    </style>
</head>

<body>
    @yield('content')
</body>

</html>