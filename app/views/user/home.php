<div class="relative">
    <img class="h-[600px] w-full object-cover" src="/PothKade/public/img/heroimg11.jpg" alt="Hero Image">
    <div class="absolute flex items-center justify-center">
        <button class="ml-[1200px] mt-[-150px] h-[60px] rounded bg-white px-6 py-3 font-k2d text-[24px] text-black shadow-lg hover:bg-gray-200"
        onclick="document.getElementById('request-form').scrollIntoView({ behavior: 'smooth' });">
        Request A Book
    </button>
    </div>
</div>

<!-- Catogeries -->
<div class="flex h-[130px] items-center font-mono text-white">
<div class="flex flex-1 flex-col items-center justify-center bg-[#003366]">
        <img src="/PothKade/public/img/books.png" class="w-[70px]">
        <span>All Books</span>
    </div>
    <div class="flex flex-1 flex-col items-center justify-center bg-[#a0892e]">
        <img src="/PothKade/public/img/fiction.png" class="w-[70px]">
        <span>Fiction</span>
    </div>
    <div class="flex flex-1 flex-col items-center justify-center bg-[#b838ab]">
        <img src="/PothKade/public/img/writing.png" class="w-[70px]">
        <span>Novels</span>
    </div>
    <div class="flex flex-1 flex-col items-center justify-center bg-[#87CEEB]">
        <img src="/PothKade/public/img/translate.png" class="w-[70px]">
        <span>Translations</span>
    </div>
    <div class="flex flex-1 flex-col items-center justify-center bg-[#540A8A]">
        <img src="/PothKade/public/img/scenario.png" class="w-[70px]">
        <span>Short Stories</span>
    </div>
    <div class="flex flex-1 flex-col items-center justify-center bg-[#002147]">
        <img src="/PothKade/public/img/newspaper.png" class="w-[70px]">
        <span>Newspapers and Magazines</span>
    </div>
</div>


<!-- Trending Books Section -->
<div class="trending-books h-auto bg-white py-5">
    <h3 class="mb-4 text-center font-serif text-[32px] text-slate-900">Trending Books</h3>
    <div id="bookCarousel" class="carousel flex flex-wrap justify-center gap-9">
        <div class="book flex flex-col items-center">
            <img src="/PothKade/public/img/38.jpg" class="h-[180px] w-[130px]" alt="Short Stories">
            <span class="w-[100px] text-center font-k2d text-sm">SHORT STORIES</span>
        </div>
    </div>
</div>

<!-- Features Books Section -->
<div class="mt-[20px] h-auto bg-white py-5">
    <h3 class="mb-4 text-center font-serif text-[32px] text-slate-900">Featured Books</h3>
    <div class="flex flex-wrap justify-center gap-9">
        <div class="flex flex-col items-center">
            <img src="/PothKade/public/img/9553128815.jpg" class="mb-2 h-[180px] w-[130px]" alt="Short Stories">
            <span class="w-[100px] text-center font-k2d text-sm">Short Stories</span>
        </div>
    </div>
</div>


<!-- Stationery Section -->
<div class="mt-5 flex flex-wrap justify-center gap-4">
    <div class="relative h-[300px] w-full overflow-hidden rounded-lg shadow-lg md:w-1/2">
        <img src="/PothKade/public/img/stan.jpg" class="h-full w-full object-cover" alt="Stationery">
        <div class="absolute inset-0 flex flex-col items-center justify-center bg-black bg-opacity-50 p-4 text-white">
            <h3 class="mb-3 text-2xl font-semibold">Are You Looking Stationeries & Children Books?</h3>
            <button class="rounded bg-white px-4 py-2 font-medium text-black hover:bg-gray-200">
                Click Here
            </button>
        </div>
    </div>
    <div class="relative h-[300px] w-full overflow-hidden rounded-lg shadow-lg md:w-1/2">
        <img src="/PothKade/public/img/gift.jpg" class="h-full w-full object-cover" alt="Stationery">
        <div class="absolute inset-0 flex flex-col items-center justify-center bg-black bg-opacity-50 p-4 text-white">
            <h3 class="mb-3 text-4xl font-semibold tracking-[8px]">Lovers Want To <br>&nbsp; Talk With Love?</h3>
            <button class="ml-[450px] rounded bg-white px-6 py-2 font-medium text-black hover:bg-gray-200">
            Why are you so late?
            </button>
        </div>
    </div>
