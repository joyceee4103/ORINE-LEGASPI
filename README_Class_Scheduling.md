# 🕒 Student Processing System — Class Scheduling Module

## 📝 Description / Overview
The **Class Scheduling Module** is a feature of the **Student Processing System** built with Laravel.  
It focuses on managing and organizing class schedules for different sections, subjects, and teachers.  
The system ensures efficient scheduling, prevents conflicts, and provides accessible schedule information for both administrators and students.

---

## 🎯 Objectives
- To create a **Class Scheduling Module** that automates and manages schedule creation.  
- To allow administrators to add, edit, and delete class schedules.  
- To prevent overlapping or conflicting schedules for subjects, teachers, or rooms.  
- To allow students and teachers to view their class schedules easily.  
- To demonstrate the integration of scheduling logic using Laravel framework principles.

---

## ⚙️ Features / Functionality
### 👩‍💼 Admin Features
- Add, edit, and delete class schedules.  
- Assign teachers, rooms, and time slots to specific subjects.  
- Prevent schedule conflicts automatically.  
- View and filter schedules by section, subject, or teacher.  

### 👨‍🎓 Student & Teacher Features
- View assigned class schedules by subject or section.  
- Check classroom and instructor details.  

---

## 🛠️ Installation Instructions
1. **Clone the repository**
   ```bash
   git clone https://github.com/yourusername/student-class-scheduling.git
   ```

2. **Navigate to the project directory**
   ```bash
   cd student-class-scheduling
   ```

3. **Install dependencies**
   ```bash
   composer install
   npm install
   ```

4. **Set up environment configuration**
   ```bash
   cp .env.example .env
   ```

5. **Configure database connection**
   - Open `.env` file  
   - Update database name, username, and password  

6. **Run database migrations**
   ```bash
   php artisan migrate
   ```

7. **Generate application key**
   ```bash
   php artisan key:generate
   ```

8. **Serve the application**
   ```bash
   php artisan serve
   ```

9. **Access the system**
   - Open browser and go to:  
     `http://127.0.0.1:8000`

---

## 💡 Usage
1. Log in as **Admin**.  
2. Navigate to **Class Scheduling** in the dashboard.  
3. Click **Add Schedule** to create a new class schedule.  
4. Enter subject, teacher, room, day, and time details.  
5. Save the schedule — the system will check for conflicts.  
6. Students and teachers can view schedules from their respective portals.  

Example code snippet:
```php
// Example: Create a new class schedule
Schedule::create([
    'subject_id' => $request->subject_id,
    'teacher_id' => $request->teacher_id,
    'section_id' => $request->section_id,
    'room' => $request->room,
    'day' => $request->day,
    'time_start' => $request->time_start,
    'time_end' => $request->time_end,
]);
```

---

## 🖼️ Screenshots or Code Snippets
### 📋 Schedule List Page
![Schedule List Page](public/images/schedule_list.png)

### ➕ Add Schedule Page
![Add Schedule Page](public/images/add_schedule.png)

---

## 👥 Contributors
- **April Joyce [Your Last Name]** — Developer / Documentation Author

---

## 📄 License
This project is licensed under the **MIT License**.  
You may use, modify, and distribute it for educational purposes.

---

> *“Streamlining academic scheduling through efficient Laravel integration.”*
