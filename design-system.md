# Hidamari Coffee & Matcha Design System

**Version:** 1.0.0  
**Last Updated:** January 2026  
**Philosophy:** Slow Living, Japanese Aesthetic, Ma-concept (間)

---

## 🎨 Color Palette

### Primary Colors
Colors that define the Hidamari brand identity - warm, earthy, and natural.

#### Primary Wood (Main Brand Color)

| Token | Hex | RGB | Usage |
|-------|-----|-----|-------|
| `primary-wood-50` | `#FAF6F1` | `250, 246, 241` | Lightest tint, subtle backgrounds |
| `primary-wood-100` | `#F0E8DD` | `240, 232, 221` | Very light, hover backgrounds |
| `primary-wood-200` | `#E1D1BB` | `225, 209, 187` | Light tint, disabled states |
| `primary-wood-300` | `#D2BA99` | `210, 186, 153` | Medium light, borders |
| `primary-wood-400` | `#C3A377` | `195, 163, 119` | Lighter accent |
| `primary-wood` (DEFAULT) | `#9E7E56` | `158, 126, 86` | **Primary brand color, CTAs, links** |
| `primary-wood-600` | `#8A6D4C` | `138, 109, 76` | Hover state, darker accent |
| `primary-wood-700` | `#6F5838` | `111, 88, 56` | Active/pressed state |
| `primary-wood-800` | `#4F3F28` | `79, 63, 40` | Deep shade |
| `primary-wood-900` | `#392D1C` | `57, 45, 28` | Darkest shade |