</div>



<!--Best Sellers  Books Section -->
<div class="trending-books mt-[20px] h-auto bg-white py-5">
    <h3 class="mb-4 text-center font-serif text-[32px] text-slate-900">Best Seller Books</h3>
    <div id="bookCarousel" class="carousel flex flex-wrap justify-center gap-9">
        <div class="book flex flex-col items-center">
            <img src="/PothKade/public/img/OIP.jpeg" class="h-[180px] w-[130px]" alt="Short Stories">
            <span class="w-[100px] text-center font-k2d text-sm">Short Stories</span>
        </div>
    </div>
</div>

<!-- New Arrival Books Section -->
<div class="trending-books mt-[20px] h-auto bg-white py-5">
    <h3 class="mb-4 text-center font-serif text-[32px] text-slate-900">New Arrival Books</h3>
    <div id="bookCarousel" class="carousel flex flex-wrap justify-center gap-9">
        <!-- Book Items -->
        <div class="book flex flex-col items-center">
            <img src="/PothKade/public/img/0039076.jpg" class="h-[180px] w-[130px]" alt="Short Stories">
            <span class="w-[100px] text-center font-k2d text-sm">Short Stories</span>
        </div>
    </div>
</div>


<!-- Book Request Form (below on the page) -->
<div id="request-form" class="mt-10 flex min-h-screen items-center justify-center bg-gray-100">
    <div class="w-full max-w-md rounded-lg bg-white p-8 shadow-lg">
        <h2 class="mb-6 text-center text-2xl font-semibold text-gray-700">Request a Book</h2>

        <form action="/submit-book-request" method="POST">
            <!-- Name -->
            <div class="mb-4">
                <label class="block font-medium text-gray-700" for="name">Your Name</label>
                <input type="text" id="name" name="name" required 
                    class="mt-1 w-full rounded-md border px-4 py-2 focus:border-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-200"
                    placeholder="Enter your name">
            </div>

            <!-- Email -->
            <div class="mb-4">
                <label class="block font-medium text-gray-700" for="email">Email</label>
                <input type="email" id="email" name="email" required 
                    class="mt-1 w-full rounded-md border px-4 py-2 focus:border-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-200"
                    placeholder="Enter your email">
            </div>

            <!-- Book Title -->
            <div class="mb-4">
                <label class="block font-medium text-gray-700" for="book-title">Book Title</label>
                <input type="text" id="book-title" name="book_title" required 
                    class="mt-1 w-full rounded-md border px-4 py-2 focus:border-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-200"
                    placeholder="Enter the book title">
            </div>

            <!-- Author -->
            <div class="mb-4">
                <label class="block font-medium text-gray-700" for="author">Author</label>
                <input type="text" id="author" name="author" 
                    class="mt-1 w-full rounded-md border px-4 py-2 focus:border-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-200"
                    placeholder="Enter the author's name (Optional)">
            </div>

            <!-- Comments -->
            <div class="mb-4">
                <label class="block font-medium text-gray-700" for="comments">Additional Comments</label>
                <textarea id="comments" name="comments" rows="3" 
                    class="mt-1 w-full rounded-md border px-4 py-2 focus:border-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-200"
                    placeholder="Any additional information"></textarea>
            </div>

            <!-- Submit Button -->
            <div class="flex justify-center">
                <button type="submit" 
                    class="w-full rounded-md bg-indigo-600 px-4 py-2 text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                    Request Book
                </button>
            </div>
        </form>
    </div>
</div>