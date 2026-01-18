# CSS Architecture & Design System

This document outlines the technical design system for the Pablo Cirre Portfolio.

## Architecture: Modular CSS

We follow a modular approach inspired by ITCSS, but simplified for this project:

1.  **Variables (`modules/variables.css`)**: Design tokens.
2.  **Base (`modules/base.css`)**: Resets and global element styles.
3.  **Layout (`modules/layout.css`)**: Structure and the "Swiss Grid".
4.  **Components (`modules/components.css`)**: Interactive blocks (FAQs, Panels, Buttons).
5.  **Sections (`modules/sections.css`)**: Page-specific high-level blocks.

## Design Tokens (Consistency)

Always use these variables instead of hardcoded values:

### Colors
- `--accent-color`: #ff4400 (Vibrant Orange)
- `--bg-color`: Background contrast.
- `--panel-bg`: Secondary background for elevations.
- `--text-color`: Primary readability.

### Grid & Spacing
- **Swiss Grid**: Based on 8.33% increments (12 columns).
- **Default Padding**: `40px` (Desktop) / `20px` (Mobile).

## Component Guidelines

### FAQ Accordion
Uses semantic HTML `<details>` and `<summary>`.
- **Class**: `.faq-item`
- **Logic**: Styled via CSS with `!important` resets on `list-style` for cross-browser consistency.

### Data Panels
Used for metrics and cards.
- **Elevation**: Inset box-shadows for a "debossed" technical look.

## Performance Optimization

The modular files are concatenated into `assets/css/main.css` for production. 
Version control via `?v=XXX` is managed in `Components/header.php`.
