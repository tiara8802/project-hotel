<!DOCTYPE html> 
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <title>Halaman Home</title>
</head>

<body>
    <!-- Logo without navbar -->
    <div class="flex justify-center mt-8">
        <!-- Ensure the logo image path is correct -->
        <img src="logoflorence.jpg" alt="Logo Florence" width="45" height="45">
    </div>

    <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
    <div class="sm:mx-auto sm:w-full sm:max-w-sm">
        <h2 class="mt-10 text-center text-2xl font-bold tracking-tight text-gray-900">Sign in to your account</h2>
    </div>

    <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
        <!-- Login Form -->
        <form class="space-y-6" action="#" method="POST">
            <div>
                <label for="email" class="block text-sm font-medium text-gray-900">Username</label>
                <div class="mt-2">
                    <input type="email" name="email" id="email" autocomplete="email" required
                        class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:outline-offset-2 focus:outline-indigo-600 sm:text-sm">
                </div>
            </div>

            <div>
                <div class="flex items-center justify-between">
                    <label for="password" class="block text-sm font-medium text-gray-900">Password</label>
                    <div class="text-sm">
                        <a href="#" class="font-semibold text-indigo-600 hover:text-indigo-500">Forgot password?</a>
                    </div>
                </div>
                <div class="mt-2">
                    <input type="password" name="password" id="password" autocomplete="current-password" required
                        class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:outline-offset-2 focus:outline-indigo-600 sm:text-sm">
                </div>
            </div>

            <div>
                <button type="submit"
                    class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                    Sign in
                </button>
            </div>
        </form>

        <p class="mt-10 text-center text-sm text-gray-500">
            Don't have an account?
            <a href="regis.php" class="font-semibold text-indigo-600 hover:text-indigo-500">Register here</a>
        </p>
    </div>
</div>
</body>

</html>