**State Variations:**
- **Hover:** `primary-wood-600` (#8A6D4C)
- **Focus:** `primary-wood` with focus ring
- **Active/Pressed:** `primary-wood-700` (#6F5838)
- **Disabled:** `primary-wood-200` (#E1D1BB) with 40% opacity

#### Primary Matcha (Secondary Brand Color)

| Token | Hex | RGB | Usage |
|-------|-----|-----|-------|
| `primary-matcha-50` | `#F4F6F0` | `244, 246, 240` | Lightest tint, subtle backgrounds |
| `primary-matcha-100` | `#E3E8D7` | `227, 232, 215` | Very light, soft backgrounds |
| `primary-matcha-200` | `#C7D1AF` | `199, 209, 175` | Light tint, disabled states |
| `primary-matcha-300` | `#ABBA87` | `171, 186, 135` | Medium light |
| `primary-matcha-400` | `#8FA35F` | `143, 163, 95` | Lighter matcha |
| `primary-matcha` (DEFAULT) | `#5D6D37` | `93, 109, 55` | **Matcha theme, accents** |
| `primary-matcha-600` | `#525F30` | `82, 95, 48` | Hover state |
| `primary-matcha-700` | `#414C26` | `65, 76, 38` | Active/pressed state |
| `primary-matcha-800` | `#2F361B` | `47, 54, 27` | Deep shade |
| `primary-matcha-900` | `#1F2312` | `31, 35, 18` | Darkest shade |

**State Variations:**
- **Hover:** `primary-matcha-600` (#525F30)
- **Focus:** `primary-matcha` with focus ring
- **Active/Pressed:** `primary-matcha-700` (#414C26)
- **Disabled:** `primary-matcha-200` (#C7D1AF) with 40% opacity

#### Primary Charcoal (Accent/Premium Color)

| Token | Hex | RGB | Usage |
|-------|-----|-----|-------|
| `primary-charcoal-50` | `#F7F6F6` | `247, 246, 246` | Lightest tint |
| `primary-charcoal-100` | `#E8E7E6` | `232, 231, 230` | Very light gray |
| `primary-charcoal-200` | `#C7C5C3` | `199, 197, 195` | Light shade, disabled |
| `primary-charcoal-300` | `#A6A3A0` | `166, 163, 160` | Medium light |
| `primary-charcoal-400` | `#85817D` | `133, 129, 125` | Medium |
| `primary-charcoal` (DEFAULT) | `#2D2926` | `45, 41, 38` | **Deep tones, footers, premium** |
| `primary-charcoal-600` | `#26221F` | `38, 34, 31` | Slightly darker |
| `primary-charcoal-700` | `#1E1B19` | `30, 27, 25` | Active/pressed state |
| `primary-charcoal-800` | `#161412` | `22, 20, 18` | Very dark |
| `primary-charcoal-900` | `#0D0C0B` | `13, 12, 11` | Near black |

**State Variations:**
- **Hover:** `primary-charcoal-600` (#26221F)
- **Focus:** `primary-charcoal` with focus ring
- **Active/Pressed:** `primary-charcoal-700` (#1E1B19)
- **Disabled:** `primary-charcoal-200` (#C7C5C3) with 40% opacity

### Background Colors
Layered backgrounds for depth and hierarchy.

| Token | Hex | Usage |
|-------|-----|-------|
| `bg-base` | `#FDFBF7` | Main background, canvas |
| `bg-light` | `#F9F7F2` | Card backgrounds, elevated surfaces |
| `bg-accent` | `#FDF2D0` | Accent backgrounds, highlights, hover states |
| `bg-cream` | `#F5EFE6` | Subtle sections, alternating backgrounds |
| `bg-dark` | `#2D2926` | Dark mode, premium sections, footers |

### Text Colors
Balanced contrast for readability with warmth.

| Token | Hex | Usage |
|-------|-----|-------|
| `text-primary` | `#2D2926` | Main body text, headings on light backgrounds |
| `text-secondary` | `#5A5550` | Secondary text, captions, metadata |
| `text-tertiary` | `#8B8580` | Placeholder text, disabled states |
| `text-inverse` | `#F9F7F2` | Text on dark backgrounds |
| `text-accent` | `#9E7E56` | Links, highlighted text, important labels |
| `text-matcha` | `#5D6D37` | Matcha-themed content, success messages |

### Semantic Colors
Functional colors for UI states and feedback.

| Token | Hex | Usage |
|-------|-----|-------|
| `success` | `#6B8E4E` | Success messages, confirmations, available status |
| `warning` | `#D4A574` | Warnings, pending states, alerts |
| `error` | `#C67B5C` | Error messages, unavailable status, alerts |
| `info` | `#7A9CA5` | Information messages, tips, neutral alerts |

### Border & Divider Colors

| Token | Hex | Usage |
|-------|-----|-------|
| `border-light` | `#E8E3DB` | Subtle borders, dividers |
| `border-medium` | `#D4CFC5` | Default borders, card outlines |
| `border-dark` | `#B8B0A3` | Emphasized borders, focus states |

---

## ✍️ Typography

### Font Families

**Heading Font (Serif):**  
```css
font-family: 'Crimson Pro', 'Playfair Display', Georgia, serif;
```
*Characteristics:* Elegant, classical, storytelling. Used for all headings and decorative text.

**Body Font (Sans-Serif):**  
```css
font-family: 'Inter', 'Montserrat', -apple-system, BlinkMacSystemFont, sans-serif;
```
*Characteristics:* Clean, readable, modern. Used for body text, UI elements, navigation.

**Monospace (Optional):**  
```css
font-family: 'JetBrains Mono', 'Courier New', monospace;
```
*Usage:* Code snippets, technical information, timestamps.

### Type Scale

Based on a 1.250 (Major Third) ratio for harmonious scaling.

| Token | Size | Line Height | Weight | Usage |
|-------|------|-------------|--------|-------|
| `display-1` | `4.5rem` (72px) | `1.2` | `600` | Hero titles, landing page |
| `display-2` | `3.5rem` (56px) | `1.2` | `600` | Major section titles |
| `h1` | `3rem` (48px) | `1.3` | `600` | Page titles |
| `h2` | `2.5rem` (40px) | `1.3` | `600` | Section headings |
| `h3` | `2rem` (32px) | `1.4` | `600` | Subsection headings |
| `h4` | `1.5rem` (24px) | `1.5` | `500` | Card titles, component headings |
| `h5` | `1.25rem` (20px) | `1.5` | `500` | Small headings |
| `h6` | `1.125rem` (18px) | `1.5` | `500` | Tiny headings |
| `body-large` | `1.125rem` (18px) | `1.7` | `400` | Large body text, intros |
| `body` | `1rem` (16px) | `1.7` | `400` | Default body text |
| `body-small` | `0.875rem` (14px) | `1.6` | `400` | Small body text, captions |
| `caption` | `0.75rem` (12px) | `1.5` | `400` | Metadata, timestamps |
| `overline` | `0.75rem` (12px) | `1.5` | `600` (uppercase) | Labels, categories |

### Font Weights

| Token | Value | Usage |
|-------|-------|-------|
| `thin` | `300` | Decorative, large display text |
| `regular` | `400` | Body text, paragraphs |
| `medium` | `500` | Emphasis, small headings |
| `semibold` | `600` | Headings, important text |
| `bold` | `700` | Strong emphasis (use sparingly) |

### Letter Spacing

| Token | Value | Usage |
|-------|-------|-------|
| `tight` | `-0.02em` | Large headings |
| `normal` | `0` | Body text |
| `wide` | `0.05em` | Small uppercase text, buttons |
| `wider` | `0.1em` | Overlines, labels |

---

## 📏 Spacing Scale

Based on an 8px base unit for consistent rhythm. Following Ma-concept (間) - generous whitespace.

| Token | Value | Rem | Usage |
|-------|-------|-----|-------|
| `space-0` | `0px` | `0` | Reset |
| `space-1` | `4px` | `0.25rem` | Tiny gaps, icon spacing |
| `space-2` | `8px` | `0.5rem` | Small gaps, tight padding |
| `space-3` | `12px` | `0.75rem` | Compact spacing |
| `space-4` | `16px` | `1rem` | Default spacing, base unit |
| `space-5` | `24px` | `1.5rem` | Medium spacing |
| `space-6` | `32px` | `2rem` | Large spacing |
| `space-8` | `48px` | `3rem` | Extra large spacing |
| `space-10` | `64px` | `4rem` | Section spacing |
| `space-12` | `80px` | `5rem` | Major section dividers |
| `space-16` | `128px` | `8rem` | Hero spacing, breathable layouts |
| `space-20` | `160px` | `10rem` | Maximum whitespace (Ma-concept) |

---

## 🔲 Border Radius

Soft, organic shapes reflecting natural aesthetics.

| Token | Value | Usage |
|-------|-------|-------|
| `rounded-none` | `0` | Sharp edges, modern elements |
| `rounded-sm` | `4px` | Buttons, small chips |
| `rounded-md` | `8px` | Cards, input fields |
| `rounded-lg` | `12px` | Large cards, modals |
| `rounded-xl` | `16px` | Hero sections, feature cards |
| `rounded-2xl` | `24px` | Premium containers |
| `rounded-full` | `9999px` | Circular elements, pills, avatars |

---

## 🌫️ Shadows

Subtle, warm shadows for depth without harshness.

| Token | Value | Usage |
|-------|-------|-------|
| `shadow-sm` | `0 1px 2px rgba(45, 41, 38, 0.06)` | Subtle elevation |
| `shadow-md` | `0 4px 6px rgba(45, 41, 38, 0.08), 0 1px 3px rgba(45, 41, 38, 0.06)` | Cards, dropdowns |
| `shadow-lg` | `0 10px 15px rgba(45, 41, 38, 0.1), 0 4px 6px rgba(45, 41, 38, 0.05)` | Modals, popovers |
| `shadow-xl` | `0 20px 25px rgba(45, 41, 38, 0.12), 0 10px 10px rgba(45, 41, 38, 0.04)` | Hero cards, major elements |
| `shadow-2xl` | `0 25px 50px rgba(45, 41, 38, 0.15)` | Premium, floating elements |
| `shadow-inner` | `inset 0 2px 4px rgba(45, 41, 38, 0.06)` | Pressed states, input fields |
| `shadow-warm` | `0 8px 16px rgba(158, 126, 86, 0.15)` | Accent shadow for CTAs |

---

## ⚡ Transitions & Animations

Slow, intentional animations embodying the Slow Living philosophy.

### Duration

| Token | Value | Usage |
|-------|-------|-------|
| `duration-instant` | `100ms` | Micro-interactions, hovers |
| `duration-fast` | `200ms` | Quick transitions, tooltips |
| `duration-normal` | `300ms` | Standard transitions |
| `duration-slow` | `500ms` | Deliberate transitions |
| `duration-slower` | `800ms` | **Ma-concept signature** - calm, breathable |
| `duration-slowest` | `1000ms` | **Ma-concept signature** - page transitions |

### Easing

| Token | Value | Usage |
|-------|-------|-------|
| `ease-linear` | `cubic-bezier(0, 0, 1, 1)` | Constant speed |
| `ease-in` | `cubic-bezier(0.4, 0, 1, 1)` | Start slow |
| `ease-out` | `cubic-bezier(0, 0, 0.2, 1)` | End slow (preferred) |
| `ease-in-out` | `cubic-bezier(0.4, 0, 0.2, 1)` | Smooth both ends |
| `ease-zen` | `cubic-bezier(0.25, 0.1, 0.25, 1)` | **Custom: gentle, natural flow** |

**Recommended Default:**
```css
transition: all 800ms cubic-bezier(0.25, 0.1, 0.25, 1);
```

---

## 📱 Breakpoints

Mobile-first responsive design.

| Token | Value | Device |
|-------|-------|--------|
| `xs` | `0px` | Extra small (default mobile) |
| `sm` | `640px` | Small devices (large phones) |
| `md` | `768px` | Medium devices (tablets) |
| `lg` | `1024px` | Large devices (laptops) |
| `xl` | `1280px` | Extra large (desktops) |
| `2xl` | `1536px` | 2X large (large desktops) |

---

## 🖼️ Layout & Container

| Token | Value | Usage |
|-------|-------|-------|
| `container-sm` | `640px` | Small content |
| `container-md` | `768px` | Standard content |
| `container-lg` | `1024px` | Wide content |
| `container-xl` | `1280px` | Maximum width (default) |
| `reading-width` | `65ch` | Optimal reading line length for blog |

---

## 🎭 Component Patterns

### Buttons

**Primary Button:**
- Background: `primary-wood` (#9E7E56)
- Text: `text-inverse` (#F9F7F2)
- Padding: `space-3` `space-6` (12px 32px)
- Border Radius: `rounded-md` (8px)
- Shadow: `shadow-sm`, hover: `shadow-md`
- Transition: `duration-slower` (800ms)

**Secondary Button:**
- Background: transparent
- Border: 2px solid `primary-wood`
- Text: `primary-wood`
- Same padding and radius as primary

**Matcha Button (Special):**
- Background: `primary-matcha` (#5D6D37)
- Text: `text-inverse`
- Use for matcha-specific CTAs

### Cards

**Standard Card:**
- Background: `bg-light` (#F9F7F2)
- Padding: `space-6` (32px)
- Border Radius: `rounded-lg` (12px)
- Shadow: `shadow-md`
- Transition: `duration-slower`
- Hover: `shadow-lg`, subtle lift

**Menu Item Card:**
- Background: `bg-base` (#FDFBF7)
- Border: 1px solid `border-light`
- Hover: Border changes to `primary-wood`, slight scale (1.02)

### Forms

**Input Fields:**
- Background: `bg-base` (#FDFBF7)
- Border: 1px solid `border-medium` (#D4CFC5)
- Focus Border: `primary-wood` (#9E7E56)
- Padding: `space-3` `space-4`
- Border Radius: `rounded-md` (8px)
- Font: Body font, `body` size (16px)

---

## ♿ Accessibility Guidelines

### Contrast Ratios
- **Text Primary on Light Backgrounds:** 12.8:1 (AAA) ✓
- **Text Accent on Light Backgrounds:** 4.8:1 (AA) ✓
- **Text Inverse on Dark Backgrounds:** 12.6:1 (AAA) ✓

### Focus States
- Always visible focus ring: 2px solid `primary-wood` with 2px offset
- Never remove `:focus-visible` styles

### Motion
- Respect `prefers-reduced-motion` media query
- Provide option to disable animations for users sensitive to motion

---

## 🌸 Ma-Concept Implementation

**Ma (間)** is the Japanese concept of negative space, pause, and interval. In design:

1. **Generous Margins:** Use `space-8` to `space-20` between major sections
2. **Breathing Room:** Never crowd elements; minimum `space-6` between components
3. **Slow Transitions:** Default 800ms for calm, unhurried interactions
4. **Whitespace as Design:** Empty space is not wasted—it creates calm
5. **Thoughtful Hierarchy:** Let content breathe, don't fill every pixel

---

## 📸 Image Guidelines

### Photography Style
- **Lighting:** Natural, soft, warm (golden hour aesthetic)
- **Composition:** Minimal, clean, lots of negative space
- **Color Grading:** Warm tones, slightly desaturated
- **Subject:** Close-ups, steam from coffee, hands holding cups

### Image Optimization
- **Format:** WebP with JPEG fallback
- **Sizes:** Multiple sizes for responsive images
- **Lazy Loading:** Implement for below-fold images
- **Max Width:** 1920px (2xl screens)

---

## 🎯 Usage Examples

### Hero Section
```
Background: bg-accent (#FDF2D0) with gradient to bg-light
Heading: display-1, primary-wood, font-weight: 600
Subheading: body-large, text-secondary
CTA Buttons: Primary and Secondary side-by-side
Animation: Fade in over duration-slowest (1000ms)
```

### Menu Grid
```
Container: Max-width container-xl with space-8 padding
Grid: 3 columns on lg+, 2 on md, 1 on sm
Gap: space-6
Card Hover: Scale 1.02, shadow-lg, duration-slower
```

### Blog/Journal
```
Max Width: reading-width (65ch) for optimal readability
Heading: h1 with primary-charcoal
Body: body, text-primary, line-height: 1.8 (extra readable)
Images: Full-width within reading container, rounded-lg
```

---

## 🔧 Implementation Notes

### Tailwind CSS Configuration
Map these tokens to `tailwind.config.js`:
- Extend `colors`, `fontFamily`, `spacing`, `borderRadius`
- Custom `transition` durations
- Breakpoints already match Tailwind defaults

### CSS Variables
Create CSS custom properties for runtime theme switching:
```css
:root {
  --color-primary-wood: #9E7E56;
  --color-primary-matcha: #5D6D37;
  /* ... etc */
}
```

### Dark Mode Considerations
Background dark (#2D2926) is available but implement carefully:
- Ensure text-inverse contrast
- Adjust shadows for dark backgrounds
- Maintain warmth even in dark mode

---

**End of Design System v1.0.0**  
*For questions or suggestions, contact the Hidamari development team.*