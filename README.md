# Laravel Movies Search (with Meilisearch + Scout + Alpine.js)

A **full-text search on movies** using  
- Laravel Scout  
- Meilisearch  
- Alpine.js frontend (instant search)

---

## 🚀 Installation & Setup

### 1. Clone & Install Dependencies
```bash
git clone https://github.com/Mohammed-Daud/meilisearch-laravel11.git movies-search
cd movies-search
composer install
cp .env.example .env
php artisan key:generate
```

```bash
php artisan migrate
php artisan db:seed --class=MovieSeeder
```


### 2. Install Meilisearch
```bash
docker run -it --rm -p 7700:7700 getmeili/meilisearch:latest
```

### 3. Sync Movies to Index
```bash
php artisan scout:import App\Models\Movie
``` 

### Demo
[link](https://www.awesomescreenshot.com/video/43908861?key=2b3e12bbf10a8325e2b28de3fea5f7ef)

