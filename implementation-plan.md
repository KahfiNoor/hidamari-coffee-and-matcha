# Implementation Plan: Hidamari Café Website
Comprehensive plan to build a Slow Living Japanese café website with Laravel backend, React + Inertia.js frontend, featuring menu catalog, reservation system, virtual library, and blog.

## Proposed Changes
### Dependencies Installation
__IMPORTANT__
> Add Framer Motion and Google Fonts for animations and typography

__Install Required NPM Packages__
<code>npm install framer-motion react-hot-toast</code>

### Database Schema & Models
Create database structure for Categories, Products (Menu), Tables, Reservations, Books, and Posts.

__[NEW] create_categories_table.php__
* Migration for categories (Coffee, Matcha, Tea, Parfait, Bakery)
* Fields: id, name, slug, description, display_order, timestamps

__[NEW] create_products_table.php__
* Migration for menu items - Fields: id, category_id, name, description, price, image, status, display_order, timestamps

__[NEW] create_tables_table.php__
* Migration for café tables
* Fields: id, name, type (tatami/regular), capacity, status, timestamps

__[NEW] create_reservations_table.php__
* Migration for reservations
* Fields: id, table_id, customer_name, customer_phone, customer_email, reservation_date, reservation_time, guests_count, status, notes, timestamps

__[NEW] create_books_table.php__
* Migration for library books
* Fields: id, title, author, cover_image, synopsis, status, timestamps

__[NEW] create_posts_table.php__
* Migration for blog/journal
* Fields: id, title, slug, content, featured_image, published_at, status, timestamps

__[NEW] Category.php__
* Eloquent model with relationships

__[NEW] Product.php__
* Eloquent model with category relationship

__[NEW] Table.php__
* Eloquent model with reservation relationship

__[NEW] Reservation.php__
* Eloquent model with table relationship

__[NEW] Book.php__
* Eloquent model for library

__[NEW] Post.php__
* Eloquent model for journal/blog

### Frontend - Public Site Components
Build React components with Tailwind CSS v4 and Framer Motion for the public-facing website.

__[MODIFY] app.css__
* Import Google Fonts (Crimson Pro for headings, Inter for body)
* Define CSS custom properties for Japanese aesthetic
* Implement Ma-concept (whitespace) design tokens
* Color palette: warm neutrals, soft beige, natural wood tones

__[NEW] Home.tsx__
* Main landing page with Hero section
* Framer Motion animations for "sunlight through window" effect
* Slow transitions (0.8-1s)

__[NEW] HeroSection.tsx__
* Animated hero with gradient overlay simulating sunlight
* Fade-in text with staggered animations
* CTA buttons for Menu and Reservation

__[NEW] Menu.tsx__
* Menu catalog page with category filters
* Grid layout for products
* Category tabs without page reload (Inertia)

__[NEW] ProductCard.tsx__
* Menu item card with image, name, description, price
* Hover effects with subtle scale animation

__[NEW] Library.tsx__
* Virtual library page with search functionality
* Book grid layout
* Search and filter by author/title

__[NEW] BookCard.tsx__
* Book display card with cover, title, author, synopsis

__[NEW] Reservation.tsx__
* Reservation form page
* Date/time pickers, table type selection (Tatami/Regular)
* Real-time validation with React Hook Form

__[NEW] ReservationForm.tsx__
* Form component with validation
* Success/error toast notifications

__[NEW] Journal.tsx__
* Blog listing page
* Card-based layout with featured images
* Comfortable reading typography

__[NEW] JournalDetail.tsx__
* Individual blog post page
* Enhanced typography for long-form reading

__[NEW] AudioPlayer.tsx__
* Toggle-able ambient audio player (Lo-fi/Piano)
* Fixed position with play/pause control

__[NEW] Navigation.tsx__
* Responsive navigation bar
* Mobile hamburger menu
* Links to Home, Menu, Library, Reservation, Journal

## Backend - Admin Panel & API
Build admin controllers and routes for managing content.

__[NEW] DashboardController.php__
* Admin dashboard controller
* Statistics: today's reservations, total menu items

__[NEW] CategoryController.php__
* CRUD for categories
* Index, create, store, edit, update, destroy methods

__[NEW] ProductController.php__
* CRUD for menu items
* Image upload handling

__[NEW] TableController.php__
* CRUD for café tables
* Manage table availability

__[NEW] ReservationController.php__
* View and manage reservations
* Confirm/cancel reservation endpoints

__[NEW] BookController.php__
* CRUD for library books
* Cover image upload

__[NEW] PostController.php__
* CRUD for blog posts
* Rich text editor support

__[MODIFY] web.php__
* Add public routes: home, menu, library, reservation, journal
* Add admin routes under /admin prefix with auth middleware
* API endpoints for reservation submission

__[NEW] Admin/Dashboard.tsx__
* Admin dashboard page
* Display statistics cards

__[NEW] Admin/Products/Index.tsx__
* Menu management interface
* Table with edit/delete actions

__[NEW] Admin/Reservations/Index.tsx__
* Reservation management interface
* Filter by date, status

## Design System & Styling
__[NEW] tailwind.config.js__
* Custom color palette (warm beige, natural wood, soft greens)
* Typography scale with custom font families
* Extended spacing for Ma-concept
* Custom animation durations (slow transitions)

## Verification Plan
### Automated Tests
1. Run Existing Tests
<code>php artisan test</code>
Verify all existing application tests still pass after changes.

2. Database Migrations
<code>php artisan migrate:fresh</code>
Ensure all new migrations run successfully without errors.

### Manual Verification
1. Install Dependencies
<code>npm install</code>

2. Build Frontend Assets
<code>npm run build</code>
Verify Vite builds successfully with no errors.

3. Start Development Server
<code>php artisan serve</code>
<code>npm run dev</code>

4. Test Public Pages
 * Navigate to http://localhost:8000
 * Verify Hero Section displays with animations
 * Check Menu page loads and category filters work
 * Test Library page search functionality
 * Submit a reservation form and verify validation
 * Check Journal/Blog pages
 * Toggle audio player

5. Test Admin Panel
 * Login to admin at http://localhost:8000/admin
 * Verify dashboard shows statistics
 * Create/Edit/Delete menu items
 * View and manage reservations
 * Add books to library
 * Create blog posts

6. Responsive Design
 * Test on mobile viewport (DevTools)
 * Verify navigation hamburger menu works
 * Check all pages are mobile-friendly

7. Performance Verification
 * Use Lighthouse to check page load time (should be < 2s)
 * Verify images are optimized
 * Check Framer Motion animations are smooth (60fps)