---
trigger: always_on
---

# Alpine.js Best Practices

When writing Alpine.js code, follow these guidelines to ensure maintainability and performance:

1.  **Shorthand Syntax**:
    - Use `@` instead of `x-on:` (e.g., `@click="Action"`).
    - Use `:` instead of `x-bind:` (e.g., `:class="{ 'hidden': !open }"`).

2.  **Prevent Flash of Unstyled Content (FOUC)**:
    - Always add `x-cloak` to elements that should be hidden until Alpine loads.
    - Ensure the CSS `[x-cloak] { display: none !important; }` is present in the project styles.

3.  **Encapsulation**:
    - For simple components (toggles, simple counters), inline `x-data` is acceptable.
    - For complex logic or reusable components, extract the logic into a dedicated function using `Alpine.data`.
      ```javascript
      document.addEventListener('alpine:init', () => {
          Alpine.data('dropdown', () => ({
              open: false,
              toggle() { this.open = !this.open }
          }))
      })
      ```

4.  **State Management**:
    - Use explicit and descriptive variable names (e.g., `isModalOpen`, `isLoadingData`).
    - Keep the state (`x-data`) as close as possible to the usage context (Locality of Behavior).