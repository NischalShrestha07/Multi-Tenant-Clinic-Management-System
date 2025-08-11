🚀 ClinicSync Installation Guide
Welcome to the installation guide for ClinicSync, a multi-tenant Hospital Management System (HMS) built with Laravel and powered by the stancl/tenancy package. This guide will walk you through setting up the project from a Git repository, configuring SSH keys for GitHub, and initializing multi-tenancy for healthcare facilities. Let’s get started! 🎉

🔧 Prerequisites
Before you begin, ensure the following are installed on your system:

Git: Version control system for cloning the repository.
PHP: ≥ 8.1 (Laravel 10.x compatible).
Composer: Dependency manager for PHP.
Node.js & npm: For frontend assets (e.g., Tailwind CSS, Vite).
Database Server: MySQL, PostgreSQL, or SQLite.
Web Server: Apache, Nginx, or Laravel’s development server (via artisan serve).
Tenancy Package: stancl/tenancy for multi-tenant support.
Optional: Laravel Herd (for local development on macOS/Windows).


1️⃣ Set Up SSH Key for GitHub
To securely clone the ClinicSync repository, configure an SSH key for GitHub.
Generate SSH Key
ssh-keygen -t ed25519 -C "your_email@example.com"


Press Enter to accept the default file location (~/.ssh/id_ed25519).
Enter a secure passphrase (optional but recommended).

Start SSH Agent
eval "$(ssh-agent -s)"
ssh-add ~/.ssh/id_ed25519

Copy SSH Public Key
macOS:
pbcopy < ~/.ssh/id_ed25519.pub

Windows:
cat ~/.ssh/id_ed25519.pub | clip

Linux or manual:
cat ~/.ssh/id_ed25519.pub

Copy the output to your clipboard.
Add SSH Key to GitHub

Go to GitHub Settings > SSH and GPG keys.
Click New SSH key or Add SSH key.
Paste the public key, give it a descriptive title (e.g., “ClinicSync Laptop”).
Click Add SSH key.

Test SSH Connection
ssh -T git@github.com

Expected output:Hi username! You've successfully authenticated...

2️⃣ Clone the Repository
Clone the ClinicSync repository to your local machine:
git clone git@github.com:your-username/clinicsync.git clinicsync
cd clinicsync

Replace your-username with your GitHub username and clinicsync with your repository name.

3️⃣ Install PHP Dependencies
Install Laravel and tenancy dependencies using Composer:
composer install

If you don’t have the stancl/tenancy package, install it:
composer require stancl/tenancy


4️⃣ Install JavaScript Dependencies
Install frontend dependencies (e.g., Tailwind CSS, Vite):
npm install


5️⃣ Configure Environment
Copy the example environment file and configure it:
cp .env.example .env

Edit .env with your database and tenancy settings. Example:
APP_NAME=ClinicSync
APP_URL=http://localhost
APP_ENV=local
APP_KEY=
APP_DEBUG=true

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=clinicsync_central
DB_USERNAME=root
DB_PASSWORD=

# Tenancy Configuration
TENANCY_DATABASE_PREFIX=tenant_
TENANCY_CENTRAL_DOMAINS=localhost
TENANCY_TENANT_DOMAINS=*.localhost


Database: Set DB_DATABASE to the central database name (e.g., clinicsync_central).
Tenancy: Configure TENANCY_DATABASE_PREFIX for tenant databases (e.g., tenant_clinic1).
Domains: Adjust TENANCY_CENTRAL_DOMAINS and TENANCY_TENANT_DOMAINS for your setup (e.g., subdomains like clinic1.localhost).


6️⃣ Generate Application Key
Generate a unique application key for Laravel:
php artisan key:generate


7️⃣ Set Up Multi-Tenancy
ClinicSync uses stancl/tenancy for multi-tenancy, allowing each clinic or hospital to operate with an isolated database.
Initialize Tenancy
php artisan tenancy:install

This sets up the tenancy configuration and creates necessary migrations.
Run Central Database Migrations
Migrate the central database (stores tenant metadata):
php artisan migrate

Create a Tenant
Create a tenant for a clinic (e.g., “Sunrise Clinic”):
php artisan tenants:seed --tenant=sunrise_clinic

This creates a tenant-specific database (e.g., tenant_sunrise_clinic) and seeds initial data.
Run Tenant Migrations
Apply migrations to all tenant databases:
php artisan tenancy:migrate


8️⃣ Set Up Database
Create the central database (e.g., clinicsync_central) in your database server (MySQL, PostgreSQL, or SQLite). For SQLite:
touch database/clinicsync_central.sqlite

Run seeders (if applicable):
php artisan db:seed


9️⃣ Link Storage
Create a symbolic link for file storage (e.g., patient documents, invoices):
php artisan storage:link


🔟 Build Frontend Assets
Compile frontend assets using Vite:
For development:
npm run dev

For production:
npm run build


1️⃣1️⃣ Start the Development Server
Launch Laravel’s development server:
php artisan serve

Access the application at:

Central domain: http://localhost:8000
Tenant domain: http://sunrise_clinic.localhost:8000 (configure your hosts file or DNS for subdomains).

If using Laravel Herd, access at https://clinicsync.test or https://sunrise_clinic.test.

✅ Optional Steps
Queue Workers
For background jobs (e.g., sending appointment reminders):
php artisan queue:work

Task Scheduling
For scheduled tasks (e.g., daily reports), add to your server’s crontab:
* * * * * cd /path/to/clinicsync && php artisan schedule:run >> /dev/null 2>&1

Debugging
Install Laravel Debugbar for development insights:
composer require barryvdh/laravel-debugbar --dev

Enable it in .env:
DEBUGBAR_ENABLED=true


🔐 Default Credentials
Use these credentials to log in and test the system:



Role
Email
Password



Admin
admin@clinicsync.com
admin123


HR Manager
hr@clinicsync.com
hr123


Doctor
doctor@clinicsync.com
doctor123


Employee
staff@clinicsync.com
staff123


Patient
patient@clinicsync.com
patient123



Note: Change these credentials in production for security.


🌟 Testing the Setup

Log in as an admin at http://sunrise_clinic.localhost:8000/admin.
Verify tenant-specific data (e.g., patients, appointments) is isolated.
Test features like appointment scheduling, billing, and inventory management.
Ensure subdomain routing works for additional tenants (e.g., apollo_clinic.localhost:8000).


🛠 Troubleshooting

Database Connection Error: Verify .env database credentials and ensure the database server is running.
Tenancy Issues: Check config/tenancy.php and ensure tenant databases are created (tenant_*).
Subdomain Not Working: Update your hosts file (e.g., /etc/hosts on macOS/Linux or C:\Windows\System32\drivers\etc\hosts on Windows) to include:127.0.0.1 sunrise_clinic.localhost


Frontend Assets Missing: Run npm install and npm run build again.

For further help, consult the stancl/tenancy documentation or Laravel documentation.

📚 Next Steps

Explore the ClinicSync README for feature details and contribution guidelines.
Customize tenant configurations in config/tenancy.php.
Extend the system by adding new modules (e.g., telemedicine, lab results).
Secure the application by updating credentials and enabling HTTPS in production.

Happy managing your clinics with ClinicSync! 🩺
