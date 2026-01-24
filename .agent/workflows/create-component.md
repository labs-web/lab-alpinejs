---
description: Create a new reusable Alpine.js UI component in Laravel Blade
---
1.  **Prompt for Component Name**: Ask the user for the name of the component (e.g., `Dropdown`, `Modal`, `Alert`).
2.  **Create File**: Create a new Blade file in `resources/views/components/` (e.g., `resources/views/components/dropdown.blade.php`).
3.  **Insert Boilerplate**: Write the basic structure with `x-data`:
    ```html
    <div x-data="{ open: false }" class="relative">
        <!-- Trigger -->
        <button @click="open = !open" type="button" :aria-expanded="open">
            Toggle
        </button>

        <!-- Content -->
        <div x-show="open"
             @click.outside="open = false"
             x-transition
             x-cloak
             class="absolute mt-2 w-full bg-white border rounded shadow-lg">
            {{ $slot }}
        </div>
    </div>
    ```
4.  **Confirmation**: Inform the user the component is created and how to use it (`<x-dropdown>...</x-dropdown>`).
