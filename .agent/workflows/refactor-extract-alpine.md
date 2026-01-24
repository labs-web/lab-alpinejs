---
description: Refactor inline Alpine.js logic into a reusable Alpine.data object
---
1.  **Identify Target**: Locate the `x-data` object in the currently open file that is becoming too complex.
2.  **Create Script Block**:
    - Check if there is already a `@push('scripts')` or a script section.
    - If not, create a `<script>` tag at the bottom of the file or in the appropriate layout stack.
3.  **Extract Logic**:
    - Define a new function registered with `Alpine.data('componentName', () => ({ ... }))`.
    - Move all properties and methods from the inline `x-data` JSON to this new function.
4.  **Update HTML**:
    - Replace the original `x-data="{ ... }"` with `x-data="componentName"`.
5.  **Verify**: Ensure all references (this.prop) are correctly handled in the extracted function.
