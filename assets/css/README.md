# Modular CSS Architecture

The CSS for this project is organized into modular files located in `assets/css/modules/`.
These modules are concatenated into `assets/css/main.css` for production use.

## Structure

- **variables.css**: CSS Variables (Custom Properties) for colors, spacing, etc.
- **base.css**: Reset, typography base, global tag styles.
- **layout.css**: Grid system, header, footer, container logic.
- **components.css**: Reusable UI components (Buttons, Panels, Cards, Mega Menu).
- **sections.css**: Page-specific section styles (Hero, Contact, About).
- **utilities.css**: Helper classes and animations.

## How to make changes

1.  **NEVER** edit `assets/css/main.css` directly.
2.  Edit the appropriate file in `assets/css/modules/`.
3.  Run the build script to regenerate `main.css`.

## Build Script

Run the python script to rebuild CSS:

```bash
python3 Tools/build_css.py
```
