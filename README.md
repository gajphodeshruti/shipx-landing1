# 🚀 Backend Developer Assignment (Laravel)

This project is a Backend Developer Task where a Figma landing page is converted into a responsive Laravel application with form submission, CRUD dashboard, and full REST API support.

---

# 📌 Features

### ✔ Responsive Landing Page (Based on given Figma)
### ✔ Form Submission → Save Data to MySQL
### ✔ CRUD Dashboard (Create, Read, Update, Delete)
### ✔ Full REST API (GET, POST, PUT, DELETE)
### ✔ Laravel Validation Included
### ✔ Resource Controller Used
### ✔ Tailwind/Bootstrap UI (Choose whichever you used)
### ✔ Postman Collection Included (Optional)

---

# 🛠️ Tech Stack Used
- **Laravel 10 / 11**
- **MySQL**
- **TailwindCSS / Bootstrap**
- **Blade Templates**
- **REST API Architecture**

---

# ⚙️ Setup Instructions (Run Project Locally)

Follow these steps to run the project on your local machine:

---

## 1️⃣ Clone the Repository

```bash
git clone https://github.com/yourusername/your-repository.git
```

---

## 2️⃣ Go to Project Folder

```bash
cd your-repository
```

---

## 3️⃣ Install Composer Dependencies

```bash
composer install
```

---

## 4️⃣ Install Node Modules (If UI used Tailwind/Bootstrap)

```bash
npm install
npm run dev
```

---

## 5️⃣ Create Environment File

```bash
cp .env.example .env
```

---

## 6️⃣ Generate Application Key

```bash
php artisan key:generate
```

---

## 7️⃣ Configure Database (.env)

Update your database details:

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_db_name
DB_USERNAME=root
DB_PASSWORD=
```

---

## 8️⃣ Run Migrations (Create Tables)

```bash
php artisan migrate
```

---

## 9️⃣ Start Local Server

```bash
php artisan serve
```

Now visit:  
👉 http://127.0.0.1:8000

---

# 🗄 Database Structure

**Table: leads**

| Column Name | Type | Description |
|------------|------|-------------|
| id | bigint | Primary Key |
| name | varchar | Full Name |
| email | varchar | Email Address |
| phone | varchar | Phone Number |
| message | text | Message/Description |
| created_at | timestamp | Record created date |
| updated_at | timestamp | Record updated date |

If you added more fields, add them here.

---

# 🔗 API Documentation

All APIs follow REST architecture.

---

## 📌 1. GET – List all records

**Endpoint:**
```
GET /api/leads
```

**Response:**
```json
[
  {
    "id": 1,
    "name": "John",
    "email": "john@example.com",
    "phone": "9876543210",
    "message": "Test message"
  }
]
```

---

## 📌 2. POST – Create new record

**Endpoint:**
```
POST /api/leads
```

**Body Params:**
```json
{
  "name": "John Doe",
  "email": "john@example.com",
  "phone": "9876543210",
  "message": "New lead"
}
```

---

## 📌 3. PUT – Update record

**Endpoint:**
```
PUT /api/leads/{id}
```

**Body Params:**
(Same as POST)

---

## 📌 4. DELETE – Delete record

**Endpoint:**
```
DELETE /api/leads/{id}
```

**Response:**
```json
{
  "message": "Lead deleted successfully"
}
```

---

# 🧪 Postman Collection
If included, mention:
```
Postman collection is available in /postman folder.
```

---

# 👩‍💻 Developer Information
**Name:** Shruti Sandip Gajphode  
**Role:** PHP / Laravel Developer  
**GitHub:** https://github.com/yourusername  

---

# 🎉 Thank You!

This assignment demonstrates backend development skills with Laravel, REST APIs, MySQL integration, and GitHub project management.
