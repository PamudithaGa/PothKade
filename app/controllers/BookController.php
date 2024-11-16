<?php
class BookController extends Controller {

//Add New Books
public function addNewBook() {
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $productModel = $this->loadModel("BookModel");
        $name = trim($_POST["name"] ?? '');
        $author = trim($_POST["author"] ?? '');
        $price = trim($_POST["price"] ?? '');
        $isbn = trim($_POST["isbn"] ?? '');
        $language = trim($_POST["language"] ?? '');
        $category = trim($_POST["category"] ?? '');
        $pages = trim($_POST["pages"] ?? '');
        $stock = trim($_POST["stock"] ?? '');
        $description = trim($_POST["description"] ?? '');
        $spotlight = trim($_POST["spotlight"] ?? '');

        if ($price < 0) {
            echo "Price Cannot Be A Negative Number.";
            return;
        }

        if ($pages < 0) {
            echo "Pages Cannot Be A Negative Number.";
            return;
        }

        if ($stock < 0) {
            echo "Stock Cannot Be A Negative Number.";
            return;
        }


        $image = $_FILES['image'];
        $image_url = null;
        if (isset($image) && $image['error'] === UPLOAD_ERR_OK) {
            $allowedTypes = ['image/jpeg', 'image/png', 'image/gif'];
            $maxSize = 4 * 1024 * 1024;
            if (!in_array($image['type'], $allowedTypes)) {
                echo "Invalid file type. Please upload a JPEG, PNG, or GIF image.";
                return;
            }
            if ($image['size'] > $maxSize) {
                echo "File too large. Maximum allowed size is 4MB.";
                return;
            }

            $imageName = uniqid() . '-' . basename($image['name']);
            $targetDirectory = "img/";
            $targetFile = $targetDirectory . $imageName;
            if (move_uploaded_file($image['tmp_name'], $targetFile)) {
                $image_url = $targetFile;
            } else {
                echo "Error uploading file.";
                return;
            }
        } else {
            echo "File upload error: " . $image['error'];
            return;
        }

        if ($productModel->addBook($name, $author, $price, $isbn, $language, $category, $pages, $stock, $description, $image_url, $spotlight)) {
            header('Location: ' . BASE_URL . 'AdminDashboard');
            exit;
        } else {
            echo "Failed to add product.";
        }
    }
}

//View products
public function viewBooks() {
    $bookModel = $this->loadModel("BookModel");
    $books = $bookModel->getAllBooks();
    $this->renderView('adminDashboard', ["books" => $books]);
}


// Delete the product
public function deleteBook() {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $bookModel = $this->loadModel("BookModel");
        $bookId = trim($_POST["bookid"]);

        // Debug: Check if bookId is received
        if (empty($bookId)) {
            die("Book ID is missing or invalid.");
        }

        if ($bookModel->removeBook($bookId)) {
            header('Location: ' . BASE_URL . 'AdminDashboard');
            exit;
        } else {
            echo "Failed to delete product.";
        }
    }
}









    
}