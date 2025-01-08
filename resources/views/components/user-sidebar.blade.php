<form method="GET" action="{{ route('home') }}">
    <div class="w-[100%] bg-white px-5 p-6">
        <h2 class="text-xl font-bold mb-4 text-gray-700">CATEGORY</h2>
        <ul class="space-y-3">
            @foreach ($categories as $category)
                <li>
                    <label class="flex items-center space-x-2">
                        <input 
                            type="checkbox" 
                            name="categories[]" 
                            value="{{ $category->Category_ID }}" 
                            id="category-{{ $category->Category_ID }}" 
                            class="rounded-full"
                            {{ in_array($category->Category_ID, request('categories', [])) ? 'checked' : '' }}
                        >
                        <span>{{ $category->Category_Name }}</span>
                    </label>
                </li>
            @endforeach
        </ul>
        <br>
        <button type="submit" class="bg-gray-800 hover:bg-gray-600 text-white px-4 py-1 rounded">Apply Filter</button>
    </div>
</form>
