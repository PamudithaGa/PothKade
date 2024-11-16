<body class="bg-[#D9D9D9] font-sans leading-normal tracking-normal">
    <div class="flex">
        <!-- Sidebar -->
        <div class="h-screen w-1/5 bg-gray-900 shadow-lg">
            <div class="mt-[140px] flex items-center justify-center">
                <img class="h-16 w-16 rounded-full" src="https://via.placeholder.com/180" alt="Admin Profile Picture">
            </div>

            <nav class="mt-[40px]">
                <ul>
                    <li class="px-6 py-2 text-gray-200 hover:bg-gray-700"><a href="#">Admins</a></li>
                    <li class="px-6 py-2 text-gray-200 hover:bg-gray-700"><a href="#">Users</a></li>
                    <li class="px-6 py-2 text-gray-200 hover:bg-gray-700"><a href="#">Books</a></li>
                    <li class="px-6 py-2 text-gray-200 hover:bg-gray-700"><a href="#">Stationeries</a></li>
                    <li class="px-6 py-2 text-gray-200 hover:bg-gray-700"><a href="#">Gift Packs</a></li>
                    <li class="px-6 py-2 text-gray-200 hover:bg-gray-700"><a href="#">Orders</a></li>
                    <li class="px-6 py-2 text-gray-200 hover:bg-gray-700"><a href="<?= BASE_URL ?>login">Logout</a></li>
                </ul>
            </nav>
        </div>

        <!-- Main Content -->
        <div class="w-4/5 bg-[#D9D9D9] p-8">
            <header class="mb-8 mt-[80px] flex items-center justify-between rounded-lg bg-white p-4 shadow-md">
                <h1 class="text-2xl font-bold text-gray-700">Books Management Dashboard</h1>
                <div class="flex items-center">
                    <span class="mr-4 text-gray-700">Welcome, </span>
                    <a href="<?= BASE_URL ?>login">
                        <button class="rounded bg-gray-900 px-4 py-2 text-white">Logout</button>
                    </a>
                </div>
            </header>

            <div class="mb-8 rounded-lg bg-white p-6 shadow-md">
                <h2 class="mb-4 text-xl font-semibold text-gray-800">Manage Books</h2>

                <!-- Add book Form -->
                <form method="POST" enctype="multipart/form-data" action="<?php echo BASE_URL; ?>book/add" class="mb-6"
                    onsubmit="return validateForm()">
                    <h3 class="mb-4 text-lg font-semibold text-gray-700">Add Books</h3>
                    <div class="mb-4 grid grid-cols-2 gap-4">
                        <input type="text" name="name" class="w-full rounded border px-3 py-2" placeholder="Book Name"
                            required>
                        <input type="text" name="author" class="w-full rounded border px-3 py-2" placeholder="Author"
                            required>
                        <input type="number" name="price" id="price" class="w-full rounded border px-3 py-2"
                            placeholder="Book Price" required>
                        <input type="number" name="isbn" id="isbn" class="w-full rounded border px-3 py-2"
                            placeholder="ISBN" required>
                        <select name="language" class="w-full rounded border px-3 py-2" required>
                            <option value="" disabled selected>Language</option>
                            <option value="Sinhala">Sinhala</option>
                            <option value="English">English</option>
                            <option value="Tamil">Tamil</option>
                            <option value="Russian">Russian</option>
                            <option value="Japan">Japan</option>
                            <!-- <option value="Jewelry">Any Other</option> -->
                        </select>                        
                        <select name="category" class="w-full rounded border px-3 py-2" required>
                            <option value="" disabled selected>Category</option>
                            <option value="Fiction">Fiction</option>
                            <option value="Children's Book">Children's Book</option>
                            <option value="Novels">Novels</option>
                            <option value="Translations">Translations</option>
                            <option value="Short Stories">Short Stories</option>
                            <option value="News Papers And Magazines">News Papers And Magazines</option>
                        </select>
                        <input type="number" name="pages" id="pages" class="w-full rounded border px-3 py-2"
                            placeholder="Pages" required>
                        <input type="number" name="stock" id="stock" class="w-full rounded border px-3 py-2"
                            placeholder="Stock of Books" required>
                        <input type="text" name="description" class="w-full rounded border px-3 py-2"
                            placeholder="A Text From The Book" required>
                        <input type="file" name="image" class="w-full rounded border px-3 py-2" required>
                        <select name="spotlight" class="w-full rounded border px-3 py-2">
                            <option value="" disabled selected>Spotlight Selections</option>
                            <option value="Trendings">Trendings</option>
                            <option value="Top Sellers">Top sellers</option>
                            <option value="New Arrivals">New Arrivals</option>
                            <option value="Features">Features</option>
                        </select> 
                    </div>
                    <button class="rounded bg-red-500 px-4 py-2 text-white" type="reset">Cancel</button>
                    <button class="rounded bg-green-500 px-4 py-2 text-white" type="submit">Add Book</button>
                </form>

                <!-- JavaScript for Validation -->
                <script>
                function validateForm() {
                    const addPriceField = document.getElementById('price');
                    const updatePriceField = document.getElementById('updatePrice');

                    // Check if addPriceField exists and validate
                    if (addPriceField && parseFloat(addPriceField.value) < 0) {
                        alert('Price cannot be a negative number.');
                        return false;
                    }

                    // Check if updatePriceField exists and validate
                    if (updatePriceField && parseFloat(updatePriceField.value) < 0) {
                        alert('Price cannot be a negative number.');
                        return false;
                    }

                    return true; // Allow form submission if all validations pass
                }

                function showUpdateForm(bookId, name, price, category, description) {
                    const updateCard = document.getElementById('updatebookCard');
                    updateCard.style.display = 'block';

                    // Populate the form fields with existing book details
                    document.querySelector('input[name="book_id"]').value = bookId;
                    document.querySelector('input[name="new_name"]').value = name;
                    document.getElementById('updatePrice').value = price; // Set price field with the id 'updatePrice'
                    document.querySelector('select[name="new_category"]').value = category;
                    document.querySelector('input[name="new_description"]').value = description;
                }

                function filterbooks() {
                    const input = document.getElementById('searchInput').value.toLowerCase();
                    const bookRows = document.querySelectorAll('.book-row');

                    bookRows.forEach(row => {
                        const name = row.querySelector('.book-name').textContent.toLowerCase();
                        if (name.includes(input)) {
                            row.style.display = '';
                        } else {
                            row.style.display = 'none';
                        }
                    });
                }
                </script>

                <!-- Update book Card (Initially Hidden) -->
                <div id="updatebookCard" class="mb-8 hidden rounded-lg bg-white p-6 shadow-md">
                    <h3 class="mb-4 text-lg font-semibold text-gray-700">Update Book</h3>
                    <form method="POST" enctype="multipart/form-data" action="<?php echo BASE_URL; ?>book/update"
                        onsubmit="return validateForm()">
                        <input type="hidden" name="book_id">
                        <div class="mb-4 grid grid-cols-2 gap-4">
                            <input type="text" name="new_name" class="w-full rounded border px-3 py-2"
                                placeholder="New Book Name">
                            <input type="number" name="new_price" id="updatePrice"
                                class="w-full rounded border px-3 py-2" placeholder="New Book Price">
                            <!-- Added id="updatePrice" -->
                            <select name="new_category" class="w-full rounded border px-3 py-2" required>
                                <option value="" disabled>Select Category</option>
                                <option value="Costumes">Costumes</option>
                                <option value="Jewelry">Jewelry</option>
                            </select>
                            <input type="text" name="new_description" class="w-full rounded border px-3 py-2"
                                placeholder="New Book Description">
                            <input type="file" name="image" class="w-full rounded border px-3 py-2">
                        </div>
                        <button class="rounded bg-red-500 px-4 py-2 text-white" type="reset">Cancel</button>
                        <button class="rounded bg-blue-500 px-4 py-2 text-white" type="submit">Update Book</button>
                    </form>
                </div>





                <div class="mb-6 flex items-center">
                    <h3 class="mr-4 text-xl font-semibold text-gray-800">Book List</h3>
                </div>
                <div>
                    <input type="text" id="searchInput" onkeyup="filterBooks()" placeholder="Search By Name"
                        class="w-full rounded border px-3 py-2" />
                </div>

                <div class="overflow-x-auto">
                    <table class="min-w-full bg-white">
                        <thead>
                            <tr>
                                <th class="px-4 py-2 text-left text-gray-600">ISBN</th>
                                <th class="px-4 py-2 text-left text-gray-600">Name</th>
                                <th class="px-4 py-2 text-left text-gray-600">Price</th>
                                <th class="px-4 py-2 text-left text-gray-600">More</th>
                                <th class="px-4 py-2 text-left text-gray-600">Image</th>
                                <th class="px-4 py-2 text-left text-gray-600">Spotlight</th>
                                <th class="px-4 py-2 text-left text-gray-600">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
        $bookModel = $this->loadModel("BookModel");
        $books = $bookModel->getAllBooks();
    if (!empty($books)) : 
        foreach ($books as $bookModel) : ?>










                            <tr class="book-row">
                                <td class="px-4 py-2"><?php echo htmlspecialchars($bookModel['isbn']); ?></td>
                                <td class="book-name px-4 py-2"><?php echo htmlspecialchars($bookModel['name']); ?></td>
                                <td class="px-4 py-2"><?php echo htmlspecialchars($bookModel['price']); ?></td>
                                <td class="px-4 py-2">
                                    <h class="font-semibold">Author: </h> <?php echo htmlspecialchars($bookModel['author']); ?><br>
                                    <h class="font-semibold">Language: </h><?php echo htmlspecialchars($bookModel['language']); ?><br>
                                    <h class="font-semibold">Avalabitily: </h><?php echo htmlspecialchars($bookModel['stock']); ?><br>
                                    <h class="font-semibold">Category: </h><?php echo htmlspecialchars($bookModel['category']); ?><br>
                                    <h class="font-semibold">Pages: </h><?php echo htmlspecialchars($bookModel['pages']); ?><br>
                                </td>

                                <td class="px-4 py-2">
                                    <img src="<?php echo htmlspecialchars($bookModel['image_url']); ?>" alt="Book Image"
                                        class="h-16 w-16 object-cover">
                                </td>

                                <td class="px-4 py-2">
                                    <?php echo htmlspecialchars($bookModel['spotlight']); ?><br>
                                </td>

                                
                                <td class="px-4 py-2">
                                    <button
                                        onclick="showUpdateForm(<?php echo $bookModel['bookid']; ?>, '<?php echo addslashes($bookModel['name']); ?>', <?php echo $bookModel['price']; ?>, '<?php echo addslashes($bookModel['category']); ?>', '<?php echo addslashes($bookModel['description']); ?>')"
                                        class="rounded bg-blue-500 px-4 py-2 text-white">Update</button>
                                        <form method="POST" action="<?= BASE_URL . 'deleteBook' ?>">
    <input type="hidden" name="bookid" value="<?= htmlspecialchars($book['bookid']) ?>">
    <button type="submit" class="rounded bg-red-500 px-4 py-2 text-white">Delete</button>
</form>

                                </td>                                
                            </tr>
                            <?php 
                endforeach;
            else: 
            ?>
                            <tr>
                                <td colspan="6" class="px-4 py-2 text-center text-gray-500">Any Book Not Found.</td>
                            </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>



                
</body>

</html>