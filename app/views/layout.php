<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>පොත් කඩේ</title>
    <link href="/PothKade/public/output.css" rel="stylesheet">
    <link rel="manifest" href="public/manifest.json">
    <link href="https://fonts.googleapis.com/css2?family=K2D:wght@400;500;600;700&display=swap" rel="stylesheet">


</head>

<body class="m-0 bg-[#D9D9D9]">
    
    <header class="m-0">
        <nav class="fixed z-10 flex h-[80px] w-full cursor-pointer items-center justify-between border-none bg-slate-900 px-8 text-white shadow-lg">
            <img class="h-[100px] w-[180px]" src="\PearlPrincessEvents\public\img\pp-01-removebg.png" alt="Logo">
            <img class="w-[40px]-2 h-[40px] pr-3" src="\PothKade\public\img\homeLogo.png" alt="Logo">
            <input type="text" placeholder="Search..." class="w-full rounded-lg border border-gray-300 p-3 pl-2 text-slate-900 shadow-sm focus:border-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-500">
            <img class="h-[40px] w-[40px] pl-2" src="\PothKade\public\img\shopping-cart.png" alt="Logo">
            <img class="h-[40px] w-[40px] pl-2" src="\PothKade\public\img\user.png" alt="Logo">
        </nav>
    </header>

    <main>
        <?php require_once '../app/views/' . $viewPath . '.php'; ?>
    </main>

    <footer class="bg-gray-800 py-8 text-gray-200">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex flex-wrap justify-between">
            <!-- Logo and About Section -->
            <div class="mb-6 w-full md:mb-0 md:w-1/4">
                <h3 class="text-2xl font-semibold text-white">Poth Kade</h3>
                <p class="mt-4 text-gray-400">Your favorite online bookstore, offering a variety of books for every reader.</p>
            </div>
            
            <!-- Quick Links Section -->
            <div class="mb-6 w-full md:mb-0 md:w-1/4">
                <h4 class="text-lg font-semibold text-white">Quick Links</h4>
                <ul class="mt-4 space-y-2">
                    <li><a href="#" class="text-gray-400 hover:text-white">Home</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-white">About Us</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-white">Shop</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-white">Contact</a></li>
                </ul>
            </div>
            
            <!-- Contact Information Section -->
            <div class="mb-6 w-full md:mb-0 md:w-1/4">
                <h4 class="text-lg font-semibold text-white">Contact Us</h4>
                <ul class="mt-4 space-y-2 text-gray-400">
                    <li>📍 Kuliyapitiya, Sri Lanka</li>
                    <li>📞 (+94) 78 472 2795</li>
                    <li>📧 contact@pothkade.com</li>
                </ul>
            </div>
            
            <!-- Social Media Section -->
            <div class="w-full md:w-1/4">
                <h4 class="text-lg font-semibold text-white">Follow Us</h4>
                <div class="mt-4 flex space-x-4">
                    <a href="#" class="text-gray-400 hover:text-white">
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path d="M22.5 0h-21C.7 0 0 .7 0 1.5v21c0 .8.7 1.5 1.5 1.5h11.4V14.7h-3v-3.6h3v-2.7c0-3 1.8-4.7 4.5-4.7 1.3 0 2.4.1 2.7.1v3.1h-1.9c-1.5 0-1.8.7-1.8 1.7v2.4h3.6l-.5 3.6h-3.1V24H22c.8 0 1.5-.7 1.5-1.5v-21C24 .7 23.3 0 22.5 0z"/>
                        </svg>
                    </a>
                    
                    <a href="#" class="text-gray-400 hover:text-white">
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path d="M12 2.2c3.2 0 3.6.01 4.9.07 1.17.05 2.05.24 2.76.5.75.28 1.38.65 2 1.27.63.63 1 .93 1.27 2 .26.71.45 1.59.5 2.76.07 1.32.07 1.67.07 4.9s-.01 3.6-.07 4.9c-.05 1.17-.24 2.05-.5 2.76-.28.75-.65 1.38-1.27 2-.63.63-1 .93-2 1.27-.71.26-1.59.45-2.76.5-1.32.07-1.67.07-4.9.07s-3.6-.01-4.9-.07c-1.17-.05-2.05-.24-2.76-.5-.75-.28-1.38-.65-2-1.27-.63-.63-.93-1-1.27-2-.26-.71-.45-1.59-.5-2.76C2.21 15.6 2.2 15.2 2.2 12s.01-3.6.07-4.9c.05-1.17.24-2.05.5-2.76.28-.75.65-1.38 1.27-2C4.6 2.87 5 2.57 6 2.3c.71-.26 1.59-.45 2.76-.5C8.4 2.21 8.8 2.2 12 2.2m0-2.2c-3.26 0-3.67.02-4.95.07-1.29.06-2.22.27-3.03.57-.85.32-1.56.74-2.28 1.46-.73.73-1.14 1.44-1.46 2.28-.3.81-.51 1.74-.57 3.03C2.02 8.33 2 8.74 2 12s.02 3.67.07 4.95c.06 1.29.27 2.22.57 3.03.32.85.74 1.56 1.46 2.28.73.73 1.44 1.14 2.28 1.46.81.3 1.74.51 3.03.57 1.28.05 1.69.07 4.95.07s3.67-.02 4.95-.07c1.29-.06 2.22-.27 3.03-.57.85-.32 1.56-.74 2.28-1.46.73-.73 1.14-1.44 1.46-2.28.3-.81.51-1.74.57-3.03.05-1.28.07-1.69.07-4.95s-.02-3.67-.07-4.95c-.06-1.29-.27-2.22-.57-3.03-.32-.85-.74-1.56-1.46-2.28-.73-.73-1.44-1.14-2.28-1.46-.81-.3-1.74-.51-3.03-.57C15.67.02 15.26 0 12 0zm0 5.8c3.42 0 6.2 2.78 6.2 6.2s-2.78 6.2-6.2 6.2-6.2-2.78-6.2-6.2S8.58 5.8 12 5.8m0-2.2C8.14 3.6 5.6 6.14 5.6 10s2.54 6.4 6.4 6.4 6.4-2.54 6.4-6.4-2.54-6.4-6.4-6.4zm7.88 1.35c0 .9-.73 1.63-1.63 1.63s-1.63-.73-1.63-1.63.73-1.63 1.63-1.63 1.63.73 1.63 1.63z"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
        <div class="mt-8 text-center text-gray-500">
            &copy; 2024 Poth Kade. All rights reserved.
        </div>
    </div>
    </footer>


    



    <script src="/public/script.js"></script>
</body>
</html>