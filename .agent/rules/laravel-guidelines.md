---
trigger: always_on
---
# Laravel Blade & Tailwind CSS Guidelines

Ensure visual consistency and structural integrity in Laravel Blade templates:

1.  **Blade Includes & Partials**:
    - Use standard Blade `@include('partials.name')` for reusable UI elements and layouts.
    - **Avoid** creating or using Blade Components (`<x-name />`) unless explicitly asked.
    - Organize reusable chunks in a `partials` or `includes` directory.

2.  **Tailwind CSS Usage**:
    - **Utility-First**: Avoid `<style>` tags or inline `style="..."` attributes. Use Tailwind utility classes for all styling.
    - **Mobile-First**: Define styles for mobile first, then add responsiveness using modifiers (e.g., `class="block md:flex lg:grid"`).
    - **Consistency**: Use the project's defined theme colors and spacing (e.g., `bg-primary-500` instead of `bg-[#123456]`) if a config exists.

3.  **Structure**:
    - Ensure all semantic HTML tags are used correctly (e.g., `<button>` for actions, `<a>` for navigation).
    - Use standard Laravel directive syntax (`@if`, `@foreach`, `@auth`) for clarity.
