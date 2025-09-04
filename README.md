# Laravel + Vue Starter Kit

A modern, full-stack starter kit for building Laravel applications with Vue 3 frontend using Inertia.js.

## Features

- **Laravel 11** - Latest Laravel framework
- **Vue 3** - Modern Vue.js with Composition API
- **TypeScript** - Type-safe development
- **Inertia.js** - Modern monolith approach
- **Tailwind CSS** - Utility-first CSS framework
- **shadcn-vue** - Beautiful, accessible component library
- **Vite** - Lightning-fast build tool
- **Authentication** - Built-in auth system
- **Testing** - PHPUnit and Feature tests included

## Prerequisites

- PHP 8.2 or higher
- Node.js 18 or higher
- Composer
- npm/pnpm

## Installation

1. Clone the repository:
```bash
git clone <repository-url>
cd vue-starter-kit
```

2. Install PHP dependencies:
```bash
composer install
```

3. Install Node.js dependencies:
```bash
npm install
# or
pnpm install
```

4. Environment setup:
```bash
cp .env.example .env
php artisan key:generate
```

5. Database setup:
```bash
php artisan migrate
```

## Development

Start the development servers:

```bash
# Terminal 1 - Laravel backend
php artisan serve

# Terminal 2 - Vite frontend
npm run dev
# or
pnpm dev
```

The application will be available at `http://localhost:8000`

## Project Structure

```
├── app/                 # Laravel application code
├── resources/
│   ├── js/             # Vue.js frontend
│   │   ├── components/ # Vue components
│   │   ├── pages/      # Inertia pages
│   │   └── layouts/    # Layout components
│   └── css/            # Stylesheets
├── routes/             # Laravel routes
└── database/           # Migrations and seeders
```

## Available Scripts

- `npm run dev` - Start Vite development server
- `npm run build` - Build for production
- `npm run preview` - Preview production build
- `php artisan serve` - Start Laravel development server
- `php artisan test` - Run tests

## Technologies Used

- **Backend**: Laravel 12, PHP 8.2+
- **Frontend**: Vue 3, TypeScript, Tailwind CSS
- **Build Tool**: Vite
- **UI Components**: shadcn-vue
- **Routing**: Inertia.js
- **Testing**: PHPUnit

## License

This project is open-sourced software licensed under the [MIT license](LICENSE).