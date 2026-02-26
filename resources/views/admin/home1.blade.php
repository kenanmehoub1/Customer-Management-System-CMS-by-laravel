@extends('admin.index')

@section('content')
<div class="products-container">
    <h1 class="page-title">Add New Product</h1>

    <div class="product-form-container">
        <form class="product-form" id="addProductForm">
            @csrf
            <div class="form-group">
                <label for="productName">Product Name</label>
                <input type="text" id="productName" name="name" required placeholder="Enter product name">
            </div>

            <div class="form-group">
                <label for="productDescription">Product Description</label>
                <textarea id="productDescription" name="description" rows="4" required placeholder="Enter product description"></textarea>
            </div>

            <div class="form-group">
                <label for="productPrice">Price ($)</label>
                <input type="number" id="productPrice" name="price" min="0" step="0.01" required placeholder="0.00">
            </div>

            <div class="form-group">
                <label for="productImage">Product Image</label>
                <input type="file" id="productImage" name="image" accept="image/*" class="file-input" required>
            </div>

            <div class="form-actions">
                <button type="submit" class="submit-btn">
                    <i class="fas fa-plus-circle"></i> Add Product
                </button>
                <button type="button" class="cancel-btn">
                    <i class="fas fa-times"></i> Cancel
                </button>
            </div>
        </form>
    </div>
  <a class="show-product" href="/">show page product</a>
</div>

<style>
<style>
.show-product{
    width: fit-content;
    margin: 15px auto;
    padding: 12px 25px;
    background-color: #2eb5cc;
    color: white;
    border: none;
    border-radius: 5px;
    font-size: 16px;
    cursor: pointer;
    transition: background-color 0.3s;
    display: flex;
    align-items: center;
    gap: 8px;
    text-decoration: none;
}
.show-product:hover{
    background-color: #2752ae;
}

.products-container {
    padding: 20px;
    transition: margin-right 0.3s ease;
    margin-right: 0;
}

/* عندما تكون القائمة الجانبية مفتوحة */
.sidebar-open .products-container,
body:not(.sidebar-collapse) .products-container {
    margin-right: 0; /* إلغاء الهامش الأيمن */
}

.page-title {
    text-align: center;
    margin: 20px auto 30px;
    color: #2c3e50;
    font-size: 28px;
    border-bottom: 2px solid #3498db;
    padding-bottom: 10px;
    display: block;
    width: fit-content;
}

.product-form-container {
    background: white;
    border-radius: 10px;
    padding: 30px;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
    max-width: 700px;
    margin: 0 auto;
}

/* تحسينات للقائمة الجانبية */
.sidebar {
    z-index: 1000;
}

.main-header {
    z-index: 1001;
}

/* منع الانزياح عند فتح القائمة */
.wrapper {
    overflow-x: hidden;
}

.content-wrapper {
    transition: none !important;
}

/* إصلاح المشكلة في الأجهزة الصغيرة */
@media (max-width: 767.98px) {
    .products-container {
        padding: 15px;
        margin-right: 0 !important;
    }

    .sidebar-open .products-container {
        transform: none !important;
    }
}

/* تحسينات إضافية */
body:not(.sidebar-collapse) .content-wrapper {
    margin-right: 0 !important;
}

body.sidebar-open .content-wrapper {
    margin-right: 0 !important;
    transform: none !important;
}

.product-form {
    display: flex;
    flex-direction: column;
    gap: 20px;
}

.form-group {
    display: flex;
    flex-direction: column;
}

.form-group label {
    margin-bottom: 8px;
    font-weight: 600;
    color: #2c3e50;
}

.form-group input,
.form-group textarea {
    padding: 12px 15px;
    border: 1px solid #ddd;
    border-radius: 5px;
    font-size: 16px;
    transition: border-color 0.3s;
}

.form-group input:focus,
.form-group textarea:focus {
    border-color: #3498db;
    outline: none;
    box-shadow: 0 0 0 2px rgba(52, 152, 219, 0.2);
}

.file-input {
    padding: 8px 0;
}

.form-actions {
    display: flex;
    gap: 15px;
    justify-content: flex-end;
    margin-top: 20px;
}

.submit-btn {
    padding: 12px 25px;
    background-color: #2ecc71;
    color: white;
    border: none;
    border-radius: 5px;
    font-size: 16px;
    cursor: pointer;
    transition: background-color 0.3s;
    display: flex;
    align-items: center;
    gap: 8px;
}

.submit-btn:hover {
    background-color: #27ae60;
}

.cancel-btn {
    padding: 12px 25px;
    background-color: #e74c3c;
    color: white;
    border: none;
    border-radius: 5px;
    font-size: 16px;
    cursor: pointer;
    transition: background-color 0.3s;
    display: flex;
    align-items: center;
    gap: 8px;
}

.cancel-btn:hover {
    background-color: #c0392b;
}

/* Responsive adjustments */
@media (max-width: 1200px) {
    .products-container {
        margin-right: 0;
        padding: 15px;
    }
}

@media (max-width: 768px) {
    .form-actions {
        flex-direction: column;
    }

    .submit-btn, .cancel-btn {
        width: 100%;
        justify-content: center;
    }

    .product-form-container {
        padding: 20px;
    }
}
</style>
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Form submission
        const form = document.getElementById('addProductForm');
        form.addEventListener('submit', function(e) {
            e.preventDefault();

            // Basic validation
            const name = document.getElementById('productName').value;
            const description = document.getElementById('productDescription').value;
            const price = document.getElementById('productPrice').value;
            const image = document.getElementById('productImage').files[0];

            if (!name || !description || !price || !image) {
                alert('Please fill in all fields');
                return;
            }

            // Here you would typically submit the form via AJAX or let it submit normally
            alert('Product added successfully!');
            form.reset();
        });

        // Cancel button
        document.querySelector('.cancel-btn').addEventListener('click', function() {
            if (confirm('Are you sure you want to cancel? All changes will be lost.')) {
                form.reset();
            }
        });
    });
</script>
@endsection
