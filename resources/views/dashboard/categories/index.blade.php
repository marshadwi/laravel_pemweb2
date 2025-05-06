<x-layouts.app :title="_('Product Categories')">

    <flux:heading>Product Categories</flux:heading>
    <flux:description>Manage your product categories here.</flux:description>
    <flux:separator variant="subtle"/>
    
<div class="mt-4 mb-4">
    <flux:button
    icon="plus"
    variant="primary"
    href="{{ route('categories.create') }}">
    Create New Category
    </flux:button>
</div>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Image</th>
            <th>Name</th>
            <th>Slug</th>
            <th>Description</th>
            <th>Created At</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($categories as $category)
        <tr>
            <td>{{ $category-> id }}</td>
            <td></td>
            <td>{{ $category-> name }}</td>
            <td>{{ $category-> slug }}</td>
            <td>{{ $category-> description }}</td>
            <td>{{ $category-> created_at }}</td>
            <td>

            </td>
        </tr>
        @endforeach
    </tbody>
</table>
</x-layouts.app>