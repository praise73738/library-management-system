# Library Management System (LMS)

## SDLC Model Used
Waterfall Model

## System Design

### System Architecture
The Library Management System uses a three-tier architecture:
- Frontend: HTML for user interaction
- Backend: PHP for processing
- Database: MySQL for data storage

### System Modules
1. Book Management Module  
   Manages book records in the library.

2. Student Management Module  
   Manages student information.

3. Borrowing Module  
   Records borrowing of books by students.

### Database Design

Table: students  
- student_id (VARCHAR)
- student_name (VARCHAR)

Table: books  
- book_id (VARCHAR)
- book_title (VARCHAR)

Table: borrow_records  
- student_id (VARCHAR)
- book_id (VARCHAR)

### Data Flow Design
1. Student enters borrowing details
2. Data is sent to PHP backend
3. Data is stored in MySQL database
4. Confirmation message is displayed