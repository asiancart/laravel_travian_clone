# 🏰 Travian Clone - Laravel Browser Game

This project is a **browser-based strategy game** inspired by the classic Travian. Built using **Laravel 12** and **PHP 8**, it features resource management, village development, and basic building mechanics.

## 🚀 Features

- User authentication and personalized village
- Four main resources: Wood, Clay, Iron, and Crop
- Resources increase automatically every second
- Central building and basic resource buildings
- Resource stats update live on the UI
- Artisan command for generating resources (`php artisan resources:generate`)
- Laravel scheduler support for background resource updates

## ⚙️ Technologies Used

- PHP 8.x
- Laravel 12.x
- MySQL
- Blade Templating Engine
- Laravel Scheduler
- Artisan Commands

## 🧪 Setup Instructions

Clone the repository:

```bash
git clone https://github.com/your-username/travian-clone.git
cd travian-clone
Install dependencies:
composer install
Start Laravel’s scheduler:
php artisan schedule:work
php artisan serve
php artisan resources:generate

 Project Structure
app/Models/Resource.php - Resource model

app/Models/Village.php - Village model

app/Console/Commands/GenerateResources.php - Artisan command to generate resources

app/Http/Controllers/VillageController.php - Game logic controller

resources/views/village.blade.php - Main UI view


