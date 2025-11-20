<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ShipX - Global Logistics</title>

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;800&display=swap" rel="stylesheet">

    <style>
        body { font-family: 'Inter', sans-serif; }
    </style>
</head>

<body class="bg-gray-900 text-white min-h-screen">

    <!-- Navbar -->
    <nav class="fixed top-0 left-0 w-full z-20 bg-black/40 backdrop-blur-lg shadow-lg">
        <div class="max-w-7xl mx-auto px-6">
            <div class="flex justify-between items-center h-20">

                <!-- Logo -->
                <div class="flex items-center">
                    <img src="<?php echo e(asset('images/shipx.png')); ?>"
                         alt="ShipX Logo"
                         class="h-10 w-auto">
                </div>

                <!-- Menu -->
                <div class="hidden md:flex space-x-10">
                    <a href="#" class="hover:text-indigo-400 transition">Home</a>
                    <a href="#" class="hover:text-indigo-400 transition">About</a>
                    <a href="#" class="hover:text-indigo-400 transition">Solutions</a>
                    <a href="#" class="hover:text-indigo-400 transition">Blog</a>
                </div>

                <!-- Button -->
                <a href="#">
                    <img src="<?php echo e(asset('images/button.png')); ?>" class="h-10 w-auto" alt="Get Started Button">
                </a>

            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="pt-24">
        <?php echo $__env->yieldContent('content'); ?>
    </main>

</body>
</html>
<?php /**PATH D:\Shruti\htdocs\shipx-landing\resources\views/layouts/app.blade.php ENDPATH**/ ?>