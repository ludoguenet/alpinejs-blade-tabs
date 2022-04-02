<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="//unpkg.com/alpinejs" defer></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
    tailwind.config = {
        theme: {
            extend: {
                colors: {
                    clifford: '#da373d',
                }
            }
        }
    }
    </script>
</head>
<body>
    <div
        x-data="{
            selectedTab: 'all',
            'activeClasses': 'bg-clifford text-white',
            'inactiveClasses': 'bg-white hover:bg-clifford hover:text-white'
        }"
        class="container mx-auto py-5"
    >
        <x-projects />
    </div>
</body>
</html>