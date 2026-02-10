# Vue and Laravel Web App Project

This is a school project that creates a website using Vue (for the front-end) and Laravel (for the back-end). It's a full-stack application, meaning it has both the user interface and the server-side logic.

## What This Project Does

- **Front-end**: A nice-looking website built with Vue 3 and Vuetify (a design library)
- **Back-end**: A server built with Laravel that handles data and requests
- **Database**: Uses SQLite to store information (easy to set up)
- **Features**: Responsive design that works on phones and computers, and connects front-end to back-end

## Technologies Used

- **Vue 3**: JavaScript framework for building user interfaces
- **Vuetify**: Material Design components for Vue
- **Laravel**: PHP framework for web applications
- **SQLite**: Simple database that doesn't need a server
- **Vite**: Tool that helps build and run the project quickly

## What You Need to Install First

Before you can run this project, you need to install these programs:

1. **Node.js** (version 20.19.0 or newer) - Download from https://nodejs.org/
2. **PHP** (version 8.2 or newer) - Download from https://www.php.net/
3. **Composer** - Download from https://getcomposer.org/
4. **Git** - Download from https://git-scm.com/

## How to Get Started

### Step 1: Download the Project

If you have the project files, skip to Step 2. Otherwise:

```bash
git clone <your-project-url>
cd "Projekts-main - Copy"
```

### Step 2: Set Up the Front-end (Vue Part)

1. Open a command prompt or terminal
2. Go to the frontend folder:
   ```bash
   cd Frontend/vue-project
   ```
3. Install the needed packages:
   ```bash
   npm install
   ```
4. Start the development server:
   ```bash
   npm run dev
   ```

The website will open at http://localhost:5173

### Step 3: Set Up the Back-end (Laravel Part)

1. Open a new command prompt or terminal (keep the first one running)
2. Go to the backend folder:
   ```bash
   cd Backend/example-app
   ```
3. Install PHP packages:
   ```bash
   composer install
   ```
4. Copy the environment file:
   ```bash
   cp .env.example .env
   ```
5. Generate an application key:
   ```bash
   php artisan key:generate
   ```
6. Set up the database:
   ```bash
   php artisan migrate
   ```
7. Start the server:
   ```bash
   php artisan serve
   ```

The API will be available at http://127.0.0.1:8000

## Project Folders

```
Projekts-main - Copy/
├── Frontend/
│   └── vue-project/          # Vue website files
│       ├── src/
│       │   ├── components/   # Reusable parts of the website
│       │   ├── assets/       # Images and styles
│       │   └── pages/        # Different pages of the site
│       ├── public/           # Files that don't change
│       └── package.json      # List of front-end tools
├── Backend/
│   └── example-app/          # Laravel server files
│       ├── app/              # Main application code
│       ├── config/           # Settings files
│       ├── database/         # Database setup files
│       ├── public/           # Public web files
│       ├── resources/        # Templates and assets
│       ├── routes/           # URL definitions
│       └── composer.json     # List of back-end tools
└── README.md                 # This file
```

## API Information

The back-end provides these endpoints:
- `GET /api/home` - Gets data for the home page

## How to Run the Project

1. Make sure both servers are running (from Steps 2 and 3 above)
2. Open your web browser
3. Go to http://localhost:5173
4. The website should load and connect to the back-end automatically

## Building for Final Version

When you're done developing:

**For the front-end:**
```bash
cd Frontend/vue-project
npm run build
```

**For the back-end:**
```bash
cd Backend/example-app
php artisan config:cache
php artisan route:cache
php artisan view:cache
```

## Common Problems and Solutions

### If npm install doesn't work:
- Make sure Node.js is installed correctly
- Try deleting the `node_modules` folder and running `npm install` again

### If composer install doesn't work:
- Make sure PHP is installed and in your PATH
- Check that Composer is installed

### If the website doesn't load:
- Check that both servers are running
- Make sure the ports (5173 and 8000) are not being used by other programs

### If database errors occur:
- Run `php artisan migrate` again
- Check that the `.env` file has the correct database settings

### PowerShell Issues (Windows):
If PowerShell says "execution of scripts is disabled":
```powershell
Set-ExecutionPolicy -ExecutionPolicy RemoteSigned -Scope CurrentUser
```

## More Help

Check these files for additional information:
- **[START_HERE.md](./START_HERE.md)** - Basic getting started guide
- **[SETUP.md](./SETUP.md)** - Detailed setup steps
- **[QUICK_REFERENCE.md](./QUICK_REFERENCE.md)** - Quick commands reference

## About This Project

This project was created as part of a school assignment to learn about full-stack web development using modern technologies. It demonstrates how to build a complete web application with separate front-end and back-end components that work together.

## License

This project uses the MIT License.
