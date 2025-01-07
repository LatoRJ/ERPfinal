<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        function addColorField() {
            const colorsContainer = document.getElementById('colorsContainer');
            const colorField = document.createElement('div');
            colorField.classList.add('flex', 'space-x-4', 'mb-2');
            
            const colorInput = document.createElement('input');
            colorInput.type = 'text';
            colorInput.name = 'colors[]';
            colorInput.placeholder = 'Color';
            colorInput.classList.add('w-full', 'p-2', 'border', 'border-gray-300', 'rounded');
            colorField.appendChild(colorInput);
            
            const quantityInput = document.createElement('input');
            quantityInput.type = 'number';
            quantityInput.name = 'quantities[]';
            quantityInput.placeholder = 'Quantity';
            quantityInput.classList.add('w-full', 'p-2', 'border', 'border-gray-300', 'rounded');
            quantityInput.oninput = updateTotalPieces;
            colorField.appendChild(quantityInput);

            const removeButton = document.createElement('button');
            removeButton.type = 'button';
            removeButton.innerText = 'Remove';
            removeButton.classList.add('px-4', 'py-2', 'text-sm', 'text-white', 'bg-red-500', 'rounded');
            removeButton.onclick = () => {
                colorField.remove();
                updateTotalPieces();
            };
            colorField.appendChild(removeButton);

            colorsContainer.appendChild(colorField);
        }

        function updateTotalPieces() {
            const quantities = document.getElementsByName('quantities[]');
            let total = 0;
            for (const quantity of quantities) {
                total += parseInt(quantity.value) || 0;
            }
            document.getElementById('piece').value = total;
        }
    </script>
</head>
<body class="bg-gray-100">
    <div class="max-w-4xl mx-auto mt-10 bg-white p-8 rounded shadow">
        <h1 class="text-2xl font-bold text-gray-700 mb-6">Add New Product</h1>
        @if ($errors->any())
            <div class="bg-red-100 p-4 mb-6 rounded text-red-600">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
            @csrf
            <div>
                <label for="name" class="block text-gray-700 font-medium">Product Name</label>
                <input type="text" id="name" name="name" 
                    class="w-full p-2 border border-gray-300 rounded" value="{{ old('name') }}" required>
            </div>
            <div>
                <label for="category" class="block text-gray-700 font-medium">Category</label>
                <select id="category" name="Category_ID" 
                        class="w-full p-2 border border-gray-300 rounded" required>
                    <option value="1" {{ old('Category_ID') == 1 ? 'selected' : '' }}>iPhone</option>
                    <option value="2" {{ old('Category_ID') == 2 ? 'selected' : '' }}>iPad</option>
                    <option value="3" {{ old('Category_ID') == 3 ? 'selected' : '' }}>MacBook</option>
                    <option value="4" {{ old('Category_ID') == 4 ? 'selected' : '' }}>Accessories</option>
            
                </select>
            </div>
            <div>
                <label for="product_desc" class="block text-gray-700 font-medium">Product Description</label>
                <input type="text" id="product_desc" name="product_desc" 
                    class="w-full p-2 border border-gray-300 rounded" value="{{ old('name') }}" required>
            </div>
            <div>
                <label for="price" class="block text-gray-700 font-medium">Price</label>
                <input type="number" id="price" name="price" step="0.01" 
                    class="w-full p-2 border border-gray-300 rounded" value="{{ old('price') }}" required>
            </div>
            <div id="colorsContainer">
                <label class="block text-gray-700 font-medium mb-2">Available Colors and Quantities</label>
                <!-- Dynamically added color fields will appear here -->
            </div>
            <button type="button" onclick="addColorField()" 
                    class="px-4 py-2 text-white bg-[#22303F] rounded hover:bg-gray-600 mb-4">
                Add Color
            </button>
            <div>
                <label for="piece" class="block text-gray-700 font-medium">Total Pieces</label>
                <input type="number" id="piece" name="piece" 
                    class="w-full p-2 border border-gray-300 rounded" value="{{ old('piece') }}" readonly>
            </div>
            <div>
                <label for="image" class="block text-gray-700 font-medium">Product Image</label>
                <input type="file" id="image" name="image" 
                    class="w-full p-2 border border-gray-300 rounded" required>
            </div>
            <button type="submit" 
                    class="px-4 py-2 text-white bg-[#22303F] rounded hover:bg-gray-600">
                Add Product
            </button>
        </form>
    </div>
</body>
</html>
