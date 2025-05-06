<x-layouts.app :title="_('Create Product Category')">
    <flux:heading>Create Product Category</flux:heading>
    <flux:description>
        Fill i the details to create a new peoduct category.
    </flux:description>
    <flux:separator variant="subtle"/>

    <form 
        action="{{ route('categories.store') }}">
        method="POST"
        enctype="multipart/form-data">
        @csrf
        
        <flux:input name="name" label="Name" placeholder="Enter name"
            required 
            class="mb-4"
            value="{{ old('name') }}" />

        <flux:input name="slug" label="Slug" placeholder="Enter slug"
            required 
            class="mb-4"
            value="{{ old('slug') }}" />

        <flux:input name="description" label="Description" 
            placeholder="Enter description"
            required 
            class="mb-4"
            value="{{ old('description') }}" />

        <flux:input name="image" label="Image"
            type="file" 
            accept="image/*"
            value="{{ old('name') }}" />

        <flux:button
            type="submit"
            variant="primary"
            class="mt-4">
            Save
        </flux:button>

        
    </form>
</x-layouts.app>