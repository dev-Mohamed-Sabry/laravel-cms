# Laravel CMS / Blog Project

A content management system (CMS) / blog application built with **Laravel 10**, following clean architecture and best practices. The project supports post management, categories, image galleries, validation, security, pagination, and a public-facing website section.

---

## ✨ Features

* Authentication & Admin Dashboard
* CRUD for Posts
* Categories management
* Optional image upload per post (Gallery system)
* Image sanitization & security (HTML Purifier)
* Database transactions
* Pagination (Bootstrap 5 compatible)
* Clean Eloquent relationships
* Form Request validation
* Flash messages & alerts
* Public blog pages

---

## 🛠 Tech Stack

* **Laravel 10**
* **PHP 8.1+**
* **MySQL**
* **Bootstrap 5.3**
* **Blade Templates**
* **Eloquent ORM**
* **HTML Purifier (mews/purifier)**

---

## 📁 Project Structure (Important Parts)

```
app/
 ├── Http/
 │   ├── Controllers/
 │   │   ├── PostController.php
 │   │   └── WebsiteController.php
 │   ├── Requests/
 │   │   └── StorePostRequest.php
 │
 ├── Models/
 │   ├── Post.php
 │   ├── Category.php
 │   └── Gallery.php
 │
resources/views/
 ├── auth/
 │   └── posts/
 ├── website/
 │   └── blog/

database/
 ├── migrations/
 └── seeders/
```

---

## ⚙️ Installation & Setup

### 1️⃣ Clone the repository

```bash
git clone https://github.com/your-username/your-repo-name.git
cd your-repo-name
```

### 2️⃣ Install dependencies

```bash
composer install
npm install && npm run build
```

### 3️⃣ Environment configuration

```bash
cp .env.example .env
php artisan key:generate
```

Update your `.env` file with database credentials:

```env
DB_DATABASE=laravel_cms
DB_USERNAME=root
DB_PASSWORD=
```

---

### 4️⃣ Run migrations & seeders

```bash
php artisan migrate --seed
```

---

### 5️⃣ Storage symlink (for uploaded files)

```bash
php artisan storage:link
```

Uploaded files will be accessible via:

```
/storage/filename.ext
```

---

### 6️⃣ Run the project

```bash
php artisan serve
```

Visit:

```
http://127.0.0.1:8000
```

---

## 🖼 Image Upload & Gallery Logic

* Images are **optional** for posts
* Images are stored in `public/uploads/posts`
* Image metadata is stored in the `galleries` table
* Posts reference images via `gallery_id`

```php
$post->gallery?->image
```

---

## 🔗 Eloquent Relationships

### Post Model

```php
public function gallery()
{
    return $this->belongsTo(Gallery::class);
}

public function category()
{
    return $this->belongsTo(Category::class);
}
```

---

## 🔐 Validation & Security

* Form validation via **Form Request**
* HTML sanitized using **HTML Purifier**

```php
$data['description'] = Purifier::clean($data['description']);
```

Prevents:

* XSS attacks
* Script injection
* Malicious HTML

---

## 📄 Pagination

```php
$posts = Post::where('is_publish', true)
    ->orderBy('created_at', 'desc')
    ->paginate(2);
```

Bootstrap 5 pagination enabled in:

```php
Paginator::useBootstrapFive();
```

---

## 🌐 Public Blog Routes

```php
Route::get('/blog', [WebsiteController::class, 'blog']);
Route::get('/post/{post}', [WebsiteController::class, 'show'])->name('blog.single');
```

---

## 🧪 Seeders

Seeders are used instead of factories (temporary):

```php
DB::table('posts')->insert([
    'category_id' => rand(1, 3),
    'gallery_id' => null,
    'title' => Str::random(10),
    'description' => Str::random(200),
    'is_publish' => rand(0, 1),
    'created_at' => now()->subDays(rand(1, 30)),
    'updated_at' => now(),
]);
```

---

## 🚀 Future Improvements

* Policies & Authorization
* Image deletion on update/remove
* Slug-based URLs
* API version
* Caching
* Unit & Feature tests

---

## 👨‍💻 Author

**Mohamed Sabry**
Laravel Developer

* LinkedIn: [https://www.linkedin.com/in/mo-sabre](https://www.linkedin.com/in/mo-sabre)

---

## 📜 License

This project is open-source and free to use for learning purposes.

---

## ⚙️ **Admin Login**
http://127.0.0.1:8000/login

* Email: a@a.com
* Password: 12345678

